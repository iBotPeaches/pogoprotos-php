<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/RedeemPasscodeReward.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.RedeemPasscodeReward</code>
 */
class RedeemPasscodeReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.RedeemedItem items = 1;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.RedeemedAvatarItem avatar_items = 2;</code>
     */
    private $avatar_items;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonData egg_pokemon = 3;</code>
     */
    private $egg_pokemon;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonData pokemon = 4;</code>
     */
    private $pokemon;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.PokeCandy poke_candy = 5;</code>
     */
    private $poke_candy;
    /**
     * Generated from protobuf field <code>int32 stardust = 6;</code>
     */
    private $stardust = 0;
    /**
     * Generated from protobuf field <code>int32 pokecoins = 7;</code>
     */
    private $pokecoins = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType badges = 8;</code>
     */
    private $badges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\Redeem\RedeemedItem[]|\Google\Protobuf\Internal\RepeatedField $items
     *     @type \POGOProtos\Data\Redeem\RedeemedAvatarItem[]|\Google\Protobuf\Internal\RepeatedField $avatar_items
     *     @type \POGOProtos\Data\PokemonData[]|\Google\Protobuf\Internal\RepeatedField $egg_pokemon
     *     @type \POGOProtos\Data\PokemonData[]|\Google\Protobuf\Internal\RepeatedField $pokemon
     *     @type \POGOProtos\Data\Redeem\PokeCandy[]|\Google\Protobuf\Internal\RepeatedField $poke_candy
     *     @type int $stardust
     *     @type int $pokecoins
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $badges
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\RedeemPasscodeReward::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.RedeemedItem items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.RedeemedItem items = 1;</code>
     * @param \POGOProtos\Data\Redeem\RedeemedItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Redeem\RedeemedItem::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.RedeemedAvatarItem avatar_items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarItems()
    {
        return $this->avatar_items;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.RedeemedAvatarItem avatar_items = 2;</code>
     * @param \POGOProtos\Data\Redeem\RedeemedAvatarItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Redeem\RedeemedAvatarItem::class);
        $this->avatar_items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonData egg_pokemon = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEggPokemon()
    {
        return $this->egg_pokemon;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonData egg_pokemon = 3;</code>
     * @param \POGOProtos\Data\PokemonData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEggPokemon($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\PokemonData::class);
        $this->egg_pokemon = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonData pokemon = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPokemon()
    {
        return $this->pokemon;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.PokemonData pokemon = 4;</code>
     * @param \POGOProtos\Data\PokemonData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPokemon($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\PokemonData::class);
        $this->pokemon = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.PokeCandy poke_candy = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPokeCandy()
    {
        return $this->poke_candy;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Redeem.PokeCandy poke_candy = 5;</code>
     * @param \POGOProtos\Data\Redeem\PokeCandy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPokeCandy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Redeem\PokeCandy::class);
        $this->poke_candy = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 stardust = 6;</code>
     * @return int
     */
    public function getStardust()
    {
        return $this->stardust;
    }

    /**
     * Generated from protobuf field <code>int32 stardust = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStardust($var)
    {
        GPBUtil::checkInt32($var);
        $this->stardust = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pokecoins = 7;</code>
     * @return int
     */
    public function getPokecoins()
    {
        return $this->pokecoins;
    }

    /**
     * Generated from protobuf field <code>int32 pokecoins = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPokecoins($var)
    {
        GPBUtil::checkInt32($var);
        $this->pokecoins = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType badges = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBadges()
    {
        return $this->badges;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Enums.BadgeType badges = 8;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBadges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \POGOProtos\Enums\BadgeType::class);
        $this->badges = $arr;

        return $this;
    }

}

