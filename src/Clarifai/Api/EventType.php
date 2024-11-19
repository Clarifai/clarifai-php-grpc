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

