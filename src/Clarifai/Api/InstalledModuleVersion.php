<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.InstalledModuleVersion</code>
 */
class InstalledModuleVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique id for this install. This will be used in the browser url.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * The installed module version provided here so that we users don't need to do an additional
     * fetch. When creating a new InstalledModuleVersion you should provide the:
     * module_version.user_id
     * module_version.app_id
     * module_version.module_id
     * module_version.id
     * in order to uniquely define which module version.
     *
     * Generated from protobuf field <code>.clarifai.api.ModuleVersion module_version = 2;</code>
     */
    protected $module_version = null;
    /**
     * The app_id the ModuleVersion is installed into (not necessary where the ModuleVersion was
     * created). This doesn't have to be provided in requests to install, but will be returned in
     * responses.
     *
     * Generated from protobuf field <code>string app_id = 3;</code>
     */
    protected $app_id = '';
    /**
     * The user that the app belongs to where the ModuleVersion is installed into (not necessary where
     * the ModuleVersion was created). This doesn't have to be provided in requests to install, but
     * will be returned in responses.
     *
     * Generated from protobuf field <code>string user_id = 4;</code>
     */
    protected $user_id = '';
    /**
     * When the install was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     */
    protected $created_at = null;
    /**
     * When the install was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modified_at = 6;</code>
     */
    protected $modified_at = null;
    /**
     * The URL of where this app module version is deployed.
     * If you provide this deploy_url when creating the install then it will
     * be treated as a pre-deployed module. You can only use a pre-deployed module
     * in when installing to an app_id that you own as the creator of the module.
     * If you want to install someone elses module or to rely on Clarifai deploying
     * your module for you, leave deploy_url empty when creating the install.
     * If it is left empty, then deployment will occur when this module version is
     * installed into an app using the git_commit_url of the ModuleVersion.
     *
     * Generated from protobuf field <code>string deploy_url = 7;</code>
     */
    protected $deploy_url = '';
    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible. For the InstalledModuleVersion this allows the app owner who
     * installed the module version to decide if they want other users of their app to have
     * the added functionality that the modules version provides to their app.
     * Defaults to PRIVATE if not provided.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 8;</code>
     */
    protected $visibility = null;
    /**
     * The key ID to use for making requests to the API for this module.
     * This key is associated to this installed module version by PostInstalledModuleVersionsKey
     * request. The key is associated with the CALLER not the App Owner where this module is installed
     * nor the author of the module. This allows the module to act on behalf of the caller at all
     * times so we get proper permissions the caller has (such as if they are stranger, teammate or
     * collaborator). This key should be a personal access token to enable modules to work across apps
     * and have necessary abilities beyond what app-specific keys offer.
     *
     * Generated from protobuf field <code>string key_id = 9;</code>
     */
    protected $key_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           A unique id for this install. This will be used in the browser url.
     *     @type \Clarifai\Api\ModuleVersion $module_version
     *           The installed module version provided here so that we users don't need to do an additional
     *           fetch. When creating a new InstalledModuleVersion you should provide the:
     *           module_version.user_id
     *           module_version.app_id
     *           module_version.module_id
     *           module_version.id
     *           in order to uniquely define which module version.
     *     @type string $app_id
     *           The app_id the ModuleVersion is installed into (not necessary where the ModuleVersion was
     *           created). This doesn't have to be provided in requests to install, but will be returned in
     *           responses.
     *     @type string $user_id
     *           The user that the app belongs to where the ModuleVersion is installed into (not necessary where
     *           the ModuleVersion was created). This doesn't have to be provided in requests to install, but
     *           will be returned in responses.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the install was created.
     *     @type \Google\Protobuf\Timestamp $modified_at
     *           When the install was last modified.
     *     @type string $deploy_url
     *           The URL of where this app module version is deployed.
     *           If you provide this deploy_url when creating the install then it will
     *           be treated as a pre-deployed module. You can only use a pre-deployed module
     *           in when installing to an app_id that you own as the creator of the module.
     *           If you want to install someone elses module or to rely on Clarifai deploying
     *           your module for you, leave deploy_url empty when creating the install.
     *           If it is left empty, then deployment will occur when this module version is
     *           installed into an app using the git_commit_url of the ModuleVersion.
     *     @type \Clarifai\Api\Visibility $visibility
     *           The visibility field represents whether this message is privately/publicly visible.
     *           To be visible to the public the App that contains it AND the User that contains the App must
     *           also be publicly visible. For the InstalledModuleVersion this allows the app owner who
     *           installed the module version to decide if they want other users of their app to have
     *           the added functionality that the modules version provides to their app.
     *           Defaults to PRIVATE if not provided.
     *     @type string $key_id
     *           The key ID to use for making requests to the API for this module.
     *           This key is associated to this installed module version by PostInstalledModuleVersionsKey
     *           request. The key is associated with the CALLER not the App Owner where this module is installed
     *           nor the author of the module. This allows the module to act on behalf of the caller at all
     *           times so we get proper permissions the caller has (such as if they are stranger, teammate or
     *           collaborator). This key should be a personal access token to enable modules to work across apps
     *           and have necessary abilities beyond what app-specific keys offer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique id for this install. This will be used in the browser url.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * A unique id for this install. This will be used in the browser url.
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
     * The installed module version provided here so that we users don't need to do an additional
     * fetch. When creating a new InstalledModuleVersion you should provide the:
     * module_version.user_id
     * module_version.app_id
     * module_version.module_id
     * module_version.id
     * in order to uniquely define which module version.
     *
     * Generated from protobuf field <code>.clarifai.api.ModuleVersion module_version = 2;</code>
     * @return \Clarifai\Api\ModuleVersion|null
     */
    public function getModuleVersion()
    {
        return $this->module_version;
    }

    public function hasModuleVersion()
    {
        return isset($this->module_version);
    }

    public function clearModuleVersion()
    {
        unset($this->module_version);
    }

    /**
     * The installed module version provided here so that we users don't need to do an additional
     * fetch. When creating a new InstalledModuleVersion you should provide the:
     * module_version.user_id
     * module_version.app_id
     * module_version.module_id
     * module_version.id
     * in order to uniquely define which module version.
     *
     * Generated from protobuf field <code>.clarifai.api.ModuleVersion module_version = 2;</code>
     * @param \Clarifai\Api\ModuleVersion $var
     * @return $this
     */
    public function setModuleVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ModuleVersion::class);
        $this->module_version = $var;

        return $this;
    }

    /**
     * The app_id the ModuleVersion is installed into (not necessary where the ModuleVersion was
     * created). This doesn't have to be provided in requests to install, but will be returned in
     * responses.
     *
     * Generated from protobuf field <code>string app_id = 3;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * The app_id the ModuleVersion is installed into (not necessary where the ModuleVersion was
     * created). This doesn't have to be provided in requests to install, but will be returned in
     * responses.
     *
     * Generated from protobuf field <code>string app_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * The user that the app belongs to where the ModuleVersion is installed into (not necessary where
     * the ModuleVersion was created). This doesn't have to be provided in requests to install, but
     * will be returned in responses.
     *
     * Generated from protobuf field <code>string user_id = 4;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The user that the app belongs to where the ModuleVersion is installed into (not necessary where
     * the ModuleVersion was created). This doesn't have to be provided in requests to install, but
     * will be returned in responses.
     *
     * Generated from protobuf field <code>string user_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * When the install was created.
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
     * When the install was created.
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
     * When the install was last modified.
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
     * When the install was last modified.
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

    /**
     * The URL of where this app module version is deployed.
     * If you provide this deploy_url when creating the install then it will
     * be treated as a pre-deployed module. You can only use a pre-deployed module
     * in when installing to an app_id that you own as the creator of the module.
     * If you want to install someone elses module or to rely on Clarifai deploying
     * your module for you, leave deploy_url empty when creating the install.
     * If it is left empty, then deployment will occur when this module version is
     * installed into an app using the git_commit_url of the ModuleVersion.
     *
     * Generated from protobuf field <code>string deploy_url = 7;</code>
     * @return string
     */
    public function getDeployUrl()
    {
        return $this->deploy_url;
    }

    /**
     * The URL of where this app module version is deployed.
     * If you provide this deploy_url when creating the install then it will
     * be treated as a pre-deployed module. You can only use a pre-deployed module
     * in when installing to an app_id that you own as the creator of the module.
     * If you want to install someone elses module or to rely on Clarifai deploying
     * your module for you, leave deploy_url empty when creating the install.
     * If it is left empty, then deployment will occur when this module version is
     * installed into an app using the git_commit_url of the ModuleVersion.
     *
     * Generated from protobuf field <code>string deploy_url = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDeployUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->deploy_url = $var;

        return $this;
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible. For the InstalledModuleVersion this allows the app owner who
     * installed the module version to decide if they want other users of their app to have
     * the added functionality that the modules version provides to their app.
     * Defaults to PRIVATE if not provided.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 8;</code>
     * @return \Clarifai\Api\Visibility|null
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    public function hasVisibility()
    {
        return isset($this->visibility);
    }

    public function clearVisibility()
    {
        unset($this->visibility);
    }

    /**
     * The visibility field represents whether this message is privately/publicly visible.
     * To be visible to the public the App that contains it AND the User that contains the App must
     * also be publicly visible. For the InstalledModuleVersion this allows the app owner who
     * installed the module version to decide if they want other users of their app to have
     * the added functionality that the modules version provides to their app.
     * Defaults to PRIVATE if not provided.
     *
     * Generated from protobuf field <code>.clarifai.api.Visibility visibility = 8;</code>
     * @param \Clarifai\Api\Visibility $var
     * @return $this
     */
    public function setVisibility($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Visibility::class);
        $this->visibility = $var;

        return $this;
    }

    /**
     * The key ID to use for making requests to the API for this module.
     * This key is associated to this installed module version by PostInstalledModuleVersionsKey
     * request. The key is associated with the CALLER not the App Owner where this module is installed
     * nor the author of the module. This allows the module to act on behalf of the caller at all
     * times so we get proper permissions the caller has (such as if they are stranger, teammate or
     * collaborator). This key should be a personal access token to enable modules to work across apps
     * and have necessary abilities beyond what app-specific keys offer.
     *
     * Generated from protobuf field <code>string key_id = 9;</code>
     * @return string
     */
    public function getKeyId()
    {
        return $this->key_id;
    }

    /**
     * The key ID to use for making requests to the API for this module.
     * This key is associated to this installed module version by PostInstalledModuleVersionsKey
     * request. The key is associated with the CALLER not the App Owner where this module is installed
     * nor the author of the module. This allows the module to act on behalf of the caller at all
     * times so we get proper permissions the caller has (such as if they are stranger, teammate or
     * collaborator). This key should be a personal access token to enable modules to work across apps
     * and have necessary abilities beyond what app-specific keys offer.
     *
     * Generated from protobuf field <code>string key_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

}

