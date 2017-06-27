<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Inventory/InventoryKey.proto
 */


namespace POGOProtos\Inventory;

/**
 * Protobuf message : POGOProtos.Inventory.InventoryKey
 */
class InventoryKey extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * pokemon_id optional fixed64 = 1
     *
     * @var int
     */
    protected $pokemon_id = null;

    /**
     * item optional enum = 2
     *
     * @var \POGOProtos\Inventory\Item\ItemId
     */
    protected $item = null;

    /**
     * pokedex_entry_id optional int32 = 3
     *
     * @var int
     */
    protected $pokedex_entry_id = null;

    /**
     * player_stats optional bool = 4
     *
     * @var bool
     */
    protected $player_stats = null;

    /**
     * player_currency optional bool = 5
     *
     * @var bool
     */
    protected $player_currency = null;

    /**
     * player_camera optional bool = 6
     *
     * @var bool
     */
    protected $player_camera = null;

    /**
     * inventory_upgrades optional bool = 7
     *
     * @var bool
     */
    protected $inventory_upgrades = null;

    /**
     * applied_items optional bool = 8
     *
     * @var bool
     */
    protected $applied_items = null;

    /**
     * egg_incubators optional bool = 9
     *
     * @var bool
     */
    protected $egg_incubators = null;

    /**
     * pokemon_family_id optional enum = 10
     *
     * @var \POGOProtos\Enums\PokemonFamilyId
     */
    protected $pokemon_family_id = null;

    /**
     * quest_type optional enum = 11
     *
     * @var \POGOProtos\Enums\QuestType
     */
    protected $quest_type = null;

    /**
     * avatar_template_id optional string = 12
     *
     * @var string
     */
    protected $avatar_template_id = null;

    /**
     * raid_tickets optional bool = 13
     *
     * @var bool
     */
    protected $raid_tickets = null;

    /**
     * Check if 'pokemon_id' has a value
     *
     * @return bool
     */
    public function hasPokemonId()
    {
        return $this->pokemon_id !== null;
    }

    /**
     * Get 'pokemon_id' value
     *
     * @return int
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Set 'pokemon_id' value
     *
     * @param int $value
     */
    public function setPokemonId($value = null)
    {
        $this->pokemon_id = $value;
    }

    /**
     * Check if 'item' has a value
     *
     * @return bool
     */
    public function hasItem()
    {
        return $this->item !== null;
    }

    /**
     * Get 'item' value
     *
     * @return \POGOProtos\Inventory\Item\ItemId
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set 'item' value
     *
     * @param \POGOProtos\Inventory\Item\ItemId $value
     */
    public function setItem(\POGOProtos\Inventory\Item\ItemId $value = null)
    {
        $this->item = $value;
    }

    /**
     * Check if 'pokedex_entry_id' has a value
     *
     * @return bool
     */
    public function hasPokedexEntryId()
    {
        return $this->pokedex_entry_id !== null;
    }

    /**
     * Get 'pokedex_entry_id' value
     *
     * @return int
     */
    public function getPokedexEntryId()
    {
        return $this->pokedex_entry_id;
    }

    /**
     * Set 'pokedex_entry_id' value
     *
     * @param int $value
     */
    public function setPokedexEntryId($value = null)
    {
        $this->pokedex_entry_id = $value;
    }

    /**
     * Check if 'player_stats' has a value
     *
     * @return bool
     */
    public function hasPlayerStats()
    {
        return $this->player_stats !== null;
    }

    /**
     * Get 'player_stats' value
     *
     * @return bool
     */
    public function getPlayerStats()
    {
        return $this->player_stats;
    }

    /**
     * Set 'player_stats' value
     *
     * @param bool $value
     */
    public function setPlayerStats($value = null)
    {
        $this->player_stats = $value;
    }

    /**
     * Check if 'player_currency' has a value
     *
     * @return bool
     */
    public function hasPlayerCurrency()
    {
        return $this->player_currency !== null;
    }

    /**
     * Get 'player_currency' value
     *
     * @return bool
     */
    public function getPlayerCurrency()
    {
        return $this->player_currency;
    }

    /**
     * Set 'player_currency' value
     *
     * @param bool $value
     */
    public function setPlayerCurrency($value = null)
    {
        $this->player_currency = $value;
    }

    /**
     * Check if 'player_camera' has a value
     *
     * @return bool
     */
    public function hasPlayerCamera()
    {
        return $this->player_camera !== null;
    }

    /**
     * Get 'player_camera' value
     *
     * @return bool
     */
    public function getPlayerCamera()
    {
        return $this->player_camera;
    }

    /**
     * Set 'player_camera' value
     *
     * @param bool $value
     */
    public function setPlayerCamera($value = null)
    {
        $this->player_camera = $value;
    }

    /**
     * Check if 'inventory_upgrades' has a value
     *
     * @return bool
     */
    public function hasInventoryUpgrades()
    {
        return $this->inventory_upgrades !== null;
    }

    /**
     * Get 'inventory_upgrades' value
     *
     * @return bool
     */
    public function getInventoryUpgrades()
    {
        return $this->inventory_upgrades;
    }

    /**
     * Set 'inventory_upgrades' value
     *
     * @param bool $value
     */
    public function setInventoryUpgrades($value = null)
    {
        $this->inventory_upgrades = $value;
    }

    /**
     * Check if 'applied_items' has a value
     *
     * @return bool
     */
    public function hasAppliedItems()
    {
        return $this->applied_items !== null;
    }

    /**
     * Get 'applied_items' value
     *
     * @return bool
     */
    public function getAppliedItems()
    {
        return $this->applied_items;
    }

    /**
     * Set 'applied_items' value
     *
     * @param bool $value
     */
    public function setAppliedItems($value = null)
    {
        $this->applied_items = $value;
    }

    /**
     * Check if 'egg_incubators' has a value
     *
     * @return bool
     */
    public function hasEggIncubators()
    {
        return $this->egg_incubators !== null;
    }

    /**
     * Get 'egg_incubators' value
     *
     * @return bool
     */
    public function getEggIncubators()
    {
        return $this->egg_incubators;
    }

    /**
     * Set 'egg_incubators' value
     *
     * @param bool $value
     */
    public function setEggIncubators($value = null)
    {
        $this->egg_incubators = $value;
    }

    /**
     * Check if 'pokemon_family_id' has a value
     *
     * @return bool
     */
    public function hasPokemonFamilyId()
    {
        return $this->pokemon_family_id !== null;
    }

    /**
     * Get 'pokemon_family_id' value
     *
     * @return \POGOProtos\Enums\PokemonFamilyId
     */
    public function getPokemonFamilyId()
    {
        return $this->pokemon_family_id;
    }

    /**
     * Set 'pokemon_family_id' value
     *
     * @param \POGOProtos\Enums\PokemonFamilyId $value
     */
    public function setPokemonFamilyId(\POGOProtos\Enums\PokemonFamilyId $value = null)
    {
        $this->pokemon_family_id = $value;
    }

    /**
     * Check if 'quest_type' has a value
     *
     * @return bool
     */
    public function hasQuestType()
    {
        return $this->quest_type !== null;
    }

    /**
     * Get 'quest_type' value
     *
     * @return \POGOProtos\Enums\QuestType
     */
    public function getQuestType()
    {
        return $this->quest_type;
    }

    /**
     * Set 'quest_type' value
     *
     * @param \POGOProtos\Enums\QuestType $value
     */
    public function setQuestType(\POGOProtos\Enums\QuestType $value = null)
    {
        $this->quest_type = $value;
    }

    /**
     * Check if 'avatar_template_id' has a value
     *
     * @return bool
     */
    public function hasAvatarTemplateId()
    {
        return $this->avatar_template_id !== null;
    }

    /**
     * Get 'avatar_template_id' value
     *
     * @return string
     */
    public function getAvatarTemplateId()
    {
        return $this->avatar_template_id;
    }

    /**
     * Set 'avatar_template_id' value
     *
     * @param string $value
     */
    public function setAvatarTemplateId($value = null)
    {
        $this->avatar_template_id = $value;
    }

    /**
     * Check if 'raid_tickets' has a value
     *
     * @return bool
     */
    public function hasRaidTickets()
    {
        return $this->raid_tickets !== null;
    }

    /**
     * Get 'raid_tickets' value
     *
     * @return bool
     */
    public function getRaidTickets()
    {
        return $this->raid_tickets;
    }

    /**
     * Set 'raid_tickets' value
     *
     * @param bool $value
     */
    public function setRaidTickets($value = null)
    {
        $this->raid_tickets = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'pokemon_id' => null,
            'item' => null,
            'pokedex_entry_id' => null,
            'player_stats' => null,
            'player_currency' => null,
            'player_camera' => null,
            'inventory_upgrades' => null,
            'applied_items' => null,
            'egg_incubators' => null,
            'pokemon_family_id' => null,
            'quest_type' => null,
            'avatar_template_id' => null,
            'raid_tickets' => null
        ], $values);

        $message->setPokemonId($values['pokemon_id']);
        $message->setItem($values['item']);
        $message->setPokedexEntryId($values['pokedex_entry_id']);
        $message->setPlayerStats($values['player_stats']);
        $message->setPlayerCurrency($values['player_currency']);
        $message->setPlayerCamera($values['player_camera']);
        $message->setInventoryUpgrades($values['inventory_upgrades']);
        $message->setAppliedItems($values['applied_items']);
        $message->setEggIncubators($values['egg_incubators']);
        $message->setPokemonFamilyId($values['pokemon_family_id']);
        $message->setQuestType($values['quest_type']);
        $message->setAvatarTemplateId($values['avatar_template_id']);
        $message->setRaidTickets($values['raid_tickets']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InventoryKey',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'item',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'pokedex_entry_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'player_stats',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'player_currency',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'player_camera',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'inventory_upgrades',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'applied_items',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'egg_incubators',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'pokemon_family_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonFamilyId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'quest_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.QuestType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'avatar_template_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'raid_tickets',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->pokemon_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->pokemon_id);
        }

        if ($this->item !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->item->value());
        }

        if ($this->pokedex_entry_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->pokedex_entry_id);
        }

        if ($this->player_stats !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->player_stats);
        }

        if ($this->player_currency !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->player_currency);
        }

        if ($this->player_camera !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->player_camera);
        }

        if ($this->inventory_upgrades !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->inventory_upgrades);
        }

        if ($this->applied_items !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeBool($stream, $this->applied_items);
        }

        if ($this->egg_incubators !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeBool($stream, $this->egg_incubators);
        }

        if ($this->pokemon_family_id !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->pokemon_family_id->value());
        }

        if ($this->quest_type !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeVarint($stream, $this->quest_type->value());
        }

        if ($this->avatar_template_id !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeString($stream, $this->avatar_template_id);
        }

        if ($this->raid_tickets !== null) {
            $writer->writeVarint($stream, 104);
            $writer->writeBool($stream, $this->raid_tickets);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->pokemon_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->item = \POGOProtos\Inventory\Item\ItemId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->pokedex_entry_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->player_stats = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->player_currency = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->player_camera = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->inventory_upgrades = $reader->readBool($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->applied_items = $reader->readBool($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->egg_incubators = $reader->readBool($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->pokemon_family_id = \POGOProtos\Enums\PokemonFamilyId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->quest_type = \POGOProtos\Enums\QuestType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->avatar_template_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->raid_tickets = $reader->readBool($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->pokemon_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->item !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->item->value());
        }

        if ($this->pokedex_entry_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokedex_entry_id);
        }

        if ($this->player_stats !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->player_currency !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->player_camera !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->inventory_upgrades !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->applied_items !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->egg_incubators !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->pokemon_family_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokemon_family_id->value());
        }

        if ($this->quest_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->quest_type->value());
        }

        if ($this->avatar_template_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->avatar_template_id);
        }

        if ($this->raid_tickets !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->pokemon_id = null;
        $this->item = null;
        $this->pokedex_entry_id = null;
        $this->player_stats = null;
        $this->player_currency = null;
        $this->player_camera = null;
        $this->inventory_upgrades = null;
        $this->applied_items = null;
        $this->egg_incubators = null;
        $this->pokemon_family_id = null;
        $this->quest_type = null;
        $this->avatar_template_id = null;
        $this->raid_tickets = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Inventory\InventoryKey) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
        $this->item = ($message->item !== null) ? $message->item : $this->item;
        $this->pokedex_entry_id = ($message->pokedex_entry_id !== null) ? $message->pokedex_entry_id : $this->pokedex_entry_id;
        $this->player_stats = ($message->player_stats !== null) ? $message->player_stats : $this->player_stats;
        $this->player_currency = ($message->player_currency !== null) ? $message->player_currency : $this->player_currency;
        $this->player_camera = ($message->player_camera !== null) ? $message->player_camera : $this->player_camera;
        $this->inventory_upgrades = ($message->inventory_upgrades !== null) ? $message->inventory_upgrades : $this->inventory_upgrades;
        $this->applied_items = ($message->applied_items !== null) ? $message->applied_items : $this->applied_items;
        $this->egg_incubators = ($message->egg_incubators !== null) ? $message->egg_incubators : $this->egg_incubators;
        $this->pokemon_family_id = ($message->pokemon_family_id !== null) ? $message->pokemon_family_id : $this->pokemon_family_id;
        $this->quest_type = ($message->quest_type !== null) ? $message->quest_type : $this->quest_type;
        $this->avatar_template_id = ($message->avatar_template_id !== null) ? $message->avatar_template_id : $this->avatar_template_id;
        $this->raid_tickets = ($message->raid_tickets !== null) ? $message->raid_tickets : $this->raid_tickets;
    }


}

