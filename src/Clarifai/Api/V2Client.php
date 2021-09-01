<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Clarifai\Api;

/**
 *
 * Note: this is based on the google api format defined here. Please
 * read this before contributing to this file and other *.proto files
 * for the API.
 * https://cloud.google.com/service-management/reference/rpc/google.api#google.api.HttpRule
 *
 */
class V2Client extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * //////////////////////////////////////
     * Concept Relationships
     * //////////////////////////////////////
     *
     * List concept relations between concepts in the platform.
     * MUST be above ListConcepts so that if concept_id is empty this will still match
     * /concepts/relations to list all the concept relations in the app.
     * @param \Clarifai\Api\ListConceptRelationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListConceptRelations(\Clarifai\Api\ListConceptRelationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListConceptRelations',
        $argument,
        ['\Clarifai\Api\MultiConceptRelationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post concept relations to create relations between concepts in the platform.
     * @param \Clarifai\Api\PostConceptRelationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostConceptRelations(\Clarifai\Api\PostConceptRelationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostConceptRelations',
        $argument,
        ['\Clarifai\Api\MultiConceptRelationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post concept relations to create relations between concepts in the platform.
     * @param \Clarifai\Api\DeleteConceptRelationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteConceptRelations(\Clarifai\Api\DeleteConceptRelationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteConceptRelations',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Concepts
     * //////////////////////////////////////
     *
     * List all the concepts with their positive and negative counts
     * @param \Clarifai\Api\GetConceptCountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetConceptCounts(\Clarifai\Api\GetConceptCountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetConceptCounts',
        $argument,
        ['\Clarifai\Api\MultiConceptCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific concept from an app.
     * @param \Clarifai\Api\GetConceptRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetConcept(\Clarifai\Api\GetConceptRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetConcept',
        $argument,
        ['\Clarifai\Api\SingleConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the concepts.
     * @param \Clarifai\Api\ListConceptsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListConcepts(\Clarifai\Api\ListConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListConcepts',
        $argument,
        ['\Clarifai\Api\MultiConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search over the concepts to find one or more you're looking for.
     * This leverage the "body" parameter because we also have page and
     * per_page as url query param variables in this request.
     * @param \Clarifai\Api\PostConceptsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostConceptsSearches(\Clarifai\Api\PostConceptsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostConceptsSearches',
        $argument,
        ['\Clarifai\Api\MultiConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a concept to an app.
     * @param \Clarifai\Api\PostConceptsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostConcepts(\Clarifai\Api\PostConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostConcepts',
        $argument,
        ['\Clarifai\Api\MultiConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more concepts.
     * @param \Clarifai\Api\PatchConceptsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchConcepts(\Clarifai\Api\PatchConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchConcepts',
        $argument,
        ['\Clarifai\Api\MultiConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Concept Languages
     * //////////////////////////////////////
     *
     * Get a specific concept from an app.
     * @param \Clarifai\Api\GetConceptLanguageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetConceptLanguage(\Clarifai\Api\GetConceptLanguageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetConceptLanguage',
        $argument,
        ['\Clarifai\Api\SingleConceptLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List the concept in all the translated languages.
     * @param \Clarifai\Api\ListConceptLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListConceptLanguages(\Clarifai\Api\ListConceptLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListConceptLanguages',
        $argument,
        ['\Clarifai\Api\MultiConceptLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new tranlsation for this concept.
     * @param \Clarifai\Api\PostConceptLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostConceptLanguages(\Clarifai\Api\PostConceptLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostConceptLanguages',
        $argument,
        ['\Clarifai\Api\MultiConceptLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch the name for a given language names by passing in a list of concepts with the new names
     * for the languages.
     * @param \Clarifai\Api\PatchConceptLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchConceptLanguages(\Clarifai\Api\PatchConceptLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchConceptLanguages',
        $argument,
        ['\Clarifai\Api\MultiConceptLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Knowledge Graph
     * //////////////////////////////////////
     *
     * List all domain graphs.
     * @param \Clarifai\Api\ListKnowledgeGraphsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListKnowledgeGraphs(\Clarifai\Api\ListKnowledgeGraphsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListKnowledgeGraphs',
        $argument,
        ['\Clarifai\Api\MultiKnowledgeGraphResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post domain graphs.
     * @param \Clarifai\Api\PostKnowledgeGraphsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostKnowledgeGraphs(\Clarifai\Api\PostKnowledgeGraphsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostKnowledgeGraphs',
        $argument,
        ['\Clarifai\Api\MultiKnowledgeGraphResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Start concept mapping jobs.
     * @param \Clarifai\Api\PostConceptMappingJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostConceptMappingJobs(\Clarifai\Api\PostConceptMappingJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostConceptMappingJobs',
        $argument,
        ['\Clarifai\Api\MultiConceptMappingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * annotations
     * //////////////////////////////////////
     *
     * Get a specific annotation from an app.
     * @param \Clarifai\Api\GetAnnotationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAnnotation(\Clarifai\Api\GetAnnotationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetAnnotation',
        $argument,
        ['\Clarifai\Api\SingleAnnotationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the annotation.
     * @param \Clarifai\Api\ListAnnotationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAnnotations(\Clarifai\Api\ListAnnotationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAnnotations',
        $argument,
        ['\Clarifai\Api\MultiAnnotationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post annotations.
     * @param \Clarifai\Api\PostAnnotationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostAnnotations(\Clarifai\Api\PostAnnotationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAnnotations',
        $argument,
        ['\Clarifai\Api\MultiAnnotationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more annotations.
     * @param \Clarifai\Api\PatchAnnotationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchAnnotations(\Clarifai\Api\PatchAnnotationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAnnotations',
        $argument,
        ['\Clarifai\Api\MultiAnnotationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch annotations status by worker id and task id.
     * @param \Clarifai\Api\PatchAnnotationsStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchAnnotationsStatus(\Clarifai\Api\PatchAnnotationsStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAnnotationsStatus',
        $argument,
        ['\Clarifai\Api\PatchAnnotationsStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single annotation.
     * @param \Clarifai\Api\DeleteAnnotationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAnnotation(\Clarifai\Api\DeleteAnnotationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteAnnotation',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple annotations in one request.
     * @param \Clarifai\Api\DeleteAnnotationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAnnotations(\Clarifai\Api\DeleteAnnotationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteAnnotations',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a search over annotation
     * @param \Clarifai\Api\PostAnnotationsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostAnnotationsSearches(\Clarifai\Api\PostAnnotationsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAnnotationsSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Inputs
     * //////////////////////////////////////
     *
     * Get input count per status.
     * @param \Clarifai\Api\GetInputCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInputCount(\Clarifai\Api\GetInputCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetInputCount',
        $argument,
        ['\Clarifai\Api\SingleInputCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Streams all the inputs starting from oldest assets.
     * @param \Clarifai\Api\StreamInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StreamInputs(\Clarifai\Api\StreamInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/StreamInputs',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific input from an app.
     * @param \Clarifai\Api\GetInputSamplesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInputSamples(\Clarifai\Api\GetInputSamplesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetInputSamples',
        $argument,
        ['\Clarifai\Api\MultiInputAnnotationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific input from an app.
     * @param \Clarifai\Api\GetInputRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInput(\Clarifai\Api\GetInputRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetInput',
        $argument,
        ['\Clarifai\Api\SingleInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the inputs.
     * @param \Clarifai\Api\ListInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInputs(\Clarifai\Api\ListInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListInputs',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add an input (or set of inputs) to an app.
     * This call is synchronous if the PostInputsRequest contains exactly one image input. Otherwise,
     * it is asynchronous.
     * @param \Clarifai\Api\PostInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostInputs(\Clarifai\Api\PostInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInputs',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more inputs.
     * @param \Clarifai\Api\PatchInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchInputs(\Clarifai\Api\PatchInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchInputs',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single input asynchronously.
     * @param \Clarifai\Api\DeleteInputRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInput(\Clarifai\Api\DeleteInputRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteInput',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple inputs in one request.
     * This call is asynchronous.
     * @param \Clarifai\Api\DeleteInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInputs(\Clarifai\Api\DeleteInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteInputs',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a search over input
     * @param \Clarifai\Api\PostInputsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostInputsSearches(\Clarifai\Api\PostInputsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInputsSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get predicted outputs from the model.
     * @param \Clarifai\Api\PostModelOutputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostModelOutputs(\Clarifai\Api\PostModelOutputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelOutputs',
        $argument,
        ['\Clarifai\Api\MultiOutputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Models
     * //////////////////////////////////////
     *
     * Get a specific model type.
     * @param \Clarifai\Api\GetModelTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetModelType(\Clarifai\Api\GetModelTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelType',
        $argument,
        ['\Clarifai\Api\SingleModelTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the supported open source licenses in the platform.
     * @param \Clarifai\Api\ListOpenSourceLicensesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListOpenSourceLicenses(\Clarifai\Api\ListOpenSourceLicensesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListOpenSourceLicenses',
        $argument,
        ['\Clarifai\Api\ListOpenSourceLicensesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the model types available in the platform.
     * This MUST be above ListModels so that the /models/types endpoint takes precedence.
     * @param \Clarifai\Api\ListModelTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListModelTypes(\Clarifai\Api\ListModelTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelTypes',
        $argument,
        ['\Clarifai\Api\MultiModelTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific model from an app.
     * @param \Clarifai\Api\GetModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetModel(\Clarifai\Api\GetModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModel',
        $argument,
        ['\Clarifai\Api\SingleModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a the output info for a given model_id or model_id/version_id
     * combo.
     * @param \Clarifai\Api\GetModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetModelOutputInfo(\Clarifai\Api\GetModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelOutputInfo',
        $argument,
        ['\Clarifai\Api\SingleModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the models.
     * @param \Clarifai\Api\ListModelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListModels(\Clarifai\Api\ListModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModels',
        $argument,
        ['\Clarifai\Api\MultiModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search over the models to find one or more you're looking for.
     * This leverage the "body" parameter because we also have page and
     * per_page as url query param variables in this request.
     * @param \Clarifai\Api\PostModelsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostModelsSearches(\Clarifai\Api\PostModelsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelsSearches',
        $argument,
        ['\Clarifai\Api\MultiModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a models to an app.
     * FIXME(zeiler): this should have been a plural response.
     * @param \Clarifai\Api\PostModelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostModels(\Clarifai\Api\PostModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModels',
        $argument,
        ['\Clarifai\Api\SingleModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more models.
     * @param \Clarifai\Api\PatchModelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchModels(\Clarifai\Api\PatchModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModels',
        $argument,
        ['\Clarifai\Api\MultiModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single model.
     * @param \Clarifai\Api\DeleteModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteModel(\Clarifai\Api\DeleteModelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModel',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple models in one request.
     * @param \Clarifai\Api\DeleteModelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteModels(\Clarifai\Api\DeleteModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModels',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the inputs.
     * @param \Clarifai\Api\ListModelInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListModelInputs(\Clarifai\Api\ListModelInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelInputs',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Model versions
     * //////////////////////////////////////
     *
     * Get a specific model from an app.
     * @param \Clarifai\Api\GetModelVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetModelVersion(\Clarifai\Api\GetModelVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelVersion',
        $argument,
        ['\Clarifai\Api\SingleModelVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the models.
     * @param \Clarifai\Api\ListModelVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListModelVersions(\Clarifai\Api\ListModelVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelVersions',
        $argument,
        ['\Clarifai\Api\MultiModelVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * NOTE: inconsistency: do we want this to return a SingleModelResponse?
     *
     * Create a new model version to trigger training of the model.
     * FIXME(zeiler): this should have been a plural response.
     * @param \Clarifai\Api\PostModelVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostModelVersions(\Clarifai\Api\PostModelVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersions',
        $argument,
        ['\Clarifai\Api\SingleModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PatchModelVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchModelVersions(\Clarifai\Api\PatchModelVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModelVersions',
        $argument,
        ['\Clarifai\Api\MultiModelVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single model.
     * @param \Clarifai\Api\DeleteModelVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteModelVersion(\Clarifai\Api\DeleteModelVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModelVersion',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the evaluation metrics for a model version.
     * @param \Clarifai\Api\GetModelVersionMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetModelVersionMetrics(\Clarifai\Api\GetModelVersionMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelVersionMetrics',
        $argument,
        ['\Clarifai\Api\SingleModelVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Run the evaluation metrics for a model version.
     * @param \Clarifai\Api\PostModelVersionMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostModelVersionMetrics(\Clarifai\Api\PostModelVersionMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersionMetrics',
        $argument,
        ['\Clarifai\Api\SingleModelVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Model References
     * //////////////////////////////////////
     *
     * Lists model references tied to a particular model id.
     * @param \Clarifai\Api\ListModelReferencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListModelReferences(\Clarifai\Api\ListModelReferencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelReferences',
        $argument,
        ['\Clarifai\Api\MultiModelReferenceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Model Version Input Examples
     * //////////////////////////////////////
     *
     * @param \Clarifai\Api\GetModelVersionInputExampleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetModelVersionInputExample(\Clarifai\Api\GetModelVersionInputExampleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelVersionInputExample',
        $argument,
        ['\Clarifai\Api\SingleModelVersionInputExampleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListModelVersionInputExamplesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListModelVersionInputExamples(\Clarifai\Api\ListModelVersionInputExamplesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelVersionInputExamples',
        $argument,
        ['\Clarifai\Api\MultiModelVersionInputExampleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Workflows
     * //////////////////////////////////////
     *
     * Get a specific workflow from an app.
     * @param \Clarifai\Api\GetWorkflowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWorkflow(\Clarifai\Api\GetWorkflowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetWorkflow',
        $argument,
        ['\Clarifai\Api\SingleWorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the workflows.
     * @param \Clarifai\Api\ListWorkflowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListWorkflows(\Clarifai\Api\ListWorkflowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListWorkflows',
        $argument,
        ['\Clarifai\Api\MultiWorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a workflow to an app.
     * @param \Clarifai\Api\PostWorkflowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostWorkflows(\Clarifai\Api\PostWorkflowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflows',
        $argument,
        ['\Clarifai\Api\MultiWorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more workflows.
     * @param \Clarifai\Api\PatchWorkflowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchWorkflows(\Clarifai\Api\PatchWorkflowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchWorkflows',
        $argument,
        ['\Clarifai\Api\MultiWorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single workflow.
     * @param \Clarifai\Api\DeleteWorkflowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteWorkflow(\Clarifai\Api\DeleteWorkflowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteWorkflow',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple workflows in one request.
     * @param \Clarifai\Api\DeleteWorkflowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteWorkflows(\Clarifai\Api\DeleteWorkflowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteWorkflows',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Predict using a workflow.
     * @param \Clarifai\Api\PostWorkflowResultsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostWorkflowResults(\Clarifai\Api\PostWorkflowResultsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowResults',
        $argument,
        ['\Clarifai\Api\PostWorkflowResultsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Compare embeddings distances using a workflow
     *
     * @param \Clarifai\Api\PostWorkflowResultsSimilarityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostWorkflowResultsSimilarity(\Clarifai\Api\PostWorkflowResultsSimilarityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowResultsSimilarity',
        $argument,
        ['\Clarifai\Api\PostWorkflowResultsSimilarityResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Workflow Versions
     * //////////////////////////////////////
     *
     * List workflow versions.
     * @param \Clarifai\Api\ListWorkflowVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListWorkflowVersions(\Clarifai\Api\ListWorkflowVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListWorkflowVersions',
        $argument,
        ['\Clarifai\Api\MultiWorkflowVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get single workflow version.
     * @param \Clarifai\Api\GetWorkflowVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetWorkflowVersion(\Clarifai\Api\GetWorkflowVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetWorkflowVersion',
        $argument,
        ['\Clarifai\Api\SingleWorkflowVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete workflow versions.
     * @param \Clarifai\Api\DeleteWorkflowVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteWorkflowVersions(\Clarifai\Api\DeleteWorkflowVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteWorkflowVersions',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch workflow versions.
     * @param \Clarifai\Api\PatchWorkflowVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchWorkflowVersions(\Clarifai\Api\PatchWorkflowVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchWorkflowVersions',
        $argument,
        ['\Clarifai\Api\MultiWorkflowVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * API Keys
     * //////////////////////////////////////
     *
     * Get a specific key from an app.
     * @param \Clarifai\Api\GetKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetKey(\Clarifai\Api\GetKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetKey',
        $argument,
        ['\Clarifai\Api\SingleKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the keys.
     * @param \Clarifai\Api\ListKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListKeys(\Clarifai\Api\ListKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListKeys',
        $argument,
        ['\Clarifai\Api\MultiKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List keys by app_id
     * @param \Clarifai\Api\ListAppKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAppKeys(\Clarifai\Api\ListAppKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAppKeys',
        $argument,
        ['\Clarifai\Api\MultiKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search over the keys to find one or more you're looking for.
     * This leverage the "body" parameter because we also have page and
     * per_page as url query param variables in this request.
     * @param \Clarifai\Api\DeleteKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteKey(\Clarifai\Api\DeleteKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteKey',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a key to an app.
     * @param \Clarifai\Api\PostKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostKeys(\Clarifai\Api\PostKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostKeys',
        $argument,
        ['\Clarifai\Api\MultiKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more keys.
     * @param \Clarifai\Api\PatchKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchKeys(\Clarifai\Api\PatchKeysRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchKeys',
        $argument,
        ['\Clarifai\Api\MultiKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * API Keys in the public API -- request is itself Key authorized, and will tell
     * the user the scopes/access of the key/credential they're providing, as computed by
     * our authorizer:
     * @param \Clarifai\Api\MyScopesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function MyScopes(\Clarifai\Api\MyScopesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/MyScopes',
        $argument,
        ['\Clarifai\Api\MultiScopeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all auth scopes available to me as a user.
     * @param \Clarifai\Api\ListScopesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListScopes(\Clarifai\Api\ListScopesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListScopes',
        $argument,
        ['\Clarifai\Api\MultiScopeDepsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Apps
     * //////////////////////////////////////
     *
     * Get a specific app from an app.
     * @param \Clarifai\Api\GetAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetApp(\Clarifai\Api\GetAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetApp',
        $argument,
        ['\Clarifai\Api\SingleAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the apps.
     * @param \Clarifai\Api\ListAppsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListApps(\Clarifai\Api\ListAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListApps',
        $argument,
        ['\Clarifai\Api\MultiAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search over the apps to find one or more you're looking for.
     * This leverage the "body" parameter because we also have page and
     * per_page as url query param variables in this request.
     * @param \Clarifai\Api\DeleteAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteApp(\Clarifai\Api\DeleteAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteApp',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a app to an app.
     * This needs to load the default workflow to make a copy, validating all the models in it, and
     * then writing the new workflow back to this new app.
     * @param \Clarifai\Api\PostAppsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostApps(\Clarifai\Api\PostAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostApps',
        $argument,
        ['\Clarifai\Api\MultiAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more apps.
     * @param \Clarifai\Api\PatchAppsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchApps(\Clarifai\Api\PatchAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchApps',
        $argument,
        ['\Clarifai\Api\MultiAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search over the applications to find one or more you're looking for.
     * @param \Clarifai\Api\PostAppsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostAppsSearches(\Clarifai\Api\PostAppsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAppsSearches',
        $argument,
        ['\Clarifai\Api\MultiAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Password
     * //////////////////////////////////////
     *
     * Validate new password in real-time for a user
     * @param \Clarifai\Api\PostValidatePasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostValidatePassword(\Clarifai\Api\PostValidatePasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostValidatePassword',
        $argument,
        ['\Clarifai\Api\SinglePasswordValidationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Searches
     * //////////////////////////////////////
     *
     * Get a saved search.
     * @param \Clarifai\Api\GetSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetSearch(\Clarifai\Api\GetSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetSearch',
        $argument,
        ['\Clarifai\Api\SingleSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all saved searches.
     * @param \Clarifai\Api\ListSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListSearches(\Clarifai\Api\ListSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a new search and optionally save it.
     * @param \Clarifai\Api\PostSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostSearches(\Clarifai\Api\PostSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a previously saved search.
     * @param \Clarifai\Api\PostSearchesByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostSearchesByID(\Clarifai\Api\PostSearchesByIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostSearchesByID',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Evaluate the results of two search requests
     * @param \Clarifai\Api\PostAnnotationSearchMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostAnnotationSearchMetrics(\Clarifai\Api\PostAnnotationSearchMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAnnotationSearchMetrics',
        $argument,
        ['\Clarifai\Api\MultiAnnotationSearchMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the evaluation results between two search requests
     * @param \Clarifai\Api\GetAnnotationSearchMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAnnotationSearchMetrics(\Clarifai\Api\GetAnnotationSearchMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetAnnotationSearchMetrics',
        $argument,
        ['\Clarifai\Api\MultiAnnotationSearchMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List the evaluation results between two search requests
     * @param \Clarifai\Api\ListAnnotationSearchMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAnnotationSearchMetrics(\Clarifai\Api\ListAnnotationSearchMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAnnotationSearchMetrics',
        $argument,
        ['\Clarifai\Api\MultiAnnotationSearchMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\DeleteAnnotationSearchMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAnnotationSearchMetrics(\Clarifai\Api\DeleteAnnotationSearchMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteAnnotationSearchMetrics',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a saved search.
     * @param \Clarifai\Api\DeleteSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteSearch(\Clarifai\Api\DeleteSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteSearch',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Status Codes
     * //////////////////////////////////////
     *
     * List all status codes.
     * @param \Clarifai\Api\ListStatusCodesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListStatusCodes(\Clarifai\Api\ListStatusCodesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListStatusCodes',
        $argument,
        ['\Clarifai\Api\MultiStatusCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get more details for a status code.
     * @param \Clarifai\Api\GetStatusCodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetStatusCode(\Clarifai\Api\GetStatusCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetStatusCode',
        $argument,
        ['\Clarifai\Api\SingleStatusCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * App Sharing
     * //////////////////////////////////////
     *
     * owner list users who the app is shared with
     * @param \Clarifai\Api\ListCollaboratorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListCollaborators(\Clarifai\Api\ListCollaboratorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListCollaborators',
        $argument,
        ['\Clarifai\Api\MultiCollaboratorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * add collaborators to an app.
     * @param \Clarifai\Api\PostCollaboratorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostCollaborators(\Clarifai\Api\PostCollaboratorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostCollaborators',
        $argument,
        ['\Clarifai\Api\MultiCollaboratorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch existing collaborators.
     * @param \Clarifai\Api\PatchCollaboratorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchCollaborators(\Clarifai\Api\PatchCollaboratorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchCollaborators',
        $argument,
        ['\Clarifai\Api\MultiCollaboratorsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete existing collaborators.
     * @param \Clarifai\Api\DeleteCollaboratorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteCollaborators(\Clarifai\Api\DeleteCollaboratorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteCollaborators',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Collaboration includes the app user are invitied to work on
     * @param \Clarifai\Api\ListCollaborationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListCollaborations(\Clarifai\Api\ListCollaborationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListCollaborations',
        $argument,
        ['\Clarifai\Api\MultiCollaborationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * App duplication
     * //////////////////////////////////////
     *
     * start to duplicate an app which copies all the inputs, annotations, models, concepts etc. to a new app.
     * this is an async process, you should use ListAppDuplications or GetAppDuplication to check the status.
     * @param \Clarifai\Api\PostAppDuplicationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostAppDuplications(\Clarifai\Api\PostAppDuplicationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAppDuplications',
        $argument,
        ['\Clarifai\Api\MultiAppDuplicationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * list all the app duplications user triggers
     * @param \Clarifai\Api\ListAppDuplicationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAppDuplications(\Clarifai\Api\ListAppDuplicationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAppDuplications',
        $argument,
        ['\Clarifai\Api\MultiAppDuplicationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * get the app duplication status
     * @param \Clarifai\Api\GetAppDuplicationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetAppDuplication(\Clarifai\Api\GetAppDuplicationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetAppDuplication',
        $argument,
        ['\Clarifai\Api\SingleAppDuplicationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Tasks
     * //////////////////////////////////////
     *
     * Add tasks to an app.
     * @param \Clarifai\Api\PostTasksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostTasks(\Clarifai\Api\PostTasksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostTasks',
        $argument,
        ['\Clarifai\Api\MultiTaskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Task annotation count
     * @param \Clarifai\Api\GetTaskCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTaskAnnotationCount(\Clarifai\Api\GetTaskCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetTaskAnnotationCount',
        $argument,
        ['\Clarifai\Api\SingleTaskCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Task Input count
     * @param \Clarifai\Api\GetTaskCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTaskInputCount(\Clarifai\Api\GetTaskCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetTaskInputCount',
        $argument,
        ['\Clarifai\Api\SingleTaskCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific task from an app.
     * @param \Clarifai\Api\GetTaskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTask(\Clarifai\Api\GetTaskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetTask',
        $argument,
        ['\Clarifai\Api\SingleTaskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List tasks from an app.
     * @param \Clarifai\Api\ListTasksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTasks(\Clarifai\Api\ListTasksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListTasks',
        $argument,
        ['\Clarifai\Api\MultiTaskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more tasks.
     * @param \Clarifai\Api\PatchTasksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchTasks(\Clarifai\Api\PatchTasksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchTasks',
        $argument,
        ['\Clarifai\Api\MultiTaskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple tasks in one request.
     * @param \Clarifai\Api\DeleteTasksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteTasks(\Clarifai\Api\DeleteTasksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteTasks',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Collectors
     * //////////////////////////////////////
     *
     * Add a list of Collectors to an app.
     * In the handler of this endpoint we also check for all the scopes of the  POST /inputs
     * endpoint.
     * Those current scopes are listed here as a hard requirement.
     * They are needed when adding the collectors just so we now that you have permission with
     * that key at least to do the writing to this app with POST /inputs.
     * @param \Clarifai\Api\PostCollectorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostCollectors(\Clarifai\Api\PostCollectorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostCollectors',
        $argument,
        ['\Clarifai\Api\MultiCollectorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific collector from an app.
     * @param \Clarifai\Api\GetCollectorRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetCollector(\Clarifai\Api\GetCollectorRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetCollector',
        $argument,
        ['\Clarifai\Api\SingleCollectorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the collectors.
     * @param \Clarifai\Api\ListCollectorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListCollectors(\Clarifai\Api\ListCollectorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListCollectors',
        $argument,
        ['\Clarifai\Api\MultiCollectorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more collectors.
     * @param \Clarifai\Api\PatchCollectorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PatchCollectors(\Clarifai\Api\PatchCollectorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchCollectors',
        $argument,
        ['\Clarifai\Api\MultiCollectorResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple collectors in one request.
     * This call is asynchronous. Use DeleteCollector if you want a synchronous version.
     * @param \Clarifai\Api\DeleteCollectorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteCollectors(\Clarifai\Api\DeleteCollectorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteCollectors',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////////////////////////////////////////////
     * Stats Collection Endpoints.
     * //////////////////////////////////////////////////////////////////////////////
     *
     * @param \Clarifai\Api\PostStatValuesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostStatValues(\Clarifai\Api\PostStatValuesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostStatValues',
        $argument,
        ['\Clarifai\Api\MultiStatValueResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostStatValuesAggregateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostStatValuesAggregate(\Clarifai\Api\PostStatValuesAggregateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostStatValuesAggregate',
        $argument,
        ['\Clarifai\Api\MultiStatValueAggregateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     * Trending Metrics
     * //////////////////////////////////////
     *
     * Increase the view metric for a detail view
     * @param \Clarifai\Api\PostTrendingMetricsViewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostTrendingMetricsView(\Clarifai\Api\PostTrendingMetricsViewRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostTrendingMetricsView',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List the view metrics for a detail view
     * @param \Clarifai\Api\ListTrendingMetricsViewsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListTrendingMetricsViews(\Clarifai\Api\ListTrendingMetricsViewsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListTrendingMetricsViews',
        $argument,
        ['\Clarifai\Api\MultiTrendingMetricsViewResponse', 'decode'],
        $metadata, $options);
    }

}
