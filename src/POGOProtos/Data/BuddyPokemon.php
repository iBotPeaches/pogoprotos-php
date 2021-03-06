<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/BuddyPokemon.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.BuddyPokemon</code>
 */
class BuddyPokemon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>double start_km_walked = 2;</code>
     */
    private $start_km_walked = 0.0;
    /**
     * Generated from protobuf field <code>double last_km_awarded = 3;</code>
     */
    private $last_km_awarded = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type float $start_km_walked
     *     @type float $last_km_awarded
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\BuddyPokemon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>fixed64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>fixed64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double start_km_walked = 2;</code>
     * @return float
     */
    public function getStartKmWalked()
    {
        return $this->start_km_walked;
    }

    /**
     * Generated from protobuf field <code>double start_km_walked = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setStartKmWalked($var)
    {
        GPBUtil::checkDouble($var);
        $this->start_km_walked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double last_km_awarded = 3;</code>
     * @return float
     */
    public function getLastKmAwarded()
    {
        return $this->last_km_awarded;
    }

    /**
     * Generated from protobuf field <code>double last_km_awarded = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setLastKmAwarded($var)
    {
        GPBUtil::checkDouble($var);
        $this->last_km_awarded = $var;

        return $this;
    }

}

