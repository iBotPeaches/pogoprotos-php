<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Map/Fort/GymDisplay.proto
 */


namespace POGOProtos\Map\Fort;

/**
 * Protobuf message : POGOProtos.Map.Fort.GymDisplay
 */
class GymDisplay extends \Protobuf\AbstractMessage
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
     * gym_event repeated message = 1
     *
     * @var \Protobuf\Collection<\POGOProtos\Map\Fort\GymEvent>
     */
    protected $gym_event = null;

    /**
     * total_gym_cp optional int32 = 2
     *
     * @var int
     */
    protected $total_gym_cp = null;

    /**
     * lowest_pokemon_motivation optional double = 3
     *
     * @var float
     */
    protected $lowest_pokemon_motivation = null;

    /**
     * slots_available optional int32 = 4
     *
     * @var int
     */
    protected $slots_available = null;

    /**
     * occupied_millis optional int64 = 5
     *
     * @var int
     */
    protected $occupied_millis = null;

    /**
     * Check if 'gym_event' has a value
     *
     * @return bool
     */
    public function hasGymEventList()
    {
        return $this->gym_event !== null;
    }

    /**
     * Get 'gym_event' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Map\Fort\GymEvent>
     */
    public function getGymEventList()
    {
        return $this->gym_event;
    }

    /**
     * Set 'gym_event' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Map\Fort\GymEvent> $value
     */
    public function setGymEventList(\Protobuf\Collection $value = null)
    {
        $this->gym_event = $value;
    }

    /**
     * Add a new element to 'gym_event'
     *
     * @param \POGOProtos\Map\Fort\GymEvent $value
     */
    public function addGymEvent(\POGOProtos\Map\Fort\GymEvent $value)
    {
        if ($this->gym_event === null) {
            $this->gym_event = new \Protobuf\MessageCollection();
        }

        $this->gym_event->add($value);
    }

    /**
     * Check if 'total_gym_cp' has a value
     *
     * @return bool
     */
    public function hasTotalGymCp()
    {
        return $this->total_gym_cp !== null;
    }

    /**
     * Get 'total_gym_cp' value
     *
     * @return int
     */
    public function getTotalGymCp()
    {
        return $this->total_gym_cp;
    }

    /**
     * Set 'total_gym_cp' value
     *
     * @param int $value
     */
    public function setTotalGymCp($value = null)
    {
        $this->total_gym_cp = $value;
    }

    /**
     * Check if 'lowest_pokemon_motivation' has a value
     *
     * @return bool
     */
    public function hasLowestPokemonMotivation()
    {
        return $this->lowest_pokemon_motivation !== null;
    }

    /**
     * Get 'lowest_pokemon_motivation' value
     *
     * @return float
     */
    public function getLowestPokemonMotivation()
    {
        return $this->lowest_pokemon_motivation;
    }

    /**
     * Set 'lowest_pokemon_motivation' value
     *
     * @param float $value
     */
    public function setLowestPokemonMotivation($value = null)
    {
        $this->lowest_pokemon_motivation = $value;
    }

    /**
     * Check if 'slots_available' has a value
     *
     * @return bool
     */
    public function hasSlotsAvailable()
    {
        return $this->slots_available !== null;
    }

    /**
     * Get 'slots_available' value
     *
     * @return int
     */
    public function getSlotsAvailable()
    {
        return $this->slots_available;
    }

    /**
     * Set 'slots_available' value
     *
     * @param int $value
     */
    public function setSlotsAvailable($value = null)
    {
        $this->slots_available = $value;
    }

    /**
     * Check if 'occupied_millis' has a value
     *
     * @return bool
     */
    public function hasOccupiedMillis()
    {
        return $this->occupied_millis !== null;
    }

    /**
     * Get 'occupied_millis' value
     *
     * @return int
     */
    public function getOccupiedMillis()
    {
        return $this->occupied_millis;
    }

    /**
     * Set 'occupied_millis' value
     *
     * @param int $value
     */
    public function setOccupiedMillis($value = null)
    {
        $this->occupied_millis = $value;
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
            'gym_event' => [],
            'total_gym_cp' => null,
            'lowest_pokemon_motivation' => null,
            'slots_available' => null,
            'occupied_millis' => null
        ], $values);

        $message->setTotalGymCp($values['total_gym_cp']);
        $message->setLowestPokemonMotivation($values['lowest_pokemon_motivation']);
        $message->setSlotsAvailable($values['slots_available']);
        $message->setOccupiedMillis($values['occupied_millis']);

        foreach ($values['gym_event'] as $item) {
            $message->addGymEvent($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GymDisplay',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'gym_event',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Map.Fort.GymEvent'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'total_gym_cp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'lowest_pokemon_motivation',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'slots_available',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'occupied_millis',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
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

        if ($this->gym_event !== null) {
            foreach ($this->gym_event as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->total_gym_cp !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->total_gym_cp);
        }

        if ($this->lowest_pokemon_motivation !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeDouble($stream, $this->lowest_pokemon_motivation);
        }

        if ($this->slots_available !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->slots_available);
        }

        if ($this->occupied_millis !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->occupied_millis);
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
                $innerMessage = new \POGOProtos\Map\Fort\GymEvent();

                if ($this->gym_event === null) {
                    $this->gym_event = new \Protobuf\MessageCollection();
                }

                $this->gym_event->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->total_gym_cp = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->lowest_pokemon_motivation = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->slots_available = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->occupied_millis = $reader->readVarint($stream);

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

        if ($this->gym_event !== null) {
            foreach ($this->gym_event as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->total_gym_cp !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->total_gym_cp);
        }

        if ($this->lowest_pokemon_motivation !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->slots_available !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->slots_available);
        }

        if ($this->occupied_millis !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->occupied_millis);
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
        $this->gym_event = null;
        $this->total_gym_cp = null;
        $this->lowest_pokemon_motivation = null;
        $this->slots_available = null;
        $this->occupied_millis = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Map\Fort\GymDisplay) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->gym_event = ($message->gym_event !== null) ? $message->gym_event : $this->gym_event;
        $this->total_gym_cp = ($message->total_gym_cp !== null) ? $message->total_gym_cp : $this->total_gym_cp;
        $this->lowest_pokemon_motivation = ($message->lowest_pokemon_motivation !== null) ? $message->lowest_pokemon_motivation : $this->lowest_pokemon_motivation;
        $this->slots_available = ($message->slots_available !== null) ? $message->slots_available : $this->slots_available;
        $this->occupied_millis = ($message->occupied_millis !== null) ? $message->occupied_millis : $this->occupied_millis;
    }


}
