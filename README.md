![image](https://github.com/user-attachments/assets/895da6c0-874d-45f0-a3b7-26ad07f14a37)


# Clarifai PHP gRPC Client

This is the official Clarifai gRPC PHP client for interacting with our powerful recognition
[API](https://docs.clarifai.com).
Clarifai provides a platform for data scientists, developers, researchers and enterprises to master the entire
artificial intelligence lifecycle. Gather valuable business insights from images, video and text using computer vision
and natural language processing.

* Try the Clarifai demo at: https://clarifai.com/demo
* Sign up for a free account at: https://portal.clarifai.com/signup
* Read the documentation at: https://docs.clarifai.com/


[![Latest Stable Version](https://poser.pugx.org/clarifai/clarifai-php-grpc/version)](https://packagist.org/packages/clarifai/clarifai-php-grpc)


# Installation

```
composer require clarifai/clarifai-php-grpc
```

See also [how add gRPC to your PHP installation](https://grpc.io/docs/languages/php/quickstart/).

## Versioning

This library doesn't use semantic versioning. The first two version numbers (`X.Y` out of `X.Y.Z`) follow the API (backend) versioning, and
whenever the API gets updated, this library follows it.

The third version number (`Z` out of `X.Y.Z`) is used by this library for any independent releases of library-specific improvements and bug fixes.

## Getting started

Construct the client and setup your API key or Personal Access Token in the metadata variable.

```php
require ‘vendor/autoload.php’;
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
