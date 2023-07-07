<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Filter
 *
 * Generated from protobuf message <code>clarifai.api.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * If True then this will flip the meaning of this part of the
     * query. This allow for queries such as dog AND ! metadata=={"blah":"value"}
     *
     * Generated from protobuf field <code>bool negate = 3;</code>
     */
    protected $negate = false;
    /**
     * FILTER by annotation information.
     * ########## Supported fields ##########
     *  - annotation_info - allows searching by empty annotation info
     *    note that searching by empty annotation info will actually not influence the search results.
     *    however, in order to be user-friendly, we are still supporting searching by empty annotation info.
     *  - annotation_info.fields - filter by annotation info
     *  - data.clusters[].id
     *  - data.concepts[].id
     *  - data.concepts[].name
     *  - data.concepts[].value
     *  - data.frames[].frame_info - filter by frame annotations
     *  - data.geo.geo_box[].geo_point.latitude
     *  - data.geo.geo_box[].geo_point.longitude
     *  - data.geo.geo_limit.type
     *  - data.geo.geo_limit.value
     *  - data.geo.geo_point.latitude
     *  - data.geo.geo_point.longitude
     *  - data.metadata - allow search with empty metadata
     *    note that searching by empty metadata will actually not influence the search results.
     *    however, in order to be user-friendly, we are still supporting searching by empty metadata.
     *  - data.metadata.fields - filter by metadata. metadata key&value fields are OR-ed.
     *  - data.regions[].region_info.bounding_box - filter by bounding box annotations
     *  - data.regions[].region_info.mask - filter by mask annotations
     *  - data.regions[].region_info.point - filter by point annotations
     *  - data.regions[].region_info.polygon - filter by polygon annotations
     *  - data.regions[].region_info.span - filter by span annotations
     *  - data.text - filter by text annotations
     *  - data.time_segments[].time_info - filter by time-segment annotations
     *  - id
     *  - input_id
     *  - input_level
     *  - status.code
     *  - task_id
     *  - user_id
     *
     * Generated from protobuf field <code>.clarifai.api.Annotation annotation = 4;</code>
     */
    protected $annotation = null;
    /**
     * FILTER by input information.
     * ########## Supported fields ##########
     *  - data.audio - filter audio inputs
     *  - data.image - filter image inputs
     *  - data.text - filter text inputs
     *  - data.video - filter video inputs
     *  - dataset_ids[] - filter by dataset IDs
     *  - status.code - filter by input status
     *
     * Generated from protobuf field <code>.clarifai.api.Input input = 5;</code>
     */
    protected $input = null;
    /**
     * Filter by annotation last updated time range.
     *
     * Generated from protobuf field <code>.clarifai.api.TimeRange last_updated_time_range = 6;</code>
     */
    protected $last_updated_time_range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $negate
     *           If True then this will flip the meaning of this part of the
     *           query. This allow for queries such as dog AND ! metadata=={"blah":"value"}
     *     @type \Clarifai\Api\Annotation $annotation
     *           FILTER by annotation information.
     *           ########## Supported fields ##########
     *            - annotation_info - allows searching by empty annotation info
     *              note that searching by empty annotation info will actually not influence the search results.
     *              however, in order to be user-friendly, we are still supporting searching by empty annotation info.
     *            - annotation_info.fields - filter by annotation info
     *            - data.clusters[].id
     *            - data.concepts[].id
     *            - data.concepts[].name
     *            - data.concepts[].value
     *            - data.frames[].frame_info - filter by frame annotations
     *            - data.geo.geo_box[].geo_point.latitude
     *            - data.geo.geo_box[].geo_point.longitude
     *            - data.geo.geo_limit.type
     *            - data.geo.geo_limit.value
     *            - data.geo.geo_point.latitude
     *            - data.geo.geo_point.longitude
     *            - data.metadata - allow search with empty metadata
     *              note that searching by empty metadata will actually not influence the search results.
     *              however, in order to be user-friendly, we are still supporting searching by empty metadata.
     *            - data.metadata.fields - filter by metadata. metadata key&value fields are OR-ed.
     *            - data.regions[].region_info.bounding_box - filter by bounding box annotations
     *            - data.regions[].region_info.mask - filter by mask annotations
     *            - data.regions[].region_info.point - filter by point annotations
     *            - data.regions[].region_info.polygon - filter by polygon annotations
     *            - data.regions[].region_info.span - filter by span annotations
     *            - data.text - filter by text annotations
     *            - data.time_segments[].time_info - filter by time-segment annotations
     *            - id
     *            - input_id
     *            - input_level
     *            - status.code
     *            - task_id
     *            - user_id
     *     @type \Clarifai\Api\Input $input
     *           FILTER by input information.
     *           ########## Supported fields ##########
     *            - data.audio - filter audio inputs
     *            - data.image - filter image inputs
     *            - data.text - filter text inputs
     *            - data.video - filter video inputs
     *            - dataset_ids[] - filter by dataset IDs
     *            - status.code - filter by input status
     *     @type \Clarifai\Api\TimeRange $last_updated_time_range
     *           Filter by annotation last updated time range.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * If True then this will flip the meaning of this part of the
     * query. This allow for queries such as dog AND ! metadata=={"blah":"value"}
     *
     * Generated from protobuf field <code>bool negate = 3;</code>
     * @return bool
     */
    public function getNegate()
    {
        return $this->negate;
    }

    /**
     * If True then this will flip the meaning of this part of the
     * query. This allow for queries such as dog AND ! metadata=={"blah":"value"}
     *
     * Generated from protobuf field <code>bool negate = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setNegate($var)
    {
        GPBUtil::checkBool($var);
        $this->negate = $var;

        return $this;
    }

    /**
     * FILTER by annotation information.
     * ########## Supported fields ##########
     *  - annotation_info - allows searching by empty annotation info
     *    note that searching by empty annotation info will actually not influence the search results.
     *    however, in order to be user-friendly, we are still supporting searching by empty annotation info.
     *  - annotation_info.fields - filter by annotation info
     *  - data.clusters[].id
     *  - data.concepts[].id
     *  - data.concepts[].name
     *  - data.concepts[].value
     *  - data.frames[].frame_info - filter by frame annotations
     *  - data.geo.geo_box[].geo_point.latitude
     *  - data.geo.geo_box[].geo_point.longitude
     *  - data.geo.geo_limit.type
     *  - data.geo.geo_limit.value
     *  - data.geo.geo_point.latitude
     *  - data.geo.geo_point.longitude
     *  - data.metadata - allow search with empty metadata
     *    note that searching by empty metadata will actually not influence the search results.
     *    however, in order to be user-friendly, we are still supporting searching by empty metadata.
     *  - data.metadata.fields - filter by metadata. metadata key&value fields are OR-ed.
     *  - data.regions[].region_info.bounding_box - filter by bounding box annotations
     *  - data.regions[].region_info.mask - filter by mask annotations
     *  - data.regions[].region_info.point - filter by point annotations
     *  - data.regions[].region_info.polygon - filter by polygon annotations
     *  - data.regions[].region_info.span - filter by span annotations
     *  - data.text - filter by text annotations
     *  - data.time_segments[].time_info - filter by time-segment annotations
     *  - id
     *  - input_id
     *  - input_level
     *  - status.code
     *  - task_id
     *  - user_id
     *
     * Generated from protobuf field <code>.clarifai.api.Annotation annotation = 4;</code>
     * @return \Clarifai\Api\Annotation|null
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    public function hasAnnotation()
    {
        return isset($this->annotation);
    }

    public function clearAnnotation()
    {
        unset($this->annotation);
    }

    /**
     * FILTER by annotation information.
     * ########## Supported fields ##########
     *  - annotation_info - allows searching by empty annotation info
     *    note that searching by empty annotation info will actually not influence the search results.
     *    however, in order to be user-friendly, we are still supporting searching by empty annotation info.
     *  - annotation_info.fields - filter by annotation info
     *  - data.clusters[].id
     *  - data.concepts[].id
     *  - data.concepts[].name
     *  - data.concepts[].value
     *  - data.frames[].frame_info - filter by frame annotations
     *  - data.geo.geo_box[].geo_point.latitude
     *  - data.geo.geo_box[].geo_point.longitude
     *  - data.geo.geo_limit.type
     *  - data.geo.geo_limit.value
     *  - data.geo.geo_point.latitude
     *  - data.geo.geo_point.longitude
     *  - data.metadata - allow search with empty metadata
     *    note that searching by empty metadata will actually not influence the search results.
     *    however, in order to be user-friendly, we are still supporting searching by empty metadata.
     *  - data.metadata.fields - filter by metadata. metadata key&value fields are OR-ed.
     *  - data.regions[].region_info.bounding_box - filter by bounding box annotations
     *  - data.regions[].region_info.mask - filter by mask annotations
     *  - data.regions[].region_info.point - filter by point annotations
     *  - data.regions[].region_info.polygon - filter by polygon annotations
     *  - data.regions[].region_info.span - filter by span annotations
     *  - data.text - filter by text annotations
     *  - data.time_segments[].time_info - filter by time-segment annotations
     *  - id
     *  - input_id
     *  - input_level
     *  - status.code
     *  - task_id
     *  - user_id
     *
     * Generated from protobuf field <code>.clarifai.api.Annotation annotation = 4;</code>
     * @param \Clarifai\Api\Annotation $var
     * @return $this
     */
    public function setAnnotation($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Annotation::class);
        $this->annotation = $var;

        return $this;
    }

    /**
     * FILTER by input information.
     * ########## Supported fields ##########
     *  - data.audio - filter audio inputs
     *  - data.image - filter image inputs
     *  - data.text - filter text inputs
     *  - data.video - filter video inputs
     *  - dataset_ids[] - filter by dataset IDs
     *  - status.code - filter by input status
     *
     * Generated from protobuf field <code>.clarifai.api.Input input = 5;</code>
     * @return \Clarifai\Api\Input|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * FILTER by input information.
     * ########## Supported fields ##########
     *  - data.audio - filter audio inputs
     *  - data.image - filter image inputs
     *  - data.text - filter text inputs
     *  - data.video - filter video inputs
     *  - dataset_ids[] - filter by dataset IDs
     *  - status.code - filter by input status
     *
     * Generated from protobuf field <code>.clarifai.api.Input input = 5;</code>
     * @param \Clarifai\Api\Input $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Input::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Filter by annotation last updated time range.
     *
     * Generated from protobuf field <code>.clarifai.api.TimeRange last_updated_time_range = 6;</code>
     * @return \Clarifai\Api\TimeRange|null
     */
    public function getLastUpdatedTimeRange()
    {
        return $this->last_updated_time_range;
    }

    public function hasLastUpdatedTimeRange()
    {
        return isset($this->last_updated_time_range);
    }

    public function clearLastUpdatedTimeRange()
    {
        unset($this->last_updated_time_range);
    }

    /**
     * Filter by annotation last updated time range.
     *
     * Generated from protobuf field <code>.clarifai.api.TimeRange last_updated_time_range = 6;</code>
     * @param \Clarifai\Api\TimeRange $var
     * @return $this
     */
    public function setLastUpdatedTimeRange($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\TimeRange::class);
        $this->last_updated_time_range = $var;

        return $this;
    }

}

