<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Capture/CaptureAward.proto

namespace POGOProtos\Data\Capture;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Capture.CaptureAward</code>
 */
class CaptureAward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.ActivityType activity_type = 1 [packed = true];</code>
     */
    private $activity_type;
    /**
     * Generated from protobuf field <code>repeated int32 xp = 2 [packed = true];</code>
     */
    private $xp;
    /**
     * Generated from protobuf field <code>repeated int32 candy = 3 [packed = true];</code>
     */
    private $candy;
    /**
     * Generated from protobuf field <code>repeated int32 stardust = 4 [packed = true];</code>
     */
    private $stardust;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $activity_type
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $xp
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $candy
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $stardust
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Capture\CaptureAward::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.ActivityType activity_type = 1 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivityType()
    {
        return $this->activity_type;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.ActivityType activity_type = 1 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivityType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Enums\ActivityType::class);
        $this->activity_type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 xp = 2 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Generated from protobuf field <code>repeated int32 xp = 2 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setXp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->xp = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 candy = 3 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCandy()
    {
        return $this->candy;
    }

    /**
     * Generated from protobuf field <code>repeated int32 candy = 3 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCandy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->candy = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 stardust = 4 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStardust()
    {
        return $this->stardust;
    }

    /**
     * Generated from protobuf field <code>repeated int32 stardust = 4 [packed = true];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStardust($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->stardust = $arr;

        return $this;
    }

}

