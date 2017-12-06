<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/DownloadGmTemplatesMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Requests.Messages.DownloadGmTemplatesMessage</code>
 */
class DownloadGmTemplatesMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int64 basis_batch_id = 1;</code>
     */
    private $basis_batch_id = 0;
    /**
     * <code>int64 batch_id = 2;</code>
     */
    private $batch_id = 0;
    /**
     * <code>int32 page_offset = 3;</code>
     */
    private $page_offset = 0;

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Requests\Messages\DownloadGmTemplatesMessage::initOnce();
        parent::__construct();
    }

    /**
     * <code>int64 basis_batch_id = 1;</code>
     */
    public function getBasisBatchId()
    {
        return $this->basis_batch_id;
    }

    /**
     * <code>int64 basis_batch_id = 1;</code>
     */
    public function setBasisBatchId($var)
    {
        GPBUtil::checkInt64($var);
        $this->basis_batch_id = $var;
    }

    /**
     * <code>int64 batch_id = 2;</code>
     */
    public function getBatchId()
    {
        return $this->batch_id;
    }

    /**
     * <code>int64 batch_id = 2;</code>
     */
    public function setBatchId($var)
    {
        GPBUtil::checkInt64($var);
        $this->batch_id = $var;
    }

    /**
     * <code>int32 page_offset = 3;</code>
     */
    public function getPageOffset()
    {
        return $this->page_offset;
    }

    /**
     * <code>int32 page_offset = 3;</code>
     */
    public function setPageOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_offset = $var;
    }

}
