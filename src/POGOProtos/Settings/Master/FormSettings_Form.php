<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/FormSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.FormSettings.Form</code>
 */
class FormSettings_Form extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Enums.Form form = 1;</code>
     */
    private $form = 0;
    /**
     * <code>int32 asset_bundle_value = 2;</code>
     */
    private $asset_bundle_value = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\FormSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Enums.Form form = 1;</code>
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * <code>.POGOProtos.Enums.Form form = 1;</code>
     */
    public function setForm($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\Form::class);
        $this->form = $var;
    }

    /**
     * <code>int32 asset_bundle_value = 2;</code>
     */
    public function getAssetBundleValue()
    {
        return $this->asset_bundle_value;
    }

    /**
     * <code>int32 asset_bundle_value = 2;</code>
     */
    public function setAssetBundleValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->asset_bundle_value = $var;
    }

}
