<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Telemetry/ArPhotoSession.proto

namespace POGOProtos\Data\Telemetry;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Telemetry.ArPhotoSession</code>
 */
class ArPhotoSession extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.ArPhotoSession.ArType ar_type = 1;</code>
     */
    private $ar_type = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.ArPhotoSession.Step furthest_step_completed = 2;</code>
     */
    private $furthest_step_completed = 0;
    /**
     * Generated from protobuf field <code>int32 num_photos_taken = 3;</code>
     */
    private $num_photos_taken = 0;
    /**
     * Generated from protobuf field <code>int32 num_photos_shared = 4;</code>
     */
    private $num_photos_shared = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ar_type
     *     @type int $furthest_step_completed
     *     @type int $num_photos_taken
     *     @type int $num_photos_shared
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Telemetry\ArPhotoSession::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.ArPhotoSession.ArType ar_type = 1;</code>
     * @return int
     */
    public function getArType()
    {
        return $this->ar_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.ArPhotoSession.ArType ar_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setArType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Telemetry\ArPhotoSession_ArType::class);
        $this->ar_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.ArPhotoSession.Step furthest_step_completed = 2;</code>
     * @return int
     */
    public function getFurthestStepCompleted()
    {
        return $this->furthest_step_completed;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Telemetry.ArPhotoSession.Step furthest_step_completed = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFurthestStepCompleted($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Telemetry\ArPhotoSession_Step::class);
        $this->furthest_step_completed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_photos_taken = 3;</code>
     * @return int
     */
    public function getNumPhotosTaken()
    {
        return $this->num_photos_taken;
    }

    /**
     * Generated from protobuf field <code>int32 num_photos_taken = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumPhotosTaken($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_photos_taken = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 num_photos_shared = 4;</code>
     * @return int
     */
    public function getNumPhotosShared()
    {
        return $this->num_photos_shared;
    }

    /**
     * Generated from protobuf field <code>int32 num_photos_shared = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNumPhotosShared($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_photos_shared = $var;

        return $this;
    }

}

