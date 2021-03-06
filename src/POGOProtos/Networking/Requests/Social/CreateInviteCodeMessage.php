<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Social/CreateInviteCodeMessage.proto

namespace POGOProtos\Networking\Requests\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Social.CreateInviteCodeMessage</code>
 */
class CreateInviteCodeMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool force_generate_code = 1;</code>
     */
    private $force_generate_code = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $force_generate_code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Social\CreateInviteCodeMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool force_generate_code = 1;</code>
     * @return bool
     */
    public function getForceGenerateCode()
    {
        return $this->force_generate_code;
    }

    /**
     * Generated from protobuf field <code>bool force_generate_code = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setForceGenerateCode($var)
    {
        GPBUtil::checkBool($var);
        $this->force_generate_code = $var;

        return $this;
    }

}

