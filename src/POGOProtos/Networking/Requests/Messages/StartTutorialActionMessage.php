<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/StartTutorialActionMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.StartTutorialActionMessage</code>
 */
class StartTutorialActionMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool onboarding_v2_enabled = 1;</code>
     */
    private $onboarding_v2_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $onboarding_v2_enabled
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\StartTutorialActionMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool onboarding_v2_enabled = 1;</code>
     * @return bool
     */
    public function getOnboardingV2Enabled()
    {
        return $this->onboarding_v2_enabled;
    }

    /**
     * Generated from protobuf field <code>bool onboarding_v2_enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOnboardingV2Enabled($var)
    {
        GPBUtil::checkBool($var);
        $this->onboarding_v2_enabled = $var;

        return $this;
    }

}
