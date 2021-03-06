<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/FormSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.Master.FormSettings</code>
 */
class FormSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon = 1;</code>
     */
    private $pokemon = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.Master.FormSettings.Form forms = 2;</code>
     */
    private $forms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pokemon
     *     @type \POGOProtos\Settings\Master\FormSettings\Form[]|\Google\Protobuf\Internal\RepeatedField $forms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\Master\FormSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon = 1;</code>
     * @return int
     */
    public function getPokemon()
    {
        return $this->pokemon;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.PokemonId pokemon = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPokemon($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->pokemon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.Master.FormSettings.Form forms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getForms()
    {
        return $this->forms;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.Master.FormSettings.Form forms = 2;</code>
     * @param \POGOProtos\Settings\Master\FormSettings\Form[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setForms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Settings\Master\FormSettings\Form::class);
        $this->forms = $arr;

        return $this;
    }

}

