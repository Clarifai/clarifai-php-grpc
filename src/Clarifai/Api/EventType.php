<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.EventType</code>
 */
class EventType
{
    /**
     * Generated from protobuf enum <code>EVENT_TYPE_NOT_SET = 0;</code>
     */
    const EVENT_TYPE_NOT_SET = 0;
    /**
     * Event types related to organization memberships and teams: 100 - 199
     *
     * Generated from protobuf enum <code>ORGANIZATION_MEMBER_ADD = 100 [(.clarifai.api.utils.description) = "Organization members added"];</code>
     */
    const ORGANIZATION_MEMBER_ADD = 100;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_MEMBER_CHANGE = 101 [(.clarifai.api.utils.description) = "Organization members\' roles changed"];</code>
     */
    const ORGANIZATION_MEMBER_CHANGE = 101;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_MEMBER_REMOVE = 102 [(.clarifai.api.utils.description) = "Organization members removed"];</code>
     */
    const ORGANIZATION_MEMBER_REMOVE = 102;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_MEMBER_INVITATION_CREATE = 103 [(.clarifai.api.utils.description) = "Organization member invitations created"];</code>
     */
    const ORGANIZATION_MEMBER_INVITATION_CREATE = 103;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_MEMBER_INVITATION_CANCEL = 104 [(.clarifai.api.utils.description) = "Organization member invitations canceled"];</code>
     */
    const ORGANIZATION_MEMBER_INVITATION_CANCEL = 104;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_MEMBER_INVITATION_ACCEPT = 105 [(.clarifai.api.utils.description) = "Organization member invitations accepted"];</code>
     */
    const ORGANIZATION_MEMBER_INVITATION_ACCEPT = 105;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_MEMBER_INVITATION_DECLINE = 106 [(.clarifai.api.utils.description) = "Organization member invitations declined"];</code>
     */
    const ORGANIZATION_MEMBER_INVITATION_DECLINE = 106;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_TEAM_CREATE = 107 [(.clarifai.api.utils.description) = "Organization teams created"];</code>
     */
    const ORGANIZATION_TEAM_CREATE = 107;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_TEAM_UPDATE = 108 [(.clarifai.api.utils.description) = "Organization teams updated"];</code>
     */
    const ORGANIZATION_TEAM_UPDATE = 108;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_TEAM_DELETE = 109 [(.clarifai.api.utils.description) = "Organization teams deleted"];</code>
     */
    const ORGANIZATION_TEAM_DELETE = 109;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_TEAM_MEMBER_ADD = 110 [(.clarifai.api.utils.description) = "Organization team members added"];</code>
     */
    const ORGANIZATION_TEAM_MEMBER_ADD = 110;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_TEAM_MEMBER_REMOVE = 111 [(.clarifai.api.utils.description) = "Organization team members removed"];</code>
     */
    const ORGANIZATION_TEAM_MEMBER_REMOVE = 111;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_TEAM_APP_ADD = 112 [(.clarifai.api.utils.description) = "Organization team applications added"];</code>
     */
    const ORGANIZATION_TEAM_APP_ADD = 112;
    /**
     * Generated from protobuf enum <code>ORGANIZATION_TEAM_APP_REMOVE = 113 [(.clarifai.api.utils.description) = "Organization team applications removed"];</code>
     */
    const ORGANIZATION_TEAM_APP_REMOVE = 113;
    /**
     * Event types related to modules: 200 - 299
     *
     * Generated from protobuf enum <code>MODULE_CREATE = 200 [(.clarifai.api.utils.description) = "Modules created"];</code>
     */
    const MODULE_CREATE = 200;
    /**
     * Generated from protobuf enum <code>MODULE_UPDATE = 201 [(.clarifai.api.utils.description) = "Modules updated"];</code>
     */
    const MODULE_UPDATE = 201;
    /**
     * Generated from protobuf enum <code>MODULE_DELETE = 202 [(.clarifai.api.utils.description) = "Modules deleted"];</code>
     */
    const MODULE_DELETE = 202;
    /**
     * Generated from protobuf enum <code>MODULE_VERSION_CREATE = 203 [(.clarifai.api.utils.description) = "Module versions created"];</code>
     */
    const MODULE_VERSION_CREATE = 203;
    /**
     * Generated from protobuf enum <code>MODULE_VERSION_UPDATE = 204 [(.clarifai.api.utils.description) = "Module versions updated"];</code>
     */
    const MODULE_VERSION_UPDATE = 204;
    /**
     * Generated from protobuf enum <code>MODULE_VERSION_DELETE = 205 [(.clarifai.api.utils.description) = "Module versions deleted"];</code>
     */
    const MODULE_VERSION_DELETE = 205;
    /**
     * Event types related to models: 300 - 399
     *
     * Generated from protobuf enum <code>MODEL_CREATE = 300 [(.clarifai.api.utils.description) = "Models created"];</code>
     */
    const MODEL_CREATE = 300;
    /**
     * Generated from protobuf enum <code>MODEL_UPDATE = 301 [(.clarifai.api.utils.description) = "Models updated"];</code>
     */
    const MODEL_UPDATE = 301;
    /**
     * Generated from protobuf enum <code>MODEL_DELETE = 302 [(.clarifai.api.utils.description) = "Models deleted"];</code>
     */
    const MODEL_DELETE = 302;
    /**
     * Generated from protobuf enum <code>MODEL_VERSION_CREATE = 303 [(.clarifai.api.utils.description) = "Model versions created"];</code>
     */
    const MODEL_VERSION_CREATE = 303;
    /**
     * Generated from protobuf enum <code>MODEL_VERSION_UPDATE = 304 [(.clarifai.api.utils.description) = "Model versions updated"];</code>
     */
    const MODEL_VERSION_UPDATE = 304;
    /**
     * Generated from protobuf enum <code>MODEL_VERSION_DELETE = 305 [(.clarifai.api.utils.description) = "Model versions deleted"];</code>
     */
    const MODEL_VERSION_DELETE = 305;
    /**
     * Event types related to workflows: 400 - 499
     *
     * Generated from protobuf enum <code>WORKFLOW_CREATE = 400 [(.clarifai.api.utils.description) = "Workflows created"];</code>
     */
    const WORKFLOW_CREATE = 400;
    /**
     * Generated from protobuf enum <code>WORKFLOW_UPDATE = 401 [(.clarifai.api.utils.description) = "Workflows updated"];</code>
     */
    const WORKFLOW_UPDATE = 401;
    /**
     * Generated from protobuf enum <code>WORKFLOW_DELETE = 402 [(.clarifai.api.utils.description) = "Workflows deleted"];</code>
     */
    const WORKFLOW_DELETE = 402;
    /**
     * Generated from protobuf enum <code>WORKFLOW_VERSION_CREATE = 403 [(.clarifai.api.utils.description) = "Workflow versions created"];</code>
     */
    const WORKFLOW_VERSION_CREATE = 403;
    /**
     * Generated from protobuf enum <code>WORKFLOW_VERSION_UPDATE = 404 [(.clarifai.api.utils.description) = "Workflow versions updated"];</code>
     */
    const WORKFLOW_VERSION_UPDATE = 404;
    /**
     * Generated from protobuf enum <code>WORKFLOW_VERSION_DELETE = 405 [(.clarifai.api.utils.description) = "Workflow versions deleted"];</code>
     */
    const WORKFLOW_VERSION_DELETE = 405;
    /**
     * Event types related to applications: 600 - 699
     *
     * Generated from protobuf enum <code>APPLICATION_CREATE = 600 [(.clarifai.api.utils.description) = "Applications created"];</code>
     */
    const APPLICATION_CREATE = 600;
    /**
     * Generated from protobuf enum <code>APPLICATION_UPDATE = 601 [(.clarifai.api.utils.description) = "Applications updated"];</code>
     */
    const APPLICATION_UPDATE = 601;
    /**
     * Generated from protobuf enum <code>APPLICATION_DELETE = 602 [(.clarifai.api.utils.description) = "Applications deleted"];</code>
     */
    const APPLICATION_DELETE = 602;
    /**
     * Event types related to collaborators: 700 - 799
     *
     * Generated from protobuf enum <code>COLLABORATOR_ADD = 700 [(.clarifai.api.utils.description) = "Collaborators added"];</code>
     */
    const COLLABORATOR_ADD = 700;
    /**
     * Generated from protobuf enum <code>COLLABORATOR_UPDATE = 701 [(.clarifai.api.utils.description) = "Collaborators updated"];</code>
     */
    const COLLABORATOR_UPDATE = 701;
    /**
     * Generated from protobuf enum <code>COLLABORATOR_REMOVE = 702 [(.clarifai.api.utils.description) = "Collaborators removed"];</code>
     */
    const COLLABORATOR_REMOVE = 702;
    /**
     * Event types related to users: 800 - 899
     *
     * Generated from protobuf enum <code>USER_UPDATE = 800 [(.clarifai.api.utils.description) = "Users updated"];</code>
     */
    const USER_UPDATE = 800;

    private static $valueToName = [
        self::EVENT_TYPE_NOT_SET => 'EVENT_TYPE_NOT_SET',
        self::ORGANIZATION_MEMBER_ADD => 'ORGANIZATION_MEMBER_ADD',
        self::ORGANIZATION_MEMBER_CHANGE => 'ORGANIZATION_MEMBER_CHANGE',
        self::ORGANIZATION_MEMBER_REMOVE => 'ORGANIZATION_MEMBER_REMOVE',
        self::ORGANIZATION_MEMBER_INVITATION_CREATE => 'ORGANIZATION_MEMBER_INVITATION_CREATE',
        self::ORGANIZATION_MEMBER_INVITATION_CANCEL => 'ORGANIZATION_MEMBER_INVITATION_CANCEL',
        self::ORGANIZATION_MEMBER_INVITATION_ACCEPT => 'ORGANIZATION_MEMBER_INVITATION_ACCEPT',
        self::ORGANIZATION_MEMBER_INVITATION_DECLINE => 'ORGANIZATION_MEMBER_INVITATION_DECLINE',
        self::ORGANIZATION_TEAM_CREATE => 'ORGANIZATION_TEAM_CREATE',
        self::ORGANIZATION_TEAM_UPDATE => 'ORGANIZATION_TEAM_UPDATE',
        self::ORGANIZATION_TEAM_DELETE => 'ORGANIZATION_TEAM_DELETE',
        self::ORGANIZATION_TEAM_MEMBER_ADD => 'ORGANIZATION_TEAM_MEMBER_ADD',
        self::ORGANIZATION_TEAM_MEMBER_REMOVE => 'ORGANIZATION_TEAM_MEMBER_REMOVE',
        self::ORGANIZATION_TEAM_APP_ADD => 'ORGANIZATION_TEAM_APP_ADD',
        self::ORGANIZATION_TEAM_APP_REMOVE => 'ORGANIZATION_TEAM_APP_REMOVE',
        self::MODULE_CREATE => 'MODULE_CREATE',
        self::MODULE_UPDATE => 'MODULE_UPDATE',
        self::MODULE_DELETE => 'MODULE_DELETE',
        self::MODULE_VERSION_CREATE => 'MODULE_VERSION_CREATE',
        self::MODULE_VERSION_UPDATE => 'MODULE_VERSION_UPDATE',
        self::MODULE_VERSION_DELETE => 'MODULE_VERSION_DELETE',
        self::MODEL_CREATE => 'MODEL_CREATE',
        self::MODEL_UPDATE => 'MODEL_UPDATE',
        self::MODEL_DELETE => 'MODEL_DELETE',
        self::MODEL_VERSION_CREATE => 'MODEL_VERSION_CREATE',
        self::MODEL_VERSION_UPDATE => 'MODEL_VERSION_UPDATE',
        self::MODEL_VERSION_DELETE => 'MODEL_VERSION_DELETE',
        self::WORKFLOW_CREATE => 'WORKFLOW_CREATE',
        self::WORKFLOW_UPDATE => 'WORKFLOW_UPDATE',
        self::WORKFLOW_DELETE => 'WORKFLOW_DELETE',
        self::WORKFLOW_VERSION_CREATE => 'WORKFLOW_VERSION_CREATE',
        self::WORKFLOW_VERSION_UPDATE => 'WORKFLOW_VERSION_UPDATE',
        self::WORKFLOW_VERSION_DELETE => 'WORKFLOW_VERSION_DELETE',
        self::APPLICATION_CREATE => 'APPLICATION_CREATE',
        self::APPLICATION_UPDATE => 'APPLICATION_UPDATE',
        self::APPLICATION_DELETE => 'APPLICATION_DELETE',
        self::COLLABORATOR_ADD => 'COLLABORATOR_ADD',
        self::COLLABORATOR_UPDATE => 'COLLABORATOR_UPDATE',
        self::COLLABORATOR_REMOVE => 'COLLABORATOR_REMOVE',
        self::USER_UPDATE => 'USER_UPDATE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

