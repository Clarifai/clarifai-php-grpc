<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostAnnotationSearchMetricsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostAnnotationSearchMetricsRequest</code>
 */
class PostAnnotationSearchMetricsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * A unique customer facing id to identify this eval request
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    /**
     * The ground truth we are evaluating against
     *
     * Generated from protobuf field <code>.clarifai.api.Search ground_truth = 3;</code>
     */
    protected $ground_truth = null;
    /**
     * The set we are evaluating
     *
     * Generated from protobuf field <code>.clarifai.api.Search search_to_eval = 4;</code>
     */
    protected $search_to_eval = null;
    /**
     * List of concepts to evaluate are expected to be in data.concepts
     * If nil, then all app concepts are used
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 5;</code>
     */
    protected $data = null;
    /**
     * The type of evaluation to use
     *
     * Generated from protobuf field <code>.clarifai.api.EvaluationType evaluation_type = 6;</code>
     */
    protected $evaluation_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $id
     *           A unique customer facing id to identify this eval request
     *     @type \Clarifai\Api\Search $ground_truth
     *           The ground truth we are evaluating against
     *     @type \Clarifai\Api\Search $search_to_eval
     *           The set we are evaluating
     *     @type \Clarifai\Api\Data $data
     *           List of concepts to evaluate are expected to be in data.concepts
     *           If nil, then all app concepts are used
     *     @type int $evaluation_type
     *           The type of evaluation to use
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
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
     * A unique customer facing id to identify this eval request
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique customer facing id to identify this eval request
     *
     * Generated from protobuf field <code>string id = 2;</code>
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
     * The ground truth we are evaluating against
     *
     * Generated from protobuf field <code>.clarifai.api.Search ground_truth = 3;</code>
     * @return \Clarifai\Api\Search|null
     */
    public function getGroundTruth()
    {
        return $this->ground_truth;
    }

    public function hasGroundTruth()
    {
        return isset($this->ground_truth);
    }

    public function clearGroundTruth()
    {
        unset($this->ground_truth);
    }

    /**
     * The ground truth we are evaluating against
     *
     * Generated from protobuf field <code>.clarifai.api.Search ground_truth = 3;</code>
     * @param \Clarifai\Api\Search $var
     * @return $this
     */
    public function setGroundTruth($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Search::class);
        $this->ground_truth = $var;

        return $this;
    }

    /**
     * The set we are evaluating
     *
     * Generated from protobuf field <code>.clarifai.api.Search search_to_eval = 4;</code>
     * @return \Clarifai\Api\Search|null
     */
    public function getSearchToEval()
    {
        return $this->search_to_eval;
    }

    public function hasSearchToEval()
    {
        return isset($this->search_to_eval);
    }

    public function clearSearchToEval()
    {
        unset($this->search_to_eval);
    }

    /**
     * The set we are evaluating
     *
     * Generated from protobuf field <code>.clarifai.api.Search search_to_eval = 4;</code>
     * @param \Clarifai\Api\Search $var
     * @return $this
     */
    public function setSearchToEval($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Search::class);
        $this->search_to_eval = $var;

        return $this;
    }

    /**
     * List of concepts to evaluate are expected to be in data.concepts
     * If nil, then all app concepts are used
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 5;</code>
     * @return \Clarifai\Api\Data|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * List of concepts to evaluate are expected to be in data.concepts
     * If nil, then all app concepts are used
     *
     * Generated from protobuf field <code>.clarifai.api.Data data = 5;</code>
     * @param \Clarifai\Api\Data $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Data::class);
        $this->data = $var;

        return $this;
    }

    /**
     * The type of evaluation to use
     *
     * Generated from protobuf field <code>.clarifai.api.EvaluationType evaluation_type = 6;</code>
     * @return int
     */
    public function getEvaluationType()
    {
        return $this->evaluation_type;
    }

    /**
     * The type of evaluation to use
     *
     * Generated from protobuf field <code>.clarifai.api.EvaluationType evaluation_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEvaluationType($var)
    {
        GPBUtil::checkEnum($var, \Clarifai\Api\EvaluationType::class);
        $this->evaluation_type = $var;

        return $this;
    }

}

