<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/CheckAwardedBadgesResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.CheckAwardedBadgesResponse</code>
 */
class CheckAwardedBadgesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     */
    private $success = false;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType awarded_badges = 2;</code>
     */
    private $awarded_badges;
    /**
     * Generated from protobuf field <code>repeated int32 awarded_badge_levels = 3;</code>
     */
    private $awarded_badge_levels;
    /**
     * Generated from protobuf field <code>repeated string avatar_template_ids = 4;</code>
     */
    private $avatar_template_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $success
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $awarded_badges
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $awarded_badge_levels
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $avatar_template_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\CheckAwardedBadgesResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType awarded_badges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAwardedBadges()
    {
        return $this->awarded_badges;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType awarded_badges = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAwardedBadges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Enums\BadgeType::class);
        $this->awarded_badges = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 awarded_badge_levels = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAwardedBadgeLevels()
    {
        return $this->awarded_badge_levels;
    }

    /**
     * Generated from protobuf field <code>repeated int32 awarded_badge_levels = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAwardedBadgeLevels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->awarded_badge_levels = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string avatar_template_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarTemplateIds()
    {
        return $this->avatar_template_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string avatar_template_ids = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarTemplateIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->avatar_template_ids = $arr;

        return $this;
    }

}

