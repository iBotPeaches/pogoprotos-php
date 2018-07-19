<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/NewsSettings.proto

namespace POGOProtos\Settings\NewsSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.NewsSettings.News</code>
 */
class News extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string news_bundle_id = 1;</code>
     */
    private $news_bundle_id = '';
    /**
     * Generated from protobuf field <code>repeated string exclusive_countries = 2;</code>
     */
    private $exclusive_countries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $news_bundle_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $exclusive_countries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\NewsSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string news_bundle_id = 1;</code>
     * @return string
     */
    public function getNewsBundleId()
    {
        return $this->news_bundle_id;
    }

    /**
     * Generated from protobuf field <code>string news_bundle_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNewsBundleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->news_bundle_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string exclusive_countries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExclusiveCountries()
    {
        return $this->exclusive_countries;
    }

    /**
     * Generated from protobuf field <code>repeated string exclusive_countries = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExclusiveCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclusive_countries = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(News::class, \POGOProtos\Settings\NewsSettings_News::class);

