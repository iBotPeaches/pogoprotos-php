<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Telemetry/Distribution.proto

namespace POGOProtos\Networking\Platform\Telemetry\Distribution;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Telemetry.Distribution.Range</code>
 */
class Range extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 min = 1;</code>
     */
    private $min = 0;
    /**
     * Generated from protobuf field <code>int64 max = 2;</code>
     */
    private $max = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $min
     *     @type int|string $max
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Telemetry\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 min = 1;</code>
     * @return int|string
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Generated from protobuf field <code>int64 min = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkInt64($var);
        $this->min = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 max = 2;</code>
     * @return int|string
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Generated from protobuf field <code>int64 max = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkInt64($var);
        $this->max = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Range::class, \POGOProtos\Networking\Platform\Telemetry\Distribution_Range::class);

