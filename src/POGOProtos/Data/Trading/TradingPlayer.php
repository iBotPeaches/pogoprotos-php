<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Trading/TradingPlayer.proto

namespace POGOProtos\Data\Trading;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Trading.TradingPlayer</code>
 */
class TradingPlayer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     */
    private $player_id = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile public_profile = 2;</code>
     */
    private $public_profile = null;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Trading.ExcludedPokemon excluded_pokemon = 3;</code>
     */
    private $excluded_pokemon;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.TradingPokemon trading_pokemon = 4;</code>
     */
    private $trading_pokemon = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot bonus = 5;</code>
     */
    private $bonus = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot price = 6;</code>
     */
    private $price = null;
    /**
     * Generated from protobuf field <code>bool can_afford_trading = 7;</code>
     */
    private $can_afford_trading = false;
    /**
     * Generated from protobuf field <code>bool has_confirmed = 8;</code>
     */
    private $has_confirmed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $player_id
     *     @type \POGOProtos\Data\Player\PlayerPublicProfile $public_profile
     *     @type \POGOProtos\Data\Trading\ExcludedPokemon[]|\Google\Protobuf\Internal\RepeatedField $excluded_pokemon
     *     @type \POGOProtos\Data\Trading\TradingPokemon $trading_pokemon
     *     @type \POGOProtos\Inventory\Loot $bonus
     *     @type \POGOProtos\Inventory\Loot $price
     *     @type bool $can_afford_trading
     *     @type bool $has_confirmed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Trading\TradingPlayer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     * @return string
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * Generated from protobuf field <code>string player_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->player_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile public_profile = 2;</code>
     * @return \POGOProtos\Data\Player\PlayerPublicProfile
     */
    public function getPublicProfile()
    {
        return $this->public_profile;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Player.PlayerPublicProfile public_profile = 2;</code>
     * @param \POGOProtos\Data\Player\PlayerPublicProfile $var
     * @return $this
     */
    public function setPublicProfile($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Player\PlayerPublicProfile::class);
        $this->public_profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Trading.ExcludedPokemon excluded_pokemon = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludedPokemon()
    {
        return $this->excluded_pokemon;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Trading.ExcludedPokemon excluded_pokemon = 3;</code>
     * @param \POGOProtos\Data\Trading\ExcludedPokemon[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludedPokemon($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Trading\ExcludedPokemon::class);
        $this->excluded_pokemon = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.TradingPokemon trading_pokemon = 4;</code>
     * @return \POGOProtos\Data\Trading\TradingPokemon
     */
    public function getTradingPokemon()
    {
        return $this->trading_pokemon;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Trading.TradingPokemon trading_pokemon = 4;</code>
     * @param \POGOProtos\Data\Trading\TradingPokemon $var
     * @return $this
     */
    public function setTradingPokemon($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Trading\TradingPokemon::class);
        $this->trading_pokemon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot bonus = 5;</code>
     * @return \POGOProtos\Inventory\Loot
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot bonus = 5;</code>
     * @param \POGOProtos\Inventory\Loot $var
     * @return $this
     */
    public function setBonus($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Loot::class);
        $this->bonus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot price = 6;</code>
     * @return \POGOProtos\Inventory\Loot
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Inventory.Loot price = 6;</code>
     * @param \POGOProtos\Inventory\Loot $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Inventory\Loot::class);
        $this->price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool can_afford_trading = 7;</code>
     * @return bool
     */
    public function getCanAffordTrading()
    {
        return $this->can_afford_trading;
    }

    /**
     * Generated from protobuf field <code>bool can_afford_trading = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanAffordTrading($var)
    {
        GPBUtil::checkBool($var);
        $this->can_afford_trading = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_confirmed = 8;</code>
     * @return bool
     */
    public function getHasConfirmed()
    {
        return $this->has_confirmed;
    }

    /**
     * Generated from protobuf field <code>bool has_confirmed = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasConfirmed($var)
    {
        GPBUtil::checkBool($var);
        $this->has_confirmed = $var;

        return $this;
    }

}

