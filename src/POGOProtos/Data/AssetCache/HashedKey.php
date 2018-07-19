<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/AssetCache/HashedKey.proto

namespace POGOProtos\Data\AssetCache;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.AssetCache.HashedKey</code>
 */
class HashedKey extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string hashed_key_raw = 1;</code>
     */
    private $hashed_key_raw = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\AssetCache\HashedKey::initOnce();
        parent::__construct();
    }

    /**
     * <code>string hashed_key_raw = 1;</code>
     */
    public function getHashedKeyRaw()
    {
        return $this->hashed_key_raw;
    }

    /**
     * <code>string hashed_key_raw = 1;</code>
     */
    public function setHashedKeyRaw($var)
    {
        GPBUtil::checkString($var, True);
        $this->hashed_key_raw = $var;
    }

}

