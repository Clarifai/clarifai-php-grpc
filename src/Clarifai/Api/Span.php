<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.Span</code>
 */
class Span extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 char_start = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $char_start = 0;
    /**
     * Generated from protobuf field <code>uint32 char_end = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $char_end = 0;
    /**
     * Generated from protobuf field <code>string raw_text = 3;</code>
     */
    protected $raw_text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $char_start
     *     @type int $char_end
     *     @type string $raw_text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 char_start = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return int
     */
    public function getCharStart()
    {
        return $this->char_start;
    }

    /**
     * Generated from protobuf field <code>uint32 char_start = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param int $var
     * @return $this
     */
    public function setCharStart($var)
    {
        GPBUtil::checkUint32($var);
        $this->char_start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 char_end = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return int
     */
    public function getCharEnd()
    {
        return $this->char_end;
    }

    /**
     * Generated from protobuf field <code>uint32 char_end = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param int $var
     * @return $this
     */
    public function setCharEnd($var)
    {
        GPBUtil::checkUint32($var);
        $this->char_end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string raw_text = 3;</code>
     * @return string
     */
    public function getRawText()
    {
        return $this->raw_text;
    }

    /**
     * Generated from protobuf field <code>string raw_text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRawText($var)
    {
        GPBUtil::checkString($var, True);
        $this->raw_text = $var;

        return $this;
    }

}

