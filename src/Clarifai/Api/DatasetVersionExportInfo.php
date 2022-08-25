<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DatasetVersionExportInfo contains information about all exports of a dataset version.
 * If the dataset version has not been exported in a format, then the DatasetVersionExport
 * field for that format is empty instead of having a "not exported" status.
 *
 * Generated from protobuf message <code>clarifai.api.DatasetVersionExportInfo</code>
 */
class DatasetVersionExportInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * clarifai_data_example is a CLARIFAI_DATA_EXAMPLE export of the dataset version.
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionExport clarifai_data_example = 1;</code>
     */
    protected $clarifai_data_example = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\DatasetVersionExport $clarifai_data_example
     *           clarifai_data_example is a CLARIFAI_DATA_EXAMPLE export of the dataset version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * clarifai_data_example is a CLARIFAI_DATA_EXAMPLE export of the dataset version.
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionExport clarifai_data_example = 1;</code>
     * @return \Clarifai\Api\DatasetVersionExport|null
     */
    public function getClarifaiDataExample()
    {
        return $this->clarifai_data_example;
    }

    public function hasClarifaiDataExample()
    {
        return isset($this->clarifai_data_example);
    }

    public function clearClarifaiDataExample()
    {
        unset($this->clarifai_data_example);
    }

    /**
     * clarifai_data_example is a CLARIFAI_DATA_EXAMPLE export of the dataset version.
     *
     * Generated from protobuf field <code>.clarifai.api.DatasetVersionExport clarifai_data_example = 1;</code>
     * @param \Clarifai\Api\DatasetVersionExport $var
     * @return $this
     */
    public function setClarifaiDataExample($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\DatasetVersionExport::class);
        $this->clarifai_data_example = $var;

        return $this;
    }

}
