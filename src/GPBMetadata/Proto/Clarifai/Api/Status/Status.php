<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/status/status.proto

namespace GPBMetadata\Proto\Clarifai\Api\Status;

class Status
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Proto\Clarifai\Auth\Util\Extension::initOnce();
        \GPBMetadata\Proto\Clarifai\Api\Status\StatusCode::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abe030a2670726f746f2f636c6172696661692f6170692f737461747573" .
            "2f7374617475732e70726f746f1213636c6172696661692e6170692e7374" .
            "617475731a2b70726f746f2f636c6172696661692f6170692f7374617475" .
            "732f7374617475735f636f64652e70726f746f22db010a06537461747573" .
            "122d0a04636f646518012001280e321f2e636c6172696661692e6170692e" .
            "7374617475732e537461747573436f646512130a0b646573637269707469" .
            "6f6e180220012809120f0a0764657461696c7318032001280912190a0b73" .
            "7461636b5f74726163651804200328094204809c270112190a1170657263" .
            "656e745f636f6d706c6574656418052001280d12160a0e74696d655f7265" .
            "6d61696e696e6718062001280d120e0a067265715f696418072001280912" .
            "1e0a10696e7465726e616c5f64657461696c731808200128094204809c27" .
            "01223b0a0c42617365526573706f6e7365122b0a06737461747573180120" .
            "01280b321b2e636c6172696661692e6170692e7374617475732e53746174" .
            "7573422f0a1c636f6d2e636c6172696661692e677270632e6170692e7374" .
            "6174757350015a06737461747573a2020443414950620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

