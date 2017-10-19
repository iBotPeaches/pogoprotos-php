<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/GetAssetDigestResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.GetAssetDigestResponse</code>
 */
class GetAssetDigestResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .POGOProtos.Data.AssetDigestEntry digest = 1;</code>
     */
    private $digest;
    /**
     * <code>uint64 timestamp_ms = 2;</code>
     */
    private $timestamp_ms = 0;
    /**
     * <code>.POGOProtos.Networking.Responses.GetAssetDigestResponse.Result result = 3;</code>
     */
    private $result = 0;
    /**
     * <code>int32 page_offset = 4;</code>
     */
    private $page_offset = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\GetAssetDigestResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .POGOProtos.Data.AssetDigestEntry digest = 1;</code>
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * <code>repeated .POGOProtos.Data.AssetDigestEntry digest = 1;</code>
     */
    public function setDigest(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\AssetDigestEntry::class);
        $this->digest = $var;
    }

    /**
     * <code>uint64 timestamp_ms = 2;</code>
     */
    public function getTimestampMs()
    {
        return $this->timestamp_ms;
    }

    /**
     * <code>uint64 timestamp_ms = 2;</code>
     */
    public function setTimestampMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp_ms = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.GetAssetDigestResponse.Result result = 3;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.GetAssetDigestResponse.Result result = 3;</code>
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\GetAssetDigestResponse_Result::class);
        $this->result = $var;
    }

    /**
     * <code>int32 page_offset = 4;</code>
     */
    public function getPageOffset()
    {
        return $this->page_offset;
    }

    /**
     * <code>int32 page_offset = 4;</code>
     */
    public function setPageOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_offset = $var;
    }

}

