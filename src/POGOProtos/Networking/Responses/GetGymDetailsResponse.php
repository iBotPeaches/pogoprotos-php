<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetGymDetailsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetGymDetailsResponse</code>
 */
class GetGymDetailsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Gym.GymState gym_state = 1;</code>
     */
    private $gym_state = null;
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>repeated string urls = 3;</code>
     */
    private $urls;
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetGymDetailsResponse.Result result = 4;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>repeated string secondary_url = 6;</code>
     */
    private $secondary_url;
    /**
     * Generated from protobuf field <code>string checkin_image_url = 7;</code>
     */
    private $checkin_image_url = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.EventInfo event_info = 8;</code>
     */
    private $event_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\Gym\GymState $gym_state
     *     @type string $name
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $urls
     *     @type int $result
     *     @type string $description
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $secondary_url
     *     @type string $checkin_image_url
     *     @type \POGOProtos\Data\Raid\EventInfo $event_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetGymDetailsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Gym.GymState gym_state = 1;</code>
     * @return \POGOProtos\Data\Gym\GymState
     */
    public function getGymState()
    {
        return $this->gym_state;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Gym.GymState gym_state = 1;</code>
     * @param \POGOProtos\Data\Gym\GymState $var
     * @return $this
     */
    public function setGymState($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Gym\GymState::class);
        $this->gym_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string urls = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Generated from protobuf field <code>repeated string urls = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->urls = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetGymDetailsResponse.Result result = 4;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.GetGymDetailsResponse.Result result = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GetGymDetailsResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string secondary_url = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondaryUrl()
    {
        return $this->secondary_url;
    }

    /**
     * Generated from protobuf field <code>repeated string secondary_url = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondaryUrl($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->secondary_url = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string checkin_image_url = 7;</code>
     * @return string
     */
    public function getCheckinImageUrl()
    {
        return $this->checkin_image_url;
    }

    /**
     * Generated from protobuf field <code>string checkin_image_url = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckinImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->checkin_image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.EventInfo event_info = 8;</code>
     * @return \POGOProtos\Data\Raid\EventInfo
     */
    public function getEventInfo()
    {
        return $this->event_info;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.EventInfo event_info = 8;</code>
     * @param \POGOProtos\Data\Raid\EventInfo $var
     * @return $this
     */
    public function setEventInfo($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Raid\EventInfo::class);
        $this->event_info = $var;

        return $this;
    }

}

