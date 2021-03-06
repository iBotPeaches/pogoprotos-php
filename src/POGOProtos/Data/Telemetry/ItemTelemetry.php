<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/ItemTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.ItemTelemetry</code>
 */
class ItemTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ItemUseTelemetryIds item_use_click_id = 1;</code>
     */
    private $item_use_click_id = 0;
    /**
     * Generated from protobuf field <code>int32 item_id = 2;</code>
     */
    private $item_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $item_use_click_id
     *     @type int $item_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\ItemTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ItemUseTelemetryIds item_use_click_id = 1;</code>
     * @return int
     */
    public function getItemUseClickId()
    {
        return $this->item_use_click_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.ItemUseTelemetryIds item_use_click_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setItemUseClickId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\ItemUseTelemetryIds::class);
        $this->item_use_click_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 item_id = 2;</code>
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Generated from protobuf field <code>int32 item_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkInt32($var);
        $this->item_id = $var;

        return $this;
    }

}

