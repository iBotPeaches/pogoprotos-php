<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Responses/ClientTelemetryResponse.proto

namespace POGOProtos\Networking\Platform\Responses;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Platform.Responses.ClientTelemetryResponse</code>
 */
class ClientTelemetryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.POGOProtos.Networking.Platform.Responses.ClientTelemetryResponse.Status status = 1;</code>
     */
    private $status = 0;
    /**
     * <code>int32 rows_written = 2;</code>
     */
    private $rows_written = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Platform\Responses\ClientTelemetryResponse::initOnce();
        parent::__construct();
    }

    /**
     * <code>.POGOProtos.Networking.Platform.Responses.ClientTelemetryResponse.Status status = 1;</code>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * <code>.POGOProtos.Networking.Platform.Responses.ClientTelemetryResponse.Status status = 1;</code>
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Networking\Platform\Responses\ClientTelemetryResponse_Status::class);
        $this->status = $var;
    }

    /**
     * <code>int32 rows_written = 2;</code>
     */
    public function getRowsWritten()
    {
        return $this->rows_written;
    }

    /**
     * <code>int32 rows_written = 2;</code>
     */
    public function setRowsWritten($var)
    {
        GPBUtil::checkInt32($var);
        $this->rows_written = $var;
    }

}

