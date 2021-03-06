<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/AssetCache/JournalRemoveEntry.proto

namespace POGOProtos\Data\AssetCache;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.AssetCache.JournalRemoveEntry</code>
 */
class JournalRemoveEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.AssetCache.HashedKey hashed_key = 1;</code>
     */
    private $hashed_key = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\AssetCache\HashedKey $hashed_key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\AssetCache\JournalRemoveEntry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.AssetCache.HashedKey hashed_key = 1;</code>
     * @return \POGOProtos\Data\AssetCache\HashedKey
     */
    public function getHashedKey()
    {
        return $this->hashed_key;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.AssetCache.HashedKey hashed_key = 1;</code>
     * @param \POGOProtos\Data\AssetCache\HashedKey $var
     * @return $this
     */
    public function setHashedKey($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\AssetCache\HashedKey::class);
        $this->hashed_key = $var;

        return $this;
    }

}

