<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/OnboardingTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.OnboardingTelemetry</code>
 */
class OnboardingTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingPathIds onboarding_path = 1;</code>
     */
    private $onboarding_path = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingEventIds event_id = 2;</code>
     */
    private $event_id = 0;
    /**
     * Generated from protobuf field <code>int32 data = 3;</code>
     */
    private $data = 0;
    /**
     * Generated from protobuf field <code>string conversation = 4;</code>
     */
    private $conversation = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingArStatus ar_status = 5;</code>
     */
    private $ar_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $onboarding_path
     *     @type int $event_id
     *     @type int $data
     *     @type string $conversation
     *     @type int $ar_status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\OnboardingTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingPathIds onboarding_path = 1;</code>
     * @return int
     */
    public function getOnboardingPath()
    {
        return $this->onboarding_path;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingPathIds onboarding_path = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOnboardingPath($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\OnboardingPathIds::class);
        $this->onboarding_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingEventIds event_id = 2;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingEventIds event_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\OnboardingEventIds::class);
        $this->event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 data = 3;</code>
     * @return int
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>int32 data = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkInt32($var);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string conversation = 4;</code>
     * @return string
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    /**
     * Generated from protobuf field <code>string conversation = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setConversation($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingArStatus ar_status = 5;</code>
     * @return int
     */
    public function getArStatus()
    {
        return $this->ar_status;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.OnboardingArStatus ar_status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setArStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\OnboardingArStatus::class);
        $this->ar_status = $var;

        return $this;
    }

}

