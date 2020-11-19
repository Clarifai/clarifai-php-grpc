<?php


namespace Clarifai;


use Clarifai\Api\V2Client;
use Grpc\ChannelCredentials;

class ClarifaiClient
{
    /**
     * @param string $base
     * @return V2Client
     */
    public static function grpc($base = null) {
        if ($base === null) {
            $base = getenv('CLARIFAI_GRPC_BASE');
            if ($base === false) {
                $base = 'api.clarifai.com';
            }
        }

        return new V2Client($base, [
            'credentials' => ChannelCredentials::createSsl()
        ]);
    }
}