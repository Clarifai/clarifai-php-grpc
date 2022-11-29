<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * WorkflowStar
 *
 * Generated from protobuf message <code>clarifai.api.WorkflowStar</code>
 */
class WorkflowStar extends \Google\Protobuf\Internal\Message
{
    /**
     * Workflow id of the star
     *
     * Generated from protobuf field <code>string workflow_id = 1;</code>
     */
    protected $workflow_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $workflow_id
     *           Workflow id of the star
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Workflow id of the star
     *
     * Generated from protobuf field <code>string workflow_id = 1;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Workflow id of the star
     *
     * Generated from protobuf field <code>string workflow_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

}

