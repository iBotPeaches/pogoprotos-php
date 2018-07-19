<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/PlatformClientActionsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.AddNewPoiMessage</code>
 */
class AddNewPoiMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>string long_description = 2;</code>
     */
    private $long_description = '';
    /**
     * Generated from protobuf field <code>string image_gs_file_path = 3;</code>
     */
    private $image_gs_file_path = '';
    /**
     * Generated from protobuf field <code>int32 lat_e6 = 4;</code>
     */
    private $lat_e6 = 0;
    /**
     * Generated from protobuf field <code>int32 lng_e6 = 5;</code>
     */
    private $lng_e6 = 0;
    /**
     * Generated from protobuf field <code>string image_serving_url = 6;</code>
     */
    private $image_serving_url = '';
    /**
     * Generated from protobuf field <code>string user_id = 7;</code>
     */
    private $user_id = '';
    /**
     * Generated from protobuf field <code>string player_language = 8;</code>
     */
    private $player_language = '';
    /**
     * Generated from protobuf field <code>string game_unique_id = 9;</code>
     */
    private $game_unique_id = '';
    /**
     * Generated from protobuf field <code>string app_id = 10;</code>
     */
    private $app_id = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerReputation player_reputation = 11;</code>
     */
    private $player_reputation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $long_description
     *     @type string $image_gs_file_path
     *     @type int $lat_e6
     *     @type int $lng_e6
     *     @type string $image_serving_url
     *     @type string $user_id
     *     @type string $player_language
     *     @type string $game_unique_id
     *     @type string $app_id
     *     @type \POGOProtos\Data\Player\PlayerReputation $player_reputation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\PlatformClientActionsMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string long_description = 2;</code>
     * @return string
     */
    public function getLongDescription()
    {
        return $this->long_description;
    }

    /**
     * Generated from protobuf field <code>string long_description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLongDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->long_description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image_gs_file_path = 3;</code>
     * @return string
     */
    public function getImageGsFilePath()
    {
        return $this->image_gs_file_path;
    }

    /**
     * Generated from protobuf field <code>string image_gs_file_path = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setImageGsFilePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_gs_file_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 lat_e6 = 4;</code>
     * @return int
     */
    public function getLatE6()
    {
        return $this->lat_e6;
    }

    /**
     * Generated from protobuf field <code>int32 lat_e6 = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLatE6($var)
    {
        GPBUtil::checkInt32($var);
        $this->lat_e6 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 lng_e6 = 5;</code>
     * @return int
     */
    public function getLngE6()
    {
        return $this->lng_e6;
    }

    /**
     * Generated from protobuf field <code>int32 lng_e6 = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLngE6($var)
    {
        GPBUtil::checkInt32($var);
        $this->lng_e6 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image_serving_url = 6;</code>
     * @return string
     */
    public function getImageServingUrl()
    {
        return $this->image_serving_url;
    }

    /**
     * Generated from protobuf field <code>string image_serving_url = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setImageServingUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_serving_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 7;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string player_language = 8;</code>
     * @return string
     */
    public function getPlayerLanguage()
    {
        return $this->player_language;
    }

    /**
     * Generated from protobuf field <code>string player_language = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_language = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string game_unique_id = 9;</code>
     * @return string
     */
    public function getGameUniqueId()
    {
        return $this->game_unique_id;
    }

    /**
     * Generated from protobuf field <code>string game_unique_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setGameUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->game_unique_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_id = 10;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>string app_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerReputation player_reputation = 11;</code>
     * @return \POGOProtos\Data\Player\PlayerReputation
     */
    public function getPlayerReputation()
    {
        return $this->player_reputation;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerReputation player_reputation = 11;</code>
     * @param \POGOProtos\Data\Player\PlayerReputation $var
     * @return $this
     */
    public function setPlayerReputation($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerReputation::class);
        $this->player_reputation = $var;

        return $this;
    }

}
