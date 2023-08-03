<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This is the Model object which represents a created model in the platform.
 * Each model has a particular type denoted by the model_type_id.
 * When creating a Model with PostModels the following happens:
 *  - if the ModelType is trainable, then a new ModelVersion is created that is
 *    - UNTRAINED status by default
 *    - TRAINED status if a ModelVersion was included with PretrainedModelConfig in PostModels
 *  - if the ModelType is not trainable, then a new ModelVersion is created with TRAINED status.
 * To modify config settings like OutputInfo for the Model you an use PatchModels. This will
 * also create a new ModelVersion, potentially UNTRAINED following the same rules as above.
 * The fields that are patchable include Model.name, Model.display_name and Model.output_info
 * (except the Model.output_info.type and Model.output_info.type_ext).
 *
 * Generated from protobuf message <code>clarifai.api.Model</code>
 */
class Model extends \Google\Protobuf\Internal\Message
{
    /**
     * The model's ID. Must be unique within a particular app and URL-friendly.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * DEPRECATED: Please use the model id to name the model.
     *
     * Generated from protobuf field <code>string name = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $name = '';
    /**
     * When the model was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     *  the following from the API:
     *  "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 3;</code>
     */
    protected $created_at = null;
    /**
     * When was the most recent model version created at
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 19;</code>
     */
    protected $modified_at = null;
    /**
     * The app the model belongs to.
     *
     * Generated from protobuf field <code>string app_id = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $app_id = '';
    /**
     * Info about the model's output and configuration.
     * DEPRECATED: Will be moved to model version
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info = 5 [deprecated = true];</code>
     * @deprecated
     */
    protected $output_info = null;
    /**
     * A particular version of the model, e.g., to specify the version when creating a workflow or
     * when listing Models to include the latest ModelVersion of the model in the response.
     *
     * Generated from protobuf field <code>.clarifai.api.ModelVersion model_version = 6;</code>
     */
    protected $model_version = null;
    /**
     * DEPRECATED: Please use the model id to name the model.
     *
     * Generated from protobuf field <code>string display_name = 7 [deprecated = true];</code>
     * @deprecated
     */
    protected $display_name = '';
    /**
     * The user id that the model belongs to.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
     */
    protected $user_id = '';
    /**
     * The default evaluation info. Can be overwritten by eval request.
     *
     * Generated from protobuf field <code>.clarifai.api.EvalInfo default_eval_info = 30;</code>
     */
    protected $default_eval_info = null;
    /**
     * The ModelType.Id that is used for this model. This is used for all versions and you cannot
     * change model_type_id between versions of the same model.
     *
     * Generated from protobuf field <code>string model_type_id = 14;</code>
     */
    protected $model_type_id = '';
    /**
     * The task the model was trained to do
     *
     * Generated from protobuf field <code>string task = 26;</code>
     */
    protected $task = '';
    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 15;</code>
     */
    protected $visibility = null;
    /**
     * Short description about this model
     *
     * Generated from protobuf field <code>string description = 16;</code>
     */
    protected $description = '';
    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 17;</code>
     */
    protected $metadata = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct presets = 27;</code>
     */
    protected $presets = null;
    /**
     * Notes for the model
     * This field should be used for in-depth notes and supports up to 64Kbs.
     *
     * Generated from protobuf field <code>string notes = 18;</code>
     */
    protected $notes = '';
    /**
     * Tags from toolkits category
     *
     * Generated from protobuf field <code>repeated string toolkits = 20 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $toolkits;
    /**
     * Tags from use_cases category
     *
     * Generated from protobuf field <code>repeated string use_cases = 21 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $use_cases;
    /**
     * Tags from languages category.
     *
     * Generated from protobuf field <code>repeated string languages = 25 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $languages;
    /**
     * Tags from languages category with names, only used in responses.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.FullTag languages_full = 31 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $languages_full;
    /**
     * Generated from protobuf field <code>repeated string check_consents = 32 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    private $check_consents;
    /**
     * Is starred by the requesting user (only showed on get/list requests)
     * Please use PostModelStars/DeleteModelStars endpoints to star/unstar a model
     *
     * Generated from protobuf field <code>bool is_starred = 22;</code>
     */
    protected $is_starred = false;
    /**
     * How many users have starred the model (only showed on get/list requests)
     * Computed value, not editable
     *
     * Generated from protobuf field <code>int32 star_count = 23;</code>
     */
    protected $star_count = 0;
    /**
     * Whether it's recommended that this model is used within a workflow
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue workflow_recommended = 29;</code>
     */
    protected $workflow_recommended = null;
    /**
     * bookmark info. When set, this model is a bookmarked model of this app.
     * Info in this field will allow you to find/access original model.
     *
     * Generated from protobuf field <code>.clarifai.api.BookmarkOrigin bookmark_origin = 33;</code>
     */
    protected $bookmark_origin = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The model's ID. Must be unique within a particular app and URL-friendly.
     *     @type string $name
     *           DEPRECATED: Please use the model id to name the model.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the model was created. We follow the XXXX timestamp
     *           format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     *           "2006-01-02T15:04:05.999999Z" so you can expect results like
     *            the following from the API:
     *            "2017-04-11T21:50:50.223962Z"
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When was the most recent model version created at
     *     @type string $app_id
     *           The app the model belongs to.
     *     @type \Clarifai\Api\OutputInfo $output_info
     *           Info about the model's output and configuration.
     *           DEPRECATED: Will be moved to model version
     *     @type \Clarifai\Api\ModelVersion $model_version
     *           A particular version of the model, e.g., to specify the version when creating a workflow or
     *           when listing Models to include the latest ModelVersion of the model in the response.
     *     @type string $display_name
     *           DEPRECATED: Please use the model id to name the model.
     *     @type string $user_id
     *           The user id that the model belongs to.
     *     @type \Clarifai\Api\EvalInfo $default_eval_info
     *           The default evaluation info. Can be overwritten by eval request.
     *     @type string $model_type_id
     *           The ModelType.Id that is used for this model. This is used for all versions and you cannot
     *           change model_type_id between versions of the same model.
     *     @type string $task
     *           The task the model was trained to do
     *     @type \Clarifai\Api\Visibility $visibility
     *           The visibility field represents whether this message is privately/publicly visible.
     *           To be visible to the public the App that contains it AND the User that contains the App must
     *           also be publicly visible.
     *     @type string $description
     *           Short description about this model
     *     @type \Google\Protobuf\Struct $metadata
     *           To handle arbitrary json metadata you can use a struct field:
     *           https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *     @type \Google\Protobuf\Struct $presets
     *     @type string $notes
     *           Notes for the model
     *           This field should be used for in-depth notes and supports up to 64Kbs.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $toolkits
     *           Tags from toolkits category
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $use_cases
     *           Tags from use_cases category
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $languages
     *           Tags from languages category.
     *     @type array<\Clarifai\Api\FullTag>|\Google\Protobuf\Internal\RepeatedField $languages_full
     *           Tags from languages category with names, only used in responses.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $check_consents
     *     @type bool $is_starred
     *           Is starred by the requesting user (only showed on get/list requests)
     *           Please use PostModelStars/DeleteModelStars endpoints to star/unstar a model
     *     @type int $star_count
     *           How many users have starred the model (only showed on get/list requests)
     *           Computed value, not editable
     *     @type \Google\Protobuf\BoolValue $workflow_recommended
     *           Whether it's recommended that this model is used within a workflow
     *     @type \Clarifai\Api\BookmarkOrigin $bookmark_origin
     *           bookmark info. When set, this model is a bookmarked model of this app.
     *           Info in this field will allow you to find/access original model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The model's ID. Must be unique within a particular app and URL-friendly.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The model's ID. Must be unique within a particular app and URL-friendly.
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
     * DEPRECATED: Please use the model id to name the model.
     *
     * Generated from protobuf field <code>string name = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getName()
    {
        @trigger_error('name is deprecated.', E_USER_DEPRECATED);
        return $this->name;
    }

    /**
     * DEPRECATED: Please use the model id to name the model.
     *
     * Generated from protobuf field <code>string name = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setName($var)
    {
        @trigger_error('name is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * When the model was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     *  the following from the API:
     *  "2017-04-11T21:50:50.223962Z"
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
     * When the model was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     *  the following from the API:
     *  "2017-04-11T21:50:50.223962Z"
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
     * When was the most recent model version created at
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 19;</code>
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
     * When was the most recent model version created at
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 19;</code>
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
     * The app the model belongs to.
     *
     * Generated from protobuf field <code>string app_id = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app the model belongs to.
     *
     * Generated from protobuf field <code>string app_id = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
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
     * Info about the model's output and configuration.
     * DEPRECATED: Will be moved to model version
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info = 5 [deprecated = true];</code>
     * @return \Clarifai\Api\OutputInfo|null
     * @deprecated
     */
    public function getOutputInfo()
    {
        @trigger_error('output_info is deprecated.', E_USER_DEPRECATED);
        return $this->output_info;
    }

    public function hasOutputInfo()
    {
        @trigger_error('output_info is deprecated.', E_USER_DEPRECATED);
        return isset($this->output_info);
    }

    public function clearOutputInfo()
    {
        @trigger_error('output_info is deprecated.', E_USER_DEPRECATED);
        unset($this->output_info);
    }

    /**
     * Info about the model's output and configuration.
     * DEPRECATED: Will be moved to model version
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info = 5 [deprecated = true];</code>
     * @param \Clarifai\Api\OutputInfo $var
     * @return $this
     * @deprecated
     */
    public function setOutputInfo($var)
    {
        @trigger_error('output_info is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Clarifai\Api\OutputInfo::class);
        $this->output_info = $var;

        return $this;
    }

    /**
     * A particular version of the model, e.g., to specify the version when creating a workflow or
     * when listing Models to include the latest ModelVersion of the model in the response.
     *
     * Generated from protobuf field <code>.clarifai.api.ModelVersion model_version = 6;</code>
     * @return \Clarifai\Api\ModelVersion|null
     */
    public function getModelVersion()
    {
        return $this->model_version;
    }

    public function hasModelVersion()
    {
        return isset($this->model_version);
    }

    public function clearModelVersion()
    {
        unset($this->model_version);
    }

    /**
     * A particular version of the model, e.g., to specify the version when creating a workflow or
     * when listing Models to include the latest ModelVersion of the model in the response.
     *
     * Generated from protobuf field <code>.clarifai.api.ModelVersion model_version = 6;</code>
     * @param \Clarifai\Api\ModelVersion $var
     * @return $this
     */
    public function setModelVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ModelVersion::class);
        $this->model_version = $var;

        return $this;
    }

    /**
     * DEPRECATED: Please use the model id to name the model.
     *
     * Generated from protobuf field <code>string display_name = 7 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getDisplayName()
    {
        @trigger_error('display_name is deprecated.', E_USER_DEPRECATED);
        return $this->display_name;
    }

    /**
     * DEPRECATED: Please use the model id to name the model.
     *
     * Generated from protobuf field <code>string display_name = 7 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setDisplayName($var)
    {
        @trigger_error('display_name is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The user id that the model belongs to.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user id that the model belongs to.
     *
     * Generated from protobuf field <code>string user_id = 9;</code>
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
     * The default evaluation info. Can be overwritten by eval request.
     *
     * Generated from protobuf field <code>.clarifai.api.EvalInfo default_eval_info = 30;</code>
     * @return \Clarifai\Api\EvalInfo|null
     */
    public function getDefaultEvalInfo()
    {
        return $this->default_eval_info;
    }

    public function hasDefaultEvalInfo()
    {
        return isset($this->default_eval_info);
    }

    public function clearDefaultEvalInfo()
    {
        unset($this->default_eval_info);
    }

    /**
     * The default evaluation info. Can be overwritten by eval request.
     *
     * Generated from protobuf field <code>.clarifai.api.EvalInfo default_eval_info = 30;</code>
     * @param \Clarifai\Api\EvalInfo $var
     * @return $this
     */
    public function setDefaultEvalInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\EvalInfo::class);
        $this->default_eval_info = $var;

        return $this;
    }

    /**
     * The ModelType.Id that is used for this model. This is used for all versions and you cannot
     * change model_type_id between versions of the same model.
     *
     * Generated from protobuf field <code>string model_type_id = 14;</code>
     * @return string
     */
    public function getModelTypeId()
    {
        return $this->model_type_id;
    }

    /**
     * The ModelType.Id that is used for this model. This is used for all versions and you cannot
     * change model_type_id between versions of the same model.
     *
     * Generated from protobuf field <code>string model_type_id = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setModelTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_type_id = $var;

        return $this;
    }

    /**
     * The task the model was trained to do
     *
     * Generated from protobuf field <code>string task = 26;</code>
     * @return string
     */
    public function getTask()
    {
        return $this->task;
    }

    /**
     * The task the model was trained to do
     *
     * Generated from protobuf field <code>string task = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setTask($var)
    {
        GPBUtil::checkString($var, True);
        $this->task = $var;

        return $this;
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 15;</code>
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
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 15;</code>
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
     * Short description about this model
     *
     * Generated from protobuf field <code>string description = 16;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Short description about this model
     *
     * Generated from protobuf field <code>string description = 16;</code>
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
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 17;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 17;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Struct presets = 27;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getPresets()
    {
        return $this->presets;
    }

    public function hasPresets()
    {
        return isset($this->presets);
    }

    public function clearPresets()
    {
        unset($this->presets);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct presets = 27;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setPresets($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->presets = $var;

        return $this;
    }

    /**
     * Notes for the model
     * This field should be used for in-depth notes and supports up to 64Kbs.
     *
     * Generated from protobuf field <code>string notes = 18;</code>
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Notes for the model
     * This field should be used for in-depth notes and supports up to 64Kbs.
     *
     * Generated from protobuf field <code>string notes = 18;</code>
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
     * Tags from toolkits category
     *
     * Generated from protobuf field <code>repeated string toolkits = 20 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getToolkits()
    {
        return $this->toolkits;
    }

    /**
     * Tags from toolkits category
     *
     * Generated from protobuf field <code>repeated string toolkits = 20 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setToolkits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->toolkits = $arr;

        return $this;
    }

    /**
     * Tags from use_cases category
     *
     * Generated from protobuf field <code>repeated string use_cases = 21 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUseCases()
    {
        return $this->use_cases;
    }

    /**
     * Tags from use_cases category
     *
     * Generated from protobuf field <code>repeated string use_cases = 21 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUseCases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->use_cases = $arr;

        return $this;
    }

    /**
     * Tags from languages category.
     *
     * Generated from protobuf field <code>repeated string languages = 25 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Tags from languages category.
     *
     * Generated from protobuf field <code>repeated string languages = 25 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->languages = $arr;

        return $this;
    }

    /**
     * Tags from languages category with names, only used in responses.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.FullTag languages_full = 31 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguagesFull()
    {
        return $this->languages_full;
    }

    /**
     * Tags from languages category with names, only used in responses.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.FullTag languages_full = 31 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param array<\Clarifai\Api\FullTag>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguagesFull($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\FullTag::class);
        $this->languages_full = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string check_consents = 32 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCheckConsents()
    {
        return $this->check_consents;
    }

    /**
     * Generated from protobuf field <code>repeated string check_consents = 32 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCheckConsents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->check_consents = $arr;

        return $this;
    }

    /**
     * Is starred by the requesting user (only showed on get/list requests)
     * Please use PostModelStars/DeleteModelStars endpoints to star/unstar a model
     *
     * Generated from protobuf field <code>bool is_starred = 22;</code>
     * @return bool
     */
    public function getIsStarred()
    {
        return $this->is_starred;
    }

    /**
     * Is starred by the requesting user (only showed on get/list requests)
     * Please use PostModelStars/DeleteModelStars endpoints to star/unstar a model
     *
     * Generated from protobuf field <code>bool is_starred = 22;</code>
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
     * How many users have starred the model (only showed on get/list requests)
     * Computed value, not editable
     *
     * Generated from protobuf field <code>int32 star_count = 23;</code>
     * @return int
     */
    public function getStarCount()
    {
        return $this->star_count;
    }

    /**
     * How many users have starred the model (only showed on get/list requests)
     * Computed value, not editable
     *
     * Generated from protobuf field <code>int32 star_count = 23;</code>
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
     * Whether it's recommended that this model is used within a workflow
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue workflow_recommended = 29;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getWorkflowRecommended()
    {
        return $this->workflow_recommended;
    }

    public function hasWorkflowRecommended()
    {
        return isset($this->workflow_recommended);
    }

    public function clearWorkflowRecommended()
    {
        unset($this->workflow_recommended);
    }

    /**
     * Returns the unboxed value from <code>getWorkflowRecommended()</code>

     * Whether it's recommended that this model is used within a workflow
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue workflow_recommended = 29;</code>
     * @return bool|null
     */
    public function getWorkflowRecommendedUnwrapped()
    {
        return $this->readWrapperValue("workflow_recommended");
    }

    /**
     * Whether it's recommended that this model is used within a workflow
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue workflow_recommended = 29;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setWorkflowRecommended($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->workflow_recommended = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether it's recommended that this model is used within a workflow
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue workflow_recommended = 29;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setWorkflowRecommendedUnwrapped($var)
    {
        $this->writeWrapperValue("workflow_recommended", $var);
        return $this;}

    /**
     * bookmark info. When set, this model is a bookmarked model of this app.
     * Info in this field will allow you to find/access original model.
     *
     * Generated from protobuf field <code>.clarifai.api.BookmarkOrigin bookmark_origin = 33;</code>
     * @return \Clarifai\Api\BookmarkOrigin|null
     */
    public function getBookmarkOrigin()
    {
        return $this->bookmark_origin;
    }

    public function hasBookmarkOrigin()
    {
        return isset($this->bookmark_origin);
    }

    public function clearBookmarkOrigin()
    {
        unset($this->bookmark_origin);
    }

    /**
     * bookmark info. When set, this model is a bookmarked model of this app.
     * Info in this field will allow you to find/access original model.
     *
     * Generated from protobuf field <code>.clarifai.api.BookmarkOrigin bookmark_origin = 33;</code>
     * @param \Clarifai\Api\BookmarkOrigin $var
     * @return $this
     */
    public function setBookmarkOrigin($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\BookmarkOrigin::class);
        $this->bookmark_origin = $var;

        return $this;
    }

}

