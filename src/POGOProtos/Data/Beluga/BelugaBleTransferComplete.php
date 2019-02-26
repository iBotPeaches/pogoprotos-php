<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Beluga/BelugaBleTransferComplete.proto

namespace POGOProtos\Data\Beluga;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Beluga.BelugaBleTransferComplete</code>
 */
class BelugaBleTransferComplete extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string nonce = 1;</code>
     */
    private $nonce = '';
    /**
     * Generated from protobuf field <code>string beluga_id = 2;</code>
     */
    private $beluga_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $nonce
     *     @type string $beluga_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Beluga\BelugaBleTransferComplete::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string nonce = 1;</code>
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Generated from protobuf field <code>string nonce = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, True);
        $this->nonce = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string beluga_id = 2;</code>
     * @return string
     */
    public function getBelugaId()
    {
        return $this->beluga_id;
    }

    /**
     * Generated from protobuf field <code>string beluga_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBelugaId($var)
    {
        GPBUtil::checkString($var, True);
        $this->beluga_id = $var;

        return $this;
    }

}

