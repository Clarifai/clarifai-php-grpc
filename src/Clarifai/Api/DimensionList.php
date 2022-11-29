<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DimensionList
 *
 * Generated from protobuf message <code>clarifai.api.DimensionList</code>
 */
class DimensionList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, string> dimension = 1;</code>
     */
    private $dimension;
    /**
     * Generated from protobuf field <code>repeated int64 int_value_list = 2;</code>
     */
    private $int_value_list;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_date = 3;</code>
     */
    protected $start_date = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_date = 4;</code>
     */
    protected $end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $dimension
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $int_value_list
     *     @type \Google\Protobuf\Timestamp $start_date
     *     @type \Google\Protobuf\Timestamp $end_date
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, string> dimension = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Generated from protobuf field <code>map<string, string> dimension = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDimension($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dimension = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 int_value_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIntValueList()
    {
        return $this->int_value_list;
    }

    /**
     * Generated from protobuf field <code>repeated int64 int_value_list = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIntValueList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->int_value_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_date = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_date = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_date = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_date = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_date = $var;

        return $this;
    }

}

