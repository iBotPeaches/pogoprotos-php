<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/RequestEnvelope.proto

namespace POGOProtos\Networking\Envelopes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Envelopes.RequestEnvelope</code>
 */
class RequestEnvelope extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 status_code = 1;</code>
     */
    private $status_code = 0;
    /**
     * <code>uint64 request_id = 3;</code>
     */
    private $request_id = 0;
    /**
     * <code>repeated .POGOProtos.Networking.Requests.Request requests = 4;</code>
     */
    private $requests;
    /**
     * <code>repeated .POGOProtos.Networking.Envelopes.RequestEnvelope.PlatformRequest platform_requests = 6;</code>
     */
    private $platform_requests;
    /**
     * <code>double latitude = 7;</code>
     */
    private $latitude = 0.0;
    /**
     * <code>double longitude = 8;</code>
     */
    private $longitude = 0.0;
    /**
     * <code>double accuracy = 9;</code>
     */
    private $accuracy = 0.0;
    /**
     * <code>.POGOProtos.Networking.Envelopes.RequestEnvelope.AuthInfo auth_info = 10;</code>
     */
    private $auth_info = null;
    /**
     * <code>.POGOProtos.Networking.Envelopes.AuthTicket auth_ticket = 11;</code>
     */
    private $auth_ticket = null;
    /**
     * <code>int64 ms_since_last_locationfix = 12;</code>
     */
    private $ms_since_last_locationfix = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Envelopes\RequestEnvelope::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 status_code = 1;</code>
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * <code>int32 status_code = 1;</code>
     */
    public function setStatusCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->status_code = $var;
    }

    /**
     * <code>uint64 request_id = 3;</code>
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * <code>uint64 request_id = 3;</code>
     */
    public function setRequestId($var)
    {
        GPBUtil::checkUint64($var);
        $this->request_id = $var;
    }

    /**
     * <code>repeated .POGOProtos.Networking.Requests.Request requests = 4;</code>
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * <code>repeated .POGOProtos.Networking.Requests.Request requests = 4;</code>
     */
    public function setRequests(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Requests\Request::class);
        $this->requests = $var;
    }

    /**
     * <code>repeated .POGOProtos.Networking.Envelopes.RequestEnvelope.PlatformRequest platform_requests = 6;</code>
     */
    public function getPlatformRequests()
    {
        return $this->platform_requests;
    }

    /**
     * <code>repeated .POGOProtos.Networking.Envelopes.RequestEnvelope.PlatformRequest platform_requests = 6;</code>
     */
    public function setPlatformRequests(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Networking\Envelopes\RequestEnvelope_PlatformRequest::class);
        $this->platform_requests = $var;
    }

    /**
     * <code>double latitude = 7;</code>
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * <code>double latitude = 7;</code>
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;
    }

    /**
     * <code>double longitude = 8;</code>
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * <code>double longitude = 8;</code>
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;
    }

    /**
     * <code>double accuracy = 9;</code>
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * <code>double accuracy = 9;</code>
     */
    public function setAccuracy($var)
    {
        GPBUtil::checkDouble($var);
        $this->accuracy = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Envelopes.RequestEnvelope.AuthInfo auth_info = 10;</code>
     */
    public function getAuthInfo()
    {
        return $this->auth_info;
    }

    /**
     * <code>.POGOProtos.Networking.Envelopes.RequestEnvelope.AuthInfo auth_info = 10;</code>
     */
    public function setAuthInfo(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Envelopes\RequestEnvelope_AuthInfo::class);
        $this->auth_info = $var;
    }

    /**
     * <code>.POGOProtos.Networking.Envelopes.AuthTicket auth_ticket = 11;</code>
     */
    public function getAuthTicket()
    {
        return $this->auth_ticket;
    }

    /**
     * <code>.POGOProtos.Networking.Envelopes.AuthTicket auth_ticket = 11;</code>
     */
    public function setAuthTicket(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Envelopes\AuthTicket::class);
        $this->auth_ticket = $var;
    }

    /**
     * <code>int64 ms_since_last_locationfix = 12;</code>
     */
    public function getMsSinceLastLocationfix()
    {
        return $this->ms_since_last_locationfix;
    }

    /**
     * <code>int64 ms_since_last_locationfix = 12;</code>
     */
    public function setMsSinceLastLocationfix($var)
    {
        GPBUtil::checkInt64($var);
        $this->ms_since_last_locationfix = $var;
    }

}

