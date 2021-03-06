<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Player/UserIssueWeatherReport.proto

namespace POGOProtos\Data\Player;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Player.UserIssueWeatherReport</code>
 */
class UserIssueWeatherReport extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string gameplayer_weather = 1;</code>
     */
    private $gameplayer_weather = '';
    /**
     * Generated from protobuf field <code>bool alert_active = 2;</code>
     */
    private $alert_active = false;
    /**
     * Generated from protobuf field <code>int32 severity = 3;</code>
     */
    private $severity = 0;
    /**
     * Generated from protobuf field <code>int32 user_report = 4;</code>
     */
    private $user_report = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gameplayer_weather
     *     @type bool $alert_active
     *     @type int $severity
     *     @type int $user_report
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Player\UserIssueWeatherReport::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string gameplayer_weather = 1;</code>
     * @return string
     */
    public function getGameplayerWeather()
    {
        return $this->gameplayer_weather;
    }

    /**
     * Generated from protobuf field <code>string gameplayer_weather = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGameplayerWeather($var)
    {
        GPBUtil::checkString($var, True);
        $this->gameplayer_weather = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool alert_active = 2;</code>
     * @return bool
     */
    public function getAlertActive()
    {
        return $this->alert_active;
    }

    /**
     * Generated from protobuf field <code>bool alert_active = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAlertActive($var)
    {
        GPBUtil::checkBool($var);
        $this->alert_active = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 severity = 3;</code>
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Generated from protobuf field <code>int32 severity = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkInt32($var);
        $this->severity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 user_report = 4;</code>
     * @return int
     */
    public function getUserReport()
    {
        return $this->user_report;
    }

    /**
     * Generated from protobuf field <code>int32 user_report = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUserReport($var)
    {
        GPBUtil::checkInt32($var);
        $this->user_report = $var;

        return $this;
    }

}

