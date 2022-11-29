<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// ///////////////////////////////////////////// WARNING ///////////////////////////////////////////////
// Be aware that if you decide to add comments to this or any other non-private file, they could     //
// end up in our *public* auto-generated swagger documentation. In order to ensure that your         //
// comments are not included in our swagger docs, put one line of whitespace between your comment    //
// and any proto definitions.                                                                        //
// /////////////////////////////////////////////////////////////////////////////////////////////////////
//
namespace Clarifai\Api;

/**
 * V2
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
     * Common echo example.
     * @param \Clarifai\Api\TestMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Echo(\Clarifai\Api\TestMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/Echo',
        $argument,
        ['\Clarifai\Api\TestMessage', 'decode'],
        $metadata, $options);
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
     * Get a specific vocab from an app.
     * @param \Clarifai\Api\GetVocabRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetVocab(\Clarifai\Api\GetVocabRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetVocab',
        $argument,
        ['\Clarifai\Api\SingleVocabResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the vocabs.
     * @param \Clarifai\Api\ListVocabsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListVocabs(\Clarifai\Api\ListVocabsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListVocabs',
        $argument,
        ['\Clarifai\Api\MultiVocabResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a vocab to an app.
     * @param \Clarifai\Api\PostVocabsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostVocabs(\Clarifai\Api\PostVocabsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostVocabs',
        $argument,
        ['\Clarifai\Api\MultiVocabResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch one or more vocabs.
     * @param \Clarifai\Api\PatchVocabsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchVocabs(\Clarifai\Api\PatchVocabsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchVocabs',
        $argument,
        ['\Clarifai\Api\MultiVocabResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single vocab.
     * @param \Clarifai\Api\DeleteVocabRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteVocab(\Clarifai\Api\DeleteVocabRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteVocab',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple vocabs in one request.
     * @param \Clarifai\Api\DeleteVocabsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteVocabs(\Clarifai\Api\DeleteVocabsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteVocabs',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the vocabs.
     * @param \Clarifai\Api\ListVocabConceptsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListVocabConcepts(\Clarifai\Api\ListVocabConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListVocabConcepts',
        $argument,
        ['\Clarifai\Api\MultiConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a vocab to an app.
     * @param \Clarifai\Api\PostVocabConceptsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostVocabConcepts(\Clarifai\Api\PostVocabConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostVocabConcepts',
        $argument,
        ['\Clarifai\Api\MultiConceptResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a single concept from a vocab.
     * @param \Clarifai\Api\DeleteVocabConceptRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteVocabConcept(\Clarifai\Api\DeleteVocabConceptRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteVocabConcept',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple concepts from a vocab in one request.
     * @param \Clarifai\Api\DeleteVocabConceptsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteVocabConcepts(\Clarifai\Api\DeleteVocabConceptsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteVocabConcepts',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
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
     * TODO(zeiler): we don't have a way to delete the languages currently. This should be rare
     * anyways as users should just patch translations to the right naming.
     * // Delete a single concept translation.
     * rpc DeleteConceptLanguage(DeleteConceptLanguageRequest) returns (clarifai.api.status.BaseResponse) {
     *   option (google.api.http) = {
     *     delete: "/v2/users/{user_app_id.user_id}/apps/{user_app_id.app_id}/concepts/{concept_id}/languages/{language}"
     *     additional_bindings {
     *       delete: "/v2/concepts/{concept_id}/languages/{language}"
     *     }
     *   };
     * }
     *
     * // Delete multiple concept translations in one request.
     * rpc DeleteConceptLanguages(DeleteConceptLanguagesRequest) returns (clarifai.api.status.BaseResponse) {
     *   option (google.api.http) = {
     *     delete: "/v2/users/{user_app_id.user_id}/apps/{user_app_id.app_id}/concepts/{concept_id}/languages"
     *     body: "*"
     *     additional_bindings {
     *       delete: "/v2/concepts/{concept_id}/languages"
     *       body: "*"
     *     }
     *   };
     * }
     *
     * List the concept in all the outside sources where we found these concepts.
     * @param \Clarifai\Api\ListConceptReferencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListConceptReferences(\Clarifai\Api\ListConceptReferencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListConceptReferences',
        $argument,
        ['\Clarifai\Api\MultiConceptReferenceResponse', 'decode'],
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
     * Start concept mapping jobs.
     * @param \Clarifai\Api\PostConceptMappingJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostConceptMappingJobs(\Clarifai\Api\PostConceptMappingJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostConceptMappingJobs',
        $argument,
        ['\Clarifai\Api\MultiConceptMappingJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all concept mappings for a given concept id.
     * @param \Clarifai\Api\ListConceptMappingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListConceptMappings(\Clarifai\Api\ListConceptMappingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListConceptMappings',
        $argument,
        ['\Clarifai\Api\MultiConceptMappingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post concept mappings.
     * @param \Clarifai\Api\PostConceptMappingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostConceptMappings(\Clarifai\Api\PostConceptMappingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostConceptMappings',
        $argument,
        ['\Clarifai\Api\MultiConceptMappingResponse', 'decode'],
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
     * Get a specific input from an app.
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
     * Add an input (or set of inputs) to an app.
     * This call is synchronous if the PostInputsRequest contains exactly one image input. Otherwise,
     * it is asynchronous.
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
     * Add an input (or set of inputs) to an app via a file.
     * This is asynchronous.
     * @param \Clarifai\Api\PostInputsFileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostInputsFile(\Clarifai\Api\PostInputsFileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInputsFile',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add an input or set of inputs to an app designed for NiFi integration.
     * @param \Clarifai\Api\PostInputsNiFiRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostInputsNiFi(\Clarifai\Api\PostInputsNiFiRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInputsNiFi',
        $argument,
        ['\Clarifai\Api\MultiInputResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add an input or set of inputs to an app designed for Document integration.
     * @param \Clarifai\Api\PostInputsDocumentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostInputsDocument(\Clarifai\Api\PostInputsDocumentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInputsDocument',
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
     * Patch one or more dataset ids.
     * @param \Clarifai\Api\PatchDatasetIdsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchDatasetIds(\Clarifai\Api\PatchDatasetIdsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchDatasetIds',
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
     * List all the inputs.
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
     * Get the evaluation metrics for a model version.
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
     * Add new reference(s) to a particular model
     * @param \Clarifai\Api\PostModelReferencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelReferences(\Clarifai\Api\PostModelReferencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelReferences',
        $argument,
        ['\Clarifai\Api\MultiModelReferenceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete model references tied to a model id by reference id.
     * @param \Clarifai\Api\DeleteModelReferencesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteModelReferences(\Clarifai\Api\DeleteModelReferencesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModelReferences',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
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
     * PostModelVersionInputExamples
     * @param \Clarifai\Api\PostModelVersionInputExamplesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelVersionInputExamples(\Clarifai\Api\PostModelVersionInputExamplesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelVersionInputExamples',
        $argument,
        ['\Clarifai\Api\MultiModelVersionInputExampleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteModelVersionInputExamples
     * @param \Clarifai\Api\DeleteModelVersionInputExamplesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteModelVersionInputExamples(\Clarifai\Api\DeleteModelVersionInputExamplesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModelVersionInputExamples',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Star a model
     * @param \Clarifai\Api\PostModelStarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostModelStars(\Clarifai\Api\PostModelStarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostModelStars',
        $argument,
        ['\Clarifai\Api\MultiModelStarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Un-star a model
     * @param \Clarifai\Api\DeleteModelStarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteModelStars(\Clarifai\Api\DeleteModelStarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteModelStars',
        $argument,
        ['\Clarifai\Api\DeleteModelStarsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Star a user
     * @param \Clarifai\Api\PostUserStarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostUserStars(\Clarifai\Api\PostUserStarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostUserStars',
        $argument,
        ['\Clarifai\Api\MultiUserStarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Un-star a user
     * @param \Clarifai\Api\DeleteUserStarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteUserStars(\Clarifai\Api\DeleteUserStarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteUserStars',
        $argument,
        ['\Clarifai\Api\DeleteUserStarsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Star a workflow
     * @param \Clarifai\Api\PostWorkflowStarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostWorkflowStars(\Clarifai\Api\PostWorkflowStarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowStars',
        $argument,
        ['\Clarifai\Api\MultiWorkflowStarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Un-star a workflow
     * @param \Clarifai\Api\DeleteWorkflowStarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteWorkflowStars(\Clarifai\Api\DeleteWorkflowStarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteWorkflowStars',
        $argument,
        ['\Clarifai\Api\DeleteWorkflowStarsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Star an app
     * @param \Clarifai\Api\PostAppStarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAppStars(\Clarifai\Api\PostAppStarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAppStars',
        $argument,
        ['\Clarifai\Api\MultiAppStarResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Un-star an app
     * @param \Clarifai\Api\DeleteAppStarsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAppStars(\Clarifai\Api\DeleteAppStarsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteAppStars',
        $argument,
        ['\Clarifai\Api\DeleteAppStarsResponse', 'decode'],
        $metadata, $options);
    }

    /**
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
     * List all public workflows.
     * @param \Clarifai\Api\ListPublicWorkflowsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPublicWorkflows(\Clarifai\Api\ListPublicWorkflowsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListPublicWorkflows',
        $argument,
        ['\Clarifai\Api\MultiWorkflowResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a workflow to an app.
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
     * Compare embeddings distances using a workflow
     * @param \Clarifai\Api\PostWorkflowResultsSimilarityRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostWorkflowResultsSimilarity(\Clarifai\Api\PostWorkflowResultsSimilarityRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowResultsSimilarity',
        $argument,
        ['\Clarifai\Api\PostWorkflowResultsSimilarityResponse', 'decode'],
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
     * Evaluate all the nodes in the workflow.
     * @param \Clarifai\Api\PostWorkflowMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostWorkflowMetrics(\Clarifai\Api\PostWorkflowMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWorkflowMetrics',
        $argument,
        ['\Clarifai\Api\MultiWorkflowMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get workflow evaluation data.
     * @param \Clarifai\Api\GetWorkflowMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWorkflowMetrics(\Clarifai\Api\GetWorkflowMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetWorkflowMetrics',
        $argument,
        ['\Clarifai\Api\SingleWorkflowMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetWorkflowNodeMetrics
     * @param \Clarifai\Api\GetWorkflowNodeMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWorkflowNodeMetrics(\Clarifai\Api\GetWorkflowNodeMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetWorkflowNodeMetrics',
        $argument,
        ['\Clarifai\Api\SingleWorkflowNodeMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListWorkflowMetrics
     * @param \Clarifai\Api\ListWorkflowMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListWorkflowMetrics(\Clarifai\Api\ListWorkflowMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListWorkflowMetrics',
        $argument,
        ['\Clarifai\Api\MultiWorkflowMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete one or more workflow metrics.
     * @param \Clarifai\Api\DeleteWorkflowMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteWorkflowMetrics(\Clarifai\Api\DeleteWorkflowMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteWorkflowMetrics',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
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
     * Patch app owner.
     * The new app owner can only be an org, and the original owner must be a member of that org.
     * @param \Clarifai\Api\PatchAppOwnerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchAppOwner(\Clarifai\Api\PatchAppOwnerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAppOwner',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
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
     * Get current user information
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
     * List users
     * @param \Clarifai\Api\ListUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUsers(\Clarifai\Api\ListUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListUsers',
        $argument,
        ['\Clarifai\Api\MultiUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update gdpr fields of current user.
     * @param \Clarifai\Api\PostUserConsentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostUserConsent(\Clarifai\Api\PostUserConsentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostUserConsent',
        $argument,
        ['\Clarifai\Api\SingleUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch information of current user or another user in the same organisation
     * @param \Clarifai\Api\PatchUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchUser(\Clarifai\Api\PatchUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchUser',
        $argument,
        ['\Clarifai\Api\SingleUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post user access request
     * @param \Clarifai\Api\PostUserAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostUserAccess(\Clarifai\Api\PostUserAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostUserAccess',
        $argument,
        ['\Clarifai\Api\MultiUserAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get user access request
     * @param \Clarifai\Api\GetUserAccessRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserAccess(\Clarifai\Api\GetUserAccessRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetUserAccess',
        $argument,
        ['\Clarifai\Api\SingleUserAccessResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * //////////////////////////////////////
     *
     * //////////////////////////////////////
     * Email
     * //////////////////////////////////////
     * Add Email
     * @param \Clarifai\Api\PostEmailsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostEmails(\Clarifai\Api\PostEmailsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostEmails',
        $argument,
        ['\Clarifai\Api\MultipleEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List emails
     * @param \Clarifai\Api\ListEmailsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListEmails(\Clarifai\Api\ListEmailsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListEmails',
        $argument,
        ['\Clarifai\Api\MultipleEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * For sending another verification email.
     * @param \Clarifai\Api\PostResendVerifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostResendVerifyEmail(\Clarifai\Api\PostResendVerifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostResendVerifyEmail',
        $argument,
        ['\Clarifai\Api\SingleResendVerifyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deleting an email.
     * @param \Clarifai\Api\DeleteEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteEmail(\Clarifai\Api\DeleteEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteEmail',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create primate email.
     * @param \Clarifai\Api\PostPrimaryEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostPrimaryEmail(\Clarifai\Api\PostPrimaryEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostPrimaryEmail',
        $argument,
        ['\Clarifai\Api\SingleEmailResponse', 'decode'],
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
     * Get global policy
     * @param \Clarifai\Api\ListGlobalPasswordPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListGlobalPasswordPolicies(\Clarifai\Api\ListGlobalPasswordPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListGlobalPasswordPolicies',
        $argument,
        ['\Clarifai\Api\MultiplePasswordPoliciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a specific set of password policies attached to a user.
     * @param \Clarifai\Api\ListPasswordPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPasswordPolicies(\Clarifai\Api\ListPasswordPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListPasswordPolicies',
        $argument,
        ['\Clarifai\Api\MultiplePasswordPoliciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a specific set of password policies attached to a user or an organization.
     * @param \Clarifai\Api\PostPasswordPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostPasswordPolicies(\Clarifai\Api\PostPasswordPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostPasswordPolicies',
        $argument,
        ['\Clarifai\Api\MultiplePasswordPoliciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a specific set of password policies attached to a user or an organization.
     * @param \Clarifai\Api\PatchPasswordPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchPasswordPolicies(\Clarifai\Api\PatchPasswordPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchPasswordPolicies',
        $argument,
        ['\Clarifai\Api\MultiplePasswordPoliciesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * DeletePasswordPolicies
     * @param \Clarifai\Api\DeletePasswordPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePasswordPolicies(\Clarifai\Api\DeletePasswordPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeletePasswordPolicies',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get user feature config
     * @param \Clarifai\Api\UserFeatureConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserFeatureConfig(\Clarifai\Api\UserFeatureConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetUserFeatureConfig',
        $argument,
        ['\Clarifai\Api\SingleUserFeatureConfigResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add organizations
     * @param \Clarifai\Api\PostOrganizationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostOrganizations(\Clarifai\Api\PostOrganizationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostOrganizations',
        $argument,
        ['\Clarifai\Api\MultiOrganizationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List the provided user's organizations with their roles
     * @param \Clarifai\Api\ListUsersOrganizationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUsersOrganizations(\Clarifai\Api\ListUsersOrganizationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListUsersOrganizations',
        $argument,
        ['\Clarifai\Api\MultiUsersOrganizationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List multiple organizations
     * @param \Clarifai\Api\ListOrganizationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrganizations(\Clarifai\Api\ListOrganizationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListOrganizations',
        $argument,
        ['\Clarifai\Api\MultiOrganizationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get single organization
     * @param \Clarifai\Api\GetOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrganization(\Clarifai\Api\GetOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetOrganization',
        $argument,
        ['\Clarifai\Api\SingleOrganizationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch an organization
     * @param \Clarifai\Api\PatchOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchOrganization(\Clarifai\Api\PatchOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchOrganization',
        $argument,
        ['\Clarifai\Api\SingleOrganizationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete an organization
     * @param \Clarifai\Api\DeleteOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOrganization(\Clarifai\Api\DeleteOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteOrganization',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List organization members
     * @param \Clarifai\Api\ListOrganizationMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrganizationMembers(\Clarifai\Api\ListOrganizationMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListOrganizationMembers',
        $argument,
        ['\Clarifai\Api\MultiOrganizationMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListOrganizationAppMembers
     * @param \Clarifai\Api\ListOrganizationAppMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrganizationAppMembers(\Clarifai\Api\ListOrganizationAppMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListOrganizationAppMembers',
        $argument,
        ['\Clarifai\Api\MultiOrganizationMemberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add new member to organization
     * @param \Clarifai\Api\PostOrganizationMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostOrganizationMember(\Clarifai\Api\PostOrganizationMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostOrganizationMember',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PatchOrganizationMember
     * @param \Clarifai\Api\PatchOrganizationMembersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchOrganizationMember(\Clarifai\Api\PatchOrganizationMembersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchOrganizationMember',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove a member from organization
     * @param \Clarifai\Api\DeleteOrganizationMemberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOrganizationMember(\Clarifai\Api\DeleteOrganizationMemberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteOrganizationMember',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Organization invites
     * @param \Clarifai\Api\PostOrganizationInvitationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostOrganizationInvitations(\Clarifai\Api\PostOrganizationInvitationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostOrganizationInvitations',
        $argument,
        ['\Clarifai\Api\MultiOrganizationInvitationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PatchOrganizationInvitations
     * @param \Clarifai\Api\PatchOrganizationInvitationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchOrganizationInvitations(\Clarifai\Api\PatchOrganizationInvitationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchOrganizationInvitations',
        $argument,
        ['\Clarifai\Api\MultiOrganizationInvitationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListOrganizationInvitations
     * @param \Clarifai\Api\ListOrganizationInvitationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrganizationInvitations(\Clarifai\Api\ListOrganizationInvitationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListOrganizationInvitations',
        $argument,
        ['\Clarifai\Api\MultiOrganizationInvitationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetOrganizationInvitation
     * @param \Clarifai\Api\GetOrganizationInvitationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrganizationInvitation(\Clarifai\Api\GetOrganizationInvitationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetOrganizationInvitation',
        $argument,
        ['\Clarifai\Api\SingleOrganizationInvitationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostDeclineOrganizationInvitation
     * @param \Clarifai\Api\PostDeclineOrganizationInvitationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostDeclineOrganizationInvitation(\Clarifai\Api\PostDeclineOrganizationInvitationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostDeclineOrganizationInvitation',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostAcceptOrganizationInvitation
     * @param \Clarifai\Api\PostAcceptOrganizationInvitationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAcceptOrganizationInvitation(\Clarifai\Api\PostAcceptOrganizationInvitationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAcceptOrganizationInvitation',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetOrganizationInvitationPublic
     * @param \Clarifai\Api\GetOrganizationInvitationPublicRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrganizationInvitationPublic(\Clarifai\Api\GetOrganizationInvitationPublicRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetOrganizationInvitationPublic',
        $argument,
        ['\Clarifai\Api\SingleOrganizationInvitationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Leave an organization
     * @param \Clarifai\Api\DeleteRequestingUserFromOrganizationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteRequestingUserFromOrganization(\Clarifai\Api\DeleteRequestingUserFromOrganizationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteRequestingUserFromOrganization',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add IdentityProviders
     * @param \Clarifai\Api\PostIdentityProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostIdentityProviders(\Clarifai\Api\PostIdentityProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostIdentityProviders',
        $argument,
        ['\Clarifai\Api\MultiIdentityProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List multiple IdentityProviders
     * @param \Clarifai\Api\ListIdentityProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListIdentityProviders(\Clarifai\Api\ListIdentityProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListIdentityProviders',
        $argument,
        ['\Clarifai\Api\MultiIdentityProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get single IdentityProvider
     * @param \Clarifai\Api\GetIdentityProviderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIdentityProvider(\Clarifai\Api\GetIdentityProviderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetIdentityProvider',
        $argument,
        ['\Clarifai\Api\SingleIdentityProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch multiple IdentityProviders
     * @param \Clarifai\Api\PatchIdentityProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchIdentityProviders(\Clarifai\Api\PatchIdentityProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchIdentityProviders',
        $argument,
        ['\Clarifai\Api\MultiIdentityProviderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple IdentityProviders
     * @param \Clarifai\Api\DeleteIdentityProvidersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteIdentityProviders(\Clarifai\Api\DeleteIdentityProvidersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteIdentityProviders',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add teams
     * @param \Clarifai\Api\PostTeamsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostTeams(\Clarifai\Api\PostTeamsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostTeams',
        $argument,
        ['\Clarifai\Api\MultiTeamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List multiple teams
     * @param \Clarifai\Api\ListTeamsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListTeams(\Clarifai\Api\ListTeamsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListTeams',
        $argument,
        ['\Clarifai\Api\MultiTeamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get single team
     * @param \Clarifai\Api\GetTeamRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTeam(\Clarifai\Api\GetTeamRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetTeam',
        $argument,
        ['\Clarifai\Api\SingleTeamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Patch multiple teams
     * @param \Clarifai\Api\PatchTeamsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchTeams(\Clarifai\Api\PatchTeamsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchTeams',
        $argument,
        ['\Clarifai\Api\MultiTeamResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete multiple teams
     * @param \Clarifai\Api\DeleteTeamsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTeams(\Clarifai\Api\DeleteTeamsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteTeams',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add users to a team
     * @param \Clarifai\Api\PostTeamUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostTeamUsers(\Clarifai\Api\PostTeamUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostTeamUsers',
        $argument,
        ['\Clarifai\Api\MultiTeamUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List team users
     * @param \Clarifai\Api\ListTeamUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListTeamUsers(\Clarifai\Api\ListTeamUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListTeamUsers',
        $argument,
        ['\Clarifai\Api\MultiTeamUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete users from a team
     * @param \Clarifai\Api\DeleteTeamUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTeamUsers(\Clarifai\Api\DeleteTeamUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteTeamUsers',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add applications to team
     * @param \Clarifai\Api\PostTeamAppsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostTeamApps(\Clarifai\Api\PostTeamAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostTeamApps',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List team applications
     * @param \Clarifai\Api\ListTeamAppsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListTeamApps(\Clarifai\Api\ListTeamAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListTeamApps',
        $argument,
        ['\Clarifai\Api\MultiTeamAppsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Remove applications from team
     * @param \Clarifai\Api\DeleteTeamAppsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTeamApps(\Clarifai\Api\DeleteTeamAppsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteTeamApps',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List multiple roles
     * @param \Clarifai\Api\ListRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListRoles(\Clarifai\Api\ListRolesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListRoles',
        $argument,
        ['\Clarifai\Api\MultiRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get single role
     * @param \Clarifai\Api\GetRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRole(\Clarifai\Api\GetRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetRole',
        $argument,
        ['\Clarifai\Api\SingleRoleResponse', 'decode'],
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
     * Execute an attribute search.
     * @param \Clarifai\Api\PostAttributeSearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAttributeSearch(\Clarifai\Api\PostAttributeSearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAttributeSearch',
        $argument,
        ['\Clarifai\Api\MultiSearchResponse', 'decode'],
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
     * Get a list of clusters in an app
     * @param \Clarifai\Api\ListClustersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListClusters(\Clarifai\Api\ListClustersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListClusters',
        $argument,
        ['\Clarifai\Api\MultiClusterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the annotations for a given cluster.
     * @param \Clarifai\Api\ListAnnotationsForClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAnnotationsForCluster(\Clarifai\Api\ListAnnotationsForClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAnnotationsForCluster',
        $argument,
        ['\Clarifai\Api\MultiAnnotationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the annotations for a given cluser.
     * @param \Clarifai\Api\PostClustersSearchesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostClustersSearches(\Clarifai\Api\PostClustersSearchesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostClustersSearches',
        $argument,
        ['\Clarifai\Api\MultiClusterResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify email
     * @param \Clarifai\Api\PostVerifyEmailRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostVerifyEmail(\Clarifai\Api\PostVerifyEmailRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostVerifyEmail',
        $argument,
        ['\Clarifai\Api\SingleVerifyEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Request for password reset email
     * @param \Clarifai\Api\RequestResetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostRequestResetPassword(\Clarifai\Api\RequestResetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostRequestResetPassword',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Complete reset password
     * @param \Clarifai\Api\CompleteResetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostCompleteResetPassword(\Clarifai\Api\CompleteResetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostCompleteResetPassword',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Login with user/pass
     * @param \Clarifai\Api\PostLoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostLogin(\Clarifai\Api\PostLoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostLogin',
        $argument,
        ['\Clarifai\Api\SingleLoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Signup with account.
     * @param \Clarifai\Api\PostSignupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostSignup(\Clarifai\Api\PostSignupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostSignup',
        $argument,
        ['\Clarifai\Api\SingleLoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Logout use
     * @param \Clarifai\Api\PostLogoutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostLogout(\Clarifai\Api\PostLogoutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostLogout',
        $argument,
        ['\Clarifai\Api\SingleLogoutResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List available authentication methods, e.g.
     * * standard auth method - login using user & password
     * * SAML auth methods - SSO using SAML Identity Providers like Okta, Github, Google GSuite, LinkedIn, etc.
     * @param \Clarifai\Api\ListAuthMethodsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAuthMethods(\Clarifai\Api\ListAuthMethodsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAuthMethods',
        $argument,
        ['\Clarifai\Api\ListAuthMethodsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListOrgAuthMethods
     * @param \Clarifai\Api\ListAuthMethodsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrgAuthMethods(\Clarifai\Api\ListAuthMethodsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListOrgAuthMethods',
        $argument,
        ['\Clarifai\Api\ListAuthMethodsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListOrgAuthMethods
     * @param \Clarifai\Api\PostIdLoginFinalizerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostIdLoginFinalizer(\Clarifai\Api\PostIdLoginFinalizerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostIdLoginFinalizer',
        $argument,
        ['\Clarifai\Api\PostIdLoginFinalizerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostLinkIdpUser
     * @param \Clarifai\Api\PostLinkIdpUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostLinkIdpUser(\Clarifai\Api\PostLinkIdpUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostLinkIdpUser',
        $argument,
        ['\Clarifai\Api\PostLinkIdpUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetLoginInfo
     * @param \Clarifai\Api\GetLoginInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLoginInfo(\Clarifai\Api\GetLoginInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetLoginInfo',
        $argument,
        ['\Clarifai\Api\GetLoginInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List available 2FA methods in current environment, e.g.
     * * TOTP auth method - login layer using time synced  codes
     * @param \Clarifai\Api\List2FAMethodsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAuth2FAMethods(\Clarifai\Api\List2FAMethodsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListAuth2FAMethods',
        $argument,
        ['\Clarifai\Api\List2FAMethodsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Enable Clarifai TOTP 2FA
     * @param \Clarifai\Api\PostAuth2FATotpRegisterEnableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAuth2FATotpRegisterEnable(\Clarifai\Api\PostAuth2FATotpRegisterEnableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAuth2FATotpRegisterEnable',
        $argument,
        ['\Clarifai\Api\PostAuth2FATotpRegisterEnableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Verify Clarifai TOTP 2FA activation
     * @param \Clarifai\Api\PostAuth2FATotpRegisterVerifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAuth2FATotpRegisterVerify(\Clarifai\Api\PostAuth2FATotpRegisterVerifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAuth2FATotpRegisterVerify',
        $argument,
        ['\Clarifai\Api\PostAuth2FATotpRegisterVerifyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Disable Clarifai TOTP 2FA
     * @param \Clarifai\Api\PostAuth2FATotpDisableRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAuth2FATotpDisable(\Clarifai\Api\PostAuth2FATotpDisableRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAuth2FATotpDisable',
        $argument,
        ['\Clarifai\Api\PostAuth2FATotpDisableResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Login with Clarifai TOTP 2FA activation
     * @param \Clarifai\Api\PostAuth2FATotpLoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAuth2FATotpLogin(\Clarifai\Api\PostAuth2FATotpLoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAuth2FATotpLogin',
        $argument,
        ['\Clarifai\Api\SingleLoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Recover users Clarifai TOTP 2FA activation through sending an email confirmation.
     * @param \Clarifai\Api\PostAuth2FATotpRecoverRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAuth2FATotpRecover(\Clarifai\Api\PostAuth2FATotpRecoverRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAuth2FATotpRecover',
        $argument,
        ['\Clarifai\Api\PostAuth2FATotpRecoverResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Confirm the recovery of users Clarifai TOTP 2FA. Will be called by user from email link (via portal).
     * @param \Clarifai\Api\GetAuth2FATotpRecoverConfirmRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAuth2FATotpRecoverConfirm(\Clarifai\Api\GetAuth2FATotpRecoverConfirmRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetAuth2FATotpRecoverConfirm',
        $argument,
        ['\Clarifai\Api\GetAuth2FATotpRecoverConfirmResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List the subscriptions.
     * @param \Clarifai\Api\GetSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSubscription(\Clarifai\Api\GetSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetSubscription',
        $argument,
        ['\Clarifai\Api\SingleSubscriptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new subscription.
     * @param \Clarifai\Api\PostSubscriptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostSubscription(\Clarifai\Api\PostSubscriptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostSubscription',
        $argument,
        ['\Clarifai\Api\SingleSubscriptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all credit cards.
     * @param \Clarifai\Api\ListCreditCardsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCreditCards(\Clarifai\Api\ListCreditCardsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListCreditCards',
        $argument,
        ['\Clarifai\Api\MultipleCreditCardResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new credit card.
     * @param \Clarifai\Api\PostCreditCardRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostCreditCard(\Clarifai\Api\PostCreditCardRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostCreditCard',
        $argument,
        ['\Clarifai\Api\SingleCreditCardResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete a credit card.
     * @param \Clarifai\Api\DeleteCreditCardRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCreditCard(\Clarifai\Api\DeleteCreditCardRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteCreditCard',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a credit card.
     * @param \Clarifai\Api\PatchCreditCardsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchCreditCards(\Clarifai\Api\PatchCreditCardsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchCreditCards',
        $argument,
        ['\Clarifai\Api\MultipleCreditCardResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get the shipping address.
     * @param \Clarifai\Api\GetShippingAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetShippingAddress(\Clarifai\Api\GetShippingAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetShippingAddress',
        $argument,
        ['\Clarifai\Api\SingleShippingAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update shipping address.
     * @param \Clarifai\Api\PutShippingAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PutShippingAddress(\Clarifai\Api\PutShippingAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PutShippingAddress',
        $argument,
        ['\Clarifai\Api\SingleShippingAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListPlans
     * @param \Clarifai\Api\ListPlansRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPlans(\Clarifai\Api\ListPlansRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListPlans',
        $argument,
        ['\Clarifai\Api\MultiPlanResponse', 'decode'],
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
     * Health check endpoint
     * @param \Clarifai\Api\GetHealthzRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetHealthz(\Clarifai\Api\GetHealthzRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetHealthz',
        $argument,
        ['\Clarifai\Api\GetHealthzResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all billing  cycles - old billing
     * @param \Clarifai\Api\ListUserBillingCyclesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUserBillingCycles(\Clarifai\Api\ListUserBillingCyclesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListUserBillingCycles',
        $argument,
        ['\Clarifai\Api\ListUserBillingCyclesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List user usage.cycles.
     * @param \Clarifai\Api\ListUserCyclesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUserCycles(\Clarifai\Api\ListUserCyclesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListUserCycles',
        $argument,
        ['\Clarifai\Api\ListUserCyclesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the billing cycle start and end date as well as invoice items.
     * @param \Clarifai\Api\GetBillingUsageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBillingUsage(\Clarifai\Api\GetBillingUsageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetBillingUsage',
        $argument,
        ['\Clarifai\Api\GetBillingUsageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add historical usage. - Billing 1
     * @param \Clarifai\Api\PostHistoricalUsageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostHistoricalUsage(\Clarifai\Api\PostHistoricalUsageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostHistoricalUsage',
        $argument,
        ['\Clarifai\Api\PostHistoricalUsageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get historical usage. - Billing 2
     * @param \Clarifai\Api\GetHistoricalUsageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetHistoricalUsage(\Clarifai\Api\GetHistoricalUsageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetHistoricalUsage',
        $argument,
        ['\Clarifai\Api\GetHistoricalUsageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a list of valid usage intervals
     * @param \Clarifai\Api\ListUsageIntervalsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListUsageIntervals(\Clarifai\Api\ListUsageIntervalsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListUsageIntervals',
        $argument,
        ['\Clarifai\Api\ListUsageIntervalsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get realtime usage.
     * @param \Clarifai\Api\GetRealtimeUsageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRealtimeUsage(\Clarifai\Api\GetRealtimeUsageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetRealtimeUsage',
        $argument,
        ['\Clarifai\Api\GetRealtimeUsageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Post usage to platform. Only called by on prem now.
     * @param \Clarifai\Api\PostUsageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostUsage(\Clarifai\Api\PostUsageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostUsage',
        $argument,
        ['\Clarifai\Api\PostUsageResponse', 'decode'],
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
     * Get the license with crypto security.
     * @param \Clarifai\Api\FetchLicenseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FetchLicense(\Clarifai\Api\FetchLicenseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/FetchLicense',
        $argument,
        ['\Clarifai\Api\FetchLicenseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all licenses.
     * @param \Clarifai\Api\ListLicensesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListLicenses(\Clarifai\Api\ListLicensesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListLicenses',
        $argument,
        ['\Clarifai\Api\MultipleLicensesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a license
     * @param \Clarifai\Api\GetLicenseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLicense(\Clarifai\Api\GetLicenseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetLicense',
        $argument,
        ['\Clarifai\Api\SingleLicenseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Check that a license is still valid.
     * @param \Clarifai\Api\ValidateLicenseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateLicense(\Clarifai\Api\ValidateLicenseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ValidateLicense',
        $argument,
        ['\Clarifai\Api\ValidateLicenseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * start to duplicate an app which copies all the inputs, annotations, models, concepts etc. to a new app.
     * this is an async process, you should use ListAppDuplications or GetAppDuplication to check the status.
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
     * list all the app duplications user triggers
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
     * get the app duplication status
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
     * Rollup annotation count for task.
     * @param \Clarifai\Api\PatchAnnotationCountsRollupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchAnnotationCountsRollup(\Clarifai\Api\PatchAnnotationCountsRollupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchAnnotationCountsRollup',
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
     * Add a new analytics entry into our database
     * @param \Clarifai\Api\PostAnalyticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostAnalytics(\Clarifai\Api\PostAnalyticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostAnalytics',
        $argument,
        ['\Clarifai\Api\PostAnalyticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Add a new sdk_billing entry into our database
     * @param \Clarifai\Api\PostSDKBillingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostSDKBilling(\Clarifai\Api\PostSDKBillingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostSDKBilling',
        $argument,
        ['\Clarifai\Api\PostSDKBillingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Find annotations duplicates based on an specified attribute of different annotations
     * @param \Clarifai\Api\PostFindDuplicateAnnotationsJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostFindDuplicateAnnotationsJobs(\Clarifai\Api\PostFindDuplicateAnnotationsJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostFindDuplicateAnnotationsJobs',
        $argument,
        ['\Clarifai\Api\MultiFindDuplicateAnnotationsJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get annotations find duplicates jobs results by id
     * @param \Clarifai\Api\GetFindDuplicateAnnotationsJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFindDuplicateAnnotationsJob(\Clarifai\Api\GetFindDuplicateAnnotationsJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetFindDuplicateAnnotationsJob',
        $argument,
        ['\Clarifai\Api\SingleFindDuplicateAnnotationsJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the annotations find duplicates jobs results
     * @param \Clarifai\Api\ListFindDuplicateAnnotationsJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListFindDuplicateAnnotationsJobs(\Clarifai\Api\ListFindDuplicateAnnotationsJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListFindDuplicateAnnotationsJobs',
        $argument,
        ['\Clarifai\Api\MultiFindDuplicateAnnotationsJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteFindDuplicateAnnotationsJobs
     * @param \Clarifai\Api\DeleteFindDuplicateAnnotationsJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteFindDuplicateAnnotationsJobs(\Clarifai\Api\DeleteFindDuplicateAnnotationsJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteFindDuplicateAnnotationsJobs',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Increase the view metric for a detail view
     * @param \Clarifai\Api\PostTrendingMetricsViewRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function ListTrendingMetricsViews(\Clarifai\Api\ListTrendingMetricsViewsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListTrendingMetricsViews',
        $argument,
        ['\Clarifai\Api\MultiTrendingMetricsViewResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Validates the ids (app and user supported), returns validation errors and recommendations
     * @param \Clarifai\Api\PostIdValidationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostIdValidation(\Clarifai\Api\PostIdValidationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostIdValidation',
        $argument,
        ['\Clarifai\Api\MultiIdValidationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List all the available tags for specified object_type grouped by category
     * @param \Clarifai\Api\ListTagCategoriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListTagCategories(\Clarifai\Api\ListTagCategoriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListTagCategories',
        $argument,
        ['\Clarifai\Api\MultiTagCategoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List users web notifications
     * @param \Clarifai\Api\ListWebNotificationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListWebNotifications(\Clarifai\Api\ListWebNotificationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/ListWebNotifications',
        $argument,
        ['\Clarifai\Api\MultiWebNotificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Get a web notification
     * @param \Clarifai\Api\GetWebNotificationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWebNotification(\Clarifai\Api\GetWebNotificationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetWebNotification',
        $argument,
        ['\Clarifai\Api\SingleWebNotificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Update users web notifications
     * @param \Clarifai\Api\PatchWebNotificationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PatchWebNotifications(\Clarifai\Api\PatchWebNotificationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PatchWebNotifications',
        $argument,
        ['\Clarifai\Api\MultiWebNotificationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Delete users web notifications
     * @param \Clarifai\Api\DeleteWebNotificationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteWebNotifications(\Clarifai\Api\DeleteWebNotificationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/DeleteWebNotifications',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
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
     * Get a specific job.
     * @param \Clarifai\Api\GetDatasetInputsSearchAddJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDatasetInputsSearchAddJob(\Clarifai\Api\GetDatasetInputsSearchAddJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetDatasetInputsSearchAddJob',
        $argument,
        ['\Clarifai\Api\SingleDatasetInputsSearchAddJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * List next non-labeled and unassigned inputs from task's dataset
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
     * PutTaskAssignments evaluates all the annotations by labeler (authenticated user) for given task (task_id) and input (input_id).
     * @param \Clarifai\Api\PutTaskAssignmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PutTaskAssignments(\Clarifai\Api\PutTaskAssignmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PutTaskAssignments',
        $argument,
        ['\Clarifai\Api\Status\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * PostWaitlistEmails adds new e-mail addresses to a feature waiting list.
     * @param \Clarifai\Api\PostWaitlistEmailsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostWaitlistEmails(\Clarifai\Api\PostWaitlistEmailsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostWaitlistEmails',
        $argument,
        ['\Clarifai\Api\MultiWaitlistEmailResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetSampledPredictResults get sampled prediction metrics by model id
     * @param \Clarifai\Api\GetSampledPredictMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSampledPredictMetrics(\Clarifai\Api\GetSampledPredictMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/GetSampledPredictMetrics',
        $argument,
        ['\Clarifai\Api\MultiSampledPredictMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Create a job to add inputs from a cloud storage to an app on the clarifai platform
     * This is an Asynchronous process. Use ListInputsAddJobs or GetInputsJob to check the status.
     * @param \Clarifai\Api\PostInputsAddJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PostInputsAddJobs(\Clarifai\Api\PostInputsAddJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/clarifai.api.V2/PostInputsAddJobs',
        $argument,
        ['\Clarifai\Api\MultiInputsAddJobResponse', 'decode'],
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

}
