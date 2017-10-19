<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/CameraSettings.proto

namespace POGOProtos\Settings\Master;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>POGOProtos.Settings.Master.CameraSettings</code>
 */
class CameraSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string next_camera = 1;</code>
     */
    private $next_camera = '';
    /**
     * <code>repeated .POGOProtos.Enums.CameraInterpolation interpolation = 2;</code>
     */
    private $interpolation;
    /**
     * <code>repeated .POGOProtos.Enums.CameraTarget target_type = 3;</code>
     */
    private $target_type;
    /**
     * <code>repeated float ease_in_speed = 4;</code>
     */
    private $ease_in_speed;
    /**
     * <code>repeated float ease_out_speed = 5;</code>
     */
    private $ease_out_speed;
    /**
     * <code>repeated float duration_seconds = 6;</code>
     */
    private $duration_seconds;
    /**
     * <code>repeated float wait_seconds = 7;</code>
     */
    private $wait_seconds;
    /**
     * <code>repeated float transition_seconds = 8;</code>
     */
    private $transition_seconds;
    /**
     * <code>repeated float angle_degree = 9;</code>
     */
    private $angle_degree;
    /**
     * <code>repeated float angle_offset_degree = 10;</code>
     */
    private $angle_offset_degree;
    /**
     * <code>repeated float pitch_degree = 11;</code>
     */
    private $pitch_degree;
    /**
     * <code>repeated float pitch_offset_degree = 12;</code>
     */
    private $pitch_offset_degree;
    /**
     * <code>repeated float roll_degree = 13;</code>
     */
    private $roll_degree;
    /**
     * <code>repeated float distance_meters = 14;</code>
     */
    private $distance_meters;
    /**
     * <code>repeated float height_percent = 15;</code>
     */
    private $height_percent;
    /**
     * <code>repeated float vert_ctr_ratio = 16;</code>
     */
    private $vert_ctr_ratio;

    public function __construct() {
        \GPBMetadata\POGOProtos\Settings\Master\CameraSettings::initOnce();
        parent::__construct();
    }

    /**
     * <code>string next_camera = 1;</code>
     */
    public function getNextCamera()
    {
        return $this->next_camera;
    }

    /**
     * <code>string next_camera = 1;</code>
     */
    public function setNextCamera($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_camera = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.CameraInterpolation interpolation = 2;</code>
     */
    public function getInterpolation()
    {
        return $this->interpolation;
    }

    /**
     * <code>repeated .POGOProtos.Enums.CameraInterpolation interpolation = 2;</code>
     */
    public function setInterpolation(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\CameraInterpolation::class);
        $this->interpolation = $var;
    }

    /**
     * <code>repeated .POGOProtos.Enums.CameraTarget target_type = 3;</code>
     */
    public function getTargetType()
    {
        return $this->target_type;
    }

    /**
     * <code>repeated .POGOProtos.Enums.CameraTarget target_type = 3;</code>
     */
    public function setTargetType(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, POGOProtos\Enums\CameraTarget::class);
        $this->target_type = $var;
    }

    /**
     * <code>repeated float ease_in_speed = 4;</code>
     */
    public function getEaseInSpeed()
    {
        return $this->ease_in_speed;
    }

    /**
     * <code>repeated float ease_in_speed = 4;</code>
     */
    public function setEaseInSpeed(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->ease_in_speed = $var;
    }

    /**
     * <code>repeated float ease_out_speed = 5;</code>
     */
    public function getEaseOutSpeed()
    {
        return $this->ease_out_speed;
    }

    /**
     * <code>repeated float ease_out_speed = 5;</code>
     */
    public function setEaseOutSpeed(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->ease_out_speed = $var;
    }

    /**
     * <code>repeated float duration_seconds = 6;</code>
     */
    public function getDurationSeconds()
    {
        return $this->duration_seconds;
    }

    /**
     * <code>repeated float duration_seconds = 6;</code>
     */
    public function setDurationSeconds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->duration_seconds = $var;
    }

    /**
     * <code>repeated float wait_seconds = 7;</code>
     */
    public function getWaitSeconds()
    {
        return $this->wait_seconds;
    }

    /**
     * <code>repeated float wait_seconds = 7;</code>
     */
    public function setWaitSeconds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->wait_seconds = $var;
    }

    /**
     * <code>repeated float transition_seconds = 8;</code>
     */
    public function getTransitionSeconds()
    {
        return $this->transition_seconds;
    }

    /**
     * <code>repeated float transition_seconds = 8;</code>
     */
    public function setTransitionSeconds(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->transition_seconds = $var;
    }

    /**
     * <code>repeated float angle_degree = 9;</code>
     */
    public function getAngleDegree()
    {
        return $this->angle_degree;
    }

    /**
     * <code>repeated float angle_degree = 9;</code>
     */
    public function setAngleDegree(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->angle_degree = $var;
    }

    /**
     * <code>repeated float angle_offset_degree = 10;</code>
     */
    public function getAngleOffsetDegree()
    {
        return $this->angle_offset_degree;
    }

    /**
     * <code>repeated float angle_offset_degree = 10;</code>
     */
    public function setAngleOffsetDegree(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->angle_offset_degree = $var;
    }

    /**
     * <code>repeated float pitch_degree = 11;</code>
     */
    public function getPitchDegree()
    {
        return $this->pitch_degree;
    }

    /**
     * <code>repeated float pitch_degree = 11;</code>
     */
    public function setPitchDegree(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->pitch_degree = $var;
    }

    /**
     * <code>repeated float pitch_offset_degree = 12;</code>
     */
    public function getPitchOffsetDegree()
    {
        return $this->pitch_offset_degree;
    }

    /**
     * <code>repeated float pitch_offset_degree = 12;</code>
     */
    public function setPitchOffsetDegree(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->pitch_offset_degree = $var;
    }

    /**
     * <code>repeated float roll_degree = 13;</code>
     */
    public function getRollDegree()
    {
        return $this->roll_degree;
    }

    /**
     * <code>repeated float roll_degree = 13;</code>
     */
    public function setRollDegree(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->roll_degree = $var;
    }

    /**
     * <code>repeated float distance_meters = 14;</code>
     */
    public function getDistanceMeters()
    {
        return $this->distance_meters;
    }

    /**
     * <code>repeated float distance_meters = 14;</code>
     */
    public function setDistanceMeters(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->distance_meters = $var;
    }

    /**
     * <code>repeated float height_percent = 15;</code>
     */
    public function getHeightPercent()
    {
        return $this->height_percent;
    }

    /**
     * <code>repeated float height_percent = 15;</code>
     */
    public function setHeightPercent(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->height_percent = $var;
    }

    /**
     * <code>repeated float vert_ctr_ratio = 16;</code>
     */
    public function getVertCtrRatio()
    {
        return $this->vert_ctr_ratio;
    }

    /**
     * <code>repeated float vert_ctr_ratio = 16;</code>
     */
    public function setVertCtrRatio(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->vert_ctr_ratio = $var;
    }

}

