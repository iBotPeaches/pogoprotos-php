<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/RequestEnvelope.proto

namespace POGOProtos\Networking\Envelopes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Envelopes.RequestEnvelope.AuthInfo.JWT</code>
 */
class RequestEnvelope_AuthInfo_JWT extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string contents = 1;</code>
     */
    private $contents = '';
    /**
     * <code>int32 unknown2 = 2;</code>
     */
    private $unknown2 = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Envelopes\RequestEnvelope::initOnce();
        parent::__construct();
    }

    /**
     * <code>string contents = 1;</code>
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * <code>string contents = 1;</code>
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, True);
        $this->contents = $var;
    }

    /**
     * <code>int32 unknown2 = 2;</code>
     */
    public function getUnknown2()
    {
        return $this->unknown2;
    }

    /**
     * <code>int32 unknown2 = 2;</code>
     */
    public function setUnknown2($var)
    {
        GPBUtil::checkInt32($var);
        $this->unknown2 = $var;
    }

}

