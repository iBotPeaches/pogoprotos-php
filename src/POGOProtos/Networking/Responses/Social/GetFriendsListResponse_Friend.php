<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/Social/GetFriendsListResponse.proto

namespace POGOProtos\Networking\Responses\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.Social.GetFriendsListResponse.Friend</code>
 */
class GetFriendsListResponse_Friend extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string player_id = 1;</code>
     */
    private $player_id = '';
    /**
     * <code>string codename = 2;</code>
     */
    private $codename = '';
    /**
     * <code>string team = 3;</code>
     */
    private $team = '';
    /**
     * <code>int32 score = 4;</code>
     */
    private $score = 0;
    /**
     * <code>bytes data_with_me = 5;</code>
     */
    private $data_with_me = '';
    /**
     * <code>int64 version = 6;</code>
     */
    private $version = 0;
    /**
     * <code>int64 created_ms = 7;</code>
     */
    private $created_ms = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\Social\GetFriendsListResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>string player_id = 1;</code>
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * <code>string player_id = 1;</code>
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;
    }

    /**
     * <code>string codename = 2;</code>
     */
    public function getCodename()
    {
        return $this->codename;
    }

    /**
     * <code>string codename = 2;</code>
     */
    public function setCodename($var)
    {
        GPBUtil::checkString($var, True);
        $this->codename = $var;
    }

    /**
     * <code>string team = 3;</code>
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * <code>string team = 3;</code>
     */
    public function setTeam($var)
    {
        GPBUtil::checkString($var, True);
        $this->team = $var;
    }

    /**
     * <code>int32 score = 4;</code>
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * <code>int32 score = 4;</code>
     */
    public function setScore($var)
    {
        GPBUtil::checkInt32($var);
        $this->score = $var;
    }

    /**
     * <code>bytes data_with_me = 5;</code>
     */
    public function getDataWithMe()
    {
        return $this->data_with_me;
    }

    /**
     * <code>bytes data_with_me = 5;</code>
     */
    public function setDataWithMe($var)
    {
        GPBUtil::checkString($var, False);
        $this->data_with_me = $var;
    }

    /**
     * <code>int64 version = 6;</code>
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <code>int64 version = 6;</code>
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;
    }

    /**
     * <code>int64 created_ms = 7;</code>
     */
    public function getCreatedMs()
    {
        return $this->created_ms;
    }

    /**
     * <code>int64 created_ms = 7;</code>
     */
    public function setCreatedMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_ms = $var;
    }

}

