<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/PlatformClientActionsResponse.proto

namespace POGOProtos\Networking\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Responses.UploadPoiPhotoByUrlResponse</code>
 */
class UploadPoiPhotoByUrlResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Responses.UploadPoiPhotoByUrlResponse.Result status = 1;</code>
     */
    private $status = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Responses\PlatformClientActionsResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Responses.UploadPoiPhotoByUrlResponse.Result status = 1;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <code>.POGOProtos.Networking.Responses.UploadPoiPhotoByUrlResponse.Result status = 1;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Responses\UploadPoiPhotoByUrlResponse_Result::class);
        $this->status = $var;
    }

}

