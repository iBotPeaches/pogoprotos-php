<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/BootTime.proto

namespace POGOProtos\Data\Telemetry\BootTime;

/**
 * Protobuf type <code>POGOProtos.Data.Telemetry.BootTime.BootPhase</code>
 */
class BootPhase
{
    /**
     * Generated from protobuf enum <code>UNDEFINED = 0;</code>
     */
    const UNDEFINED = 0;
    /**
     * Generated from protobuf enum <code>TIME_TO_MAP = 1;</code>
     */
    const TIME_TO_MAP = 1;
    /**
     * Generated from protobuf enum <code>LOGO_SCREEN_TIME = 2;</code>
     */
    const LOGO_SCREEN_TIME = 2;
    /**
     * Generated from protobuf enum <code>MAIN_SCENE_LOAD_TIME = 3;</code>
     */
    const MAIN_SCENE_LOAD_TIME = 3;
    /**
     * Generated from protobuf enum <code>WAIT_FOR_AUTH = 4;</code>
     */
    const WAIT_FOR_AUTH = 4;
    /**
     * Generated from protobuf enum <code>INIT_REMOTE_CONFIG_VERSIONS = 5;</code>
     */
    const INIT_REMOTE_CONFIG_VERSIONS = 5;
    /**
     * Generated from protobuf enum <code>INIT_BUNDLE_DIGEST = 6;</code>
     */
    const INIT_BUNDLE_DIGEST = 6;
    /**
     * Generated from protobuf enum <code>INIT_GMT = 7;</code>
     */
    const INIT_GMT = 7;
    /**
     * Generated from protobuf enum <code>DOWNLOAD_I18N = 8;</code>
     */
    const DOWNLOAD_I18N = 8;
    /**
     * Generated from protobuf enum <code>DOWNLOAD_GLOBAL_ASSETS = 9;</code>
     */
    const DOWNLOAD_GLOBAL_ASSETS = 9;
    /**
     * Generated from protobuf enum <code>REGISTER_PUSH_NOTIFICATION = 10;</code>
     */
    const REGISTER_PUSH_NOTIFICATION = 10;
    /**
     * Generated from protobuf enum <code>INITIALIZE_UPSIGHT = 11;</code>
     */
    const INITIALIZE_UPSIGHT = 11;
    /**
     * Generated from protobuf enum <code>INITIALIZE_CRITTERCISM = 12;</code>
     */
    const INITIALIZE_CRITTERCISM = 12;
    /**
     * Generated from protobuf enum <code>LOGIN_VERSION_CHECK = 13;</code>
     */
    const LOGIN_VERSION_CHECK = 13;
    /**
     * Generated from protobuf enum <code>LOGIN_GET_PLAYER = 14;</code>
     */
    const LOGIN_GET_PLAYER = 14;
    /**
     * Generated from protobuf enum <code>LOGIN_AUTHENTICATION = 15;</code>
     */
    const LOGIN_AUTHENTICATION = 15;
    /**
     * Generated from protobuf enum <code>MODAL_TIME = 16;</code>
     */
    const MODAL_TIME = 16;
    /**
     * Generated from protobuf enum <code>INITIALIZE_ADJUST = 17;</code>
     */
    const INITIALIZE_ADJUST = 17;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BootPhase::class, \POGOProtos\Data\Telemetry\BootTime_BootPhase::class);
