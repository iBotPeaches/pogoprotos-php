<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/QuestCondition.proto

namespace POGOProtos\Data\Quests\QuestCondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.QuestCondition.WithDistance</code>
 */
class WithDistance extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double distance_km = 1;</code>
     */
    private $distance_km = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $distance_km
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\QuestCondition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double distance_km = 1;</code>
     * @return float
     */
    public function getDistanceKm()
    {
        return $this->distance_km;
    }

    /**
     * Generated from protobuf field <code>double distance_km = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setDistanceKm($var)
    {
        GPBUtil::checkDouble($var);
        $this->distance_km = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WithDistance::class, \POGOProtos\Data\Quests\QuestCondition_WithDistance::class);

