<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PatchAppsRequest
 *
 * Generated from protobuf message <code>clarifai.api.PatchAppsRequest</code>
 */
class PatchAppsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 2;</code>
     */
    private $apps;
    /**
     * The action to perform on the patched App objects except App.Metadata
     * For now only action 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     */
    protected $action = '';
    /**
     * The action to perform on the patched App.Metadata
     *
     * Generated from protobuf field <code>.clarifai.api.PatchAction metadata_action = 4;</code>
     */
    protected $metadata_action = null;
    /**
     * If set, the app will be automatically reindexed upon change of its base workflow.
     *
     * Generated from protobuf field <code>bool reindex = 5;</code>
     */
    protected $reindex = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type array<\Clarifai\Api\App>|\Google\Protobuf\Internal\RepeatedField $apps
     *     @type string $action
     *           The action to perform on the patched App objects except App.Metadata
     *           For now only action 'overwrite' is supported
     *     @type \Clarifai\Api\PatchAction $metadata_action
     *           The action to perform on the patched App.Metadata
     *     @type bool $reindex
     *           If set, the app will be automatically reindexed upon change of its base workflow.
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
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApps()
    {
        return $this->apps;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.App apps = 2;</code>
     * @param array<\Clarifai\Api\App>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\App::class);
        $this->apps = $arr;

        return $this;
    }

    /**
     * The action to perform on the patched App objects except App.Metadata
     * For now only action 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action to perform on the patched App objects except App.Metadata
     * For now only action 'overwrite' is supported
     *
     * Generated from protobuf field <code>string action = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * The action to perform on the patched App.Metadata
     *
     * Generated from protobuf field <code>.clarifai.api.PatchAction metadata_action = 4;</code>
     * @return \Clarifai\Api\PatchAction|null
     */
    public function getMetadataAction()
    {
        return $this->metadata_action;
    }

    public function hasMetadataAction()
    {
        return isset($this->metadata_action);
    }

    public function clearMetadataAction()
    {
        unset($this->metadata_action);
    }

    /**
     * The action to perform on the patched App.Metadata
     *
     * Generated from protobuf field <code>.clarifai.api.PatchAction metadata_action = 4;</code>
     * @param \Clarifai\Api\PatchAction $var
     * @return $this
     */
    public function setMetadataAction($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\PatchAction::class);
        $this->metadata_action = $var;

        return $this;
    }

    /**
     * If set, the app will be automatically reindexed upon change of its base workflow.
     *
     * Generated from protobuf field <code>bool reindex = 5;</code>
     * @return bool
     */
    public function getReindex()
    {
        return $this->reindex;
    }

    /**
     * If set, the app will be automatically reindexed upon change of its base workflow.
     *
     * Generated from protobuf field <code>bool reindex = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setReindex($var)
    {
        GPBUtil::checkBool($var);
        $this->reindex = $var;

        return $this;
    }

}

