<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.InputsExtractionJob</code>
 */
class InputsExtractionJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * ID of extraction job
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    /**
     * Url of archive or bucket
     *
     * Generated from protobuf field <code>string url = 3;</code>
     */
    protected $url = '';
    /**
     * Progress counts of the job
     *
     * Generated from protobuf field <code>.clarifai.api.InputsExtractionJobProgress progress = 4;</code>
     */
    protected $progress = null;
    /**
     * When the extraction job was started.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     */
    protected $created_at = null;
    /**
     * Most recent time when the extraction job was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 6;</code>
     */
    protected $modified_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type string $id
     *           ID of extraction job
     *     @type string $url
     *           Url of archive or bucket
     *     @type \Clarifai\Api\InputsExtractionJobProgress $progress
     *           Progress counts of the job
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the extraction job was started.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           Most recent time when the extraction job was updated.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * ID of extraction job
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID of extraction job
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
     * Url of archive or bucket
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Url of archive or bucket
     *
     * Generated from protobuf field <code>string url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Progress counts of the job
     *
     * Generated from protobuf field <code>.clarifai.api.InputsExtractionJobProgress progress = 4;</code>
     * @return \Clarifai\Api\InputsExtractionJobProgress|null
     */
    public function getProgress()
    {
        return $this->progress;
    }

    public function hasProgress()
    {
        return isset($this->progress);
    }

    public function clearProgress()
    {
        unset($this->progress);
    }

    /**
     * Progress counts of the job
     *
     * Generated from protobuf field <code>.clarifai.api.InputsExtractionJobProgress progress = 4;</code>
     * @param \Clarifai\Api\InputsExtractionJobProgress $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\InputsExtractionJobProgress::class);
        $this->progress = $var;

        return $this;
    }

    /**
     * When the extraction job was started.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * When the extraction job was started.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Most recent time when the extraction job was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    public function hasModifiedAt()
    {
        return isset($this->modified_at);
    }

    public function clearModifiedAt()
    {
        unset($this->modified_at);
    }

    /**
     * Most recent time when the extraction job was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

}

