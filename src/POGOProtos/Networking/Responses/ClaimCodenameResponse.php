<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/ClaimCodenameResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.ClaimCodenameResponse</code>
 */
class ClaimCodenameResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string codename = 1;</code>
     */
    private $codename = '';
    /**
     * Generated from protobuf field <code>string user_message = 2;</code>
     */
    private $user_message = '';
    /**
     * Generated from protobuf field <code>bool is_assignable = 3;</code>
     */
    private $is_assignable = false;
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.ClaimCodenameResponse.Status status = 4;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PlayerData updated_player = 5;</code>
     */
    private $updated_player = null;
    /**
     * Generated from protobuf field <code>repeated string suggested_codenames = 6;</code>
     */
    private $suggested_codenames;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $codename
     *     @type string $user_message
     *     @type bool $is_assignable
     *     @type int $status
     *     @type \POGOProtos\Data\PlayerData $updated_player
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $suggested_codenames
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\ClaimCodenameResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string codename = 1;</code>
     * @return string
     */
    public function getCodename()
    {
        return $this->codename;
    }

    /**
     * Generated from protobuf field <code>string codename = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCodename($var)
    {
        GPBUtil::checkString($var, True);
        $this->codename = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_message = 2;</code>
     * @return string
     */
    public function getUserMessage()
    {
        return $this->user_message;
    }

    /**
     * Generated from protobuf field <code>string user_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_assignable = 3;</code>
     * @return bool
     */
    public function getIsAssignable()
    {
        return $this->is_assignable;
    }

    /**
     * Generated from protobuf field <code>bool is_assignable = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAssignable($var)
    {
        GPBUtil::checkBool($var);
        $this->is_assignable = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.ClaimCodenameResponse.Status status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.ClaimCodenameResponse.Status status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\ClaimCodenameResponse_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PlayerData updated_player = 5;</code>
     * @return \POGOProtos\Data\PlayerData
     */
    public function getUpdatedPlayer()
    {
        return $this->updated_player;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.PlayerData updated_player = 5;</code>
     * @param \POGOProtos\Data\PlayerData $var
     * @return $this
     */
    public function setUpdatedPlayer($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\PlayerData::class);
        $this->updated_player = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string suggested_codenames = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSuggestedCodenames()
    {
        return $this->suggested_codenames;
    }

    /**
     * Generated from protobuf field <code>repeated string suggested_codenames = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSuggestedCodenames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->suggested_codenames = $arr;

        return $this;
    }

}

