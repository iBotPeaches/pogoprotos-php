<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Badge/AwardedGymBadge.proto

namespace POGOProtos\Data\Badge;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Badge.AwardedGymBadge</code>
 */
class AwardedGymBadge extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fort_id = 1;</code>
     */
    private $fort_id = '';
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.GymBadgeType gym_badge_type = 2;</code>
     */
    private $gym_badge_type = 0;
    /**
     * Generated from protobuf field <code>uint32 score = 3;</code>
     */
    private $score = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.GymBadgeStats gym_badge_stats = 4;</code>
     */
    private $gym_badge_stats = null;
    /**
     * Generated from protobuf field <code>uint64 last_update_timestamp_ms = 5;</code>
     */
    private $last_update_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>uint64 last_check_timestamp_ms = 11;</code>
     */
    private $last_check_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>uint32 earned_points = 12;</code>
     */
    private $earned_points = 0;
    /**
     * Generated from protobuf field <code>float progress = 13;</code>
     */
    private $progress = 0.0;
    /**
     * Generated from protobuf field <code>bool level_up = 14;</code>
     */
    private $level_up = false;
    /**
     * Generated from protobuf field <code>string name = 6;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>string image_url = 7;</code>
     */
    private $image_url = '';
    /**
     * Generated from protobuf field <code>string description = 8;</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>double latitude = 9;</code>
     */
    private $latitude = 0.0;
    /**
     * Generated from protobuf field <code>double longitude = 10;</code>
     */
    private $longitude = 0.0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.PlayerRaidInfo raids = 15;</code>
     */
    private $raids = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fort_id
     *     @type int $gym_badge_type
     *     @type int $score
     *     @type \POGOProtos\Data\Badge\GymBadgeStats $gym_badge_stats
     *     @type int|string $last_update_timestamp_ms
     *     @type int|string $last_check_timestamp_ms
     *     @type int $earned_points
     *     @type float $progress
     *     @type bool $level_up
     *     @type string $name
     *     @type string $image_url
     *     @type string $description
     *     @type float $latitude
     *     @type float $longitude
     *     @type \POGOProtos\Data\Raid\PlayerRaidInfo $raids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Badge\AwardedGymBadge::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fort_id = 1;</code>
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFortId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fort_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.GymBadgeType gym_badge_type = 2;</code>
     * @return int
     */
    public function getGymBadgeType()
    {
        return $this->gym_badge_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.GymBadgeType gym_badge_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGymBadgeType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\GymBadgeType::class);
        $this->gym_badge_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 score = 3;</code>
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Generated from protobuf field <code>uint32 score = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.GymBadgeStats gym_badge_stats = 4;</code>
     * @return \POGOProtos\Data\Badge\GymBadgeStats
     */
    public function getGymBadgeStats()
    {
        return $this->gym_badge_stats;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Badge.GymBadgeStats gym_badge_stats = 4;</code>
     * @param \POGOProtos\Data\Badge\GymBadgeStats $var
     * @return $this
     */
    public function setGymBadgeStats($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Badge\GymBadgeStats::class);
        $this->gym_badge_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 last_update_timestamp_ms = 5;</code>
     * @return int|string
     */
    public function getLastUpdateTimestampMs()
    {
        return $this->last_update_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 last_update_timestamp_ms = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastUpdateTimestampMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->last_update_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 last_check_timestamp_ms = 11;</code>
     * @return int|string
     */
    public function getLastCheckTimestampMs()
    {
        return $this->last_check_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>uint64 last_check_timestamp_ms = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastCheckTimestampMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->last_check_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 earned_points = 12;</code>
     * @return int
     */
    public function getEarnedPoints()
    {
        return $this->earned_points;
    }

    /**
     * Generated from protobuf field <code>uint32 earned_points = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setEarnedPoints($var)
    {
        GPBUtil::checkUint32($var);
        $this->earned_points = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float progress = 13;</code>
     * @return float
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Generated from protobuf field <code>float progress = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkFloat($var);
        $this->progress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool level_up = 14;</code>
     * @return bool
     */
    public function getLevelUp()
    {
        return $this->level_up;
    }

    /**
     * Generated from protobuf field <code>bool level_up = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setLevelUp($var)
    {
        GPBUtil::checkBool($var);
        $this->level_up = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image_url = 7;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Generated from protobuf field <code>string image_url = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 8;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double latitude = 9;</code>
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Generated from protobuf field <code>double latitude = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double longitude = 10;</code>
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Generated from protobuf field <code>double longitude = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.PlayerRaidInfo raids = 15;</code>
     * @return \POGOProtos\Data\Raid\PlayerRaidInfo
     */
    public function getRaids()
    {
        return $this->raids;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Raid.PlayerRaidInfo raids = 15;</code>
     * @param \POGOProtos\Data\Raid\PlayerRaidInfo $var
     * @return $this
     */
    public function setRaids($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Raid\PlayerRaidInfo::class);
        $this->raids = $var;

        return $this;
    }

}

