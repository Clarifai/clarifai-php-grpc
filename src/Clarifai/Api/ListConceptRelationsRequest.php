<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GET all relations such that the concept_id refers to the subject of the relation
 *
 * Generated from protobuf message <code>clarifai.api.ListConceptRelationsRequest</code>
 */
class ListConceptRelationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The user_id and app_id information.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * The subject concept id in your app to get all the relationships for.
     * Leave as an empty string (GET /concepts/relations) to list ALL the relations in the app.
     * When listing all the relations it will only return one direction of the relationship
     * with the predicate acting on the subject and not the inverse like is done when providing a
     * concept_id so that we can return a reliable page size always.
     * When providing a concept_id, if a hyponym is present in the DB such as:
     * 'honey' (subject), 'hyponym' (predicate for "is a kind of"), 'food' (object)
     * then you can list the concept relations for 'honey' and get hyponym predicate with 'food'
     * object.
     * But you can also list the concept relations for 'food' and it will return the same hyponym
     * relationship with 'honey' as object and 'hypernym' as predicate.
     * Synonyms by nature are symmetrical relationships so either side can be the concept_id (subject)
     * when listing the relations.
     *
     * Generated from protobuf field <code>string concept_id = 2;</code>
     */
    protected $concept_id = '';
    /**
     * If predicate is provided then only list relations with that predicate.
     * Note that if no subject is set in concept_id and predicate is set to
     * 'hypernym', then it will return any stored hyponyms as hypernyms with
     * just the subject and object swapped since they are reversed relations.
     * Valid predicates are:
     * - 'hypernym'
     * - 'hyponym'
     * - 'synonym'
     *
     * Generated from protobuf field <code>string predicate = 3;</code>
     */
    protected $predicate = '';
    /**
     * If knowledge_graph_id is provided then just list relations from that knowledge graph.
     * If not provided then list relations from all knowledge graphs including the global one for this
     * app one (ie. knowledge_graph "") and any specific ones in the app.
     *
     * Generated from protobuf field <code>string knowledge_graph_id = 4;</code>
     */
    protected $knowledge_graph_id = '';
    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to 1.
     *
     * Generated from protobuf field <code>uint32 page = 5;</code>
     */
    protected $page = 0;
    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 128.
     *
     * Generated from protobuf field <code>uint32 per_page = 6;</code>
     */
    protected $per_page = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *           The user_id and app_id information.
     *     @type string $concept_id
     *           The subject concept id in your app to get all the relationships for.
     *           Leave as an empty string (GET /concepts/relations) to list ALL the relations in the app.
     *           When listing all the relations it will only return one direction of the relationship
     *           with the predicate acting on the subject and not the inverse like is done when providing a
     *           concept_id so that we can return a reliable page size always.
     *           When providing a concept_id, if a hyponym is present in the DB such as:
     *           'honey' (subject), 'hyponym' (predicate for "is a kind of"), 'food' (object)
     *           then you can list the concept relations for 'honey' and get hyponym predicate with 'food'
     *           object.
     *           But you can also list the concept relations for 'food' and it will return the same hyponym
     *           relationship with 'honey' as object and 'hypernym' as predicate.
     *           Synonyms by nature are symmetrical relationships so either side can be the concept_id (subject)
     *           when listing the relations.
     *     @type string $predicate
     *           If predicate is provided then only list relations with that predicate.
     *           Note that if no subject is set in concept_id and predicate is set to
     *           'hypernym', then it will return any stored hyponyms as hypernyms with
     *           just the subject and object swapped since they are reversed relations.
     *           Valid predicates are:
     *           - 'hypernym'
     *           - 'hyponym'
     *           - 'synonym'
     *     @type string $knowledge_graph_id
     *           If knowledge_graph_id is provided then just list relations from that knowledge graph.
     *           If not provided then list relations from all knowledge graphs including the global one for this
     *           app one (ie. knowledge_graph "") and any specific ones in the app.
     *     @type int $page
     *           (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     *           Defaults to 1.
     *     @type int $per_page
     *           (optional URL parameter) The number of results that will be contained in each page. Defaults
     *           to 128.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The user_id and app_id information.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet|null
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    public function hasUserAppId()
    {
        return isset($this->user_app_id);
    }

    public function clearUserAppId()
    {
        unset($this->user_app_id);
    }

    /**
     * The user_id and app_id information.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Api\UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * The subject concept id in your app to get all the relationships for.
     * Leave as an empty string (GET /concepts/relations) to list ALL the relations in the app.
     * When listing all the relations it will only return one direction of the relationship
     * with the predicate acting on the subject and not the inverse like is done when providing a
     * concept_id so that we can return a reliable page size always.
     * When providing a concept_id, if a hyponym is present in the DB such as:
     * 'honey' (subject), 'hyponym' (predicate for "is a kind of"), 'food' (object)
     * then you can list the concept relations for 'honey' and get hyponym predicate with 'food'
     * object.
     * But you can also list the concept relations for 'food' and it will return the same hyponym
     * relationship with 'honey' as object and 'hypernym' as predicate.
     * Synonyms by nature are symmetrical relationships so either side can be the concept_id (subject)
     * when listing the relations.
     *
     * Generated from protobuf field <code>string concept_id = 2;</code>
     * @return string
     */
    public function getConceptId()
    {
        return $this->concept_id;
    }

    /**
     * The subject concept id in your app to get all the relationships for.
     * Leave as an empty string (GET /concepts/relations) to list ALL the relations in the app.
     * When listing all the relations it will only return one direction of the relationship
     * with the predicate acting on the subject and not the inverse like is done when providing a
     * concept_id so that we can return a reliable page size always.
     * When providing a concept_id, if a hyponym is present in the DB such as:
     * 'honey' (subject), 'hyponym' (predicate for "is a kind of"), 'food' (object)
     * then you can list the concept relations for 'honey' and get hyponym predicate with 'food'
     * object.
     * But you can also list the concept relations for 'food' and it will return the same hyponym
     * relationship with 'honey' as object and 'hypernym' as predicate.
     * Synonyms by nature are symmetrical relationships so either side can be the concept_id (subject)
     * when listing the relations.
     *
     * Generated from protobuf field <code>string concept_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConceptId($var)
    {
        GPBUtil::checkString($var, True);
        $this->concept_id = $var;

        return $this;
    }

    /**
     * If predicate is provided then only list relations with that predicate.
     * Note that if no subject is set in concept_id and predicate is set to
     * 'hypernym', then it will return any stored hyponyms as hypernyms with
     * just the subject and object swapped since they are reversed relations.
     * Valid predicates are:
     * - 'hypernym'
     * - 'hyponym'
     * - 'synonym'
     *
     * Generated from protobuf field <code>string predicate = 3;</code>
     * @return string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * If predicate is provided then only list relations with that predicate.
     * Note that if no subject is set in concept_id and predicate is set to
     * 'hypernym', then it will return any stored hyponyms as hypernyms with
     * just the subject and object swapped since they are reversed relations.
     * Valid predicates are:
     * - 'hypernym'
     * - 'hyponym'
     * - 'synonym'
     *
     * Generated from protobuf field <code>string predicate = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPredicate($var)
    {
        GPBUtil::checkString($var, True);
        $this->predicate = $var;

        return $this;
    }

    /**
     * If knowledge_graph_id is provided then just list relations from that knowledge graph.
     * If not provided then list relations from all knowledge graphs including the global one for this
     * app one (ie. knowledge_graph "") and any specific ones in the app.
     *
     * Generated from protobuf field <code>string knowledge_graph_id = 4;</code>
     * @return string
     */
    public function getKnowledgeGraphId()
    {
        return $this->knowledge_graph_id;
    }

    /**
     * If knowledge_graph_id is provided then just list relations from that knowledge graph.
     * If not provided then list relations from all knowledge graphs including the global one for this
     * app one (ie. knowledge_graph "") and any specific ones in the app.
     *
     * Generated from protobuf field <code>string knowledge_graph_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setKnowledgeGraphId($var)
    {
        GPBUtil::checkString($var, True);
        $this->knowledge_graph_id = $var;

        return $this;
    }

    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to 1.
     *
     * Generated from protobuf field <code>uint32 page = 5;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * (optional URL parameter) The page number. Pagination is used to split the results into chunks.
     * Defaults to 1.
     *
     * Generated from protobuf field <code>uint32 page = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkUint32($var);
        $this->page = $var;

        return $this;
    }

    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 128.
     *
     * Generated from protobuf field <code>uint32 per_page = 6;</code>
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * (optional URL parameter) The number of results that will be contained in each page. Defaults
     * to 128.
     *
     * Generated from protobuf field <code>uint32 per_page = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPerPage($var)
    {
        GPBUtil::checkUint32($var);
        $this->per_page = $var;

        return $this;
    }

}

