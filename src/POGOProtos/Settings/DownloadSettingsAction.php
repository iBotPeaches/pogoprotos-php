<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/DownloadSettingsAction.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Settings.DownloadSettingsAction</code>
 */
class DownloadSettingsAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string hash = 1;</code>
     */
    private $hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Settings\DownloadSettingsAction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>string hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->hash = $var;

        return $this;
    }

}

