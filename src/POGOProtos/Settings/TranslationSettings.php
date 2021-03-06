<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/TranslationSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.TranslationSettings</code>
 */
class TranslationSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string translation_bundle_ids = 1;</code>
     */
    private $translation_bundle_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $translation_bundle_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\TranslationSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string translation_bundle_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranslationBundleIds()
    {
        return $this->translation_bundle_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string translation_bundle_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranslationBundleIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->translation_bundle_ids = $arr;

        return $this;
    }

}

