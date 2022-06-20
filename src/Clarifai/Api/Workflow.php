<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Workflow
 *
 * Generated from protobuf message <code>clarifai.api.Workflow</code>
 */
class Workflow extends \Google\Protobuf\Internal\Message
{
    /**
     * The workflows's unique id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The app the workflow belongs to
     *
     * Generated from protobuf field <code>string app_id = 2;</code>
     */
    protected $app_id = '';
    /**
     * When the workflow was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * The list of nodes retrieved from latest workflow version.
     * Each node can specify an input node that it connects to in order to define the graph.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowNode nodes = 4;</code>
     */
    private $nodes;
    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 5;</code>
     */
    protected $metadata = null;
    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 6;</code>
     */
    protected $visibility = null;
    /**
     * The user the workflow belongs to
     *
     * Generated from protobuf field <code>string user_id = 7;</code>
     */
    protected $user_id = '';
    /**
     * When the workflow was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 8;</code>
     */
    protected $modified_at = null;
    /**
     * Info about the workflow version
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowVersion version = 9;</code>
     */
    protected $version = null;
    /**
     * Is starred by the requesting user (only showed on get/list requests)
     * Please use PostWorkflowStars/DeleteWorkflowStars endpoints to star/unstar a workflow
     *
     * Generated from protobuf field <code>bool is_starred = 10;</code>
     */
    protected $is_starred = false;
    /**
     * How many users have starred the workflow (only showed on get/list requests)
     * Computed value, not editable
     *
     * Generated from protobuf field <code>int32 star_count = 11;</code>
     */
    protected $star_count = 0;
    /**
     * Short description about this workflow
     *
     * Generated from protobuf field <code>string description = 12;</code>
     */
    protected $description = '';
    /**
     * Notes for the workflow
     * This field should be used for in-depth notes and supports up to 64Kbs.
     *
     * Generated from protobuf field <code>string notes = 13;</code>
     */
    protected $notes = '';
    /**
     * Tags from use_cases category
     *
     * Generated from protobuf field <code>repeated string use_cases = 14 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $use_cases;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The workflows's unique id.
     *     @type string $app_id
     *           The app the workflow belongs to
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the workflow was created. We follow the XXXX timestamp
     *           format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     *           "2006-01-02T15:04:05.999999Z" so you can expect results like
     *           the following from the API:
     *           "2017-04-11T21:50:50.223962Z"
     *     @type \Clarifai\Api\WorkflowNode[]|\Google\Protobuf\Internal\RepeatedField $nodes
     *           The list of nodes retrieved from latest workflow version.
     *           Each node can specify an input node that it connects to in order to define the graph.
     *     @type \Google\Protobuf\Struct $metadata
     *           To handle arbitrary json metadata you can use a struct field:
     *           https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *     @type \Clarifai\Api\Visibility $visibility
     *           The visibility field represents whether this message is privately/publicly visible.
     *           To be visible to the public the App that contains it AND the User that contains the App must
     *           also be publicly visible.
     *     @type string $user_id
     *           The user the workflow belongs to
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the workflow was last modified
     *     @type \Clarifai\Api\WorkflowVersion $version
     *           Info about the workflow version
     *     @type bool $is_starred
     *           Is starred by the requesting user (only showed on get/list requests)
     *           Please use PostWorkflowStars/DeleteWorkflowStars endpoints to star/unstar a workflow
     *     @type int $star_count
     *           How many users have starred the workflow (only showed on get/list requests)
     *           Computed value, not editable
     *     @type string $description
     *           Short description about this workflow
     *     @type string $notes
     *           Notes for the workflow
     *           This field should be used for in-depth notes and supports up to 64Kbs.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $use_cases
     *           Tags from use_cases category
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The workflows's unique id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The workflows's unique id.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The app the workflow belongs to
     *
     * Generated from protobuf field <code>string app_id = 2;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app the workflow belongs to
     *
     * Generated from protobuf field <code>string app_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * When the workflow was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * When the workflow was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * The list of nodes retrieved from latest workflow version.
     * Each node can specify an input node that it connects to in order to define the graph.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowNode nodes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * The list of nodes retrieved from latest workflow version.
     * Each node can specify an input node that it connects to in order to define the graph.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowNode nodes = 4;</code>
     * @param \Clarifai\Api\WorkflowNode[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\WorkflowNode::class);
        $this->nodes = $arr;

        return $this;
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 6;</code>
     * @return \Clarifai\Api\Visibility|null
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    public function hasVisibility()
    {
        return isset($this->visibility);
    }

    public function clearVisibility()
    {
        unset($this->visibility);
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 6;</code>
     * @param \Clarifai\Api\Visibility $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * The user the workflow belongs to
     *
     * Generated from protobuf field <code>string user_id = 7;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user the workflow belongs to
     *
     * Generated from protobuf field <code>string user_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * When the workflow was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    public function hasModifiedAt()
    {
        return isset($this->modified_at);
    }

    public function clearModifiedAt()
    {
        unset($this->modified_at);
    }

    /**
     * When the workflow was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

    /**
     * Info about the workflow version
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowVersion version = 9;</code>
     * @return \Clarifai\Api\WorkflowVersion|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Info about the workflow version
     *
     * Generated from protobuf field <code>.clarifai.api.WorkflowVersion version = 9;</code>
     * @param \Clarifai\Api\WorkflowVersion $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\WorkflowVersion::class);
        $this->version = $var;

        return $this;
    }

    /**
     * Is starred by the requesting user (only showed on get/list requests)
     * Please use PostWorkflowStars/DeleteWorkflowStars endpoints to star/unstar a workflow
     *
     * Generated from protobuf field <code>bool is_starred = 10;</code>
     * @return bool
     */
    public function getIsStarred()
    {
        return $this->is_starred;
    }

    /**
     * Is starred by the requesting user (only showed on get/list requests)
     * Please use PostWorkflowStars/DeleteWorkflowStars endpoints to star/unstar a workflow
     *
     * Generated from protobuf field <code>bool is_starred = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsStarred($var)
    {
        GPBUtil::checkBool($var);
        $this->is_starred = $var;

        return $this;
    }

    /**
     * How many users have starred the workflow (only showed on get/list requests)
     * Computed value, not editable
     *
     * Generated from protobuf field <code>int32 star_count = 11;</code>
     * @return int
     */
    public function getStarCount()
    {
        return $this->star_count;
    }

    /**
     * How many users have starred the workflow (only showed on get/list requests)
     * Computed value, not editable
     *
     * Generated from protobuf field <code>int32 star_count = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setStarCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->star_count = $var;

        return $this;
    }

    /**
     * Short description about this workflow
     *
     * Generated from protobuf field <code>string description = 12;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Short description about this workflow
     *
     * Generated from protobuf field <code>string description = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Notes for the workflow
     * This field should be used for in-depth notes and supports up to 64Kbs.
     *
     * Generated from protobuf field <code>string notes = 13;</code>
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Notes for the workflow
     * This field should be used for in-depth notes and supports up to 64Kbs.
     *
     * Generated from protobuf field <code>string notes = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkString($var, True);
        $this->notes = $var;

        return $this;
    }

    /**
     * Tags from use_cases category
     *
     * Generated from protobuf field <code>repeated string use_cases = 14 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUseCases()
    {
        return $this->use_cases;
    }

    /**
     * Tags from use_cases category
     *
     * Generated from protobuf field <code>repeated string use_cases = 14 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUseCases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->use_cases = $arr;

        return $this;
    }

}

