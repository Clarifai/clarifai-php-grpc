![Clarifai logo](docs/logo.png)

# Clarifai PHP gRPC Client

This is the official Clarifai gRPC PHP client for interacting with our powerful recognition
[API](https://docs.clarifai.com).
The Clarifai API offers image and video recognition as a service. Whether you have one image or
billions, you are only steps away from using artificial intelligence to recognize your visual
content.

* Try the Clarifai demo at: https://clarifai.com/demo
* Sign up for a free account at: https://portal.clarifai.com/signup
* Read the documentation at: https://docs.clarifai.com/


[![Latest Stable Version](https://poser.pugx.org/clarifai/clarifai-php-grpc/version)](https://packagist.org/packages/clarifai/clarifai-php-grpc)


# Installation

```
composer require clarifai/clarifai-php-grpc
```

See also [how add gRPC to your PHP installation](https://grpc.io/docs/languages/php/quickstart/).

## Getting started

Construct the client and setup your API key or Personal Access Token in the metadata variable.

```php
use Clarifai\ClarifaiClient;

$client = ClarifaiClient::grpc();
$metadata = ['Authorization' => ['Key {MY_CLARIFAI_API_KEY_OR_PAT}']];
```

Predict concepts in an image:

```php
use Clarifai\Api\Data;
use Clarifai\Api\Image;
use Clarifai\Api\Input;
use Clarifai\Api\PostModelOutputsRequest;
use Clarifai\Api\Status\StatusCode;

[$response, $status] = $client->PostModelOutputs(
    new PostModelOutputsRequest([
        'model_id' => 'aaa03c23b3724a16a56b629203edc62c',  // This is the ID of the publicly available General model.
        'inputs' => [
            new Input([
                'data' => new Data([
                    'image' => new Image([
                        'url' => 'https://samples.clarifai.com/dog2.jpeg'
                    ])
                ])
            ])
        ]
    ]),
    $metadata
)->wait();

if ($status->code !== 0) throw new Exception("Error: {$status->details}");
if ($response->getStatus()->getCode() != StatusCode::SUCCESS) {
    throw new Exception("Failure response: " . $response->getStatus()->getDescription() . " " .
        $response->getStatus()->getDetails());
}

echo "Predicted concepts:\n";
foreach ($response->getOutputs()[0]->getData()->getConcepts() as $concept) {
    echo $concept->getName() . ": " . number_format($concept->getValue(), 2) . "\n";
}
```
