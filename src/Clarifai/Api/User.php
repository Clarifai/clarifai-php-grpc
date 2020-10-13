<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * Messages from /proto/clarifai/api/user.proto
 * //////////////////////////////////////////////////////////////////////////////
 *
 * Generated from protobuf message <code>clarifai.api.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string primary_email = 2;</code>
     */
    protected $primary_email = '';
    /**
     * Generated from protobuf field <code>string first_name = 3;</code>
     */
    protected $first_name = '';
    /**
     * Generated from protobuf field <code>string last_name = 4;</code>
     */
    protected $last_name = '';
    /**
     * Generated from protobuf field <code>string company_name = 5;</code>
     */
    protected $company_name = '';
    /**
     * Generated from protobuf field <code>string bill_type = 7;</code>
     */
    protected $bill_type = '';
    /**
     * When the user was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
     */
    protected $created_at = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_gdpr_consent = 8;</code>
     */
    protected $date_gdpr_consent = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_tos_consent = 9;</code>
     */
    protected $date_tos_consent = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_marketing_consent = 10;</code>
     */
    protected $date_marketing_consent = null;
    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 11;</code>
     */
    protected $metadata = null;
    /**
     * Generated from protobuf field <code>repeated .clarifai.api.EmailAddress email_addresses = 12;</code>
     */
    private $email_addresses;
    /**
     * Generated from protobuf field <code>bool is_org_admin = 14;</code>
     */
    protected $is_org_admin = false;
    /**
     * Generated from protobuf field <code>bool two_factor_auth_enabled = 15;</code>
     */
    protected $two_factor_auth_enabled = false;
    /**
     * Generated from protobuf field <code>uint32 teams_count = 16;</code>
     */
    protected $teams_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $primary_email
     *     @type string $first_name
     *     @type string $last_name
     *     @type string $company_name
     *     @type string $bill_type
     *     @type \Google\Protobuf\Timestamp $created_at
     *           When the user was created. We follow the XXXX timestamp
     *           format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     *           "2006-01-02T15:04:05.999999Z" so you can expect results like
     *           the following from the API:
     *           "2017-04-11T21:50:50.223962Z"
     *     @type \Google\Protobuf\Timestamp $date_gdpr_consent
     *     @type \Google\Protobuf\Timestamp $date_tos_consent
     *     @type \Google\Protobuf\Timestamp $date_marketing_consent
     *     @type \Google\Protobuf\Struct $metadata
     *           To handle arbitrary json metadata you can use a struct field:
     *           https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *     @type \Clarifai\Api\EmailAddress[]|\Google\Protobuf\Internal\RepeatedField $email_addresses
     *     @type bool $is_org_admin
     *     @type bool $two_factor_auth_enabled
     *     @type int $teams_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
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
     * Generated from protobuf field <code>string primary_email = 2;</code>
     * @return string
     */
    public function getPrimaryEmail()
    {
        return $this->primary_email;
    }

    /**
     * Generated from protobuf field <code>string primary_email = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string first_name = 3;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Generated from protobuf field <code>string first_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_name = 4;</code>
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Generated from protobuf field <code>string last_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLastName($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string company_name = 5;</code>
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Generated from protobuf field <code>string company_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bill_type = 7;</code>
     * @return string
     */
    public function getBillType()
    {
        return $this->bill_type;
    }

    /**
     * Generated from protobuf field <code>string bill_type = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBillType($var)
    {
        GPBUtil::checkString($var, True);
        $this->bill_type = $var;

        return $this;
    }

    /**
     * When the user was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * When the user was created. We follow the XXXX timestamp
     * format. We use https://www.ietf.org/rfc/rfc3339.txt format:
     * "2006-01-02T15:04:05.999999Z" so you can expect results like
     * the following from the API:
     * "2017-04-11T21:50:50.223962Z"
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 6;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_gdpr_consent = 8;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDateGdprConsent()
    {
        return $this->date_gdpr_consent;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_gdpr_consent = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDateGdprConsent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date_gdpr_consent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_tos_consent = 9;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDateTosConsent()
    {
        return $this->date_tos_consent;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_tos_consent = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDateTosConsent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date_tos_consent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_marketing_consent = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDateMarketingConsent()
    {
        return $this->date_marketing_consent;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp date_marketing_consent = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDateMarketingConsent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date_marketing_consent = $var;

        return $this;
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 11;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * To handle arbitrary json metadata you can use a struct field:
     * https://github.com/google/protobuf/blob/master/src/google/protobuf/struct.proto
     *
     * Generated from protobuf field <code>.google.protobuf.Struct metadata = 11;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.EmailAddress email_addresses = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEmailAddresses()
    {
        return $this->email_addresses;
    }

    /**
     * Generated from protobuf field <code>repeated .clarifai.api.EmailAddress email_addresses = 12;</code>
     * @param \Clarifai\Api\EmailAddress[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEmailAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\EmailAddress::class);
        $this->email_addresses = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_org_admin = 14;</code>
     * @return bool
     */
    public function getIsOrgAdmin()
    {
        return $this->is_org_admin;
    }

    /**
     * Generated from protobuf field <code>bool is_org_admin = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsOrgAdmin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_org_admin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool two_factor_auth_enabled = 15;</code>
     * @return bool
     */
    public function getTwoFactorAuthEnabled()
    {
        return $this->two_factor_auth_enabled;
    }

    /**
     * Generated from protobuf field <code>bool two_factor_auth_enabled = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setTwoFactorAuthEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->two_factor_auth_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 teams_count = 16;</code>
     * @return int
     */
    public function getTeamsCount()
    {
        return $this->teams_count;
    }

    /**
     * Generated from protobuf field <code>uint32 teams_count = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setTeamsCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->teams_count = $var;

        return $this;
    }

}

