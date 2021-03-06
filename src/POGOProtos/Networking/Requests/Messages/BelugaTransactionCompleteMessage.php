<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/BelugaTransactionCompleteMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Requests.Messages.BelugaTransactionCompleteMessage</code>
 */
class BelugaTransactionCompleteMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaBleCompleteTransferRequest beluga_transfer = 1;</code>
     */
    private $beluga_transfer = null;
    /**
     * Generated from protobuf field <code>bytes app_signature = 2;</code>
     */
    private $app_signature = '';
    /**
     * Generated from protobuf field <code>bytes firmware_signature = 3;</code>
     */
    private $firmware_signature = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \POGOProtos\Data\Beluga\BelugaBleCompleteTransferRequest $beluga_transfer
     *     @type string $app_signature
     *     @type string $firmware_signature
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\BelugaTransactionCompleteMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaBleCompleteTransferRequest beluga_transfer = 1;</code>
     * @return \POGOProtos\Data\Beluga\BelugaBleCompleteTransferRequest
     */
    public function getBelugaTransfer()
    {
        return $this->beluga_transfer;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Beluga.BelugaBleCompleteTransferRequest beluga_transfer = 1;</code>
     * @param \POGOProtos\Data\Beluga\BelugaBleCompleteTransferRequest $var
     * @return $this
     */
    public function setBelugaTransfer($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Beluga\BelugaBleCompleteTransferRequest::class);
        $this->beluga_transfer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes app_signature = 2;</code>
     * @return string
     */
    public function getAppSignature()
    {
        return $this->app_signature;
    }

    /**
     * Generated from protobuf field <code>bytes app_signature = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->app_signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes firmware_signature = 3;</code>
     * @return string
     */
    public function getFirmwareSignature()
    {
        return $this->firmware_signature;
    }

    /**
     * Generated from protobuf field <code>bytes firmware_signature = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFirmwareSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->firmware_signature = $var;

        return $this;
    }

}

