<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/PlatformClientActionsMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.ProxySocialSideChannelActionMessage</code>
 */
class ProxySocialSideChannelActionMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 action = 1;</code>
     */
    private $action = 0;
    /**
     * Generated from protobuf field <code>string host = 2;</code>
     */
    private $host = '';
    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     */
    private $payload = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $action
     *     @type string $host
     *     @type string $payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\PlatformClientActionsMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 action = 1;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>uint32 action = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkUint32($var);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string host = 2;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Generated from protobuf field <code>string host = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

}

