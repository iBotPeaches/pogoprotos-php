<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gift/GiftBox.proto

namespace POGOProtos\Data\Gift;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.Gift.GiftBox</code>
 */
class GiftBox extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>fixed64 giftbox_id = 1;</code>
     */
    private $giftbox_id = 0;
    /**
     * <code>string sender_id = 2;</code>
     */
    private $sender_id = '';
    /**
     * <code>string receiver_id = 3;</code>
     */
    private $receiver_id = '';
    /**
     * <code>string fort_id = 4;</code>
     */
    private $fort_id = '';
    /**
     * <code>double fort_lat = 5;</code>
     */
    private $fort_lat = 0.0;
    /**
     * <code>double fort_lng = 6;</code>
     */
    private $fort_lng = 0.0;
    /**
     * <code>int64 creation_timestamp = 7;</code>
     */
    private $creation_timestamp = 0;
    /**
     * <code>int64 sent_timestamp = 8;</code>
     */
    private $sent_timestamp = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\Gift\GiftBox::initOnce();
        parent::__construct();
    }

    /**
     * <code>fixed64 giftbox_id = 1;</code>
     */
    public function getGiftboxId()
    {
        return $this->giftbox_id;
    }

    /**
     * <code>fixed64 giftbox_id = 1;</code>
     */
    public function setGiftboxId($var)
    {
        GPBUtil::checkUint64($var);
        $this->giftbox_id = $var;
    }

    /**
     * <code>string sender_id = 2;</code>
     */
    public function getSenderId()
    {
        return $this->sender_id;
    }

    /**
     * <code>string sender_id = 2;</code>
     */
    public function setSenderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sender_id = $var;
    }

    /**
     * <code>string receiver_id = 3;</code>
     */
    public function getReceiverId()
    {
        return $this->receiver_id;
    }

    /**
     * <code>string receiver_id = 3;</code>
     */
    public function setReceiverId($var)
    {
        GPBUtil::checkString($var, True);
        $this->receiver_id = $var;
    }

    /**
     * <code>string fort_id = 4;</code>
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * <code>string fort_id = 4;</code>
     */
    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;
    }

    /**
     * <code>double fort_lat = 5;</code>
     */
    public function getFortLat()
    {
        return $this->fort_lat;
    }

    /**
     * <code>double fort_lat = 5;</code>
     */
    public function setFortLat($var)
    {
        GPBUtil::checkDouble($var);
        $this->fort_lat = $var;
    }

    /**
     * <code>double fort_lng = 6;</code>
     */
    public function getFortLng()
    {
        return $this->fort_lng;
    }

    /**
     * <code>double fort_lng = 6;</code>
     */
    public function setFortLng($var)
    {
        GPBUtil::checkDouble($var);
        $this->fort_lng = $var;
    }

    /**
     * <code>int64 creation_timestamp = 7;</code>
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * <code>int64 creation_timestamp = 7;</code>
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_timestamp = $var;
    }

    /**
     * <code>int64 sent_timestamp = 8;</code>
     */
    public function getSentTimestamp()
    {
        return $this->sent_timestamp;
    }

    /**
     * <code>int64 sent_timestamp = 8;</code>
     */
    public function setSentTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->sent_timestamp = $var;
    }

}

