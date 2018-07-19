<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/LeaveLobbyMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.LeaveLobbyMessage</code>
 */
class LeaveLobbyMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 raid_seed = 1;</code>
     */
    private $raid_seed = 0;
    /**
     * Generated from protobuf field <code>string gym_id = 2;</code>
     */
    private $gym_id = '';
    /**
     * Generated from protobuf field <code>repeated int32 lobby_id = 3;</code>
     */
    private $lobby_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $raid_seed
     *     @type string $gym_id
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $lobby_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\LeaveLobbyMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 raid_seed = 1;</code>
     * @return int|string
     */
    public function getRaidSeed()
    {
        return $this->raid_seed;
    }

    /**
     * Generated from protobuf field <code>int64 raid_seed = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRaidSeed($var)
    {
        GPBUtil::checkInt64($var);
        $this->raid_seed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gym_id = 2;</code>
     * @return string
     */
    public function getGymId()
    {
        return $this->gym_id;
    }

    /**
     * Generated from protobuf field <code>string gym_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGymId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gym_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 lobby_id = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLobbyId()
    {
        return $this->lobby_id;
    }

    /**
     * Generated from protobuf field <code>repeated int32 lobby_id = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLobbyId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->lobby_id = $arr;

        return $this;
    }

}

