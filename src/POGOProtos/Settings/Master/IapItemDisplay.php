<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/IapItemDisplay.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.IapItemDisplay</code>
 */
class IapItemDisplay extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sku = 1;</code>
     */
    private $sku = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.HoloIapItemCategory category = 2;</code>
     */
    private $category = 0;
    /**
     * Generated from protobuf field <code>int32 sort_order = 3;</code>
     */
    private $sort_order = 0;
    /**
     * repeated .POGOProtos.Inventory.Item.ItemId item_ids = 4;
     * repeated int32 counts = 5;
     *
     * Generated from protobuf field <code>bool hidden = 6;</code>
     */
    private $hidden = false;
    /**
     * Generated from protobuf field <code>bool sale = 7;</code>
     */
    private $sale = false;
    /**
     * Generated from protobuf field <code>string sprite_id = 8;</code>
     */
    private $sprite_id = '';
    /**
     * Generated from protobuf field <code>string title = 9;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>string description = 10;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sku
     *     @type int $category
     *     @type int $sort_order
     *     @type bool $hidden
     *           repeated .POGOProtos.Inventory.Item.ItemId item_ids = 4;
     *           repeated int32 counts = 5;
     *     @type bool $sale
     *     @type string $sprite_id
     *     @type string $title
     *     @type string $description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\IapItemDisplay::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sku = 1;</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Generated from protobuf field <code>string sku = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.HoloIapItemCategory category = 2;</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.HoloIapItemCategory category = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\HoloIapItemCategory::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 sort_order = 3;</code>
     * @return int
     */
    public function getSortOrder()
    {
        return $this->sort_order;
    }

    /**
     * Generated from protobuf field <code>int32 sort_order = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSortOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->sort_order = $var;

        return $this;
    }

    /**
     * repeated .POGOProtos.Inventory.Item.ItemId item_ids = 4;
     * repeated int32 counts = 5;
     *
     * Generated from protobuf field <code>bool hidden = 6;</code>
     * @return bool
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * repeated .POGOProtos.Inventory.Item.ItemId item_ids = 4;
     * repeated int32 counts = 5;
     *
     * Generated from protobuf field <code>bool hidden = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool sale = 7;</code>
     * @return bool
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Generated from protobuf field <code>bool sale = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setSale($var)
    {
        GPBUtil::checkBool($var);
        $this->sale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sprite_id = 8;</code>
     * @return string
     */
    public function getSpriteId()
    {
        return $this->sprite_id;
    }

    /**
     * Generated from protobuf field <code>string sprite_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSpriteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sprite_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 9;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 10;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

