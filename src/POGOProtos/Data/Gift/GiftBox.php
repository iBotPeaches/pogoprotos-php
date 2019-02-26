<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Gift/GiftBox.proto

namespace POGOProtos\Data\Gift;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Gift.GiftBox</code>
 */
class GiftBox extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 giftbox_id = 1;</code>
     */
    private $giftbox_id = 0;
    /**
     * Generated from protobuf field <code>string sender_id = 2;</code>
     */
    private $sender_id = '';
    /**
     * Generated from protobuf field <code>string receiver_id = 3;</code>
     */
    private $receiver_id = '';
    /**
     * Generated from protobuf field <code>string fort_id = 4;</code>
     */
    private $fort_id = '';
    /**
     * Generated from protobuf field <code>double fort_lat = 5;</code>
     */
    private $fort_lat = 0.0;
    /**
     * Generated from protobuf field <code>double fort_lng = 6;</code>
     */
    private $fort_lng = 0.0;
    /**
     * Generated from protobuf field <code>int64 creation_timestamp = 7;</code>
     */
    private $creation_timestamp = 0;
    /**
     * Generated from protobuf field <code>int64 sent_timestamp = 8;</code>
     */
    private $sent_timestamp = 0;
    /**
     * Generated from protobuf field <code>int64 sent_bucket = 9;</code>
     */
    private $sent_bucket = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $giftbox_id
     *     @type string $sender_id
     *     @type string $receiver_id
     *     @type string $fort_id
     *     @type float $fort_lat
     *     @type float $fort_lng
     *     @type int|string $creation_timestamp
     *     @type int|string $sent_timestamp
     *     @type int|string $sent_bucket
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Gift\GiftBox::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 giftbox_id = 1;</code>
     * @return int|string
     */
    public function getGiftboxId()
    {
        return $this->giftbox_id;
    }

    /**
     * Generated from protobuf field <code>uint64 giftbox_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGiftboxId($var)
    {
        GPBUtil::checkUint64($var);
        $this->giftbox_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sender_id = 2;</code>
     * @return string
     */
    public function getSenderId()
    {
        return $this->sender_id;
    }

    /**
     * Generated from protobuf field <code>string sender_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSenderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sender_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string receiver_id = 3;</code>
     * @return string
     */
    public function getReceiverId()
    {
        return $this->receiver_id;
    }

    /**
     * Generated from protobuf field <code>string receiver_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReceiverId($var)
    {
        GPBUtil::checkString($var, True);
        $this->receiver_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 4;</code>
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double fort_lat = 5;</code>
     * @return float
     */
    public function getFortLat()
    {
        return $this->fort_lat;
    }

    /**
     * Generated from protobuf field <code>double fort_lat = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setFortLat($var)
    {
        GPBUtil::checkDouble($var);
        $this->fort_lat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double fort_lng = 6;</code>
     * @return float
     */
    public function getFortLng()
    {
        return $this->fort_lng;
    }

    /**
     * Generated from protobuf field <code>double fort_lng = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setFortLng($var)
    {
        GPBUtil::checkDouble($var);
        $this->fort_lng = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 creation_timestamp = 7;</code>
     * @return int|string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 creation_timestamp = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sent_timestamp = 8;</code>
     * @return int|string
     */
    public function getSentTimestamp()
    {
        return $this->sent_timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 sent_timestamp = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSentTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->sent_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sent_bucket = 9;</code>
     * @return int|string
     */
    public function getSentBucket()
    {
        return $this->sent_bucket;
    }

    /**
     * Generated from protobuf field <code>int64 sent_bucket = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSentBucket($var)
    {
        GPBUtil::checkInt64($var);
        $this->sent_bucket = $var;

        return $this;
    }

}

