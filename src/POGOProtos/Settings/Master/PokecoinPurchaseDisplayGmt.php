<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/PokecoinPurchaseDisplayGmt.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.PokecoinPurchaseDisplayGmt</code>
 */
class PokecoinPurchaseDisplayGmt extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool feature_enabled = 1;</code>
     */
    private $feature_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $feature_enabled
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\PokecoinPurchaseDisplayGmt::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool feature_enabled = 1;</code>
     * @return bool
     */
    public function getFeatureEnabled()
    {
        return $this->feature_enabled;
    }

    /**
     * Generated from protobuf field <code>bool feature_enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setFeatureEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->feature_enabled = $var;

        return $this;
    }

}

