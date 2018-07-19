<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/PlayerBadge.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.PlayerBadge</code>
 */
class PlayerBadge extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     */
    private $badge_type = 0;
    /**
     * Generated from protobuf field <code>int32 rank = 2;</code>
     */
    private $rank = 0;
    /**
     * Generated from protobuf field <code>int32 start_value = 3;</code>
     */
    private $start_value = 0;
    /**
     * Generated from protobuf field <code>int32 end_value = 4;</code>
     */
    private $end_value = 0;
    /**
     * Generated from protobuf field <code>double current_value = 5;</code>
     */
    private $current_value = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $badge_type
     *     @type int $rank
     *     @type int $start_value
     *     @type int $end_value
     *     @type float $current_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\PlayerBadge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     * @return int
     */
    public function getBadgeType()
    {
        return $this->badge_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.BadgeType badge_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBadgeType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\BadgeType::class);
        $this->badge_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 rank = 2;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>int32 rank = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkInt32($var);
        $this->rank = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 start_value = 3;</code>
     * @return int
     */
    public function getStartValue()
    {
        return $this->start_value;
    }

    /**
     * Generated from protobuf field <code>int32 start_value = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStartValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->start_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 end_value = 4;</code>
     * @return int
     */
    public function getEndValue()
    {
        return $this->end_value;
    }

    /**
     * Generated from protobuf field <code>int32 end_value = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setEndValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->end_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double current_value = 5;</code>
     * @return float
     */
    public function getCurrentValue()
    {
        return $this->current_value;
    }

    /**
     * Generated from protobuf field <code>double current_value = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setCurrentValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->current_value = $var;

        return $this;
    }

}

