<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/SetFavoritePokemonMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.SetFavoritePokemonMessage</code>
 */
class SetFavoritePokemonMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Do not change https://github.com/AeonLucid/POGOProtos/pull/126
     *
     * Generated from protobuf field <code>int64 pokemon_id = 1;</code>
     */
    private $pokemon_id = 0;
    /**
     * Generated from protobuf field <code>bool is_favorite = 2;</code>
     */
    private $is_favorite = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $pokemon_id
     *           Do not change https://github.com/AeonLucid/POGOProtos/pull/126
     *     @type bool $is_favorite
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\SetFavoritePokemonMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Do not change https://github.com/AeonLucid/POGOProtos/pull/126
     *
     * Generated from protobuf field <code>int64 pokemon_id = 1;</code>
     * @return int|string
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Do not change https://github.com/AeonLucid/POGOProtos/pull/126
     *
     * Generated from protobuf field <code>int64 pokemon_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPokemonId($var)
    {
        GPBUtil::checkInt64($var);
        $this->pokemon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_favorite = 2;</code>
     * @return bool
     */
    public function getIsFavorite()
    {
        return $this->is_favorite;
    }

    /**
     * Generated from protobuf field <code>bool is_favorite = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFavorite($var)
    {
        GPBUtil::checkBool($var);
        $this->is_favorite = $var;

        return $this;
    }

}

