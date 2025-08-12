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
 * For the cl_depending_scopes in this file, see the docstring that explains the two types of
 * scope dependencies in clarifai/auth/scope/scope.proto
 *
 * For new endpoints you should typically only add the fully qualified url that includes the user_id
 * and app_id.
 *
 * You should typicaly use KeyAuth (the most restricted auth type) for new endpoints unless they are
 * for resources not contained in an app or need access from things across apps. See more about the
 * auth types here:
 * https://clarifai.atlassian.net/wiki/spaces/TT/pages/1821409336/API+Authorizers+and+Resource+Access
 *
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
     * List concept relations between concepts in the platform.
     * MUST be above ListConcepts so that if concept_id is empty this will still match
     * /concepts/relations to list all the concept relations in the app.
     * @param \Clarifai\Api\ListConceptRelationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function DeleteConceptRelations(\Clarifai\Api\DeleteConceptRelationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteConceptRelations',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the concepts with their positive and negative counts
     * @param \Clarifai\Api\GetConceptCountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function ListConcepts(\Clarifai\Api\ListConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListConcepts',
        $argument,
        ['\Clarifai\Api\MultiConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List models concepts.
     * @param \Clarifai\Api\ListModelConceptsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListModelConcepts(\Clarifai\Api\ListModelConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelConcepts',
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PatchConcepts(\Clarifai\Api\PatchConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchConcepts',
        $argument,
        ['\Clarifai\Api\MultiConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific concept from an app.
     * @param \Clarifai\Api\GetConceptLanguageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function ListConceptLanguages(\Clarifai\Api\ListConceptLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListConceptLanguages',
        $argument,
        ['\Clarifai\Api\MultiConceptLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new translation for this concept.
     * @param \Clarifai\Api\PostConceptLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PatchConceptLanguages(\Clarifai\Api\PatchConceptLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchConceptLanguages',
        $argument,
        ['\Clarifai\Api\MultiConceptLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all domain graphs.
     * @param \Clarifai\Api\ListKnowledgeGraphsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PostKnowledgeGraphs(\Clarifai\Api\PostKnowledgeGraphsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostKnowledgeGraphs',
        $argument,
        ['\Clarifai\Api\MultiKnowledgeGraphResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific annotation from an app.
     * @param \Clarifai\Api\GetAnnotationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * Deprecated: Use PutTaskAssignments to update task annotations.
     *   For example, you can use PutTaskAssignments with action REVIEW_APPROVE
     *   to approve task assignments and associated annotations in bulk.
     * @param \Clarifai\Api\PatchAnnotationsStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function DeleteAnnotations(\Clarifai\Api\DeleteAnnotationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteAnnotations',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the annotation tracks.
     * @param \Clarifai\Api\ListAnnotationTracksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAnnotationTracks(\Clarifai\Api\ListAnnotationTracksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAnnotationTracks',
        $argument,
        ['\Clarifai\Api\MultiAnnotationTrackResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post annotation tracks.
     * @param \Clarifai\Api\PostAnnotationTracksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAnnotationTracks(\Clarifai\Api\PostAnnotationTracksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAnnotationTracks',
        $argument,
        ['\Clarifai\Api\MultiAnnotationTrackResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more annotation tracks.
     * @param \Clarifai\Api\PatchAnnotationTracksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchAnnotationTracks(\Clarifai\Api\PatchAnnotationTracksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAnnotationTracks',
        $argument,
        ['\Clarifai\Api\MultiAnnotationTrackResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple annotation tracks in one request.
     * @param \Clarifai\Api\DeleteAnnotationTracksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAnnotationTracks(\Clarifai\Api\DeleteAnnotationTracksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteAnnotationTracks',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch saved annotations searches by ids.
     * @param \Clarifai\Api\PatchAnnotationsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchAnnotationsSearches(\Clarifai\Api\PatchAnnotationsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAnnotationsSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a search over annotations
     * @param \Clarifai\Api\PostAnnotationsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAnnotationsSearches(\Clarifai\Api\PostAnnotationsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAnnotationsSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAnnotationWorkers lists users, models, and workflows (collectively
     * known as "workers") that have added annotations to the application.
     * @param \Clarifai\Api\ListAnnotationWorkersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAnnotationWorkers(\Clarifai\Api\ListAnnotationWorkersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAnnotationWorkers',
        $argument,
        ['\Clarifai\Api\MultiWorkerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get input count per status.
     * @param \Clarifai\Api\GetInputCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function StreamInputs(\Clarifai\Api\StreamInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/StreamInputs',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetInputSamplesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function GetInput(\Clarifai\Api\GetInputRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetInput',
        $argument,
        ['\Clarifai\Api\SingleInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a MPEG-DASH manifest for video-type inputs that were added via PostInputs and successfully processed
     * Experimental. Manifest is used by browser and desktop clients that implement an efficient streaming playback
     * This means client can switch between low-resolution and high-resolution video streams
     * Depending on network bandwidth or user's preference
     * This also means that reencoded video streams are reencoded in a uniform way, not relying on original format
     * Alternative to MPEG-dash is to stream original file with byte-range header
     * @param \Clarifai\Api\GetVideoManifestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInputVideoManifest(\Clarifai\Api\GetVideoManifestRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetInputVideoManifest',
        $argument,
        ['\Clarifai\Api\GetVideoManifestResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the inputs.
     * @param \Clarifai\Api\ListInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInputs(\Clarifai\Api\ListInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListInputs',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostInputs adds one or more inputs to the app.
     * Takes a list of image/video/audio/text URLs, image/video/audio bytes or raw text
     * Optionally, include concepts or dataset ids to link them
     * Optionally, include metadata for search
     * Note that inputs processing is asynchronous process
     * See ListInputs, StreamInputs or PostInputSearches to list results
     * @param \Clarifai\Api\PostInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function DeleteInputs(\Clarifai\Api\DeleteInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteInputs',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch saved inputs searches by ids.
     * @param \Clarifai\Api\PatchInputsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchInputsSearches(\Clarifai\Api\PatchInputsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchInputsSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a search over inputs
     * @param \Clarifai\Api\PostInputsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PostModelOutputs(\Clarifai\Api\PostModelOutputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelOutputs',
        $argument,
        ['\Clarifai\Api\MultiOutputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * TODO(zeiler): will need to
     * Single request but streaming responses.
     * @param \Clarifai\Api\PostModelOutputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function GenerateModelOutputs(\Clarifai\Api\PostModelOutputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/clarifai.api.V2/GenerateModelOutputs',
        $argument,
        ['\Clarifai\Api\MultiOutputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Stream of requests and stream of responses
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function StreamModelOutputs($metadata = [], $options = []) {
        return $this->_bidiRequest('/clarifai.api.V2/StreamModelOutputs',
        ['\Clarifai\Api\MultiOutputResponse','decode'],
        $metadata, $options);
    }

    /**
     * List all the datasets.
     * @param \Clarifai\Api\ListDatasetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDatasets(\Clarifai\Api\ListDatasetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListDatasets',
        $argument,
        ['\Clarifai\Api\MultiDatasetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific dataset.
     * @param \Clarifai\Api\GetDatasetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDataset(\Clarifai\Api\GetDatasetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetDataset',
        $argument,
        ['\Clarifai\Api\SingleDatasetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add datasets to an app.
     * The process is atomic, i.e. either all or no datasets are added.
     * If there is an error for one dataset,
     * the process will stop, revert the transaction and return the error.
     * @param \Clarifai\Api\PostDatasetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostDatasets(\Clarifai\Api\PostDatasetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostDatasets',
        $argument,
        ['\Clarifai\Api\MultiDatasetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more datasets.
     * The process is atomic, i.e. either all or no datasets are patched.
     * If there is an error for one dataset,
     * the process will stop, revert the transaction and return the error.
     * @param \Clarifai\Api\PatchDatasetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchDatasets(\Clarifai\Api\PatchDatasetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchDatasets',
        $argument,
        ['\Clarifai\Api\MultiDatasetResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete one or more datasets in a single request.
     * @param \Clarifai\Api\DeleteDatasetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDatasets(\Clarifai\Api\DeleteDatasetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteDatasets',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the dataset inputs in a dataset.
     * @param \Clarifai\Api\ListDatasetInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDatasetInputs(\Clarifai\Api\ListDatasetInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListDatasetInputs',
        $argument,
        ['\Clarifai\Api\MultiDatasetInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific dataset input.
     * @param \Clarifai\Api\GetDatasetInputRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDatasetInput(\Clarifai\Api\GetDatasetInputRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetDatasetInput',
        $argument,
        ['\Clarifai\Api\SingleDatasetInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add dataset inputs to a dataset.
     * The process is not atomic, i.e. if there are errors with some dataset
     * inputs, others might still be added. The response reports
     *   - SUCCESS if all dataset inputs were added,
     *   - MIXED_STATUS if only some dataset inputs were added, and
     *   - FAILURE if no dataset inputs were added.
     * Each individual dataset input in the response has the status set to
     * indicate if it was successful or if there was an error.
     * @param \Clarifai\Api\PostDatasetInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostDatasetInputs(\Clarifai\Api\PostDatasetInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostDatasetInputs',
        $argument,
        ['\Clarifai\Api\MultiDatasetInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete one or more dataset inputs in a single request.
     * @param \Clarifai\Api\DeleteDatasetInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDatasetInputs(\Clarifai\Api\DeleteDatasetInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteDatasetInputs',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the dataset versions.
     * @param \Clarifai\Api\ListDatasetVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDatasetVersions(\Clarifai\Api\ListDatasetVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListDatasetVersions',
        $argument,
        ['\Clarifai\Api\MultiDatasetVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific dataset version.
     * @param \Clarifai\Api\GetDatasetVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDatasetVersion(\Clarifai\Api\GetDatasetVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetDatasetVersion',
        $argument,
        ['\Clarifai\Api\SingleDatasetVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListDatasetVersionMetricsGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDatasetVersionMetricsGroups(\Clarifai\Api\ListDatasetVersionMetricsGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListDatasetVersionMetricsGroups',
        $argument,
        ['\Clarifai\Api\MultiDatasetVersionMetricsGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add dataset versions to a dataset.
     * @param \Clarifai\Api\PostDatasetVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostDatasetVersions(\Clarifai\Api\PostDatasetVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostDatasetVersions',
        $argument,
        ['\Clarifai\Api\MultiDatasetVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more dataset versions.
     * @param \Clarifai\Api\PatchDatasetVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchDatasetVersions(\Clarifai\Api\PatchDatasetVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchDatasetVersions',
        $argument,
        ['\Clarifai\Api\MultiDatasetVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete one or more dataset versions in a single request.
     * @param \Clarifai\Api\DeleteDatasetVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDatasetVersions(\Clarifai\Api\DeleteDatasetVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteDatasetVersions',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create export of a dataset version.
     * @param \Clarifai\Api\PutDatasetVersionExportsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PutDatasetVersionExports(\Clarifai\Api\PutDatasetVersionExportsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PutDatasetVersionExports',
        $argument,
        ['\Clarifai\Api\MultiDatasetVersionExportResponse', 'decode'],
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function ListModels(\Clarifai\Api\ListModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModels',
        $argument,
        ['\Clarifai\Api\MultiModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List the resource counts for the app.
     * @param \Clarifai\Api\GetResourceCountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetResourceCounts(\Clarifai\Api\GetResourceCountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetResourceCounts',
        $argument,
        ['\Clarifai\Api\GetResourceCountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search over the models to find one or more you're looking for.
     * This leverage the "body" parameter because we also have page and
     * per_page as url query param variables in this request.
     * @param \Clarifai\Api\PostModelsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @param \Clarifai\Api\PostModelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PatchModels(\Clarifai\Api\PatchModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModels',
        $argument,
        ['\Clarifai\Api\MultiModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more models ids.
     * @param \Clarifai\Api\PatchModelIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchModelIds(\Clarifai\Api\PatchModelIdsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModelIds',
        $argument,
        ['\Clarifai\Api\MultiModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single model.
     * @param \Clarifai\Api\DeleteModelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function DeleteModels(\Clarifai\Api\DeleteModelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModels',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update model check consents
     * @param \Clarifai\Api\PatchModelCheckConsentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchModelCheckConsents(\Clarifai\Api\PatchModelCheckConsentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModelCheckConsents',
        $argument,
        ['\Clarifai\Api\MultiModelCheckConsentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update model toolkits tags
     * @param \Clarifai\Api\PatchModelToolkitsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchModelToolkits(\Clarifai\Api\PatchModelToolkitsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModelToolkits',
        $argument,
        ['\Clarifai\Api\MultiModelToolkitResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update model use_cases tags
     * @param \Clarifai\Api\PatchModelUseCasesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchModelUseCases(\Clarifai\Api\PatchModelUseCasesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModelUseCases',
        $argument,
        ['\Clarifai\Api\MultiModelUseCaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update model languages tags
     * @param \Clarifai\Api\PatchModelLanguagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchModelLanguages(\Clarifai\Api\PatchModelLanguagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModelLanguages',
        $argument,
        ['\Clarifai\Api\MultiModelLanguageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Unmaintained and ideally replaced with usage of datasets
     *   The server may refuse to accept requests to this endpoint.
     * @param \Clarifai\Api\ListModelInputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListModelInputs(\Clarifai\Api\ListModelInputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelInputs',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific model from an app.
     * @param \Clarifai\Api\GetModelVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function ListModelVersions(\Clarifai\Api\ListModelVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelVersions',
        $argument,
        ['\Clarifai\Api\MultiModelVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * TODO(zeiler): in future we can add endpoints like this for listing runners for a specific model
     * List all the runners currently handling work for the given model.
     * By default this lists the runners available in your account as well as all the orgs you have
     * access to.
     * Could have RunnerSelector to break it down by Nodepool or Deployment.
     * Addition filters on the request can select specific user/org to list from or nodepool.
     * rpc ListModelVersionRunners (ListModelVersionRunnersRequest) returns (MultiRunnerResponse) {
     *   option (google.api.http) = {
     *     get: "/v2/users/{user_app_id.user_id}/apps/{user_app_id.app_id}/models/{model_id}/versions/{version_id}/runners"
     *   };
     *   option (clarifai.auth.util.cl_auth_type) = KeyAuth;
     *   option (clarifai.auth.util.cl_depending_scopes) = Apps_Get;
     *   option (clarifai.auth.util.cl_depending_scopes) = Concepts_Get;
     *   option (clarifai.auth.util.cl_depending_scopes) = Models_Get;
     *   option (clarifai.auth.util.cl_depending_scopes) = Runners_Get;
     * }
     *
     * @param \Clarifai\Api\PostWorkflowVersionsUnPublishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostWorkflowVersionsUnPublish(\Clarifai\Api\PostWorkflowVersionsUnPublishRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowVersionsUnPublish',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostWorkflowVersionsPublishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostWorkflowVersionsPublish(\Clarifai\Api\PostWorkflowVersionsPublishRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowVersionsPublish',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostModelVersionsPublish
     * @param \Clarifai\Api\PostModelVersionsPublishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelVersionsPublish(\Clarifai\Api\PostModelVersionsPublishRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersionsPublish',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostModelVersionsUnPublish
     * @param \Clarifai\Api\PostModelVersionsUnPublishRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelVersionsUnPublish(\Clarifai\Api\PostModelVersionsUnPublishRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersionsUnPublish',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * NOTE: inconsistency: do we want this to return a SingleModelResponse?
     *
     * Create a new model version to trigger training of the model.
     * @param \Clarifai\Api\PostModelVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelVersions(\Clarifai\Api\PostModelVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersions',
        $argument,
        ['\Clarifai\Api\SingleModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PatchModelVersions
     * @param \Clarifai\Api\PatchModelVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function DeleteModelVersion(\Clarifai\Api\DeleteModelVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModelVersion',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * This is a streaming endpoint, the request has a field, upload_data, which can either be the config for the upload or the actual data to upload.
     * The config must be sent first before the model_bytes can be uploaded.
     * Once the config has been sent, the server will respond with a confirmation containing the model_version_id.
     * This is so that if your upload is interrupted, you can resume the upload by sending the config again with the model_version_id specified for your model_version.
     * The actual upload will be done via a multipart upload, the latest successful part_id will be sent from the server in the response to the model_bytes.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function PostModelVersionsUpload($metadata = [], $options = []) {
        return $this->_bidiRequest('/clarifai.api.V2/PostModelVersionsUpload',
        ['\Clarifai\Api\PostModelVersionsUploadResponse','decode'],
        $metadata, $options);
    }

    /**
     * Kicks off conversion from the old Triton model format to the new Docker model format.
     * @param \Clarifai\Api\PostModelMigrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelMigration(\Clarifai\Api\PostModelMigrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelMigration',
        $argument,
        ['\Clarifai\Api\SingleModelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Export a model
     *
     * Export a model
     * @param \Clarifai\Api\PutModelVersionExportsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PutModelVersionExports(\Clarifai\Api\PutModelVersionExportsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PutModelVersionExports',
        $argument,
        ['\Clarifai\Api\SingleModelVersionExportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetModelVersionExport
     * @param \Clarifai\Api\GetModelVersionExportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetModelVersionExport(\Clarifai\Api\GetModelVersionExportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelVersionExport',
        $argument,
        ['\Clarifai\Api\SingleModelVersionExportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the evaluation metrics for a model version.
     * Deprecated: Use GetEvaluation instead
     *   The server may refuse to accept requests to this endpoint.
     * @param \Clarifai\Api\GetModelVersionMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetModelVersionMetrics(\Clarifai\Api\GetModelVersionMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelVersionMetrics',
        $argument,
        ['\Clarifai\Api\SingleModelVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated, use PostEvaluations instead
     * Run the evaluation metrics for a model version.
     * @param \Clarifai\Api\PostModelVersionMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelVersionMetrics(\Clarifai\Api\PostModelVersionMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersionMetrics',
        $argument,
        ['\Clarifai\Api\SingleModelVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated, use PostEvaluations instead
     * @param \Clarifai\Api\PostModelVersionEvaluationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelVersionEvaluations(\Clarifai\Api\PostModelVersionEvaluationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersionEvaluations',
        $argument,
        ['\Clarifai\Api\MultiEvalMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated, use GetEvaluation instead
     * List the evaluation metrics for a model version.
     * @param \Clarifai\Api\ListModelVersionEvaluationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListModelVersionEvaluations(\Clarifai\Api\ListModelVersionEvaluationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelVersionEvaluations',
        $argument,
        ['\Clarifai\Api\MultiEvalMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated, use GetEvaluation instead
     * Get an evaluation metrics for a model version.
     * @param \Clarifai\Api\GetModelVersionEvaluationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetModelVersionEvaluation(\Clarifai\Api\GetModelVersionEvaluationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelVersionEvaluation',
        $argument,
        ['\Clarifai\Api\SingleEvalMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostEvaluationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostEvaluations(\Clarifai\Api\PostEvaluationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostEvaluations',
        $argument,
        ['\Clarifai\Api\MultiEvalMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListEvaluationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEvaluations(\Clarifai\Api\ListEvaluationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListEvaluations',
        $argument,
        ['\Clarifai\Api\MultiEvalMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetEvaluationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEvaluation(\Clarifai\Api\GetEvaluationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetEvaluation',
        $argument,
        ['\Clarifai\Api\SingleEvalMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists model references tied to a particular model id.
     * @param \Clarifai\Api\ListModelReferencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListModelReferences(\Clarifai\Api\ListModelReferencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModelReferences',
        $argument,
        ['\Clarifai\Api\MultiModelReferenceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetModelVersionInputExample
     * @param \Clarifai\Api\GetModelVersionInputExampleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetModelVersionInputExample(\Clarifai\Api\GetModelVersionInputExampleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModelVersionInputExample',
        $argument,
        ['\Clarifai\Api\SingleModelVersionInputExampleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListModelVersionInputExamples
     * @param \Clarifai\Api\ListModelVersionInputExamplesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * Note(zeiler): the order of the workflows that are returned from this endpoint
     * may be different than the order in which the user provides them. This is because
     * we reorder by a sort that optimizes for performance of the graph and its dependencies.
     * When using the workflow in any future call the order returned by this endpoint
     * will be used.
     * @param \Clarifai\Api\PostWorkflowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PatchWorkflows(\Clarifai\Api\PatchWorkflowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchWorkflows',
        $argument,
        ['\Clarifai\Api\MultiWorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more workflows ids.
     * @param \Clarifai\Api\PatchWorkflowIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchWorkflowIds(\Clarifai\Api\PatchWorkflowIdsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchWorkflowIds',
        $argument,
        ['\Clarifai\Api\MultiWorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single workflow.
     * @param \Clarifai\Api\DeleteWorkflowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PostWorkflowResults(\Clarifai\Api\PostWorkflowResultsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowResults',
        $argument,
        ['\Clarifai\Api\PostWorkflowResultsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List workflow versions.
     * @param \Clarifai\Api\ListWorkflowVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PatchWorkflowVersions(\Clarifai\Api\PatchWorkflowVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchWorkflowVersions',
        $argument,
        ['\Clarifai\Api\MultiWorkflowVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific key from an app.
     * @param \Clarifai\Api\GetKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function MyScopes(\Clarifai\Api\MyScopesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/MyScopes',
        $argument,
        ['\Clarifai\Api\MultiScopeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\MyScopesUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MyScopesUser(\Clarifai\Api\MyScopesUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/MyScopesUser',
        $argument,
        ['\Clarifai\Api\MultiScopeUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\MyScopesRootRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MyScopesRoot(\Clarifai\Api\MyScopesRootRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/MyScopesRoot',
        $argument,
        ['\Clarifai\Api\MultiScopeRootResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all auth scopes available to me as a user.
     * @param \Clarifai\Api\ListScopesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListScopes(\Clarifai\Api\ListScopesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListScopes',
        $argument,
        ['\Clarifai\Api\MultiScopeDepsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific app from an app.
     * @param \Clarifai\Api\GetAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function PatchApps(\Clarifai\Api\PatchAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchApps',
        $argument,
        ['\Clarifai\Api\MultiAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Allows to Patch only the below fields in one or more apps.
     * Allowed fields are notes, description and image
     * @param \Clarifai\Api\PatchAppsDetailsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchAppsDetails(\Clarifai\Api\PatchAppsDetailsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAppsDetails',
        $argument,
        ['\Clarifai\Api\MultiAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch apps ids.
     * @param \Clarifai\Api\PatchAppsIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchAppsIds(\Clarifai\Api\PatchAppsIdsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAppsIds',
        $argument,
        ['\Clarifai\Api\MultiAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one app.
     * @param \Clarifai\Api\PatchAppRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchApp(\Clarifai\Api\PatchAppRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchApp',
        $argument,
        ['\Clarifai\Api\SingleAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search over the applications to find one or more you're looking for.
     * @param \Clarifai\Api\PostAppsSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAppsSearches(\Clarifai\Api\PostAppsSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAppsSearches',
        $argument,
        ['\Clarifai\Api\MultiAppResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get user information
     * @param \Clarifai\Api\GetUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUser(\Clarifai\Api\GetUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetUser',
        $argument,
        ['\Clarifai\Api\SingleUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Validate new password in real-time for a user
     * @param \Clarifai\Api\PostValidatePasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostValidatePassword(\Clarifai\Api\PostValidatePasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostValidatePassword',
        $argument,
        ['\Clarifai\Api\SinglePasswordValidationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a saved legacy search.
     * @param \Clarifai\Api\GetSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSearch(\Clarifai\Api\GetSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetSearch',
        $argument,
        ['\Clarifai\Api\SingleSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all saved legacy searches.
     * @param \Clarifai\Api\ListSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSearches(\Clarifai\Api\ListSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch saved legacy searches by ids.
     * @param \Clarifai\Api\PatchSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchSearches(\Clarifai\Api\PatchSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a new search and optionally save it.
     *
     * Deprecated: Use PostInputsSearches or PostAnnotationsSearches instead.
     *  The server may refuse to accept requests to this endpoint.
     * @param \Clarifai\Api\PostSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostSearches(\Clarifai\Api\PostSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostSearches',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Execute a previously saved legacy search.
     * @param \Clarifai\Api\PostSearchesByIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function ListAnnotationSearchMetrics(\Clarifai\Api\ListAnnotationSearchMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAnnotationSearchMetrics',
        $argument,
        ['\Clarifai\Api\MultiAnnotationSearchMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteAnnotationSearchMetrics
     * @param \Clarifai\Api\DeleteAnnotationSearchMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function DeleteSearch(\Clarifai\Api\DeleteSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteSearch',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the annotation filters.
     * @param \Clarifai\Api\ListAnnotationFiltersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAnnotationFilters(\Clarifai\Api\ListAnnotationFiltersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAnnotationFilters',
        $argument,
        ['\Clarifai\Api\MultiAnnotationFilterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific annotation filter.
     * @param \Clarifai\Api\GetAnnotationFilterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAnnotationFilter(\Clarifai\Api\GetAnnotationFilterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetAnnotationFilter',
        $argument,
        ['\Clarifai\Api\SingleAnnotationFilterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add annotation filters.
     * @param \Clarifai\Api\PostAnnotationFiltersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAnnotationFilters(\Clarifai\Api\PostAnnotationFiltersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAnnotationFilters',
        $argument,
        ['\Clarifai\Api\MultiAnnotationFilterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more annotation filters.
     * @param \Clarifai\Api\PatchAnnotationFiltersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchAnnotationFilters(\Clarifai\Api\PatchAnnotationFiltersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAnnotationFilters',
        $argument,
        ['\Clarifai\Api\MultiAnnotationFilterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete one or more annotation filters in a single request.
     * @param \Clarifai\Api\DeleteAnnotationFiltersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAnnotationFilters(\Clarifai\Api\DeleteAnnotationFiltersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteAnnotationFilters',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all status codes.
     * @param \Clarifai\Api\ListStatusCodesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function GetStatusCode(\Clarifai\Api\GetStatusCodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetStatusCode',
        $argument,
        ['\Clarifai\Api\SingleStatusCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * owner list users who the app is shared with
     * @param \Clarifai\Api\ListCollaboratorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function ListCollaborations(\Clarifai\Api\ListCollaborationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListCollaborations',
        $argument,
        ['\Clarifai\Api\MultiCollaborationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostAppDuplications starts async app duplication jobs which copy resources
     * (inputs, annotations, models etc) from one application to another. It can
     * also create the destination application if it does not exist, with fields
     * (description, metadata etc) copied from the source application.
     *
     * A duplication job can be started by any user that can read from the source
     * application (the target of this call) and can create and write to the
     * destination application. The duplication is associated with the user that
     * created it, so in order to read the status and progress of the job, that
     * user's ID has to be used in the call to GetAppDuplication, which might be
     * different to the source application owner ID in this call.
     * @param \Clarifai\Api\PostAppDuplicationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAppDuplications(\Clarifai\Api\PostAppDuplicationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAppDuplications',
        $argument,
        ['\Clarifai\Api\MultiAppDuplicationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAppDuplications lists all app duplication jobs created by the user.
     * @param \Clarifai\Api\ListAppDuplicationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAppDuplications(\Clarifai\Api\ListAppDuplicationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAppDuplications',
        $argument,
        ['\Clarifai\Api\MultiAppDuplicationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetAppDuplication returns an app duplication job created by the user.
     * @param \Clarifai\Api\GetAppDuplicationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAppDuplication(\Clarifai\Api\GetAppDuplicationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetAppDuplication',
        $argument,
        ['\Clarifai\Api\SingleAppDuplicationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add tasks to an app.
     * @param \Clarifai\Api\PostTasksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * Label Order
     * //////////////////////////////////////
     *
     * Add Label orders.
     * @param \Clarifai\Api\PostLabelOrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostLabelOrders(\Clarifai\Api\PostLabelOrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostLabelOrders',
        $argument,
        ['\Clarifai\Api\MultiLabelOrderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a label order.
     * @param \Clarifai\Api\GetLabelOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLabelOrder(\Clarifai\Api\GetLabelOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetLabelOrder',
        $argument,
        ['\Clarifai\Api\SingleLabelOrderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List label orders.
     * @param \Clarifai\Api\ListLabelOrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLabelOrders(\Clarifai\Api\ListLabelOrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListLabelOrders',
        $argument,
        ['\Clarifai\Api\MultiLabelOrderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more label orders.
     * @param \Clarifai\Api\PatchLabelOrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchLabelOrders(\Clarifai\Api\PatchLabelOrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchLabelOrders',
        $argument,
        ['\Clarifai\Api\MultiLabelOrderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple label orders in one request.
     * this do not change task status
     * @param \Clarifai\Api\DeleteLabelOrdersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteLabelOrders(\Clarifai\Api\DeleteLabelOrdersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteLabelOrders',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a list of Collectors to an app.
     * In the handler of this endpoint we also check for all the scopes of the  POST /inputs
     * endpoint.
     * Those current scopes are listed here as a hard requirement.
     * They are needed when adding the collectors just so we now that you have permission with
     * that key at least to do the writing to this app with POST /inputs.
     * @param \Clarifai\Api\PostCollectorsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function DeleteCollectors(\Clarifai\Api\DeleteCollectorsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteCollectors',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostStatValues
     * @param \Clarifai\Api\PostStatValuesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostStatValues(\Clarifai\Api\PostStatValuesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostStatValues',
        $argument,
        ['\Clarifai\Api\MultiStatValueResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostStatValuesAggregate
     * @param \Clarifai\Api\PostStatValuesAggregateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostStatValuesAggregate(\Clarifai\Api\PostStatValuesAggregateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostStatValuesAggregate',
        $argument,
        ['\Clarifai\Api\MultiStatValueAggregateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific module from an app.
     * @param \Clarifai\Api\GetModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetModule(\Clarifai\Api\GetModuleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModule',
        $argument,
        ['\Clarifai\Api\SingleModuleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the modules in community, by user or by app.
     * @param \Clarifai\Api\ListModulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListModules(\Clarifai\Api\ListModulesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModules',
        $argument,
        ['\Clarifai\Api\MultiModuleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a modules to an app.
     * @param \Clarifai\Api\PostModulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModules(\Clarifai\Api\PostModulesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModules',
        $argument,
        ['\Clarifai\Api\MultiModuleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more modules.
     * @param \Clarifai\Api\PatchModulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchModules(\Clarifai\Api\PatchModulesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModules',
        $argument,
        ['\Clarifai\Api\MultiModuleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple modules in one request.
     * @param \Clarifai\Api\DeleteModulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteModules(\Clarifai\Api\DeleteModulesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModules',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific module version for a module.
     * @param \Clarifai\Api\GetModuleVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetModuleVersion(\Clarifai\Api\GetModuleVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModuleVersion',
        $argument,
        ['\Clarifai\Api\SingleModuleVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the modules versions for a given module.
     * @param \Clarifai\Api\ListModuleVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListModuleVersions(\Clarifai\Api\ListModuleVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListModuleVersions',
        $argument,
        ['\Clarifai\Api\MultiModuleVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a new module version to trigger training of the module.
     * @param \Clarifai\Api\PostModuleVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModuleVersions(\Clarifai\Api\PostModuleVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModuleVersions',
        $argument,
        ['\Clarifai\Api\MultiModuleVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Modify details of an existing module version.
     * @param \Clarifai\Api\PatchModuleVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchModuleVersions(\Clarifai\Api\PatchModuleVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchModuleVersions',
        $argument,
        ['\Clarifai\Api\MultiModuleVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a multiple module version.
     * @param \Clarifai\Api\DeleteModuleVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteModuleVersions(\Clarifai\Api\DeleteModuleVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModuleVersions',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get usage count for specific module version.
     * @param \Clarifai\Api\GetModuleVersionUsageCountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetModuleVersionUsageCount(\Clarifai\Api\GetModuleVersionUsageCountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetModuleVersionUsageCount',
        $argument,
        ['\Clarifai\Api\SingleModuleVersionUsageCountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get installed modules vesrions for an app.
     * @param \Clarifai\Api\GetInstalledModuleVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInstalledModuleVersion(\Clarifai\Api\GetInstalledModuleVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetInstalledModuleVersion',
        $argument,
        ['\Clarifai\Api\SingleInstalledModuleVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List installed modules vesrions for an app.
     * @param \Clarifai\Api\ListInstalledModuleVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInstalledModuleVersions(\Clarifai\Api\ListInstalledModuleVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListInstalledModuleVersions',
        $argument,
        ['\Clarifai\Api\MultiInstalledModuleVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Install a new module version which will deploy the specific ModuleVersion to the app in the url.
     * @param \Clarifai\Api\PostInstalledModuleVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostInstalledModuleVersions(\Clarifai\Api\PostInstalledModuleVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInstalledModuleVersions',
        $argument,
        ['\Clarifai\Api\MultiInstalledModuleVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Uninstall an installed module version which will deploy the specific ModuleVersion to the app
     * in the url.
     * This cleaned up any associated caller keys so needs the Keys_Delete scope.
     * @param \Clarifai\Api\DeleteInstalledModuleVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteInstalledModuleVersions(\Clarifai\Api\DeleteInstalledModuleVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteInstalledModuleVersions',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Assign a key that the caller owns to be used when accessing this installed module version
     * If this endpoint is called with a different key then it overwrites what is there.
     * @param \Clarifai\Api\PostInstalledModuleVersionsKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostInstalledModuleVersionsKey(\Clarifai\Api\PostInstalledModuleVersionsKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInstalledModuleVersionsKey',
        $argument,
        ['\Clarifai\Api\SingleKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Perform bulk operations on a list of inputs based on input source.
     * Operation include add, update, delete of concepts, metadata and geo data.
     * This is an Asynchronous process. Use ListBulkOperations or GetBulkOperation to check the status.
     * @param \Clarifai\Api\PostBulkOperationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostBulkOperations(\Clarifai\Api\PostBulkOperationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostBulkOperations',
        $argument,
        ['\Clarifai\Api\MultiBulkOperationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the bulk operations
     * @param \Clarifai\Api\ListBulkOperationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListBulkOperations(\Clarifai\Api\ListBulkOperationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListBulkOperations',
        $argument,
        ['\Clarifai\Api\MultiBulkOperationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the bulk operation details by ID
     * @param \Clarifai\Api\GetBulkOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBulkOperation(\Clarifai\Api\GetBulkOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetBulkOperation',
        $argument,
        ['\Clarifai\Api\SingleBulkOperationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Cancel one or more bulk operations
     * @param \Clarifai\Api\CancelBulkOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelBulkOperations(\Clarifai\Api\CancelBulkOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/CancelBulkOperations',
        $argument,
        ['\Clarifai\Api\MultiBulkOperationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * delete one or more terminated bulk operations
     * @param \Clarifai\Api\DeleteBulkOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteBulkOperations(\Clarifai\Api\DeleteBulkOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteBulkOperations',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: Use PutTaskAssignments with action=LABEL_START.
     *   This endpoint has initially been designed as a GET request,
     *   but has been re-designed to serve a PUT logic.
     *   In order to clearly highlight that this endpoint serves a PUT request,
     *   this endpoint has been deprecated and replaced by PutTaskAssignments with action=LABEL_START.
     * @param \Clarifai\Api\ListNextTaskAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListNextTaskAssignments(\Clarifai\Api\ListNextTaskAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListNextTaskAssignments',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PutTaskAssignments performs an idempotent action for the task assignments in given task.
     * See PutTaskAssignmentsRequestAction for more details about possible actions.
     * @param \Clarifai\Api\PutTaskAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PutTaskAssignments(\Clarifai\Api\PutTaskAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PutTaskAssignments',
        $argument,
        ['\Clarifai\Api\MultiTaskAssignmentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the inputs add jobs
     * @param \Clarifai\Api\ListInputsAddJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInputsAddJobs(\Clarifai\Api\ListInputsAddJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListInputsAddJobs',
        $argument,
        ['\Clarifai\Api\MultiInputsAddJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the input add job details by ID
     * @param \Clarifai\Api\GetInputsAddJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInputsAddJob(\Clarifai\Api\GetInputsAddJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetInputsAddJob',
        $argument,
        ['\Clarifai\Api\SingleInputsAddJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * cancel the input add job by ID
     * @param \Clarifai\Api\CancelInputsAddJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelInputsAddJob(\Clarifai\Api\CancelInputsAddJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/CancelInputsAddJob',
        $argument,
        ['\Clarifai\Api\SingleInputsAddJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostUploads is used to upload files. Note that this does not create inputs.
     * returns job with uploadID, job has UPLOAD_IN_PROGRESS status
     * Actual upload content can be done in multiple calls with PutUploadContentParts
     * You can get status of upload with GetUpload or ListUploads endpoints
     * See also PostInputsUploads
     * @param \Clarifai\Api\PostUploadsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostUploads(\Clarifai\Api\PostUploadsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostUploads',
        $argument,
        ['\Clarifai\Api\MultiUploadResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Upload a part of a multipart upload.
     * Behaviour on completion depends on the endpoint that was used to initiate the upload.
     * @param \Clarifai\Api\PutUploadContentPartsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PutUploadContentParts(\Clarifai\Api\PutUploadContentPartsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PutUploadContentParts',
        $argument,
        ['\Clarifai\Api\SingleUploadResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetUploadRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUpload(\Clarifai\Api\GetUploadRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetUpload',
        $argument,
        ['\Clarifai\Api\SingleUploadResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListUploadsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUploads(\Clarifai\Api\ListUploadsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListUploads',
        $argument,
        ['\Clarifai\Api\MultiUploadResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\DeleteUploadsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUploads(\Clarifai\Api\DeleteUploadsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteUploads',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Initiates retrieval of inputs from cloud storage from a user provided data source.
     * Will create and return an inputs-add-job for tracking progress.
     * Archives will be extracted and their contents will be processed as inputs.
     *
     * The cloud URL will be treated as a filter prefix. For example s3:/bucket/images_folder/abc will process
     * files in the images_folder beginning with abc or in a subfolder beginning with abc.
     * For example:
     * bucket/images_folder/abcImage.png
     * bucket/images_folder/abc-1/Data.zip
     *
     * If given URL is for a private bucket or file, then credentials should be provided to access the bucket.
     * Credentials should include rights to list the objects in the bucket, except when pointed directly at a file archive,
     * in which case it only requires rights to access that particular file.
     * @param \Clarifai\Api\PostInputsDataSourcesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostInputsDataSources(\Clarifai\Api\PostInputsDataSourcesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInputsDataSources',
        $argument,
        ['\Clarifai\Api\MultiInputsAddJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the input extraction job details by ID
     * @param \Clarifai\Api\GetInputsExtractionJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInputsExtractionJob(\Clarifai\Api\GetInputsExtractionJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetInputsExtractionJob',
        $argument,
        ['\Clarifai\Api\SingleInputsExtractionJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the input extraction jobs
     * @param \Clarifai\Api\ListInputsExtractionJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInputsExtractionJobs(\Clarifai\Api\ListInputsExtractionJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListInputsExtractionJobs',
        $argument,
        ['\Clarifai\Api\MultiInputsExtractionJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\CancelInputsExtractionJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelInputsExtractionJobs(\Clarifai\Api\CancelInputsExtractionJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/CancelInputsExtractionJobs',
        $argument,
        ['\Clarifai\Api\MultiInputsExtractionJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create new upload job with a file archive containing inputs (images, videos, text, audio)
     * Actual file upload happens in next steps by calling `PutUploadContentParts` endpoint
     * and providing the file content in the request body.
     * This endpoint creates and return an inputs-add-job which contains an upload id needed for upload and further status tracking
     * Completing the upload will automatically begin unpacking the archive and uploading the contents as inputs.
     * See also GetInputsAddJob and then GetInputsExtractionJob
     * @param \Clarifai\Api\PostInputsUploadsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostInputsUploads(\Clarifai\Api\PostInputsUploadsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInputsUploads',
        $argument,
        ['\Clarifai\Api\MultiInputsAddJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * putting above the Get Nodepool endpoint to make it appear above the other one
     * @param \Clarifai\Api\ListPipelineVersionRunsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPipelineVersionRuns(\Clarifai\Api\ListPipelineVersionRunsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListPipelineVersionRuns',
        $argument,
        ['\Clarifai\Api\MultiPipelineVersionRunResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific runner.
     * TODO(zeiler): runner_id is a UUID so can list globally as well.
     * @param \Clarifai\Api\GetRunnerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRunner(\Clarifai\Api\GetRunnerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetRunner',
        $argument,
        ['\Clarifai\Api\SingleRunnerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the runners for the user.
     * @param \Clarifai\Api\ListRunnersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListRunners(\Clarifai\Api\ListRunnersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListRunners',
        $argument,
        ['\Clarifai\Api\MultiRunnerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a runners to a user.
     * @param \Clarifai\Api\PostRunnersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostRunners(\Clarifai\Api\PostRunnersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostRunners',
        $argument,
        ['\Clarifai\Api\MultiRunnerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch runners of a user.
     * @param \Clarifai\Api\PatchRunnersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchRunners(\Clarifai\Api\PatchRunnersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchRunners',
        $argument,
        ['\Clarifai\Api\MultiRunnerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple runners in one request.
     * @param \Clarifai\Api\DeleteRunnersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteRunners(\Clarifai\Api\DeleteRunnersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteRunners',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List items for the remote runner to work on.
     * since the runner_id is a UUID we can access it directly too.
     * @param \Clarifai\Api\ListRunnerItemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListRunnerItems(\Clarifai\Api\ListRunnerItemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListRunnerItems',
        $argument,
        ['\Clarifai\Api\MultiRunnerItemResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post back outputs from remote runners
     * since the runner_id is a UUID we can access it directly too.
     * @param \Clarifai\Api\PostRunnerItemOutputsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostRunnerItemOutputs(\Clarifai\Api\PostRunnerItemOutputsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostRunnerItemOutputs',
        $argument,
        ['\Clarifai\Api\MultiRunnerItemOutputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * This maintains a single request for asking the API if there is any work to be done, processing
     * it and streaming back results.
     * To do that first handshake the MultiRunnerItemOutputResponse will have RUNNER_STREAM_START
     * status filled in so that the API knows to respond with a MultiRunnerItemResponse.
     * For now there will only be one of those if the model prediction only has one request.
     * NOTE(zeiler): downside of this is you can't use HTTP REST requests to do runner work.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function ProcessRunnerItems($metadata = [], $options = []) {
        return $this->_bidiRequest('/clarifai.api.V2/ProcessRunnerItems',
        ['\Clarifai\Api\MultiRunnerItemResponse','decode'],
        $metadata, $options);
    }

    /**
     * Get the training time estimate based off train request and estimated input count.
     * @param \Clarifai\Api\PostModelVersionsTrainingTimeEstimateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelVersionsTrainingTimeEstimate(\Clarifai\Api\PostModelVersionsTrainingTimeEstimateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersionsTrainingTimeEstimate',
        $argument,
        ['\Clarifai\Api\MultiTrainingTimeEstimateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List Available Cloud Providers
     * @param \Clarifai\Api\ListCloudProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCloudProviders(\Clarifai\Api\ListCloudProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListCloudProviders',
        $argument,
        ['\Clarifai\Api\MultiCloudProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List Regions for given Cloud Provider
     * @param \Clarifai\Api\ListCloudRegionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCloudRegions(\Clarifai\Api\ListCloudRegionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListCloudRegions',
        $argument,
        ['\Clarifai\Api\MultiCloudRegionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get InstanceTypes given Cloud Provider and Region
     * @param \Clarifai\Api\ListInstanceTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInstanceTypes(\Clarifai\Api\ListInstanceTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListInstanceTypes',
        $argument,
        ['\Clarifai\Api\MultiInstanceTypeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ComputeCluster CRUD
     * @param \Clarifai\Api\GetComputeClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetComputeCluster(\Clarifai\Api\GetComputeClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetComputeCluster',
        $argument,
        ['\Clarifai\Api\SingleComputeClusterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListComputeClustersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListComputeClusters(\Clarifai\Api\ListComputeClustersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListComputeClusters',
        $argument,
        ['\Clarifai\Api\MultiComputeClusterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostComputeClustersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostComputeClusters(\Clarifai\Api\PostComputeClustersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostComputeClusters',
        $argument,
        ['\Clarifai\Api\MultiComputeClusterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple compute_clusters in one request.
     * @param \Clarifai\Api\DeleteComputeClustersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteComputeClusters(\Clarifai\Api\DeleteComputeClustersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteComputeClusters',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Nodepools CRUD
     * @param \Clarifai\Api\GetNodepoolRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNodepool(\Clarifai\Api\GetNodepoolRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetNodepool',
        $argument,
        ['\Clarifai\Api\SingleNodepoolResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListNodepoolsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListNodepools(\Clarifai\Api\ListNodepoolsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListNodepools',
        $argument,
        ['\Clarifai\Api\MultiNodepoolResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostNodepoolsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostNodepools(\Clarifai\Api\PostNodepoolsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostNodepools',
        $argument,
        ['\Clarifai\Api\MultiNodepoolResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PatchNodepoolsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchNodepools(\Clarifai\Api\PatchNodepoolsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchNodepools',
        $argument,
        ['\Clarifai\Api\MultiNodepoolResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple nodepools in one request.
     * @param \Clarifai\Api\DeleteNodepoolsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteNodepools(\Clarifai\Api\DeleteNodepoolsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteNodepools',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deployments CRUD
     * @param \Clarifai\Api\GetDeploymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDeployment(\Clarifai\Api\GetDeploymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetDeployment',
        $argument,
        ['\Clarifai\Api\SingleDeploymentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListDeploymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListDeployments(\Clarifai\Api\ListDeploymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListDeployments',
        $argument,
        ['\Clarifai\Api\MultiDeploymentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostDeploymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostDeployments(\Clarifai\Api\PostDeploymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostDeployments',
        $argument,
        ['\Clarifai\Api\MultiDeploymentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PatchDeploymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchDeployments(\Clarifai\Api\PatchDeploymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchDeployments',
        $argument,
        ['\Clarifai\Api\MultiDeploymentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple deployments in one request.
     * @param \Clarifai\Api\DeleteDeploymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteDeployments(\Clarifai\Api\DeleteDeploymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteDeployments',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostAuditLogSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAuditLogSearches(\Clarifai\Api\PostAuditLogSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAuditLogSearches',
        $argument,
        ['\Clarifai\Api\MultiAuditLogEntryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListWorkflowEvaluationTemplatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListWorkflowEvaluationTemplates(\Clarifai\Api\ListWorkflowEvaluationTemplatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListWorkflowEvaluationTemplates',
        $argument,
        ['\Clarifai\Api\MultiWorkflowEvaluationTemplateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostLogEntriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostLogEntries(\Clarifai\Api\PostLogEntriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostLogEntries',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListLogEntriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLogEntries(\Clarifai\Api\ListLogEntriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListLogEntries',
        $argument,
        ['\Clarifai\Api\MultiLogEntryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\StreamLogEntriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function StreamLogEntries(\Clarifai\Api\StreamLogEntriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/clarifai.api.V2/StreamLogEntries',
        $argument,
        ['\Clarifai\Api\MultiLogEntryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostComputePlaneMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostComputePlaneMetrics(\Clarifai\Api\PostComputePlaneMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostComputePlaneMetrics',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostWorkflowVersionEvaluationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostWorkflowVersionEvaluations(\Clarifai\Api\PostWorkflowVersionEvaluationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowVersionEvaluations',
        $argument,
        ['\Clarifai\Api\MultiWorkflowVersionEvaluationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetWorkflowVersionEvaluationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWorkflowVersionEvaluation(\Clarifai\Api\GetWorkflowVersionEvaluationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetWorkflowVersionEvaluation',
        $argument,
        ['\Clarifai\Api\SingleWorkflowVersionEvaluationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListWorkflowVersionEvaluationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListWorkflowVersionEvaluations(\Clarifai\Api\ListWorkflowVersionEvaluationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListWorkflowVersionEvaluations',
        $argument,
        ['\Clarifai\Api\MultiWorkflowVersionEvaluationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PatchWorkflowVersionEvaluationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchWorkflowVersionEvaluations(\Clarifai\Api\PatchWorkflowVersionEvaluationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchWorkflowVersionEvaluations',
        $argument,
        ['\Clarifai\Api\MultiWorkflowVersionEvaluationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListWorkflowVersionEvaluationDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListWorkflowVersionEvaluationData(\Clarifai\Api\ListWorkflowVersionEvaluationDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListWorkflowVersionEvaluationData',
        $argument,
        ['\Clarifai\Api\MultiListWorkflowVersionEvaluationDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostWorkflowVersionEvaluationDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostWorkflowVersionEvaluationData(\Clarifai\Api\PostWorkflowVersionEvaluationDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowVersionEvaluationData',
        $argument,
        ['\Clarifai\Api\MultiListWorkflowVersionEvaluationDataResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostPipelinesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostPipelines(\Clarifai\Api\PostPipelinesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostPipelines',
        $argument,
        ['\Clarifai\Api\MultiPipelineResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetPipelineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPipeline(\Clarifai\Api\GetPipelineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetPipeline',
        $argument,
        ['\Clarifai\Api\SinglePipelineResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListPipelinesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPipelines(\Clarifai\Api\ListPipelinesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListPipelines',
        $argument,
        ['\Clarifai\Api\MultiPipelineResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PatchPipelinesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchPipelines(\Clarifai\Api\PatchPipelinesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchPipelines',
        $argument,
        ['\Clarifai\Api\MultiPipelineResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\DeletePipelinesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePipelines(\Clarifai\Api\DeletePipelinesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeletePipelines',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetPipelineVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPipelineVersion(\Clarifai\Api\GetPipelineVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetPipelineVersion',
        $argument,
        ['\Clarifai\Api\SinglePipelineVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListPipelineVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPipelineVersions(\Clarifai\Api\ListPipelineVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListPipelineVersions',
        $argument,
        ['\Clarifai\Api\MultiPipelineVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PatchPipelineVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchPipelineVersions(\Clarifai\Api\PatchPipelineVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchPipelineVersions',
        $argument,
        ['\Clarifai\Api\MultiPipelineVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\DeletePipelineVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePipelineVersions(\Clarifai\Api\DeletePipelineVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeletePipelineVersions',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetPipelineVersionRunRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPipelineVersionRun(\Clarifai\Api\GetPipelineVersionRunRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetPipelineVersionRun',
        $argument,
        ['\Clarifai\Api\SinglePipelineVersionRunResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * TODO ListPipelineVersionRuns for listing all the runs of a given pipeline version.
     *
     * @param \Clarifai\Api\PostPipelineVersionRunsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostPipelineVersionRuns(\Clarifai\Api\PostPipelineVersionRunsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostPipelineVersionRuns',
        $argument,
        ['\Clarifai\Api\MultiPipelineVersionRunResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PatchPipelineVersionRunsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchPipelineVersionRuns(\Clarifai\Api\PatchPipelineVersionRunsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchPipelineVersionRuns',
        $argument,
        ['\Clarifai\Api\MultiPipelineVersionRunResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostPipelineStepsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostPipelineSteps(\Clarifai\Api\PostPipelineStepsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostPipelineSteps',
        $argument,
        ['\Clarifai\Api\MultiPipelineStepResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetPipelineStepRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPipelineStep(\Clarifai\Api\GetPipelineStepRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetPipelineStep',
        $argument,
        ['\Clarifai\Api\SinglePipelineStepResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListPipelineStepsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPipelineSteps(\Clarifai\Api\ListPipelineStepsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListPipelineSteps',
        $argument,
        ['\Clarifai\Api\MultiPipelineStepResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * This is a streaming endpoint, the request has a field, upload_data, which can either be the config for the upload or the actual data to upload.
     * The config must be sent first before the pipeline_step_bytes can be uploaded.
     * Once the config has been sent, the server will respond with a confirmation containing the pipeline_step_version_id.
     * This is so that if your upload is interrupted, you can resume the upload by sending the config again with the pipeline_step_version_id specified for your pipeline_step_version.
     * The actual upload will be done via a multipart upload, the latest successful part_id will be sent from the server in the response to the pipeline_step_bytes.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function PostPipelineStepVersionsUpload($metadata = [], $options = []) {
        return $this->_bidiRequest('/clarifai.api.V2/PostPipelineStepVersionsUpload',
        ['\Clarifai\Api\PostPipelineStepVersionsUploadResponse','decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListPipelineStepVersionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPipelineStepVersions(\Clarifai\Api\ListPipelineStepVersionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListPipelineStepVersions',
        $argument,
        ['\Clarifai\Api\MultiPipelineStepVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetPipelineStepVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPipelineStepVersion(\Clarifai\Api\GetPipelineStepVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetPipelineStepVersion',
        $argument,
        ['\Clarifai\Api\SinglePipelineStepVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\GetSecretRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSecret(\Clarifai\Api\GetSecretRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetSecret',
        $argument,
        ['\Clarifai\Api\SingleSecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\ListSecretsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSecrets(\Clarifai\Api\ListSecretsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListSecrets',
        $argument,
        ['\Clarifai\Api\MultiSecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PostSecretsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostSecrets(\Clarifai\Api\PostSecretsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostSecrets',
        $argument,
        ['\Clarifai\Api\MultiSecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\PatchSecretsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchSecrets(\Clarifai\Api\PatchSecretsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchSecrets',
        $argument,
        ['\Clarifai\Api\MultiSecretResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Clarifai\Api\DeleteSecretsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteSecrets(\Clarifai\Api\DeleteSecretsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteSecrets',
        $argument,
        ['\Clarifai\Api\MultiSecretResponse', 'decode'],
        $metadata, $options);
    }

}
