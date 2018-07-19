<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/AssetCache/JournalVersion.proto

namespace POGOProtos\Data\AssetCache;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.AssetCache.JournalVersion</code>
 */
class JournalVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     */
    private $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\AssetCache\JournalVersion::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

}

