<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/PlayerSummary.proto

namespace POGOProtos\Data\Player;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Player.PlayerSummary</code>
 */
class PlayerSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     */
    private $player_id = '';
    /**
     * Generated from protobuf field <code>string codename = 2;</code>
     */
    private $codename = '';
    /**
     * Generated from protobuf field <code>bytes public_data = 3;</code>
     */
    private $public_data = '';
    /**
     * Generated from protobuf field <code>string team = 4;</code>
     */
    private $team = '';
    /**
     * Generated from protobuf field <code>string fb_user_id = 5;</code>
     */
    private $fb_user_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $player_id
     *     @type string $codename
     *     @type string $public_data
     *     @type string $team
     *     @type string $fb_user_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Player\PlayerSummary::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     * @return string
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string codename = 2;</code>
     * @return string
     */
    public function getCodename()
    {
        return $this->codename;
    }

    /**
     * Generated from protobuf field <code>string codename = 2;</code>
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
     * Generated from protobuf field <code>bytes public_data = 3;</code>
     * @return string
     */
    public function getPublicData()
    {
        return $this->public_data;
    }

    /**
     * Generated from protobuf field <code>bytes public_data = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicData($var)
    {
        GPBUtil::checkString($var, False);
        $this->public_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string team = 4;</code>
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Generated from protobuf field <code>string team = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTeam($var)
    {
        GPBUtil::checkString($var, True);
        $this->team = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fb_user_id = 5;</code>
     * @return string
     */
    public function getFbUserId()
    {
        return $this->fb_user_id;
    }

    /**
     * Generated from protobuf field <code>string fb_user_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFbUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fb_user_id = $var;

        return $this;
    }

}

