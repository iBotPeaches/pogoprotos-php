<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Telemetry/Distribution.proto

namespace POGOProtos\Networking\Platform\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Platform.Telemetry.Distribution</code>
 */
class Distribution extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 count = 1;</code>
     */
    private $count = 0;
    /**
     * <code>float mean = 2;</code>
     */
    private $mean = 0.0;
    /**
     * <code>double sum_of_squared_deviation = 3;</code>
     */
    private $sum_of_squared_deviation = 0.0;
    /**
     * <code>.POGOProtos.Networking.Platform.Telemetry.Distribution.Range range = 4;</code>
     */
    private $range = null;
    /**
     * <code>.POGOProtos.Networking.Platform.Telemetry.Distribution.BucketOptions bucket_options = 5;</code>
     */
    private $bucket_options = null;
    /**
     * <code>repeated int64 bucket_counts = 6;</code>
     */
    private $bucket_counts;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Platform\Telemetry\Distribution::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 count = 1;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <code>int64 count = 1;</code>
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;
    }

    /**
     * <code>float mean = 2;</code>
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * <code>float mean = 2;</code>
     */
    public function setMean($var)
    {
        GPBUtil::checkFloat($var);
        $this->mean = $var;
    }

    /**
     * <code>double sum_of_squared_deviation = 3;</code>
     */
    public function getSumOfSquaredDeviation()
    {
        return $this->sum_of_squared_deviation;
    }

    /**
     * <code>double sum_of_squared_deviation = 3;</code>
     */
    public function setSumOfSquaredDeviation($var)
    {
        GPBUtil::checkDouble($var);
        $this->sum_of_squared_deviation = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Platform.Telemetry.Distribution.Range range = 4;</code>
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * <code>.POGOProtos.Networking.Platform.Telemetry.Distribution.Range range = 4;</code>
     */
    public function setRange(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Platform\Telemetry\Distribution_Range::class);
        $this->range = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Platform.Telemetry.Distribution.BucketOptions bucket_options = 5;</code>
     */
    public function getBucketOptions()
    {
        return $this->bucket_options;
    }

    /**
     * <code>.POGOProtos.Networking.Platform.Telemetry.Distribution.BucketOptions bucket_options = 5;</code>
     */
    public function setBucketOptions(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Platform\Telemetry\Distribution_BucketOptions::class);
        $this->bucket_options = $var;
    }

    /**
     * <code>repeated int64 bucket_counts = 6;</code>
     */
    public function getBucketCounts()
    {
        return $this->bucket_counts;
    }

    /**
     * <code>repeated int64 bucket_counts = 6;</code>
     */
    public function setBucketCounts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->bucket_counts = $var;
    }

}

