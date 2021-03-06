<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Quests/Quest.proto

namespace POGOProtos\Data\Quests;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Quests.Quest</code>
 */
class Quest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.QuestType quest_type = 1;</code>
     */
    private $quest_type = 0;
    /**
     * Generated from protobuf field <code>string quest_id = 100;</code>
     */
    private $quest_id = '';
    /**
     * Generated from protobuf field <code>int64 quest_seed = 101;</code>
     */
    private $quest_seed = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.Context quest_context = 102;</code>
     */
    private $quest_context = 0;
    /**
     * Generated from protobuf field <code>string template_id = 103;</code>
     */
    private $template_id = '';
    /**
     * Generated from protobuf field <code>int32 progress = 104;</code>
     */
    private $progress = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestGoal goal = 105;</code>
     */
    private $goal = null;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.Status status = 106;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.QuestReward quest_rewards = 107;</code>
     */
    private $quest_rewards;
    /**
     * Generated from protobuf field <code>int64 creation_timestamp_ms = 108;</code>
     */
    private $creation_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>int64 last_update_timestamp_ms = 109;</code>
     */
    private $last_update_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>int64 compeletion_timestamp_ms = 110;</code>
     */
    private $compeletion_timestamp_ms = 0;
    /**
     * Generated from protobuf field <code>string fort_id = 111;</code>
     */
    private $fort_id = '';
    /**
     * Generated from protobuf field <code>bool admin_generated = 112;</code>
     */
    private $admin_generated = false;
    /**
     * Generated from protobuf field <code>bool stamp_count_override_enabled = 113;</code>
     */
    private $stamp_count_override_enabled = false;
    /**
     * Generated from protobuf field <code>int32 stamp_count_override = 114;</code>
     */
    private $stamp_count_override = 0;
    /**
     * Generated from protobuf field <code>int64 s2_cell_id = 115;</code>
     */
    private $s2_cell_id = 0;
    /**
     * Generated from protobuf field <code>int32 story_quest_template_version = 116;</code>
     */
    private $story_quest_template_version = 0;
    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.DailyCounter daily_counter = 117;</code>
     */
    private $daily_counter = null;
    /**
     * Generated from protobuf field <code>string reward_pokemon_icon_url = 118;</code>
     */
    private $reward_pokemon_icon_url = '';
    protected $Quest;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $quest_type
     *     @type \POGOProtos\Data\Quests\Quest\DailyQuest $daily_quest
     *     @type \POGOProtos\Data\Quests\Quest\MultiPartQuest $multi_part
     *     @type \POGOProtos\Data\Quests\CatchPokemonQuest $catch_pokemon
     *     @type \POGOProtos\Data\Quests\AddFriendQuest $add_friend
     *     @type \POGOProtos\Data\Quests\TradePokemonQuest $trade_pokemon
     *     @type string $quest_id
     *     @type int|string $quest_seed
     *     @type int $quest_context
     *     @type string $template_id
     *     @type int $progress
     *     @type \POGOProtos\Data\Quests\QuestGoal $goal
     *     @type int $status
     *     @type \POGOProtos\Data\Quests\QuestReward[]|\Google\Protobuf\Internal\RepeatedField $quest_rewards
     *     @type int|string $creation_timestamp_ms
     *     @type int|string $last_update_timestamp_ms
     *     @type int|string $compeletion_timestamp_ms
     *     @type string $fort_id
     *     @type bool $admin_generated
     *     @type bool $stamp_count_override_enabled
     *     @type int $stamp_count_override
     *     @type int|string $s2_cell_id
     *     @type int $story_quest_template_version
     *     @type \POGOProtos\Data\Quests\Quest\DailyCounter $daily_counter
     *     @type string $reward_pokemon_icon_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Quests\Quest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.QuestType quest_type = 1;</code>
     * @return int
     */
    public function getQuestType()
    {
        return $this->quest_type;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Enums.QuestType quest_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setQuestType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\QuestType::class);
        $this->quest_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.DailyQuest daily_quest = 2;</code>
     * @return \POGOProtos\Data\Quests\Quest\DailyQuest
     */
    public function getDailyQuest()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.DailyQuest daily_quest = 2;</code>
     * @param \POGOProtos\Data\Quests\Quest\DailyQuest $var
     * @return $this
     */
    public function setDailyQuest($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\Quest_DailyQuest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.MultiPartQuest multi_part = 3;</code>
     * @return \POGOProtos\Data\Quests\Quest\MultiPartQuest
     */
    public function getMultiPart()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.MultiPartQuest multi_part = 3;</code>
     * @param \POGOProtos\Data\Quests\Quest\MultiPartQuest $var
     * @return $this
     */
    public function setMultiPart($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\Quest_MultiPartQuest::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.CatchPokemonQuest catch_pokemon = 4;</code>
     * @return \POGOProtos\Data\Quests\CatchPokemonQuest
     */
    public function getCatchPokemon()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.CatchPokemonQuest catch_pokemon = 4;</code>
     * @param \POGOProtos\Data\Quests\CatchPokemonQuest $var
     * @return $this
     */
    public function setCatchPokemon($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\CatchPokemonQuest::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.AddFriendQuest add_friend = 5;</code>
     * @return \POGOProtos\Data\Quests\AddFriendQuest
     */
    public function getAddFriend()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.AddFriendQuest add_friend = 5;</code>
     * @param \POGOProtos\Data\Quests\AddFriendQuest $var
     * @return $this
     */
    public function setAddFriend($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\AddFriendQuest::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.TradePokemonQuest trade_pokemon = 6;</code>
     * @return \POGOProtos\Data\Quests\TradePokemonQuest
     */
    public function getTradePokemon()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.TradePokemonQuest trade_pokemon = 6;</code>
     * @param \POGOProtos\Data\Quests\TradePokemonQuest $var
     * @return $this
     */
    public function setTradePokemon($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\TradePokemonQuest::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string quest_id = 100;</code>
     * @return string
     */
    public function getQuestId()
    {
        return $this->quest_id;
    }

    /**
     * Generated from protobuf field <code>string quest_id = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setQuestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->quest_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 quest_seed = 101;</code>
     * @return int|string
     */
    public function getQuestSeed()
    {
        return $this->quest_seed;
    }

    /**
     * Generated from protobuf field <code>int64 quest_seed = 101;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuestSeed($var)
    {
        GPBUtil::checkInt64($var);
        $this->quest_seed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.Context quest_context = 102;</code>
     * @return int
     */
    public function getQuestContext()
    {
        return $this->quest_context;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.Context quest_context = 102;</code>
     * @param int $var
     * @return $this
     */
    public function setQuestContext($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Quests\Quest_Context::class);
        $this->quest_context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string template_id = 103;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * Generated from protobuf field <code>string template_id = 103;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->template_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 progress = 104;</code>
     * @return int
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Generated from protobuf field <code>int32 progress = 104;</code>
     * @param int $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkInt32($var);
        $this->progress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestGoal goal = 105;</code>
     * @return \POGOProtos\Data\Quests\QuestGoal
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.QuestGoal goal = 105;</code>
     * @param \POGOProtos\Data\Quests\QuestGoal $var
     * @return $this
     */
    public function setGoal($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\QuestGoal::class);
        $this->goal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.Status status = 106;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.Status status = 106;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Data\Quests\Quest_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.QuestReward quest_rewards = 107;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuestRewards()
    {
        return $this->quest_rewards;
    }

    /**
     * Generated from protobuf field <code>repeated .POGOProtos.Data.Quests.QuestReward quest_rewards = 107;</code>
     * @param \POGOProtos\Data\Quests\QuestReward[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuestRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \POGOProtos\Data\Quests\QuestReward::class);
        $this->quest_rewards = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 creation_timestamp_ms = 108;</code>
     * @return int|string
     */
    public function getCreationTimestampMs()
    {
        return $this->creation_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 creation_timestamp_ms = 108;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_update_timestamp_ms = 109;</code>
     * @return int|string
     */
    public function getLastUpdateTimestampMs()
    {
        return $this->last_update_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 last_update_timestamp_ms = 109;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastUpdateTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_update_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 compeletion_timestamp_ms = 110;</code>
     * @return int|string
     */
    public function getCompeletionTimestampMs()
    {
        return $this->compeletion_timestamp_ms;
    }

    /**
     * Generated from protobuf field <code>int64 compeletion_timestamp_ms = 110;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompeletionTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->compeletion_timestamp_ms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 111;</code>
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Generated from protobuf field <code>string fort_id = 111;</code>
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
     * Generated from protobuf field <code>bool admin_generated = 112;</code>
     * @return bool
     */
    public function getAdminGenerated()
    {
        return $this->admin_generated;
    }

    /**
     * Generated from protobuf field <code>bool admin_generated = 112;</code>
     * @param bool $var
     * @return $this
     */
    public function setAdminGenerated($var)
    {
        GPBUtil::checkBool($var);
        $this->admin_generated = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool stamp_count_override_enabled = 113;</code>
     * @return bool
     */
    public function getStampCountOverrideEnabled()
    {
        return $this->stamp_count_override_enabled;
    }

    /**
     * Generated from protobuf field <code>bool stamp_count_override_enabled = 113;</code>
     * @param bool $var
     * @return $this
     */
    public function setStampCountOverrideEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->stamp_count_override_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 stamp_count_override = 114;</code>
     * @return int
     */
    public function getStampCountOverride()
    {
        return $this->stamp_count_override;
    }

    /**
     * Generated from protobuf field <code>int32 stamp_count_override = 114;</code>
     * @param int $var
     * @return $this
     */
    public function setStampCountOverride($var)
    {
        GPBUtil::checkInt32($var);
        $this->stamp_count_override = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 s2_cell_id = 115;</code>
     * @return int|string
     */
    public function getS2CellId()
    {
        return $this->s2_cell_id;
    }

    /**
     * Generated from protobuf field <code>int64 s2_cell_id = 115;</code>
     * @param int|string $var
     * @return $this
     */
    public function setS2CellId($var)
    {
        GPBUtil::checkInt64($var);
        $this->s2_cell_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 story_quest_template_version = 116;</code>
     * @return int
     */
    public function getStoryQuestTemplateVersion()
    {
        return $this->story_quest_template_version;
    }

    /**
     * Generated from protobuf field <code>int32 story_quest_template_version = 116;</code>
     * @param int $var
     * @return $this
     */
    public function setStoryQuestTemplateVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->story_quest_template_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.DailyCounter daily_counter = 117;</code>
     * @return \POGOProtos\Data\Quests\Quest\DailyCounter
     */
    public function getDailyCounter()
    {
        return $this->daily_counter;
    }

    /**
     * Generated from protobuf field <code>.POGOProtos.Data.Quests.Quest.DailyCounter daily_counter = 117;</code>
     * @param \POGOProtos\Data\Quests\Quest\DailyCounter $var
     * @return $this
     */
    public function setDailyCounter($var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Data\Quests\Quest_DailyCounter::class);
        $this->daily_counter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string reward_pokemon_icon_url = 118;</code>
     * @return string
     */
    public function getRewardPokemonIconUrl()
    {
        return $this->reward_pokemon_icon_url;
    }

    /**
     * Generated from protobuf field <code>string reward_pokemon_icon_url = 118;</code>
     * @param string $var
     * @return $this
     */
    public function setRewardPokemonIconUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->reward_pokemon_icon_url = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuest()
    {
        return $this->whichOneof("Quest");
    }

}

