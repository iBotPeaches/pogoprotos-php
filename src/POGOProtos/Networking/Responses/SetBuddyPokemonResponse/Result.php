<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/SetBuddyPokemonResponse.proto
 */


namespace POGOProtos\Networking\Responses\SetBuddyPokemonResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.SetBuddyPokemonResponse.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * UNEST = 0
     */
    const UNEST_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * ERROR_POKEMON_DEPLOYED = 2
     */
    const ERROR_POKEMON_DEPLOYED_VALUE = 2;

    /**
     * ERROR_POKEMON_NOT_OWNED = 3
     */
    const ERROR_POKEMON_NOT_OWNED_VALUE = 3;

    /**
     * ERROR_POKEMON_IS_EGG = 4
     */
    const ERROR_POKEMON_IS_EGG_VALUE = 4;

    /**
     * ERROR_INVALID_POKEMON = 5
     */
    const ERROR_INVALID_POKEMON_VALUE = 5;

    /**
     * @var \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    protected static $UNEST = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    protected static $ERROR_POKEMON_DEPLOYED = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    protected static $ERROR_POKEMON_NOT_OWNED = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    protected static $ERROR_POKEMON_IS_EGG = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    protected static $ERROR_INVALID_POKEMON = null;

    /**
     * @return \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    public static function UNEST()
    {
        if (self::$UNEST !== null) {
            return self::$UNEST;
        }

        return self::$UNEST = new self('UNEST', self::UNEST_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    public static function ERROR_POKEMON_DEPLOYED()
    {
        if (self::$ERROR_POKEMON_DEPLOYED !== null) {
            return self::$ERROR_POKEMON_DEPLOYED;
        }

        return self::$ERROR_POKEMON_DEPLOYED = new self('ERROR_POKEMON_DEPLOYED', self::ERROR_POKEMON_DEPLOYED_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    public static function ERROR_POKEMON_NOT_OWNED()
    {
        if (self::$ERROR_POKEMON_NOT_OWNED !== null) {
            return self::$ERROR_POKEMON_NOT_OWNED;
        }

        return self::$ERROR_POKEMON_NOT_OWNED = new self('ERROR_POKEMON_NOT_OWNED', self::ERROR_POKEMON_NOT_OWNED_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    public static function ERROR_POKEMON_IS_EGG()
    {
        if (self::$ERROR_POKEMON_IS_EGG !== null) {
            return self::$ERROR_POKEMON_IS_EGG;
        }

        return self::$ERROR_POKEMON_IS_EGG = new self('ERROR_POKEMON_IS_EGG', self::ERROR_POKEMON_IS_EGG_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    public static function ERROR_INVALID_POKEMON()
    {
        if (self::$ERROR_INVALID_POKEMON !== null) {
            return self::$ERROR_INVALID_POKEMON;
        }

        return self::$ERROR_INVALID_POKEMON = new self('ERROR_INVALID_POKEMON', self::ERROR_INVALID_POKEMON_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\SetBuddyPokemonResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNEST();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_POKEMON_DEPLOYED();
            case 3: return self::ERROR_POKEMON_NOT_OWNED();
            case 4: return self::ERROR_POKEMON_IS_EGG();
            case 5: return self::ERROR_INVALID_POKEMON();
            default: return null;
        }
    }


}

