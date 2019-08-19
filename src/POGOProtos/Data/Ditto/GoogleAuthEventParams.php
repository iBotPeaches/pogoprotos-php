<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Ditto/GoogleAuthEventParams.proto

namespace POGOProtos\Data\Ditto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Ditto.GoogleAuthEventParams</code>
 */
class GoogleAuthEventParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string payload = 1;</code>
     */
    private $payload = '';
    /**
     * Generated from protobuf field <code>string account_name = 2;</code>
     */
    private $account_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $payload
     *     @type string $account_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Ditto\GoogleAuthEventParams::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string payload = 1;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>string payload = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, True);
        $this->payload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_name = 2;</code>
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * Generated from protobuf field <code>string account_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountName($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_name = $var;

        return $this;
    }

}
