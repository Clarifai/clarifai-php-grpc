<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AuditLogTarget is a resource on which an operation recorded in an
 * audit log was performed.
 *
 * Generated from protobuf message <code>clarifai.api.AuditLogTarget</code>
 */
class AuditLogTarget extends \Google\Protobuf\Internal\Message
{
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\User $user
     *     @type \Clarifai\Api\Role $role
     *     @type \Clarifai\Api\Team $team
     *     @type \Clarifai\Api\App $app
     *     @type \Clarifai\Api\Module $module
     *     @type \Clarifai\Api\ModuleVersion $module_version
     *     @type \Clarifai\Api\Workflow $workflow
     *     @type \Clarifai\Api\WorkflowVersion $workflow_version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.User user = 1;</code>
     * @return \Clarifai\Api\User|null
     */
    public function getUser()
    {
        return $this->readOneof(1);
    }

    public function hasUser()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.User user = 1;</code>
     * @param \Clarifai\Api\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\User::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Role role = 2;</code>
     * @return \Clarifai\Api\Role|null
     */
    public function getRole()
    {
        return $this->readOneof(2);
    }

    public function hasRole()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Role role = 2;</code>
     * @param \Clarifai\Api\Role $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Role::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Team team = 3;</code>
     * @return \Clarifai\Api\Team|null
     */
    public function getTeam()
    {
        return $this->readOneof(3);
    }

    public function hasTeam()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Team team = 3;</code>
     * @param \Clarifai\Api\Team $var
     * @return $this
     */
    public function setTeam($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Team::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.App app = 4;</code>
     * @return \Clarifai\Api\App|null
     */
    public function getApp()
    {
        return $this->readOneof(4);
    }

    public function hasApp()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.App app = 4;</code>
     * @param \Clarifai\Api\App $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\App::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Module module = 5;</code>
     * @return \Clarifai\Api\Module|null
     */
    public function getModule()
    {
        return $this->readOneof(5);
    }

    public function hasModule()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Module module = 5;</code>
     * @param \Clarifai\Api\Module $var
     * @return $this
     */
    public function setModule($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Module::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ModuleVersion module_version = 6;</code>
     * @return \Clarifai\Api\ModuleVersion|null
     */
    public function getModuleVersion()
    {
        return $this->readOneof(6);
    }

    public function hasModuleVersion()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.ModuleVersion module_version = 6;</code>
     * @param \Clarifai\Api\ModuleVersion $var
     * @return $this
     */
    public function setModuleVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\ModuleVersion::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 7;</code>
     * @return \Clarifai\Api\Workflow|null
     */
    public function getWorkflow()
    {
        return $this->readOneof(7);
    }

    public function hasWorkflow()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.Workflow workflow = 7;</code>
     * @param \Clarifai\Api\Workflow $var
     * @return $this
     */
    public function setWorkflow($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Workflow::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.WorkflowVersion workflow_version = 8;</code>
     * @return \Clarifai\Api\WorkflowVersion|null
     */
    public function getWorkflowVersion()
    {
        return $this->readOneof(8);
    }

    public function hasWorkflowVersion()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.WorkflowVersion workflow_version = 8;</code>
     * @param \Clarifai\Api\WorkflowVersion $var
     * @return $this
     */
    public function setWorkflowVersion($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\WorkflowVersion::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

