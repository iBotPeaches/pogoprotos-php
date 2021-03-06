<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/Distribution.proto

namespace POGOProtos\Data\Telemetry\Distribution;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.Distribution.BucketOptions</code>
 */
class BucketOptions extends \Google\Protobuf\Internal\Message
{
    protected $BucketType;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\Telemetry\Distribution\LinearBuckets $linear_buckets
     *     @type \POGOProtos\Data\Telemetry\Distribution\ExponentialBuckets $exponential_buckets
     *     @type \POGOProtos\Data\Telemetry\Distribution\ExplicitBuckets $explicit_buckets
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.Distribution.LinearBuckets linear_buckets = 1;</code>
     * @return \POGOProtos\Data\Telemetry\Distribution\LinearBuckets
     */
    public function getLinearBuckets()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.Distribution.LinearBuckets linear_buckets = 1;</code>
     * @param \POGOProtos\Data\Telemetry\Distribution\LinearBuckets $var
     * @return $this
     */
    public function setLinearBuckets($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Telemetry\Distribution_LinearBuckets::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.Distribution.ExponentialBuckets exponential_buckets = 2;</code>
     * @return \POGOProtos\Data\Telemetry\Distribution\ExponentialBuckets
     */
    public function getExponentialBuckets()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.Distribution.ExponentialBuckets exponential_buckets = 2;</code>
     * @param \POGOProtos\Data\Telemetry\Distribution\ExponentialBuckets $var
     * @return $this
     */
    public function setExponentialBuckets($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Telemetry\Distribution_ExponentialBuckets::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.Distribution.ExplicitBuckets explicit_buckets = 3;</code>
     * @return \POGOProtos\Data\Telemetry\Distribution\ExplicitBuckets
     */
    public function getExplicitBuckets()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.Distribution.ExplicitBuckets explicit_buckets = 3;</code>
     * @param \POGOProtos\Data\Telemetry\Distribution\ExplicitBuckets $var
     * @return $this
     */
    public function setExplicitBuckets($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Telemetry\Distribution_ExplicitBuckets::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getBucketType()
    {
        return $this->whichOneof("BucketType");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BucketOptions::class, \POGOProtos\Data\Telemetry\Distribution_BucketOptions::class);

