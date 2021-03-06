<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GetMapObjectsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.GetMapObjectsMessage</code>
 */
class GetMapObjectsMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint64 cell_id = 1 [packed = true];</code>
     */
    private $cell_id;
    /**
     * Generated from protobuf field <code>repeated int64 since_timestamp_ms = 2 [packed = true];</code>
     */
    private $since_timestamp_ms;
    /**
     * Generated from protobuf field <code>double latitude = 3;</code>
     */
    private $latitude = 0.0;
    /**
     * Generated from protobuf field <code>double longitude = 4;</code>
     */
    private $longitude = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $cell_id
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $since_timestamp_ms
     *     @type float $latitude
     *     @type float $longitude
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\GetMapObjectsMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint64 cell_id = 1 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCellId()
    {
        return $this->cell_id;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 cell_id = 1 [packed = true];</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCellId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->cell_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 since_timestamp_ms = 2 [packed = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSinceTimestampMs()
    {
        return $this->since_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>repeated int64 since_timestamp_ms = 2 [packed = true];</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSinceTimestampMs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->since_timestamp_ms = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double latitude = 3;</code>
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Generated from protobuf field <code>double latitude = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double longitude = 4;</code>
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Generated from protobuf field <code>double longitude = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;

        return $this;
    }

}

