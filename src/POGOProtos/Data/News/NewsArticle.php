<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/News/NewsArticle.proto

namespace POGOProtos\Data\News;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.News.NewsArticle</code>
 */
class NewsArticle extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Generated from protobuf field <code>repeated string image_url = 2;</code>
     */
    private $image_url;
    /**
     * Generated from protobuf field <code>string header_key = 3;</code>
     */
    private $header_key = '';
    /**
     * Generated from protobuf field <code>string subheader_key = 4;</code>
     */
    private $subheader_key = '';
    /**
     * Generated from protobuf field <code>string main_text_key = 5;</code>
     */
    private $main_text_key = '';
    /**
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     */
    private $timestamp = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.News.NewsArticle.NewsTemplate template = 7;</code>
     */
    private $template = 0;
    /**
     * Generated from protobuf field <code>bool enabled = 8;</code>
     */
    private $enabled = false;
    /**
     * Generated from protobuf field <code>bool article_read = 9;</code>
     */
    private $article_read = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $image_url
     *     @type string $header_key
     *     @type string $subheader_key
     *     @type string $main_text_key
     *     @type int|string $timestamp
     *     @type int $template
     *     @type bool $enabled
     *     @type bool $article_read
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\News\NewsArticle::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string image_url = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Generated from protobuf field <code>repeated string image_url = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->image_url = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string header_key = 3;</code>
     * @return string
     */
    public function getHeaderKey()
    {
        return $this->header_key;
    }

    /**
     * Generated from protobuf field <code>string header_key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHeaderKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->header_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subheader_key = 4;</code>
     * @return string
     */
    public function getSubheaderKey()
    {
        return $this->subheader_key;
    }

    /**
     * Generated from protobuf field <code>string subheader_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSubheaderKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->subheader_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string main_text_key = 5;</code>
     * @return string
     */
    public function getMainTextKey()
    {
        return $this->main_text_key;
    }

    /**
     * Generated from protobuf field <code>string main_text_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMainTextKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->main_text_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.News.NewsArticle.NewsTemplate template = 7;</code>
     * @return int
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.News.NewsArticle.NewsTemplate template = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\News\NewsArticle_NewsTemplate::class);
        $this->template = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enabled = 8;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Generated from protobuf field <code>bool enabled = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool article_read = 9;</code>
     * @return bool
     */
    public function getArticleRead()
    {
        return $this->article_read;
    }

    /**
     * Generated from protobuf field <code>bool article_read = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setArticleRead($var)
    {
        GPBUtil::checkBool($var);
        $this->article_read = $var;

        return $this;
    }

}

