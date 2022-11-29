<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostWorkflowMetricsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PostWorkflowMetricsRequest</code>
 */
class PostWorkflowMetricsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Identify the workflow.
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * Specify list of workflow metrics data to add.
     * All fields are optional.
     * Allowed fields to set:
     * * id
     * - provide custom id for the evaluation
     * - if empty, then an id is automatically generated
     * * data
     * - provide concepts to be used for this evaluation
     * - if empty, then all app concepts are used
     * - Example: "data": {
     *                "concepts": [{"id": "{{concept_id}}"}]
     *            }
     * * node_metrics
     * - provide the workflow nodes to be evaluated
     * - if empty, then all evaluable workflow nodes will be evaluated
     * - Example: "node_metrics": {
     *               "node_1": {},
     *               "node_2": {},
     *            }
     * * ground_truth
     * - provide the ground truth data set to search for
     * - if not set, then ground truth is retrieved from current app's inputs and annotations
     * - Example: "ground_truth": {
     *                "query": {
     *                    "ands": {
     *                        "annotation": {
     *                            "data": {
     *                                "concepts": [{"id": "concept"}]
     *                            }
     *                        }
     *                     }
     *                },
     *            }
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowMetrics workflow_metrics = 3;</code>
     */
    private $workflow_metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string $workflow_id
     *           Identify the workflow.
     *     @type \Clarifai\Api\WorkflowMetrics[]|\Google\Protobuf\Internal\RepeatedField $workflow_metrics
     *           Specify list of workflow metrics data to add.
     *           All fields are optional.
     *           Allowed fields to set:
     *           * id
     *           - provide custom id for the evaluation
     *           - if empty, then an id is automatically generated
     *           * data
     *           - provide concepts to be used for this evaluation
     *           - if empty, then all app concepts are used
     *           - Example: "data": {
     *                          "concepts": [{"id": "{{concept_id}}"}]
     *                      }
     *           * node_metrics
     *           - provide the workflow nodes to be evaluated
     *           - if empty, then all evaluable workflow nodes will be evaluated
     *           - Example: "node_metrics": {
     *                         "node_1": {},
     *                         "node_2": {},
     *                      }
     *           * ground_truth
     *           - provide the ground truth data set to search for
     *           - if not set, then ground truth is retrieved from current app's inputs and annotations
     *           - Example: "ground_truth": {
     *                          "query": {
     *                              "ands": {
     *                                  "annotation": {
     *                                      "data": {
     *                                          "concepts": [{"id": "concept"}]
     *                                      }
     *                                  }
     *                               }
     *                          },
     *                      }
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
     * Identify the workflow.
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Identify the workflow.
     *
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

    /**
     * Specify list of workflow metrics data to add.
     * All fields are optional.
     * Allowed fields to set:
     * * id
     * - provide custom id for the evaluation
     * - if empty, then an id is automatically generated
     * * data
     * - provide concepts to be used for this evaluation
     * - if empty, then all app concepts are used
     * - Example: "data": {
     *                "concepts": [{"id": "{{concept_id}}"}]
     *            }
     * * node_metrics
     * - provide the workflow nodes to be evaluated
     * - if empty, then all evaluable workflow nodes will be evaluated
     * - Example: "node_metrics": {
     *               "node_1": {},
     *               "node_2": {},
     *            }
     * * ground_truth
     * - provide the ground truth data set to search for
     * - if not set, then ground truth is retrieved from current app's inputs and annotations
     * - Example: "ground_truth": {
     *                "query": {
     *                    "ands": {
     *                        "annotation": {
     *                            "data": {
     *                                "concepts": [{"id": "concept"}]
     *                            }
     *                        }
     *                     }
     *                },
     *            }
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowMetrics workflow_metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkflowMetrics()
    {
        return $this->workflow_metrics;
    }

    /**
     * Specify list of workflow metrics data to add.
     * All fields are optional.
     * Allowed fields to set:
     * * id
     * - provide custom id for the evaluation
     * - if empty, then an id is automatically generated
     * * data
     * - provide concepts to be used for this evaluation
     * - if empty, then all app concepts are used
     * - Example: "data": {
     *                "concepts": [{"id": "{{concept_id}}"}]
     *            }
     * * node_metrics
     * - provide the workflow nodes to be evaluated
     * - if empty, then all evaluable workflow nodes will be evaluated
     * - Example: "node_metrics": {
     *               "node_1": {},
     *               "node_2": {},
     *            }
     * * ground_truth
     * - provide the ground truth data set to search for
     * - if not set, then ground truth is retrieved from current app's inputs and annotations
     * - Example: "ground_truth": {
     *                "query": {
     *                    "ands": {
     *                        "annotation": {
     *                            "data": {
     *                                "concepts": [{"id": "concept"}]
     *                            }
     *                        }
     *                     }
     *                },
     *            }
     *
     * Generated from protobuf field <code>repeated .clarifai.api.WorkflowMetrics workflow_metrics = 3;</code>
     * @param \Clarifai\Api\WorkflowMetrics[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkflowMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\WorkflowMetrics::class);
        $this->workflow_metrics = $arr;

        return $this;
    }

}

