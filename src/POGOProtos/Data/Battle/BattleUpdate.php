<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Battle/BattleUpdate.proto
 */


namespace POGOProtos\Data\Battle;

/**
 * Protobuf message : POGOProtos.Data.Battle.BattleUpdate
 */
class BattleUpdate extends \Protobuf\AbstractMessage
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
     * battle_log optional message = 1
     *
     * @var \POGOProtos\Data\Battle\BattleLog
     */
    protected $battle_log = null;

    /**
     * battle_id optional string = 2
     *
     * @var string
     */
    protected $battle_id = null;

    /**
     * active_defender optional message = 3
     *
     * @var \POGOProtos\Data\Battle\BattlePokemonInfo
     */
    protected $active_defender = null;

    /**
     * active_attacker optional message = 4
     *
     * @var \POGOProtos\Data\Battle\BattlePokemonInfo
     */
    protected $active_attacker = null;

    /**
     * Check if 'battle_log' has a value
     *
     * @return bool
     */
    public function hasBattleLog()
    {
        return $this->battle_log !== null;
    }

    /**
     * Get 'battle_log' value
     *
     * @return \POGOProtos\Data\Battle\BattleLog
     */
    public function getBattleLog()
    {
        return $this->battle_log;
    }

    /**
     * Set 'battle_log' value
     *
     * @param \POGOProtos\Data\Battle\BattleLog $value
     */
    public function setBattleLog(\POGOProtos\Data\Battle\BattleLog $value = null)
    {
        $this->battle_log = $value;
    }

    /**
     * Check if 'battle_id' has a value
     *
     * @return bool
     */
    public function hasBattleId()
    {
        return $this->battle_id !== null;
    }

    /**
     * Get 'battle_id' value
     *
     * @return string
     */
    public function getBattleId()
    {
        return $this->battle_id;
    }

    /**
     * Set 'battle_id' value
     *
     * @param string $value
     */
    public function setBattleId($value = null)
    {
        $this->battle_id = $value;
    }

    /**
     * Check if 'active_defender' has a value
     *
     * @return bool
     */
    public function hasActiveDefender()
    {
        return $this->active_defender !== null;
    }

    /**
     * Get 'active_defender' value
     *
     * @return \POGOProtos\Data\Battle\BattlePokemonInfo
     */
    public function getActiveDefender()
    {
        return $this->active_defender;
    }

    /**
     * Set 'active_defender' value
     *
     * @param \POGOProtos\Data\Battle\BattlePokemonInfo $value
     */
    public function setActiveDefender(\POGOProtos\Data\Battle\BattlePokemonInfo $value = null)
    {
        $this->active_defender = $value;
    }

    /**
     * Check if 'active_attacker' has a value
     *
     * @return bool
     */
    public function hasActiveAttacker()
    {
        return $this->active_attacker !== null;
    }

    /**
     * Get 'active_attacker' value
     *
     * @return \POGOProtos\Data\Battle\BattlePokemonInfo
     */
    public function getActiveAttacker()
    {
        return $this->active_attacker;
    }

    /**
     * Set 'active_attacker' value
     *
     * @param \POGOProtos\Data\Battle\BattlePokemonInfo $value
     */
    public function setActiveAttacker(\POGOProtos\Data\Battle\BattlePokemonInfo $value = null)
    {
        $this->active_attacker = $value;
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
            'battle_log' => null,
            'battle_id' => null,
            'active_defender' => null,
            'active_attacker' => null
        ], $values);

        $message->setBattleLog($values['battle_log']);
        $message->setBattleId($values['battle_id']);
        $message->setActiveDefender($values['active_defender']);
        $message->setActiveAttacker($values['active_attacker']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'BattleUpdate',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'battle_log',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Battle.BattleLog'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'battle_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'active_defender',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Battle.BattlePokemonInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'active_attacker',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Battle.BattlePokemonInfo'
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

        if ($this->battle_log !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->battle_log->serializedSize($sizeContext));
            $this->battle_log->writeTo($context);
        }

        if ($this->battle_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->battle_id);
        }

        if ($this->active_defender !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->active_defender->serializedSize($sizeContext));
            $this->active_defender->writeTo($context);
        }

        if ($this->active_attacker !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->active_attacker->serializedSize($sizeContext));
            $this->active_attacker->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Battle\BattleLog();

                $this->battle_log = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->battle_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Battle\BattlePokemonInfo();

                $this->active_defender = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Battle\BattlePokemonInfo();

                $this->active_attacker = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->battle_log !== null) {
            $innerSize = $this->battle_log->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->battle_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->battle_id);
        }

        if ($this->active_defender !== null) {
            $innerSize = $this->active_defender->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->active_attacker !== null) {
            $innerSize = $this->active_attacker->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->battle_log = null;
        $this->battle_id = null;
        $this->active_defender = null;
        $this->active_attacker = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Battle\BattleUpdate) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->battle_log = ($message->battle_log !== null) ? $message->battle_log : $this->battle_log;
        $this->battle_id = ($message->battle_id !== null) ? $message->battle_id : $this->battle_id;
        $this->active_defender = ($message->active_defender !== null) ? $message->active_defender : $this->active_defender;
        $this->active_attacker = ($message->active_attacker !== null) ? $message->active_attacker : $this->active_attacker;
    }


}
