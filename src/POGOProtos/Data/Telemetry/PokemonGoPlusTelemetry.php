<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/PokemonGoPlusTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.PokemonGoPlusTelemetry</code>
 */
class PokemonGoPlusTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonGoPlusIds pgp_event_ids = 1;</code>
     */
    private $pgp_event_ids = 0;
    /**
     * Generated from protobuf field <code>int32 count = 2;</code>
     */
    private $count = 0;
    /**
     * Generated from protobuf field <code>int32 version = 3;</code>
     */
    private $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pgp_event_ids
     *     @type int $count
     *     @type int $version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\PokemonGoPlusTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonGoPlusIds pgp_event_ids = 1;</code>
     * @return int
     */
    public function getPgpEventIds()
    {
        return $this->pgp_event_ids;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonGoPlusIds pgp_event_ids = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPgpEventIds($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonGoPlusIds::class);
        $this->pgp_event_ids = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 count = 2;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int32 count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 version = 3;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>int32 version = 3;</code>
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

