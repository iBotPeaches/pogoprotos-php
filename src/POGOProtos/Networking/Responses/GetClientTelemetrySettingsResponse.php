<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetClientTelemetrySettingsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.GetClientTelemetrySettingsResponse</code>
 */
class GetClientTelemetrySettingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 one = 1;</code>
     */
    private $one = 0;
    /**
     * Generated from protobuf field <code>int32 two = 2;</code>
     */
    private $two = 0;
    /**
     * Generated from protobuf field <code>int32 three = 3;</code>
     */
    private $three = 0;
    /**
     * Generated from protobuf field <code>int32 four = 4;</code>
     */
    private $four = 0;
    /**
     * Generated from protobuf field <code>int32 five = 5;</code>
     */
    private $five = 0;
    /**
     * Generated from protobuf field <code>fixed64 six = 6;</code>
     */
    private $six = 0;
    /**
     * Generated from protobuf field <code>int32 seven = 7;</code>
     */
    private $seven = 0;
    /**
     * Generated from protobuf field <code>fixed64 eight = 8;</code>
     */
    private $eight = 0;
    /**
     * Generated from protobuf field <code>string nine = 9;</code>
     */
    private $nine = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $one
     *     @type int $two
     *     @type int $three
     *     @type int $four
     *     @type int $five
     *     @type int|string $six
     *     @type int $seven
     *     @type int|string $eight
     *     @type string $nine
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\GetClientTelemetrySettingsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 one = 1;</code>
     * @return int
     */
    public function getOne()
    {
        return $this->one;
    }

    /**
     * Generated from protobuf field <code>int32 one = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOne($var)
    {
        GPBUtil::checkInt32($var);
        $this->one = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 two = 2;</code>
     * @return int
     */
    public function getTwo()
    {
        return $this->two;
    }

    /**
     * Generated from protobuf field <code>int32 two = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTwo($var)
    {
        GPBUtil::checkInt32($var);
        $this->two = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 three = 3;</code>
     * @return int
     */
    public function getThree()
    {
        return $this->three;
    }

    /**
     * Generated from protobuf field <code>int32 three = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setThree($var)
    {
        GPBUtil::checkInt32($var);
        $this->three = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 four = 4;</code>
     * @return int
     */
    public function getFour()
    {
        return $this->four;
    }

    /**
     * Generated from protobuf field <code>int32 four = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFour($var)
    {
        GPBUtil::checkInt32($var);
        $this->four = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 five = 5;</code>
     * @return int
     */
    public function getFive()
    {
        return $this->five;
    }

    /**
     * Generated from protobuf field <code>int32 five = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setFive($var)
    {
        GPBUtil::checkInt32($var);
        $this->five = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed64 six = 6;</code>
     * @return int|string
     */
    public function getSix()
    {
        return $this->six;
    }

    /**
     * Generated from protobuf field <code>fixed64 six = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSix($var)
    {
        GPBUtil::checkUint64($var);
        $this->six = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 seven = 7;</code>
     * @return int
     */
    public function getSeven()
    {
        return $this->seven;
    }

    /**
     * Generated from protobuf field <code>int32 seven = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSeven($var)
    {
        GPBUtil::checkInt32($var);
        $this->seven = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed64 eight = 8;</code>
     * @return int|string
     */
    public function getEight()
    {
        return $this->eight;
    }

    /**
     * Generated from protobuf field <code>fixed64 eight = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEight($var)
    {
        GPBUtil::checkUint64($var);
        $this->eight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nine = 9;</code>
     * @return string
     */
    public function getNine()
    {
        return $this->nine;
    }

    /**
     * Generated from protobuf field <code>string nine = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setNine($var)
    {
        GPBUtil::checkString($var, True);
        $this->nine = $var;

        return $this;
    }

}

