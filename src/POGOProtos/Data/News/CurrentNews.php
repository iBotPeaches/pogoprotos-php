<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/News/CurrentNews.proto

namespace POGOProtos\Data\News;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Data.News.CurrentNews</code>
 */
class CurrentNews extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .POGOProtos.Data.News.NewsArticle news_articles = 1;</code>
     */
    private $news_articles;
    /**
     * <code>string news_strings_url = 2;</code>
     */
    private $news_strings_url = '';
    /**
     * <code>int64 last_updated_timestamp = 3;</code>
     */
    private $last_updated_timestamp = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Data\News\CurrentNews::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .POGOProtos.Data.News.NewsArticle news_articles = 1;</code>
     */
    public function getNewsArticles()
    {
        return $this->news_articles;
    }

    /**
     * <code>repeated .POGOProtos.Data.News.NewsArticle news_articles = 1;</code>
     */
    public function setNewsArticles(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\News\NewsArticle::class);
        $this->news_articles = $var;
    }

    /**
     * <code>string news_strings_url = 2;</code>
     */
    public function getNewsStringsUrl()
    {
        return $this->news_strings_url;
    }

    /**
     * <code>string news_strings_url = 2;</code>
     */
    public function setNewsStringsUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->news_strings_url = $var;
    }

    /**
     * <code>int64 last_updated_timestamp = 3;</code>
     */
    public function getLastUpdatedTimestamp()
    {
        return $this->last_updated_timestamp;
    }

    /**
     * <code>int64 last_updated_timestamp = 3;</code>
     */
    public function setLastUpdatedTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_updated_timestamp = $var;
    }

}

