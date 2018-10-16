<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/ShareExRaidPassMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.ShareExRaidPassMessage</code>
 */
class ShareExRaidPassMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string friend_id = 1;</code>
     */
    private $friend_id = '';
    /**
     * Generated from protobuf field <code>string fort_id = 2;</code>
     */
    private $fort_id = '';
    /**
     * Generated from protobuf field <code>int64 raid_seed = 3;</code>
     */
    private $raid_seed = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $friend_id
     *     @type string $fort_id
     *     @type int|string $raid_seed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\ShareExRaidPassMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string friend_id = 1;</code>
     * @return string
     */
    public function getFriendId()
    {
        return $this->friend_id;
    }

    /**
     * Generated from protobuf field <code>string friend_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFriendId($var)
    {
        GPBUtil::checkString($var, True);
        $this->friend_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 2;</code>
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 raid_seed = 3;</code>
     * @return int|string
     */
    public function getRaidSeed()
    {
        return $this->raid_seed;
    }

    /**
     * Generated from protobuf field <code>int64 raid_seed = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRaidSeed($var)
    {
        GPBUtil::checkInt64($var);
        $this->raid_seed = $var;

        return $this;
    }

}

