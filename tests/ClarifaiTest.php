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
    private $client;
    private $metadata;

    public function __construct()
    {
        parent::__construct();

        $apiKey = getenv('CLARIFAI_API_KEY');

        $this->client = ClarifaiClient::grpc();
        $this->metadata = ['Authorization' => ["Key $apiKey"]];
    }

    public function testGetModel()
    {
        list($response, $status) = $this->client->GetModel(
            new GetModelRequest(['model_id' => 'aaa03c23b3724a16a56b629203edc62c']),
            $this->metadata
        )->wait();
        $this->checkResponseSuccess($response, $status);

        $this->assertEquals('general', $response->getModel()->getName());
    }

    public function testListModelsWithPagination()
    {
        list($response, $status) = $this->client->ListModels(
            new ListModelsRequest(['per_page' => 2]),
            $this->metadata
        )->wait();
        $this->checkResponseSuccess($response, $status);

        $this->assertEquals(2, $response->getModels()->count());
    }

    public function testPostModelOutputs()
    {
        list($response, $status) = $this->client->PostModelOutputs(
            new PostModelOutputsRequest([
                'model_id' => 'aaa03c23b3724a16a56b629203edc62c',
                'inputs' => [
                    new Input([
                        'data' => new Data([
                            'image' => new Image([
                                'url' => 'https://clarifai.com/developer/static/images/model-samples/celeb-001.jpg'
                            ])
                        ])
                    ])
                ]
            ]),
            $this->metadata
        )->wait();
        $this->checkResponseSuccess($response, $status);

        $this->prettyPrintResponse($response);
    }

    private function checkResponseSuccess($response, $status)
    {
        $this->assertEquals(0, $status->code, "Response failure: {$status->details}");

        if ($response->getStatus()->getCode() != StatusCode::SUCCESS) {
            $this->prettyPrintResponse($response);
            $this->fail("Failure response.");
        }
    }

    private function prettyPrintResponse($response)
    {
        echo json_encode(json_decode($response->serializeToJsonString()), JSON_PRETTY_PRINT);
    }
}
