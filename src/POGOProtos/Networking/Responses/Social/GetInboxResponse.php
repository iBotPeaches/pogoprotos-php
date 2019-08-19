<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/Social/GetInboxResponse.proto

namespace POGOProtos\Networking\Responses\Social;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Responses.Social.GetInboxResponse</code>
 */
class GetInboxResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.Social.GetInboxResponse.Result result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Inbox.ClientInbox inbox = 2;</code>
     */
    private $inbox = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $result
     *     @type \POGOProtos\Data\Inbox\ClientInbox $inbox
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Responses\Social\GetInboxResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.Social.GetInboxResponse.Result result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Responses.Social.GetInboxResponse.Result result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\Social\GetInboxResponse_Result::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Inbox.ClientInbox inbox = 2;</code>
     * @return \POGOProtos\Data\Inbox\ClientInbox
     */
    public function getInbox()
    {
        return $this->inbox;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Inbox.ClientInbox inbox = 2;</code>
     * @param \POGOProtos\Data\Inbox\ClientInbox $var
     * @return $this
     */
    public function setInbox($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Inbox\ClientInbox::class);
        $this->inbox = $var;

        return $this;
    }

}
