<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LOPQEvalResult
 *
 * Generated from protobuf message <code>clarifai.api.LOPQEvalResult</code>
 */
class LOPQEvalResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Rank k for which all metrics are reported.
     *
     * Generated from protobuf field <code>int32 k = 1;</code>
     */
    protected $k = 0;
    /**
     * Recall &#64; k assuming the brute force search is the ground truth.
     *
     * Generated from protobuf field <code>float recall_vs_brute_force = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $recall_vs_brute_force = 0.0;
    /**
     * Kendall's tau correlation &#64; k assuming the brute force search is the ground truth.
     *
     * Generated from protobuf field <code>float kendall_tau_vs_brute_force = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $kendall_tau_vs_brute_force = 0.0;
    /**
     * The percentage of the most frequent code in the indexed part of evaluation data.
     *
     * Generated from protobuf field <code>float most_frequent_code_percent = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $most_frequent_code_percent = 0.0;
    /**
     * Normalized Discounted Cumulative Gain (NDCG) &#64; k with a ground truth inferred from annotations
     * and/or prediction for this evaluation LOPQ model.
     * NDCG uses individual relevance scores of each returned image to evaluate the usefulness, or
     * gain, of a document based on its position in the result list. The premise of DCG is that
     * highly relevant documents appearing lower in a search result list should be penalized as the
     * graded relevance value is reduced logarithmically proportional to the position of the result.
     * See: https://en.wikipedia.org/wiki/Information_retrieval#Discounted_cumulative_gain
     * To compute the relevance score between two images we consider two cases:
     * 1) Only one label for each image
     * An image is relevant to an image query iff they are labeled the same (score 1), and
     * not relevant otherwise (score 0)
     * 2) Multiple labels for each image
     * Here an image relevancy with respect to a single image query is measured by f-beta score
     * assuming the query image list of labels as ground truth and comparing them with that of
     * the search result. These labels can come from image annotations or if substitute_annotation_misses
     * is set, predictions of base classifier where any prediction with prob < prob_threshold are
     * discarded. To quantify the relevancy score of a single search result we opt to compute precision
     * and recall &#64; k for simplicity, and combine them with f-beta score to obtain a single number.
     *
     * Generated from protobuf field <code>float lopq_ndcg = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $lopq_ndcg = 0.0;
    /**
     * Brute force NDCG which gives a baseline to compare to and is a measure of how good
     * the embeddings are.
     *
     * Generated from protobuf field <code>float brute_force_ndcg = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     */
    protected $brute_force_ndcg = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $k
     *           Rank k for which all metrics are reported.
     *     @type float $recall_vs_brute_force
     *           Recall &#64; k assuming the brute force search is the ground truth.
     *     @type float $kendall_tau_vs_brute_force
     *           Kendall's tau correlation &#64; k assuming the brute force search is the ground truth.
     *     @type float $most_frequent_code_percent
     *           The percentage of the most frequent code in the indexed part of evaluation data.
     *     @type float $lopq_ndcg
     *           Normalized Discounted Cumulative Gain (NDCG) &#64; k with a ground truth inferred from annotations
     *           and/or prediction for this evaluation LOPQ model.
     *           NDCG uses individual relevance scores of each returned image to evaluate the usefulness, or
     *           gain, of a document based on its position in the result list. The premise of DCG is that
     *           highly relevant documents appearing lower in a search result list should be penalized as the
     *           graded relevance value is reduced logarithmically proportional to the position of the result.
     *           See: https://en.wikipedia.org/wiki/Information_retrieval#Discounted_cumulative_gain
     *           To compute the relevance score between two images we consider two cases:
     *           1) Only one label for each image
     *           An image is relevant to an image query iff they are labeled the same (score 1), and
     *           not relevant otherwise (score 0)
     *           2) Multiple labels for each image
     *           Here an image relevancy with respect to a single image query is measured by f-beta score
     *           assuming the query image list of labels as ground truth and comparing them with that of
     *           the search result. These labels can come from image annotations or if substitute_annotation_misses
     *           is set, predictions of base classifier where any prediction with prob < prob_threshold are
     *           discarded. To quantify the relevancy score of a single search result we opt to compute precision
     *           and recall &#64; k for simplicity, and combine them with f-beta score to obtain a single number.
     *     @type float $brute_force_ndcg
     *           Brute force NDCG which gives a baseline to compare to and is a measure of how good
     *           the embeddings are.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Rank k for which all metrics are reported.
     *
     * Generated from protobuf field <code>int32 k = 1;</code>
     * @return int
     */
    public function getK()
    {
        return $this->k;
    }

    /**
     * Rank k for which all metrics are reported.
     *
     * Generated from protobuf field <code>int32 k = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setK($var)
    {
        GPBUtil::checkInt32($var);
        $this->k = $var;

        return $this;
    }

    /**
     * Recall &#64; k assuming the brute force search is the ground truth.
     *
     * Generated from protobuf field <code>float recall_vs_brute_force = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getRecallVsBruteForce()
    {
        return $this->recall_vs_brute_force;
    }

    /**
     * Recall &#64; k assuming the brute force search is the ground truth.
     *
     * Generated from protobuf field <code>float recall_vs_brute_force = 2 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setRecallVsBruteForce($var)
    {
        GPBUtil::checkFloat($var);
        $this->recall_vs_brute_force = $var;

        return $this;
    }

    /**
     * Kendall's tau correlation &#64; k assuming the brute force search is the ground truth.
     *
     * Generated from protobuf field <code>float kendall_tau_vs_brute_force = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getKendallTauVsBruteForce()
    {
        return $this->kendall_tau_vs_brute_force;
    }

    /**
     * Kendall's tau correlation &#64; k assuming the brute force search is the ground truth.
     *
     * Generated from protobuf field <code>float kendall_tau_vs_brute_force = 3 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setKendallTauVsBruteForce($var)
    {
        GPBUtil::checkFloat($var);
        $this->kendall_tau_vs_brute_force = $var;

        return $this;
    }

    /**
     * The percentage of the most frequent code in the indexed part of evaluation data.
     *
     * Generated from protobuf field <code>float most_frequent_code_percent = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getMostFrequentCodePercent()
    {
        return $this->most_frequent_code_percent;
    }

    /**
     * The percentage of the most frequent code in the indexed part of evaluation data.
     *
     * Generated from protobuf field <code>float most_frequent_code_percent = 4 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setMostFrequentCodePercent($var)
    {
        GPBUtil::checkFloat($var);
        $this->most_frequent_code_percent = $var;

        return $this;
    }

    /**
     * Normalized Discounted Cumulative Gain (NDCG) &#64; k with a ground truth inferred from annotations
     * and/or prediction for this evaluation LOPQ model.
     * NDCG uses individual relevance scores of each returned image to evaluate the usefulness, or
     * gain, of a document based on its position in the result list. The premise of DCG is that
     * highly relevant documents appearing lower in a search result list should be penalized as the
     * graded relevance value is reduced logarithmically proportional to the position of the result.
     * See: https://en.wikipedia.org/wiki/Information_retrieval#Discounted_cumulative_gain
     * To compute the relevance score between two images we consider two cases:
     * 1) Only one label for each image
     * An image is relevant to an image query iff they are labeled the same (score 1), and
     * not relevant otherwise (score 0)
     * 2) Multiple labels for each image
     * Here an image relevancy with respect to a single image query is measured by f-beta score
     * assuming the query image list of labels as ground truth and comparing them with that of
     * the search result. These labels can come from image annotations or if substitute_annotation_misses
     * is set, predictions of base classifier where any prediction with prob < prob_threshold are
     * discarded. To quantify the relevancy score of a single search result we opt to compute precision
     * and recall &#64; k for simplicity, and combine them with f-beta score to obtain a single number.
     *
     * Generated from protobuf field <code>float lopq_ndcg = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getLopqNdcg()
    {
        return $this->lopq_ndcg;
    }

    /**
     * Normalized Discounted Cumulative Gain (NDCG) &#64; k with a ground truth inferred from annotations
     * and/or prediction for this evaluation LOPQ model.
     * NDCG uses individual relevance scores of each returned image to evaluate the usefulness, or
     * gain, of a document based on its position in the result list. The premise of DCG is that
     * highly relevant documents appearing lower in a search result list should be penalized as the
     * graded relevance value is reduced logarithmically proportional to the position of the result.
     * See: https://en.wikipedia.org/wiki/Information_retrieval#Discounted_cumulative_gain
     * To compute the relevance score between two images we consider two cases:
     * 1) Only one label for each image
     * An image is relevant to an image query iff they are labeled the same (score 1), and
     * not relevant otherwise (score 0)
     * 2) Multiple labels for each image
     * Here an image relevancy with respect to a single image query is measured by f-beta score
     * assuming the query image list of labels as ground truth and comparing them with that of
     * the search result. These labels can come from image annotations or if substitute_annotation_misses
     * is set, predictions of base classifier where any prediction with prob < prob_threshold are
     * discarded. To quantify the relevancy score of a single search result we opt to compute precision
     * and recall &#64; k for simplicity, and combine them with f-beta score to obtain a single number.
     *
     * Generated from protobuf field <code>float lopq_ndcg = 5 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setLopqNdcg($var)
    {
        GPBUtil::checkFloat($var);
        $this->lopq_ndcg = $var;

        return $this;
    }

    /**
     * Brute force NDCG which gives a baseline to compare to and is a measure of how good
     * the embeddings are.
     *
     * Generated from protobuf field <code>float brute_force_ndcg = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @return float
     */
    public function getBruteForceNdcg()
    {
        return $this->brute_force_ndcg;
    }

    /**
     * Brute force NDCG which gives a baseline to compare to and is a measure of how good
     * the embeddings are.
     *
     * Generated from protobuf field <code>float brute_force_ndcg = 6 [(.clarifai.api.utils.cl_show_if_empty) = true];</code>
     * @param float $var
     * @return $this
     */
    public function setBruteForceNdcg($var)
    {
        GPBUtil::checkFloat($var);
        $this->brute_force_ndcg = $var;

        return $this;
    }

}

