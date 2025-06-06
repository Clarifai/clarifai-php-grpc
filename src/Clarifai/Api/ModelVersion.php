<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ModelVersion
 *
 * Generated from protobuf message <code>clarifai.api.ModelVersion</code>
 */
class ModelVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * When the version was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     */
    protected $created_at = null;
    /**
     * The status of the version (whether it's untrained, training, trained, etc.).
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>uint32 active_concept_count = 4;</code>
     */
    protected $active_concept_count = 0;
    /**
     * Generated from protobuf field <code>.clarifai.api.EvalMetrics metrics = 5;</code>
     */
    protected $metrics = null;
    /**
     * number of inputs in the model version
     *
     * Generated from protobuf field <code>uint32 total_input_count = 6;</code>
     */
    protected $total_input_count = 0;
    /**
     * When a model has already been trained externally, you can upload
     * it directly to the platform as a model version directly by
     * setting the PretrainedModelConfig
     *
     * Generated from protobuf field <code>.clarifai.api.PretrainedModelConfig pretrained_model_config = 7;</code>
     */
    protected $pretrained_model_config = null;
    /**
     * When training of this version was completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 10;</code>
     */
    protected $completed_at = null;
    /**
     * Description about this version
     *
     * Generated from protobuf field <code>string description = 11;</code>
     */
    protected $description = '';
    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 12;</code>
     */
    protected $visibility = null;
    /**
     * The app the model version belongs to.
     *
     * Generated from protobuf field <code>string app_id = 13;</code>
     */
    protected $app_id = '';
    /**
     * The user the model version belongs to.
     *
     * Generated from protobuf field <code>string user_id = 14;</code>
     */
    protected $user_id = '';
    /**
     * When this model version was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 15;</code>
     */
    protected $modified_at = null;
    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 16;</code>
     */
    protected $metadata = null;
    /**
     * Generated from protobuf field <code>string license = 17;</code>
     */
    protected $license = '';
    /**
     * Info about the model's output. Besides `output_info.data`, these fields should
     * be reserved for parameters that affect the models outputs when inferencing.
     * `output_info.data` is used to specify the training concepts for this model version.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info = 19;</code>
     */
    protected $output_info = null;
    /**
     * Info about preprocessing the models inputs, before they are sent to this model for training or inferencing.
     * E.g.: `input_info.base_embed_model` lets us know inputs should be ran through a base model before being sent to an embedding-classifier.
     *
     * Generated from protobuf field <code>.clarifai.api.InputInfo input_info = 20;</code>
     */
    protected $input_info = null;
    /**
     * Configuration for the training process of this model version.
     *
     * Generated from protobuf field <code>.clarifai.api.TrainInfo train_info = 21;</code>
     */
    protected $train_info = null;
    /**
     * Configuration used to import model from third-party toolkits
     * DEPRECATED: no longer support importing models from third party toolkits
     *
     * Generated from protobuf field <code>.clarifai.api.ImportInfo import_info = 22 [deprecated = true];</code>
     * @deprecated
     */
    protected $import_info = null;
    /**
     * Contains the training logs if available
     *
     * Generated from protobuf field <code>string train_log = 23;</code>
     */
    protected $train_log = '';
    /**
     * The minimum required compute resource for this model for inference.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeInfo inference_compute_info = 24;</code>
     */
    protected $inference_compute_info = null;
    /**
     * Build information for the model version
     *
     * Generated from protobuf field <code>.clarifai.api.BuildInfo build_info = 25;</code>
     */
    protected $build_info = null;
    /**
     * Model signature information for the model version
     *
     * Generated from protobuf field <code>repeated .clarifai.api.MethodSignature method_signatures = 26;</code>
     */
    private $method_signatures;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the version was created.
     *     @type \Clarifai\Api\Status\Status $status
     *           The status of the version (whether it's untrained, training, trained, etc.).
     *     @type int $active_concept_count
     *     @type \Clarifai\Api\EvalMetrics $metrics
     *     @type int $total_input_count
     *           number of inputs in the model version
     *     @type \Clarifai\Api\PretrainedModelConfig $pretrained_model_config
     *           When a model has already been trained externally, you can upload
     *           it directly to the platform as a model version directly by
     *           setting the PretrainedModelConfig
     *     @type \Google\Protobuf\Timestamp $completed_at
     *           When training of this version was completed.
     *     @type string $description
     *           Description about this version
     *     @type \Clarifai\Api\Visibility $visibility
     *           The visibility field represents whether this message is privately/publicly visible.
     *           To be visible to the public the App that contains it AND the User that contains the App must
     *           also be publicly visible.
     *     @type string $app_id
     *           The app the model version belongs to.
     *     @type string $user_id
     *           The user the model version belongs to.
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When this model version was last modified
     *     @type \Google\Protobuf\Struct $metadata
     *           To handle arbitrary json metadata you can use a struct field:
     *           https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *     @type string $license
     *     @type \Clarifai\Api\OutputInfo $output_info
     *           Info about the model's output. Besides `output_info.data`, these fields should
     *           be reserved for parameters that affect the models outputs when inferencing.
     *           `output_info.data` is used to specify the training concepts for this model version.
     *     @type \Clarifai\Api\InputInfo $input_info
     *           Info about preprocessing the models inputs, before they are sent to this model for training or inferencing.
     *           E.g.: `input_info.base_embed_model` lets us know inputs should be ran through a base model before being sent to an embedding-classifier.
     *     @type \Clarifai\Api\TrainInfo $train_info
     *           Configuration for the training process of this model version.
     *     @type \Clarifai\Api\ImportInfo $import_info
     *           Configuration used to import model from third-party toolkits
     *           DEPRECATED: no longer support importing models from third party toolkits
     *     @type string $train_log
     *           Contains the training logs if available
     *     @type \Clarifai\Api\ComputeInfo $inference_compute_info
     *           The minimum required compute resource for this model for inference.
     *     @type \Clarifai\Api\BuildInfo $build_info
     *           Build information for the model version
     *     @type array<\Clarifai\Api\MethodSignature>|\Google\Protobuf\Internal\RepeatedField $method_signatures
     *           Model signature information for the model version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * When the version was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
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
     * When the version was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
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
     * The status of the version (whether it's untrained, training, trained, etc.).
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
     * @return \Clarifai\Api\Status\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The status of the version (whether it's untrained, training, trained, etc.).
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 3;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 active_concept_count = 4;</code>
     * @return int
     */
    public function getActiveConceptCount()
    {
        return $this->active_concept_count;
    }

    /**
     * Generated from protobuf field <code>uint32 active_concept_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveConceptCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_concept_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.EvalMetrics metrics = 5;</code>
     * @return \Clarifai\Api\EvalMetrics|null
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    public function hasMetrics()
    {
        return isset($this->metrics);
    }

    public function clearMetrics()
    {
        unset($this->metrics);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.EvalMetrics metrics = 5;</code>
     * @param \Clarifai\Api\EvalMetrics $var
     * @return $this
     */
    public function setMetrics($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\EvalMetrics::class);
        $this->metrics = $var;

        return $this;
    }

    /**
     * number of inputs in the model version
     *
     * Generated from protobuf field <code>uint32 total_input_count = 6;</code>
     * @return int
     */
    public function getTotalInputCount()
    {
        return $this->total_input_count;
    }

    /**
     * number of inputs in the model version
     *
     * Generated from protobuf field <code>uint32 total_input_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalInputCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_input_count = $var;

        return $this;
    }

    /**
     * When a model has already been trained externally, you can upload
     * it directly to the platform as a model version directly by
     * setting the PretrainedModelConfig
     *
     * Generated from protobuf field <code>.clarifai.api.PretrainedModelConfig pretrained_model_config = 7;</code>
     * @return \Clarifai\Api\PretrainedModelConfig|null
     */
    public function getPretrainedModelConfig()
    {
        return $this->pretrained_model_config;
    }

    public function hasPretrainedModelConfig()
    {
        return isset($this->pretrained_model_config);
    }

    public function clearPretrainedModelConfig()
    {
        unset($this->pretrained_model_config);
    }

    /**
     * When a model has already been trained externally, you can upload
     * it directly to the platform as a model version directly by
     * setting the PretrainedModelConfig
     *
     * Generated from protobuf field <code>.clarifai.api.PretrainedModelConfig pretrained_model_config = 7;</code>
     * @param \Clarifai\Api\PretrainedModelConfig $var
     * @return $this
     */
    public function setPretrainedModelConfig($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\PretrainedModelConfig::class);
        $this->pretrained_model_config = $var;

        return $this;
    }

    /**
     * When training of this version was completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCompletedAt()
    {
        return $this->completed_at;
    }

    public function hasCompletedAt()
    {
        return isset($this->completed_at);
    }

    public function clearCompletedAt()
    {
        unset($this->completed_at);
    }

    /**
     * When training of this version was completed.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp completed_at = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCompletedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->completed_at = $var;

        return $this;
    }

    /**
     * Description about this version
     *
     * Generated from protobuf field <code>string description = 11;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description about this version
     *
     * Generated from protobuf field <code>string description = 11;</code>
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
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 12;</code>
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
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 12;</code>
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
     * The app the model version belongs to.
     *
     * Generated from protobuf field <code>string app_id = 13;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app the model version belongs to.
     *
     * Generated from protobuf field <code>string app_id = 13;</code>
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
     * The user the model version belongs to.
     *
     * Generated from protobuf field <code>string user_id = 14;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user the model version belongs to.
     *
     * Generated from protobuf field <code>string user_id = 14;</code>
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
     * When this model version was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 15;</code>
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
     * When this model version was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 15;</code>
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
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 16;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 16;</code>
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
     * Generated from protobuf field <code>string license = 17;</code>
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Generated from protobuf field <code>string license = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setLicense($var)
    {
        GPBUtil::checkString($var, True);
        $this->license = $var;

        return $this;
    }

    /**
     * Info about the model's output. Besides `output_info.data`, these fields should
     * be reserved for parameters that affect the models outputs when inferencing.
     * `output_info.data` is used to specify the training concepts for this model version.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info = 19;</code>
     * @return \Clarifai\Api\OutputInfo|null
     */
    public function getOutputInfo()
    {
        return $this->output_info;
    }

    public function hasOutputInfo()
    {
        return isset($this->output_info);
    }

    public function clearOutputInfo()
    {
        unset($this->output_info);
    }

    /**
     * Info about the model's output. Besides `output_info.data`, these fields should
     * be reserved for parameters that affect the models outputs when inferencing.
     * `output_info.data` is used to specify the training concepts for this model version.
     *
     * Generated from protobuf field <code>.clarifai.api.OutputInfo output_info = 19;</code>
     * @param \Clarifai\Api\OutputInfo $var
     * @return $this
     */
    public function setOutputInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\OutputInfo::class);
        $this->output_info = $var;

        return $this;
    }

    /**
     * Info about preprocessing the models inputs, before they are sent to this model for training or inferencing.
     * E.g.: `input_info.base_embed_model` lets us know inputs should be ran through a base model before being sent to an embedding-classifier.
     *
     * Generated from protobuf field <code>.clarifai.api.InputInfo input_info = 20;</code>
     * @return \Clarifai\Api\InputInfo|null
     */
    public function getInputInfo()
    {
        return $this->input_info;
    }

    public function hasInputInfo()
    {
        return isset($this->input_info);
    }

    public function clearInputInfo()
    {
        unset($this->input_info);
    }

    /**
     * Info about preprocessing the models inputs, before they are sent to this model for training or inferencing.
     * E.g.: `input_info.base_embed_model` lets us know inputs should be ran through a base model before being sent to an embedding-classifier.
     *
     * Generated from protobuf field <code>.clarifai.api.InputInfo input_info = 20;</code>
     * @param \Clarifai\Api\InputInfo $var
     * @return $this
     */
    public function setInputInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\InputInfo::class);
        $this->input_info = $var;

        return $this;
    }

    /**
     * Configuration for the training process of this model version.
     *
     * Generated from protobuf field <code>.clarifai.api.TrainInfo train_info = 21;</code>
     * @return \Clarifai\Api\TrainInfo|null
     */
    public function getTrainInfo()
    {
        return $this->train_info;
    }

    public function hasTrainInfo()
    {
        return isset($this->train_info);
    }

    public function clearTrainInfo()
    {
        unset($this->train_info);
    }

    /**
     * Configuration for the training process of this model version.
     *
     * Generated from protobuf field <code>.clarifai.api.TrainInfo train_info = 21;</code>
     * @param \Clarifai\Api\TrainInfo $var
     * @return $this
     */
    public function setTrainInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TrainInfo::class);
        $this->train_info = $var;

        return $this;
    }

    /**
     * Configuration used to import model from third-party toolkits
     * DEPRECATED: no longer support importing models from third party toolkits
     *
     * Generated from protobuf field <code>.clarifai.api.ImportInfo import_info = 22 [deprecated = true];</code>
     * @return \Clarifai\Api\ImportInfo|null
     * @deprecated
     */
    public function getImportInfo()
    {
        @trigger_error('import_info is deprecated.', E_USER_DEPRECATED);
        return $this->import_info;
    }

    public function hasImportInfo()
    {
        @trigger_error('import_info is deprecated.', E_USER_DEPRECATED);
        return isset($this->import_info);
    }

    public function clearImportInfo()
    {
        @trigger_error('import_info is deprecated.', E_USER_DEPRECATED);
        unset($this->import_info);
    }

    /**
     * Configuration used to import model from third-party toolkits
     * DEPRECATED: no longer support importing models from third party toolkits
     *
     * Generated from protobuf field <code>.clarifai.api.ImportInfo import_info = 22 [deprecated = true];</code>
     * @param \Clarifai\Api\ImportInfo $var
     * @return $this
     * @deprecated
     */
    public function setImportInfo($var)
    {
        @trigger_error('import_info is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Clarifai\Api\ImportInfo::class);
        $this->import_info = $var;

        return $this;
    }

    /**
     * Contains the training logs if available
     *
     * Generated from protobuf field <code>string train_log = 23;</code>
     * @return string
     */
    public function getTrainLog()
    {
        return $this->train_log;
    }

    /**
     * Contains the training logs if available
     *
     * Generated from protobuf field <code>string train_log = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setTrainLog($var)
    {
        GPBUtil::checkString($var, True);
        $this->train_log = $var;

        return $this;
    }

    /**
     * The minimum required compute resource for this model for inference.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeInfo inference_compute_info = 24;</code>
     * @return \Clarifai\Api\ComputeInfo|null
     */
    public function getInferenceComputeInfo()
    {
        return $this->inference_compute_info;
    }

    public function hasInferenceComputeInfo()
    {
        return isset($this->inference_compute_info);
    }

    public function clearInferenceComputeInfo()
    {
        unset($this->inference_compute_info);
    }

    /**
     * The minimum required compute resource for this model for inference.
     *
     * Generated from protobuf field <code>.clarifai.api.ComputeInfo inference_compute_info = 24;</code>
     * @param \Clarifai\Api\ComputeInfo $var
     * @return $this
     */
    public function setInferenceComputeInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ComputeInfo::class);
        $this->inference_compute_info = $var;

        return $this;
    }

    /**
     * Build information for the model version
     *
     * Generated from protobuf field <code>.clarifai.api.BuildInfo build_info = 25;</code>
     * @return \Clarifai\Api\BuildInfo|null
     */
    public function getBuildInfo()
    {
        return $this->build_info;
    }

    public function hasBuildInfo()
    {
        return isset($this->build_info);
    }

    public function clearBuildInfo()
    {
        unset($this->build_info);
    }

    /**
     * Build information for the model version
     *
     * Generated from protobuf field <code>.clarifai.api.BuildInfo build_info = 25;</code>
     * @param \Clarifai\Api\BuildInfo $var
     * @return $this
     */
    public function setBuildInfo($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\BuildInfo::class);
        $this->build_info = $var;

        return $this;
    }

    /**
     * Model signature information for the model version
     *
     * Generated from protobuf field <code>repeated .clarifai.api.MethodSignature method_signatures = 26;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMethodSignatures()
    {
        return $this->method_signatures;
    }

    /**
     * Model signature information for the model version
     *
     * Generated from protobuf field <code>repeated .clarifai.api.MethodSignature method_signatures = 26;</code>
     * @param array<\Clarifai\Api\MethodSignature>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMethodSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\MethodSignature::class);
        $this->method_signatures = $arr;

        return $this;
    }

}

