<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gift/GiftBoxes.proto

namespace POGOProtos\Data\Gift;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Gift.GiftBoxes</code>
 */
class GiftBoxes extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .POGOProtos.Data.Gift.GiftBox gifts = 1;</code>
     */
    private $gifts;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Gift\GiftBoxes::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .POGOProtos.Data.Gift.GiftBox gifts = 1;</code>
     */
    public function getGifts()
    {
        return $this->gifts;
    }

    /**
     * <code>repeated .POGOProtos.Data.Gift.GiftBox gifts = 1;</code>
     */
    public function setGifts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Gift\GiftBox::class);
        $this->gifts = $var;
    }

}

