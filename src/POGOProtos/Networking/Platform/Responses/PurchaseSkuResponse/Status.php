<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Responses/PurchaseSkuResponse.proto

namespace POGOProtos\Networking\Platform\Responses\PurchaseSkuResponse;

/**
 * Protobuf type <code>POGOProtos.Networking.Platform.Responses.PurchaseSkuResponse.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * Generated from protobuf enum <code>SUCCESS = 1;</code>
     */
    const SUCCESS = 1;
    /**
     * Generated from protobuf enum <code>FAILURE = 2;</code>
     */
    const FAILURE = 2;
    /**
     * Generated from protobuf enum <code>BALANCE_TOO_LOW = 3;</code>
     */
    const BALANCE_TOO_LOW = 3;
    /**
     * Generated from protobuf enum <code>SKU_NOT_AVAILABLE = 4;</code>
     */
    const SKU_NOT_AVAILABLE = 4;
    /**
     * Generated from protobuf enum <code>OVER_INVENTORY_LIMIT = 5;</code>
     */
    const OVER_INVENTORY_LIMIT = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \POGOProtos\Networking\Platform\Responses\PurchaseSkuResponse_Status::class);

