<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Telemetry/Distribution.proto

namespace POGOProtos\Networking\Platform\Telemetry\Distribution;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Telemetry.Distribution.LinearBuckets</code>
 */
class LinearBuckets extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 num_finite_buckets = 1;</code>
     */
    private $num_finite_buckets = 0;
    /**
     * Generated from protobuf field <code>int64 width = 2;</code>
     */
    private $width = 0;
    /**
     * Generated from protobuf field <code>int64 offset = 3;</code>
     */
    private $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $num_finite_buckets
     *     @type int|string $width
     *     @type int|string $offset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Telemetry\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 num_finite_buckets = 1;</code>
     * @return int|string
     */
    public function getNumFiniteBuckets()
    {
        return $this->num_finite_buckets;
    }

    /**
     * Generated from protobuf field <code>int64 num_finite_buckets = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumFiniteBuckets($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_finite_buckets = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 width = 2;</code>
     * @return int|string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Generated from protobuf field <code>int64 width = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt64($var);
        $this->width = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 offset = 3;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>int64 offset = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LinearBuckets::class, \POGOProtos\Networking\Platform\Telemetry\Distribution_LinearBuckets::class);

