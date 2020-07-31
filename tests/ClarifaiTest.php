<?php

use Clarifai\Api\Data;
use Clarifai\Api\GetModelRequest;
use Clarifai\Api\Image;
use Clarifai\Api\Input;
use Clarifai\Api\ListModelsRequest;
use Clarifai\Api\PostModelOutputsRequest;
use Clarifai\Api\Status\StatusCode;
use Clarifai\ClarifaiClient;
use PHPUnit\Framework\TestCase;

class ClarifaiTest extends TestCase
{
    private const DOG_IMAGE_URL = 'https://samples.clarifai.com/dog2.jpeg';
    private const TRUCK_IMAGE_URL = 'https://samples.clarifai.com/red-truck.png';
    private const NON_EXISTING_IMAGE_URL = 'http://example.com/non-existing.jpg';

    private const GENERAL_MODEL_ID = 'aaa03c23b3724a16a56b629203edc62c';

    private $client;
    private $metadata;

    public function __construct()
    {
        parent::__construct();

        $apiKey = getenv('CLARIFAI_API_KEY');

        if (!$apiKey) {
            throw new Exception("To run the tests, set the env. variable CLARIFAI_API_KEY");
        }

        $this->client = ClarifaiClient::grpc();
        $this->metadata = ['Authorization' => ["Key $apiKey"]];
    }

    public function testGetModel()
    {
        [$response, $status] = $this->client->GetModel(
            new GetModelRequest(['model_id' => self::GENERAL_MODEL_ID]),
            $this->metadata
        )->wait();
        $this->raiseOnFailure($response, $status);

        $this->assertEquals('general', $response->getModel()->getName());
    }

    public function testListModelsWithPagination()
    {
        [$response, $status] = $this->client->ListModels(
            new ListModelsRequest(['per_page' => 2]),
            $this->metadata
        )->wait();
        $this->raiseOnFailure($response, $status);

        $this->assertEquals(2, $response->getModels()->count());
    }

    public function testPostModelOutputs()
    {
        [$response, $status] = $this->client->PostModelOutputs(
            new PostModelOutputsRequest([
                'model_id' => self::GENERAL_MODEL_ID,
                'inputs' => [
                    new Input([
                        'data' => new Data([
                            'image' => new Image([
                                'url' => self::DOG_IMAGE_URL
                            ])
                        ])
                    ])
                ]
            ]),
            $this->metadata
        )->wait();
        $this->raiseOnFailure($response, $status);

        $this->assertNotEquals(0, $response->getOutputs()[0]->getData()->getConcepts()->count());
    }

    public function testFailedPostModelOutputs()
    {
        [$response, $status] = $this->client->PostModelOutputs(
            new PostModelOutputsRequest([
                'model_id' => self::GENERAL_MODEL_ID,
                'inputs' => [
                    new Input([
                        'data' => new Data([
                            'image' => new Image([
                                'url' => self::NON_EXISTING_IMAGE_URL
                            ])
                        ])
                    ])
                ]
            ]),
            $this->metadata
        )->wait();
        $this->assertEquals(0, $status->code, "Response failure: {$status->details}");
        $this->assertEquals(StatusCode::FAILURE, $response->getStatus()->getCode());
    }

    public function testMixedSuccessPostModelOutputs()
    {
        [$response, $status] = $this->client->PostModelOutputs(
            new PostModelOutputsRequest([
                'model_id' => self::GENERAL_MODEL_ID,
                'inputs' => [
                    new Input([
                        'data' => new Data([
                            'image' => new Image([
                                'url' => self::DOG_IMAGE_URL
                            ])
                        ])
                    ]),
                    new Input([
                        'data' => new Data([
                            'image' => new Image([
                                'url' => self::NON_EXISTING_IMAGE_URL
                            ])
                        ])
                    ])
                ]
            ]),
            $this->metadata
        )->wait();
        $this->assertEquals(0, $status->code, "Response failure: {$status->details}");
        $this->assertEquals(StatusCode::MIXED_STATUS, $response->getStatus()->getCode());
        $this->assertEquals(StatusCode::SUCCESS, $response->getOutputs()[0]->getStatus()->getCode());
        $this->assertEquals(StatusCode::INPUT_DOWNLOAD_FAILED, $response->getOutputs()[1]->getStatus()->getCode());
    }

    private function raiseOnFailure($response, $status)
    {
        $this->assertEquals(0, $status->code, "Response failure: {$status->details}");

        if ($response->getStatus()->getCode() != StatusCode::SUCCESS) {
            $this->prettyPrintResponse($response);
            $this->fail(
                "Unexpected failure response: " .
                $response->getStatus()->getCode() . ' ' .
                $response->getStatus()->getDescription() . ' ' .
                $response->getStatus()->getDetails());
        }
    }

    private function prettyPrintResponse($response)
    {
        echo json_encode(json_decode($response->serializeToJsonString()), JSON_PRETTY_PRINT) . '\n';
    }
}
