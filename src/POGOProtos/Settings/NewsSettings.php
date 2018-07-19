<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/NewsSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.NewsSettings</code>
 */
class NewsSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.NewsSettings.News news = 1;</code>
     */
    private $news;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Settings\NewsSettings\News[]|\Google\Protobuf\Internal\RepeatedField $news
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\NewsSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.NewsSettings.News news = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Settings.NewsSettings.News news = 1;</code>
     * @param \POGOProtos\Settings\NewsSettings\News[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNews($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Settings\NewsSettings\News::class);
        $this->news = $arr;

        return $this;
    }

}

