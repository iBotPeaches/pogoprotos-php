<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Responses/ReplaceLoginActionResponse.proto

namespace POGOProtos\Networking\Platform\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Networking.Platform.Responses.ReplaceLoginActionResponse</code>
 */
class ReplaceLoginActionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     */
    private $success = false;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Login.LoginDetail login_detail = 2;</code>
     */
    private $login_detail;
    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Responses.ReplaceLoginActionResponse.Status status = 3;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $success
     *     @type \POGOProtos\Data\Login\LoginDetail[]|\Google\Protobuf\Internal\RepeatedField $login_detail
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Networking\Platform\Responses\ReplaceLoginActionResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Generated from protobuf field <code>bool success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Login.LoginDetail login_detail = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLoginDetail()
    {
        return $this->login_detail;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Login.LoginDetail login_detail = 2;</code>
     * @param \POGOProtos\Data\Login\LoginDetail[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLoginDetail($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Login\LoginDetail::class);
        $this->login_detail = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Responses.ReplaceLoginActionResponse.Status status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Networking.Platform.Responses.ReplaceLoginActionResponse.Status status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Platform\Responses\ReplaceLoginActionResponse_Status::class);
        $this->status = $var;

        return $this;
    }

}

