<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/Item/InventoryUpgradeAttributes.proto

namespace POGOProtos\Settings\Master\Item;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.Item.InventoryUpgradeAttributes</code>
 */
class InventoryUpgradeAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 additional_storage = 1;</code>
     */
    private $additional_storage = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.InventoryUpgradeType upgrade_type = 2;</code>
     */
    private $upgrade_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $additional_storage
     *     @type int $upgrade_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\Item\InventoryUpgradeAttributes::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 additional_storage = 1;</code>
     * @return int
     */
    public function getAdditionalStorage()
    {
        return $this->additional_storage;
    }

    /**
     * Generated from protobuf field <code>int32 additional_storage = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAdditionalStorage($var)
    {
        GPBUtil::checkInt32($var);
        $this->additional_storage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.InventoryUpgradeType upgrade_type = 2;</code>
     * @return int
     */
    public function getUpgradeType()
    {
        return $this->upgrade_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.InventoryUpgradeType upgrade_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUpgradeType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\InventoryUpgradeType::class);
        $this->upgrade_type = $var;

        return $this;
    }

}

