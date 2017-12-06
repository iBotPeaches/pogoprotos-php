<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/Signature.proto

namespace POGOProtos\Networking\Envelopes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Networking.Envelopes.Signature.DeviceInfo</code>
 */
class Signature_DeviceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Hex string
     * </pre>
     *
     * <code>string device_id = 1;</code>
     */
    private $device_id = '';
    /**
     * <code>string android_board_name = 2;</code>
     */
    private $android_board_name = '';
    /**
     * <code>string android_bootloader = 3;</code>
     */
    private $android_bootloader = '';
    /**
     * <pre>
     * On Android: product.brand
     * </pre>
     *
     * <code>string device_brand = 4;</code>
     */
    private $device_brand = '';
    /**
     * <pre>
     * On Android: product.device
     * </pre>
     *
     * <code>string device_model = 5;</code>
     */
    private $device_model = '';
    /**
     * <pre>
     * Android only, build.display.id
     * </pre>
     *
     * <code>string device_model_identifier = 6;</code>
     */
    private $device_model_identifier = '';
    /**
     * <pre>
     * On Android: boot.hardware
     * </pre>
     *
     * <code>string device_model_boot = 7;</code>
     */
    private $device_model_boot = '';
    /**
     * <pre>
     * On Android: product.manufacturer
     * </pre>
     *
     * <code>string hardware_manufacturer = 8;</code>
     */
    private $hardware_manufacturer = '';
    /**
     * <pre>
     * On Android: product.model
     * </pre>
     *
     * <code>string hardware_model = 9;</code>
     */
    private $hardware_model = '';
    /**
     * <pre>
     * On Android: product.name, on iOS: "iPhone OS"
     * </pre>
     *
     * <code>string firmware_brand = 10;</code>
     */
    private $firmware_brand = '';
    /**
     * <pre>
     * Android only, build.tags
     * </pre>
     *
     * <code>string firmware_tags = 12;</code>
     */
    private $firmware_tags = '';
    /**
     * <pre>
     * On Android: build.type, on iOS instead: iOS version
     * </pre>
     *
     * <code>string firmware_type = 13;</code>
     */
    private $firmware_type = '';
    /**
     * <pre>
     * Android only, build.fingerprint
     * </pre>
     *
     * <code>string firmware_fingerprint = 14;</code>
     */
    private $firmware_fingerprint = '';

    public function __construct() {
        \GPBMetadata\POGOProtos\Networking\Envelopes\Signature::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Hex string
     * </pre>
     *
     * <code>string device_id = 1;</code>
     */
    public function getDeviceId()
    {
        return $this->device_id;
    }

    /**
     * <pre>
     * Hex string
     * </pre>
     *
     * <code>string device_id = 1;</code>
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;
    }

    /**
     * <code>string android_board_name = 2;</code>
     */
    public function getAndroidBoardName()
    {
        return $this->android_board_name;
    }

    /**
     * <code>string android_board_name = 2;</code>
     */
    public function setAndroidBoardName($var)
    {
        GPBUtil::checkString($var, True);
        $this->android_board_name = $var;
    }

    /**
     * <code>string android_bootloader = 3;</code>
     */
    public function getAndroidBootloader()
    {
        return $this->android_bootloader;
    }

    /**
     * <code>string android_bootloader = 3;</code>
     */
    public function setAndroidBootloader($var)
    {
        GPBUtil::checkString($var, True);
        $this->android_bootloader = $var;
    }

    /**
     * <pre>
     * On Android: product.brand
     * </pre>
     *
     * <code>string device_brand = 4;</code>
     */
    public function getDeviceBrand()
    {
        return $this->device_brand;
    }

    /**
     * <pre>
     * On Android: product.brand
     * </pre>
     *
     * <code>string device_brand = 4;</code>
     */
    public function setDeviceBrand($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_brand = $var;
    }

    /**
     * <pre>
     * On Android: product.device
     * </pre>
     *
     * <code>string device_model = 5;</code>
     */
    public function getDeviceModel()
    {
        return $this->device_model;
    }

    /**
     * <pre>
     * On Android: product.device
     * </pre>
     *
     * <code>string device_model = 5;</code>
     */
    public function setDeviceModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_model = $var;
    }

    /**
     * <pre>
     * Android only, build.display.id
     * </pre>
     *
     * <code>string device_model_identifier = 6;</code>
     */
    public function getDeviceModelIdentifier()
    {
        return $this->device_model_identifier;
    }

    /**
     * <pre>
     * Android only, build.display.id
     * </pre>
     *
     * <code>string device_model_identifier = 6;</code>
     */
    public function setDeviceModelIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_model_identifier = $var;
    }

    /**
     * <pre>
     * On Android: boot.hardware
     * </pre>
     *
     * <code>string device_model_boot = 7;</code>
     */
    public function getDeviceModelBoot()
    {
        return $this->device_model_boot;
    }

    /**
     * <pre>
     * On Android: boot.hardware
     * </pre>
     *
     * <code>string device_model_boot = 7;</code>
     */
    public function setDeviceModelBoot($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_model_boot = $var;
    }

    /**
     * <pre>
     * On Android: product.manufacturer
     * </pre>
     *
     * <code>string hardware_manufacturer = 8;</code>
     */
    public function getHardwareManufacturer()
    {
        return $this->hardware_manufacturer;
    }

    /**
     * <pre>
     * On Android: product.manufacturer
     * </pre>
     *
     * <code>string hardware_manufacturer = 8;</code>
     */
    public function setHardwareManufacturer($var)
    {
        GPBUtil::checkString($var, True);
        $this->hardware_manufacturer = $var;
    }

    /**
     * <pre>
     * On Android: product.model
     * </pre>
     *
     * <code>string hardware_model = 9;</code>
     */
    public function getHardwareModel()
    {
        return $this->hardware_model;
    }

    /**
     * <pre>
     * On Android: product.model
     * </pre>
     *
     * <code>string hardware_model = 9;</code>
     */
    public function setHardwareModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->hardware_model = $var;
    }

    /**
     * <pre>
     * On Android: product.name, on iOS: "iPhone OS"
     * </pre>
     *
     * <code>string firmware_brand = 10;</code>
     */
    public function getFirmwareBrand()
    {
        return $this->firmware_brand;
    }

    /**
     * <pre>
     * On Android: product.name, on iOS: "iPhone OS"
     * </pre>
     *
     * <code>string firmware_brand = 10;</code>
     */
    public function setFirmwareBrand($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_brand = $var;
    }

    /**
     * <pre>
     * Android only, build.tags
     * </pre>
     *
     * <code>string firmware_tags = 12;</code>
     */
    public function getFirmwareTags()
    {
        return $this->firmware_tags;
    }

    /**
     * <pre>
     * Android only, build.tags
     * </pre>
     *
     * <code>string firmware_tags = 12;</code>
     */
    public function setFirmwareTags($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_tags = $var;
    }

    /**
     * <pre>
     * On Android: build.type, on iOS instead: iOS version
     * </pre>
     *
     * <code>string firmware_type = 13;</code>
     */
    public function getFirmwareType()
    {
        return $this->firmware_type;
    }

    /**
     * <pre>
     * On Android: build.type, on iOS instead: iOS version
     * </pre>
     *
     * <code>string firmware_type = 13;</code>
     */
    public function setFirmwareType($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_type = $var;
    }

    /**
     * <pre>
     * Android only, build.fingerprint
     * </pre>
     *
     * <code>string firmware_fingerprint = 14;</code>
     */
    public function getFirmwareFingerprint()
    {
        return $this->firmware_fingerprint;
    }

    /**
     * <pre>
     * Android only, build.fingerprint
     * </pre>
     *
     * <code>string firmware_fingerprint = 14;</code>
     */
    public function setFirmwareFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_fingerprint = $var;
    }

}
