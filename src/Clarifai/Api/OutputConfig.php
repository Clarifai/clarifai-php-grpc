<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OutputConfig is a collection of parameters controlling either inference or training settings for
 * the given Model. This message will be deprecated over time in favor or infer_params and
 * train_params in OutputInfo which are cleaner and more extensible for many ModelTypes.
 *
 * Generated from protobuf message <code>clarifai.api.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * For custom concept model training: whether the concept predictions must sum to 1.
     *
     * Generated from protobuf field <code>bool concepts_mutually_exclusive = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $concepts_mutually_exclusive = false;
    /**
     * For custom concept model training: Whether negatives should only be sampled from within the app during
     * training, for custom models.
     *
     * Generated from protobuf field <code>bool closed_environment = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $closed_environment = false;
    /**
     * DEPRECATED: For custom models, this is the base model to use for image embeddings.
     * Default is general model.
     *
     * Generated from protobuf field <code>string existing_model_id = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $existing_model_id = '';
    /**
     * For concept model predictions: Overrides the default_language for the app in a predict call.
     *
     * Generated from protobuf field <code>string language = 4;</code>
     */
    protected $language = '';
    /**
     * DEPRECATED: Hyper-parameters for custom training.
     * Use new hyper_params field instead.
     *
     * Generated from protobuf field <code>string hyper_parameters = 5 [deprecated = true];</code>
     * @deprecated
     */
    protected $hyper_parameters = '';
    /**
     * For concept model predictions:  Maximum number of concepts in result. Defaults to 0 which under
     * the hood will return default of 20. We do a server side default in order to control this
     * feature in the future.
     *
     * Generated from protobuf field <code>uint32 max_concepts = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $max_concepts = 0;
    /**
     * For concept model predictions: Minimum value of concept's probability score in result.
     * Defaults to 0.0 which means we won't do any thresholding as all probabilities will
     * likely be > 0.0.
     *
     * Generated from protobuf field <code>float min_value = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $min_value = 0.0;
    /**
     * For concept model predictions: Select concepts in result by name or by id
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept select_concepts = 8;</code>
     */
    private $select_concepts;
    /**
     * For custom concept model training: Training timeout of the model (in seconds)
     *
     * Generated from protobuf field <code>uint32 training_timeout = 9;</code>
     */
    protected $training_timeout = 0;
    /**
     * For model predictions on video: Sample delay for video predicting (1 frame per N milliseconds)
     *
     * Generated from protobuf field <code>uint32 sample_ms = 10;</code>
     */
    protected $sample_ms = 0;
    /**
     * For custom model training: Hyperparameters for custom training
     *
     * Generated from protobuf field <code>.google.protobuf.Struct hyper_params = 13;</code>
     */
    protected $hyper_params = null;
    /**
     * For custom model training: this is the base model version to use for image embeddings.
     * This has to be one of the embed models in the app workflow.
     *
     * Generated from protobuf field <code>string embed_model_version_id = 14;</code>
     */
    protected $embed_model_version_id = '';
    /**
     * For custom model training: Use this flag to fail on missing positive examples
     * By default we fill in the missing with random examples
     *
     * Generated from protobuf field <code>bool fail_on_missing_positive_examples = 15;</code>
     */
    protected $fail_on_missing_positive_examples = false;
    /**
     * For custom model training: This is any additional metadata as a JSON object that we want
     * want to persist in the model's output config. This is a useful quick way to set fields for
     * introducing fields for new model types so we don't have to add a new proto field and DB field
     * each time. Please refer to the documentation or model implementation internally for more
     * details on what fields are supported for which models.
     * TODO(zeiler): remove this field after Portal is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct model_metadata = 17 [deprecated = true];</code>
     * @deprecated
     */
    protected $model_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $concepts_mutually_exclusive
     *           For custom concept model training: whether the concept predictions must sum to 1.
     *     @type bool $closed_environment
     *           For custom concept model training: Whether negatives should only be sampled from within the app during
     *           training, for custom models.
     *     @type string $existing_model_id
     *           DEPRECATED: For custom models, this is the base model to use for image embeddings.
     *           Default is general model.
     *     @type string $language
     *           For concept model predictions: Overrides the default_language for the app in a predict call.
     *     @type string $hyper_parameters
     *           DEPRECATED: Hyper-parameters for custom training.
     *           Use new hyper_params field instead.
     *     @type int $max_concepts
     *           For concept model predictions:  Maximum number of concepts in result. Defaults to 0 which under
     *           the hood will return default of 20. We do a server side default in order to control this
     *           feature in the future.
     *     @type float $min_value
     *           For concept model predictions: Minimum value of concept's probability score in result.
     *           Defaults to 0.0 which means we won't do any thresholding as all probabilities will
     *           likely be > 0.0.
     *     @type array<\Clarifai\Api\Concept>|\Google\Protobuf\Internal\RepeatedField $select_concepts
     *           For concept model predictions: Select concepts in result by name or by id
     *     @type int $training_timeout
     *           For custom concept model training: Training timeout of the model (in seconds)
     *     @type int $sample_ms
     *           For model predictions on video: Sample delay for video predicting (1 frame per N milliseconds)
     *     @type \Google\Protobuf\Struct $hyper_params
     *           For custom model training: Hyperparameters for custom training
     *     @type string $embed_model_version_id
     *           For custom model training: this is the base model version to use for image embeddings.
     *           This has to be one of the embed models in the app workflow.
     *     @type bool $fail_on_missing_positive_examples
     *           For custom model training: Use this flag to fail on missing positive examples
     *           By default we fill in the missing with random examples
     *     @type \Google\Protobuf\Struct $model_metadata
     *           For custom model training: This is any additional metadata as a JSON object that we want
     *           want to persist in the model's output config. This is a useful quick way to set fields for
     *           introducing fields for new model types so we don't have to add a new proto field and DB field
     *           each time. Please refer to the documentation or model implementation internally for more
     *           details on what fields are supported for which models.
     *           TODO(zeiler): remove this field after Portal is updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * For custom concept model training: whether the concept predictions must sum to 1.
     *
     * Generated from protobuf field <code>bool concepts_mutually_exclusive = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return bool
     */
    public function getConceptsMutuallyExclusive()
    {
        return $this->concepts_mutually_exclusive;
    }

    /**
     * For custom concept model training: whether the concept predictions must sum to 1.
     *
     * Generated from protobuf field <code>bool concepts_mutually_exclusive = 1 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setConceptsMutuallyExclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->concepts_mutually_exclusive = $var;

        return $this;
    }

    /**
     * For custom concept model training: Whether negatives should only be sampled from within the app during
     * training, for custom models.
     *
     * Generated from protobuf field <code>bool closed_environment = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return bool
     */
    public function getClosedEnvironment()
    {
        return $this->closed_environment;
    }

    /**
     * For custom concept model training: Whether negatives should only be sampled from within the app during
     * training, for custom models.
     *
     * Generated from protobuf field <code>bool closed_environment = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param bool $var
     * @return $this
     */
    public function setClosedEnvironment($var)
    {
        GPBUtil::checkBool($var);
        $this->closed_environment = $var;

        return $this;
    }

    /**
     * DEPRECATED: For custom models, this is the base model to use for image embeddings.
     * Default is general model.
     *
     * Generated from protobuf field <code>string existing_model_id = 3 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getExistingModelId()
    {
        @trigger_error('existing_model_id is deprecated.', E_USER_DEPRECATED);
        return $this->existing_model_id;
    }

    /**
     * DEPRECATED: For custom models, this is the base model to use for image embeddings.
     * Default is general model.
     *
     * Generated from protobuf field <code>string existing_model_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setExistingModelId($var)
    {
        @trigger_error('existing_model_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->existing_model_id = $var;

        return $this;
    }

    /**
     * For concept model predictions: Overrides the default_language for the app in a predict call.
     *
     * Generated from protobuf field <code>string language = 4;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * For concept model predictions: Overrides the default_language for the app in a predict call.
     *
     * Generated from protobuf field <code>string language = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

    /**
     * DEPRECATED: Hyper-parameters for custom training.
     * Use new hyper_params field instead.
     *
     * Generated from protobuf field <code>string hyper_parameters = 5 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getHyperParameters()
    {
        @trigger_error('hyper_parameters is deprecated.', E_USER_DEPRECATED);
        return $this->hyper_parameters;
    }

    /**
     * DEPRECATED: Hyper-parameters for custom training.
     * Use new hyper_params field instead.
     *
     * Generated from protobuf field <code>string hyper_parameters = 5 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setHyperParameters($var)
    {
        @trigger_error('hyper_parameters is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->hyper_parameters = $var;

        return $this;
    }

    /**
     * For concept model predictions:  Maximum number of concepts in result. Defaults to 0 which under
     * the hood will return default of 20. We do a server side default in order to control this
     * feature in the future.
     *
     * Generated from protobuf field <code>uint32 max_concepts = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return int
     */
    public function getMaxConcepts()
    {
        return $this->max_concepts;
    }

    /**
     * For concept model predictions:  Maximum number of concepts in result. Defaults to 0 which under
     * the hood will return default of 20. We do a server side default in order to control this
     * feature in the future.
     *
     * Generated from protobuf field <code>uint32 max_concepts = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxConcepts($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_concepts = $var;

        return $this;
    }

    /**
     * For concept model predictions: Minimum value of concept's probability score in result.
     * Defaults to 0.0 which means we won't do any thresholding as all probabilities will
     * likely be > 0.0.
     *
     * Generated from protobuf field <code>float min_value = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMinValue()
    {
        return $this->min_value;
    }

    /**
     * For concept model predictions: Minimum value of concept's probability score in result.
     * Defaults to 0.0 which means we won't do any thresholding as all probabilities will
     * likely be > 0.0.
     *
     * Generated from protobuf field <code>float min_value = 7 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMinValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->min_value = $var;

        return $this;
    }

    /**
     * For concept model predictions: Select concepts in result by name or by id
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept select_concepts = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectConcepts()
    {
        return $this->select_concepts;
    }

    /**
     * For concept model predictions: Select concepts in result by name or by id
     *
     * Generated from protobuf field <code>repeated .clarifai.api.Concept select_concepts = 8;</code>
     * @param array<\Clarifai\Api\Concept>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectConcepts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\Concept::class);
        $this->select_concepts = $arr;

        return $this;
    }

    /**
     * For custom concept model training: Training timeout of the model (in seconds)
     *
     * Generated from protobuf field <code>uint32 training_timeout = 9;</code>
     * @return int
     */
    public function getTrainingTimeout()
    {
        return $this->training_timeout;
    }

    /**
     * For custom concept model training: Training timeout of the model (in seconds)
     *
     * Generated from protobuf field <code>uint32 training_timeout = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setTrainingTimeout($var)
    {
        GPBUtil::checkUint32($var);
        $this->training_timeout = $var;

        return $this;
    }

    /**
     * For model predictions on video: Sample delay for video predicting (1 frame per N milliseconds)
     *
     * Generated from protobuf field <code>uint32 sample_ms = 10;</code>
     * @return int
     */
    public function getSampleMs()
    {
        return $this->sample_ms;
    }

    /**
     * For model predictions on video: Sample delay for video predicting (1 frame per N milliseconds)
     *
     * Generated from protobuf field <code>uint32 sample_ms = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleMs($var)
    {
        GPBUtil::checkUint32($var);
        $this->sample_ms = $var;

        return $this;
    }

    /**
     * For custom model training: Hyperparameters for custom training
     *
     * Generated from protobuf field <code>.google.protobuf.Struct hyper_params = 13;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getHyperParams()
    {
        return $this->hyper_params;
    }

    public function hasHyperParams()
    {
        return isset($this->hyper_params);
    }

    public function clearHyperParams()
    {
        unset($this->hyper_params);
    }

    /**
     * For custom model training: Hyperparameters for custom training
     *
     * Generated from protobuf field <code>.google.protobuf.Struct hyper_params = 13;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setHyperParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->hyper_params = $var;

        return $this;
    }

    /**
     * For custom model training: this is the base model version to use for image embeddings.
     * This has to be one of the embed models in the app workflow.
     *
     * Generated from protobuf field <code>string embed_model_version_id = 14;</code>
     * @return string
     */
    public function getEmbedModelVersionId()
    {
        return $this->embed_model_version_id;
    }

    /**
     * For custom model training: this is the base model version to use for image embeddings.
     * This has to be one of the embed models in the app workflow.
     *
     * Generated from protobuf field <code>string embed_model_version_id = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setEmbedModelVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->embed_model_version_id = $var;

        return $this;
    }

    /**
     * For custom model training: Use this flag to fail on missing positive examples
     * By default we fill in the missing with random examples
     *
     * Generated from protobuf field <code>bool fail_on_missing_positive_examples = 15;</code>
     * @return bool
     */
    public function getFailOnMissingPositiveExamples()
    {
        return $this->fail_on_missing_positive_examples;
    }

    /**
     * For custom model training: Use this flag to fail on missing positive examples
     * By default we fill in the missing with random examples
     *
     * Generated from protobuf field <code>bool fail_on_missing_positive_examples = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setFailOnMissingPositiveExamples($var)
    {
        GPBUtil::checkBool($var);
        $this->fail_on_missing_positive_examples = $var;

        return $this;
    }

    /**
     * For custom model training: This is any additional metadata as a JSON object that we want
     * want to persist in the model's output config. This is a useful quick way to set fields for
     * introducing fields for new model types so we don't have to add a new proto field and DB field
     * each time. Please refer to the documentation or model implementation internally for more
     * details on what fields are supported for which models.
     * TODO(zeiler): remove this field after Portal is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct model_metadata = 17 [deprecated = true];</code>
     * @return \Google\Protobuf\Struct|null
     * @deprecated
     */
    public function getModelMetadata()
    {
        @trigger_error('model_metadata is deprecated.', E_USER_DEPRECATED);
        return $this->model_metadata;
    }

    public function hasModelMetadata()
    {
        @trigger_error('model_metadata is deprecated.', E_USER_DEPRECATED);
        return isset($this->model_metadata);
    }

    public function clearModelMetadata()
    {
        @trigger_error('model_metadata is deprecated.', E_USER_DEPRECATED);
        unset($this->model_metadata);
    }

    /**
     * For custom model training: This is any additional metadata as a JSON object that we want
     * want to persist in the model's output config. This is a useful quick way to set fields for
     * introducing fields for new model types so we don't have to add a new proto field and DB field
     * each time. Please refer to the documentation or model implementation internally for more
     * details on what fields are supported for which models.
     * TODO(zeiler): remove this field after Portal is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct model_metadata = 17 [deprecated = true];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     * @deprecated
     */
    public function setModelMetadata($var)
    {
        @trigger_error('model_metadata is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->model_metadata = $var;

        return $this;
    }

}

