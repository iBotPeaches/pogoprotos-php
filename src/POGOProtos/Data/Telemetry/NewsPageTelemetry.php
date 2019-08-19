<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/NewsPageTelemetry.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.NewsPageTelemetry</code>
 */
class NewsPageTelemetry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.NewsPageTelemetryIds news_page_click_id = 1;</code>
     */
    private $news_page_click_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $news_page_click_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\NewsPageTelemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.NewsPageTelemetryIds news_page_click_id = 1;</code>
     * @return int
     */
    public function getNewsPageClickId()
    {
        return $this->news_page_click_id;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.NewsPageTelemetryIds news_page_click_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNewsPageClickId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\NewsPageTelemetryIds::class);
        $this->news_page_click_id = $var;

        return $this;
    }

}
