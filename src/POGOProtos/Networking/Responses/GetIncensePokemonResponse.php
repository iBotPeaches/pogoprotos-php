<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Responses/GetIncensePokemonResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.GetIncensePokemonResponse
 */
class GetIncensePokemonResponse extends \Protobuf\AbstractMessage
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
     * result optional enum = 1
     *
     * @var \POGOProtos\Networking\Responses\GetIncensePokemonResponse\Result
     */
    protected $result = null;

    /**
     * pokemon_id optional enum = 2
     *
     * @var \POGOProtos\Enums\PokemonId
     */
    protected $pokemon_id = null;

    /**
     * latitude optional double = 3
     *
     * @var float
     */
    protected $latitude = null;

    /**
     * longitude optional double = 4
     *
     * @var float
     */
    protected $longitude = null;

    /**
     * encounter_location optional string = 5
     *
     * @var string
     */
    protected $encounter_location = null;

    /**
     * encounter_id optional fixed64 = 6
     *
     * @var int
     */
    protected $encounter_id = null;

    /**
     * disappear_timestamp_ms optional int64 = 7
     *
     * @var int
     */
    protected $disappear_timestamp_ms = null;

    /**
     * Check if 'result' has a value
     *
     * @return bool
     */
    public function hasResult()
    {
        return $this->result !== null;
    }

    /**
     * Get 'result' value
     *
     * @return \POGOProtos\Networking\Responses\GetIncensePokemonResponse\Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set 'result' value
     *
     * @param \POGOProtos\Networking\Responses\GetIncensePokemonResponse\Result $value
     */
    public function setResult(\POGOProtos\Networking\Responses\GetIncensePokemonResponse\Result $value = null)
    {
        $this->result = $value;
    }

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
     * @return \POGOProtos\Enums\PokemonId
     */
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Set 'pokemon_id' value
     *
     * @param \POGOProtos\Enums\PokemonId $value
     */
    public function setPokemonId(\POGOProtos\Enums\PokemonId $value = null)
    {
        $this->pokemon_id = $value;
    }

    /**
     * Check if 'latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->latitude !== null;
    }

    /**
     * Get 'latitude' value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set 'latitude' value
     *
     * @param float $value
     */
    public function setLatitude($value = null)
    {
        $this->latitude = $value;
    }

    /**
     * Check if 'longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->longitude !== null;
    }

    /**
     * Get 'longitude' value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set 'longitude' value
     *
     * @param float $value
     */
    public function setLongitude($value = null)
    {
        $this->longitude = $value;
    }

    /**
     * Check if 'encounter_location' has a value
     *
     * @return bool
     */
    public function hasEncounterLocation()
    {
        return $this->encounter_location !== null;
    }

    /**
     * Get 'encounter_location' value
     *
     * @return string
     */
    public function getEncounterLocation()
    {
        return $this->encounter_location;
    }

    /**
     * Set 'encounter_location' value
     *
     * @param string $value
     */
    public function setEncounterLocation($value = null)
    {
        $this->encounter_location = $value;
    }

    /**
     * Check if 'encounter_id' has a value
     *
     * @return bool
     */
    public function hasEncounterId()
    {
        return $this->encounter_id !== null;
    }

    /**
     * Get 'encounter_id' value
     *
     * @return int
     */
    public function getEncounterId()
    {
        return $this->encounter_id;
    }

    /**
     * Set 'encounter_id' value
     *
     * @param int $value
     */
    public function setEncounterId($value = null)
    {
        $this->encounter_id = $value;
    }

    /**
     * Check if 'disappear_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasDisappearTimestampMs()
    {
        return $this->disappear_timestamp_ms !== null;
    }

    /**
     * Get 'disappear_timestamp_ms' value
     *
     * @return int
     */
    public function getDisappearTimestampMs()
    {
        return $this->disappear_timestamp_ms;
    }

    /**
     * Set 'disappear_timestamp_ms' value
     *
     * @param int $value
     */
    public function setDisappearTimestampMs($value = null)
    {
        $this->disappear_timestamp_ms = $value;
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
            'result' => null,
            'pokemon_id' => null,
            'latitude' => null,
            'longitude' => null,
            'encounter_location' => null,
            'encounter_id' => null,
            'disappear_timestamp_ms' => null
        ], $values);

        $message->setResult($values['result']);
        $message->setPokemonId($values['pokemon_id']);
        $message->setLatitude($values['latitude']);
        $message->setLongitude($values['longitude']);
        $message->setEncounterLocation($values['encounter_location']);
        $message->setEncounterId($values['encounter_id']);
        $message->setDisappearTimestampMs($values['disappear_timestamp_ms']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetIncensePokemonResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'result',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Responses.GetIncensePokemonResponse.Result'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'encounter_location',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'encounter_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'disappear_timestamp_ms',
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

        if ($this->result !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->result->value());
        }

        if ($this->pokemon_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->pokemon_id->value());
        }

        if ($this->latitude !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeDouble($stream, $this->latitude);
        }

        if ($this->longitude !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeDouble($stream, $this->longitude);
        }

        if ($this->encounter_location !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->encounter_location);
        }

        if ($this->encounter_id !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeFixed64($stream, $this->encounter_id);
        }

        if ($this->disappear_timestamp_ms !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->disappear_timestamp_ms);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->result = \POGOProtos\Networking\Responses\GetIncensePokemonResponse\Result::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->pokemon_id = \POGOProtos\Enums\PokemonId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->longitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->encounter_location = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->encounter_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->disappear_timestamp_ms = $reader->readVarint($stream);

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

        if ($this->result !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->result->value());
        }

        if ($this->pokemon_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->pokemon_id->value());
        }

        if ($this->latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->longitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->encounter_location !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->encounter_location);
        }

        if ($this->encounter_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->disappear_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->disappear_timestamp_ms);
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
        $this->result = null;
        $this->pokemon_id = null;
        $this->latitude = null;
        $this->longitude = null;
        $this->encounter_location = null;
        $this->encounter_id = null;
        $this->disappear_timestamp_ms = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\GetIncensePokemonResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->result = ($message->result !== null) ? $message->result : $this->result;
        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
        $this->latitude = ($message->latitude !== null) ? $message->latitude : $this->latitude;
        $this->longitude = ($message->longitude !== null) ? $message->longitude : $this->longitude;
        $this->encounter_location = ($message->encounter_location !== null) ? $message->encounter_location : $this->encounter_location;
        $this->encounter_id = ($message->encounter_id !== null) ? $message->encounter_id : $this->encounter_id;
        $this->disappear_timestamp_ms = ($message->disappear_timestamp_ms !== null) ? $message->disappear_timestamp_ms : $this->disappear_timestamp_ms;
    }


}

