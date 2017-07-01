<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Map/Pokemon/LobbyPokemon.proto
 */


namespace POGOProtos\Map\Pokemon;

/**
 * Protobuf message : POGOProtos.Map.Pokemon.LobbyPokemon
 */
class LobbyPokemon extends \Protobuf\AbstractMessage
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
     * id optional int64 = 1
     *
     * @var int
     */
    protected $id = null;

    /**
     * pokedex_id optional enum = 2
     *
     * @var \POGOProtos\Enums\PokemonId
     */
    protected $pokedex_id = null;

    /**
     * cp optional int32 = 3
     *
     * @var int
     */
    protected $cp = null;

    /**
     * percent_health optional float = 4
     *
     * @var float
     */
    protected $percent_health = null;

    /**
     * Check if 'id' has a value
     *
     * @return bool
     */
    public function hasId()
    {
        return $this->id !== null;
    }

    /**
     * Get 'id' value
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set 'id' value
     *
     * @param int $value
     */
    public function setId($value = null)
    {
        $this->id = $value;
    }

    /**
     * Check if 'pokedex_id' has a value
     *
     * @return bool
     */
    public function hasPokedexId()
    {
        return $this->pokedex_id !== null;
    }

    /**
     * Get 'pokedex_id' value
     *
     * @return \POGOProtos\Enums\PokemonId
     */
    public function getPokedexId()
    {
        return $this->pokedex_id;
    }

    /**
     * Set 'pokedex_id' value
     *
     * @param \POGOProtos\Enums\PokemonId $value
     */
    public function setPokedexId(\POGOProtos\Enums\PokemonId $value = null)
    {
        $this->pokedex_id = $value;
    }

    /**
     * Check if 'cp' has a value
     *
     * @return bool
     */
    public function hasCp()
    {
        return $this->cp !== null;
    }

    /**
     * Get 'cp' value
     *
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set 'cp' value
     *
     * @param int $value
     */
    public function setCp($value = null)
    {
        $this->cp = $value;
    }

    /**
     * Check if 'percent_health' has a value
     *
     * @return bool
     */
    public function hasPercentHealth()
    {
        return $this->percent_health !== null;
    }

    /**
     * Get 'percent_health' value
     *
     * @return float
     */
    public function getPercentHealth()
    {
        return $this->percent_health;
    }

    /**
     * Set 'percent_health' value
     *
     * @param float $value
     */
    public function setPercentHealth($value = null)
    {
        $this->percent_health = $value;
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
            'id' => null,
            'pokedex_id' => null,
            'cp' => null,
            'percent_health' => null
        ], $values);

        $message->setId($values['id']);
        $message->setPokedexId($values['pokedex_id']);
        $message->setCp($values['cp']);
        $message->setPercentHealth($values['percent_health']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'LobbyPokemon',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'pokedex_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'cp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'percent_health',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
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

        if ($this->id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->id);
        }

        if ($this->pokedex_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->pokedex_id->value());
        }

        if ($this->cp !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->cp);
        }

        if ($this->percent_health !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFloat($stream, $this->percent_health);
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
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->pokedex_id = \POGOProtos\Enums\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->cp = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->percent_health = $reader->readFloat($stream);

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

        if ($this->id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->id);
        }

        if ($this->pokedex_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokedex_id->value());
        }

        if ($this->cp !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cp);
        }

        if ($this->percent_health !== null) {
            $size += 1;
            $size += 4;
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
        $this->id = null;
        $this->pokedex_id = null;
        $this->cp = null;
        $this->percent_health = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Map\Pokemon\LobbyPokemon) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->pokedex_id = ($message->pokedex_id !== null) ? $message->pokedex_id : $this->pokedex_id;
        $this->cp = ($message->cp !== null) ? $message->cp : $this->cp;
        $this->percent_health = ($message->percent_health !== null) ? $message->percent_health : $this->percent_health;
    }


}

