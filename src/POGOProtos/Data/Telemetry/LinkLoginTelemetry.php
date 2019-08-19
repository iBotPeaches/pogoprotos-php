<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/LinkLoginTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.LinkLoginTelemetry</code>
 */
class LinkLoginTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool linked = 1;</code>
     */
    private $linked = false;
    /**
     * Generated from protobuf field <code>string success = 2;</code>
     */
    private $success = '';
    /**
     * Generated from protobuf field <code>string error = 3;</code>
     */
    private $error = '';
    /**
     * Generated from protobuf field <code>string active_auth_provider_id = 4;</code>
     */
    private $active_auth_provider_id = '';
    /**
     * Generated from protobuf field <code>string provider = 5;</code>
     */
    private $provider = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $linked
     *     @type string $success
     *     @type string $error
     *     @type string $active_auth_provider_id
     *     @type string $provider
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\LinkLoginTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool linked = 1;</code>
     * @return bool
     */
    public function getLinked()
    {
        return $this->linked;
    }

    /**
     * Generated from protobuf field <code>bool linked = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setLinked($var)
    {
        GPBUtil::checkBool($var);
        $this->linked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string success = 2;</code>
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>string success = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkString($var, True);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 3;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string active_auth_provider_id = 4;</code>
     * @return string
     */
    public function getActiveAuthProviderId()
    {
        return $this->active_auth_provider_id;
    }

    /**
     * Generated from protobuf field <code>string active_auth_provider_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setActiveAuthProviderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->active_auth_provider_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string provider = 5;</code>
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Generated from protobuf field <code>string provider = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider = $var;

        return $this;
    }

}
