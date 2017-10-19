<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Platform/Requests/BuyItemAndroidRequest.proto

namespace POGOProtos\Networking\Platform\Requests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Platform.Requests.BuyItemAndroidRequest</code>
 */
class BuyItemAndroidRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * see https://developer.android.com/google/play/billing/billing_reference.html table 4
     * </pre>
     *
     * <code>string buy_item_intent = 1;</code>
     */
    private $buy_item_intent = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Platform\Requests\BuyItemAndroidRequest::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * see https://developer.android.com/google/play/billing/billing_reference.html table 4
     * </pre>
     *
     * <code>string buy_item_intent = 1;</code>
     */
    public function getBuyItemIntent()
    {
        return $this->buy_item_intent;
    }

    /**
     * <pre>
     * see https://developer.android.com/google/play/billing/billing_reference.html table 4
     * </pre>
     *
     * <code>string buy_item_intent = 1;</code>
     */
    public function setBuyItemIntent($var)
    {
        GPBUtil::checkString($var, True);
        $this->buy_item_intent = $var;
    }

}

