<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.Upload</code>
 */
class Upload extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of upload
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * When the upload was started.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     */
    protected $created_at = null;
    /**
     * Most recent time when the upload was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
     */
    protected $modified_at = null;
    /**
     * When the upload will expire and be deleted
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     */
    protected $expires_at = null;
    /**
     * Status of the upload
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 5;</code>
     */
    protected $status = null;
    /**
     * name of uploaded content (e.g. filename)
     *
     * Generated from protobuf field <code>string content_name = 8;</code>
     */
    protected $content_name = '';
    /**
     * Total size of the upload content
     *
     * Generated from protobuf field <code>uint64 content_length = 6;</code>
     */
    protected $content_length = 0;
    /**
     * Url of uploaded content
     *
     * Generated from protobuf field <code>string content_url = 7;</code>
     */
    protected $content_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           ID of upload
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the upload was started.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           Most recent time when the upload was updated.
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Google\Protobuf\Timestamp $expires_at
     *           When the upload will expire and be deleted
     *           The format is https://www.ietf.org/rfc/rfc3339.txt.
     *           Example: "2006-01-02T15:04:05.999999Z".
     *     @type \Clarifai\Api\Status\Status $status
     *           Status of the upload
     *     @type string $content_name
     *           name of uploaded content (e.g. filename)
     *     @type int|string $content_length
     *           Total size of the upload content
     *     @type string $content_url
     *           Url of uploaded content
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of upload
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID of upload
     *
     * Generated from protobuf field <code>string id = 1;</code>
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
     * When the upload was started.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
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
     * When the upload was started.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
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
     * Most recent time when the upload was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
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
     * Most recent time when the upload was updated.
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifiedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modified_at = $var;

        return $this;
    }

    /**
     * When the upload will expire and be deleted
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    public function hasExpiresAt()
    {
        return isset($this->expires_at);
    }

    public function clearExpiresAt()
    {
        unset($this->expires_at);
    }

    /**
     * When the upload will expire and be deleted
     * The format is https://www.ietf.org/rfc/rfc3339.txt.
     * Example: "2006-01-02T15:04:05.999999Z".
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expires_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiresAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expires_at = $var;

        return $this;
    }

    /**
     * Status of the upload
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 5;</code>
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
     * Status of the upload
     *
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 5;</code>
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
     * name of uploaded content (e.g. filename)
     *
     * Generated from protobuf field <code>string content_name = 8;</code>
     * @return string
     */
    public function getContentName()
    {
        return $this->content_name;
    }

    /**
     * name of uploaded content (e.g. filename)
     *
     * Generated from protobuf field <code>string content_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setContentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_name = $var;

        return $this;
    }

    /**
     * Total size of the upload content
     *
     * Generated from protobuf field <code>uint64 content_length = 6;</code>
     * @return int|string
     */
    public function getContentLength()
    {
        return $this->content_length;
    }

    /**
     * Total size of the upload content
     *
     * Generated from protobuf field <code>uint64 content_length = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setContentLength($var)
    {
        GPBUtil::checkUint64($var);
        $this->content_length = $var;

        return $this;
    }

    /**
     * Url of uploaded content
     *
     * Generated from protobuf field <code>string content_url = 7;</code>
     * @return string
     */
    public function getContentUrl()
    {
        return $this->content_url;
    }

    /**
     * Url of uploaded content
     *
     * Generated from protobuf field <code>string content_url = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setContentUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_url = $var;

        return $this;
    }

}

