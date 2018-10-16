<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/ShareExRaidPassResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.ShareExRaidPassResponse</code>
 */
class ShareExRaidPassResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ShareExRaidPassResult result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.FriendshipLevelData updated_friendship_data = 2;</code>
     */
    private $updated_friendship_data = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile friend_profile = 3;</code>
     */
    private $friend_profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\Friends\FriendshipLevelData $updated_friendship_data
     *     @type \POGOProtos\Data\Player\PlayerPublicProfile $friend_profile
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\ShareExRaidPassResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ShareExRaidPassResult result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ShareExRaidPassResult result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\ShareExRaidPassResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.FriendshipLevelData updated_friendship_data = 2;</code>
     * @return \POGOProtos\Data\Friends\FriendshipLevelData
     */
    public function getUpdatedFriendshipData()
    {
        return $this->updated_friendship_data;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Friends.FriendshipLevelData updated_friendship_data = 2;</code>
     * @param \POGOProtos\Data\Friends\FriendshipLevelData $var
     * @return $this
     */
    public function setUpdatedFriendshipData($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Friends\FriendshipLevelData::class);
        $this->updated_friendship_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile friend_profile = 3;</code>
     * @return \POGOProtos\Data\Player\PlayerPublicProfile
     */
    public function getFriendProfile()
    {
        return $this->friend_profile;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile friend_profile = 3;</code>
     * @param \POGOProtos\Data\Player\PlayerPublicProfile $var
     * @return $this
     */
    public function setFriendProfile($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerPublicProfile::class);
        $this->friend_profile = $var;

        return $this;
    }

}

