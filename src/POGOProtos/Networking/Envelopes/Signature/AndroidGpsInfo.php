<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Envelopes/Signature.proto
 */


namespace POGOProtos\Networking\Envelopes\Signature;

/**
 * Protobuf message : POGOProtos.Networking.Envelopes.Signature.AndroidGpsInfo
 */
class AndroidGpsInfo extends \Protobuf\AbstractMessage
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
     * time_to_fix optional uint64 = 1
     *
     * @var int
     */
    protected $time_to_fix = null;

    /**
     * satellites_prn repeated int32 = 2
     *
     * @var \Protobuf\Collection
     */
    protected $satellites_prn = null;

    /**
     * azimuth repeated float = 3
     *
     * @var \Protobuf\Collection
     */
    protected $azimuth = null;

    /**
     * elevation repeated float = 4
     *
     * @var \Protobuf\Collection
     */
    protected $elevation = null;

    /**
     * snr repeated float = 5
     *
     * @var \Protobuf\Collection
     */
    protected $snr = null;

    /**
     * has_almanac repeated bool = 6
     *
     * @var \Protobuf\Collection
     */
    protected $has_almanac = null;

    /**
     * has_ephemeris repeated bool = 7
     *
     * @var \Protobuf\Collection
     */
    protected $has_ephemeris = null;

    /**
     * used_in_fix repeated bool = 8
     *
     * @var \Protobuf\Collection
     */
    protected $used_in_fix = null;

    /**
     * Check if 'time_to_fix' has a value
     *
     * @return bool
     */
    public function hasTimeToFix()
    {
        return $this->time_to_fix !== null;
    }

    /**
     * Get 'time_to_fix' value
     *
     * @return int
     */
    public function getTimeToFix()
    {
        return $this->time_to_fix;
    }

    /**
     * Set 'time_to_fix' value
     *
     * @param int $value
     */
    public function setTimeToFix($value = null)
    {
        $this->time_to_fix = $value;
    }

    /**
     * Check if 'satellites_prn' has a value
     *
     * @return bool
     */
    public function hasSatellitesPrnList()
    {
        return $this->satellites_prn !== null;
    }

    /**
     * Get 'satellites_prn' value
     *
     * @return \Protobuf\Collection
     */
    public function getSatellitesPrnList()
    {
        return $this->satellites_prn;
    }

    /**
     * Set 'satellites_prn' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setSatellitesPrnList(\Protobuf\Collection $value = null)
    {
        $this->satellites_prn = $value;
    }

    /**
     * Add a new element to 'satellites_prn'
     *
     * @param int $value
     */
    public function addSatellitesPrn($value)
    {
        if ($this->satellites_prn === null) {
            $this->satellites_prn = new \Protobuf\ScalarCollection();
        }

        $this->satellites_prn->add($value);
    }

    /**
     * Check if 'azimuth' has a value
     *
     * @return bool
     */
    public function hasAzimuthList()
    {
        return $this->azimuth !== null;
    }

    /**
     * Get 'azimuth' value
     *
     * @return \Protobuf\Collection
     */
    public function getAzimuthList()
    {
        return $this->azimuth;
    }

    /**
     * Set 'azimuth' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAzimuthList(\Protobuf\Collection $value = null)
    {
        $this->azimuth = $value;
    }

    /**
     * Add a new element to 'azimuth'
     *
     * @param float $value
     */
    public function addAzimuth($value)
    {
        if ($this->azimuth === null) {
            $this->azimuth = new \Protobuf\ScalarCollection();
        }

        $this->azimuth->add($value);
    }

    /**
     * Check if 'elevation' has a value
     *
     * @return bool
     */
    public function hasElevationList()
    {
        return $this->elevation !== null;
    }

    /**
     * Get 'elevation' value
     *
     * @return \Protobuf\Collection
     */
    public function getElevationList()
    {
        return $this->elevation;
    }

    /**
     * Set 'elevation' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setElevationList(\Protobuf\Collection $value = null)
    {
        $this->elevation = $value;
    }

    /**
     * Add a new element to 'elevation'
     *
     * @param float $value
     */
    public function addElevation($value)
    {
        if ($this->elevation === null) {
            $this->elevation = new \Protobuf\ScalarCollection();
        }

        $this->elevation->add($value);
    }

    /**
     * Check if 'snr' has a value
     *
     * @return bool
     */
    public function hasSnrList()
    {
        return $this->snr !== null;
    }

    /**
     * Get 'snr' value
     *
     * @return \Protobuf\Collection
     */
    public function getSnrList()
    {
        return $this->snr;
    }

    /**
     * Set 'snr' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setSnrList(\Protobuf\Collection $value = null)
    {
        $this->snr = $value;
    }

    /**
     * Add a new element to 'snr'
     *
     * @param float $value
     */
    public function addSnr($value)
    {
        if ($this->snr === null) {
            $this->snr = new \Protobuf\ScalarCollection();
        }

        $this->snr->add($value);
    }

    /**
     * Check if 'has_almanac' has a value
     *
     * @return bool
     */
    public function hasHasAlmanacList()
    {
        return $this->has_almanac !== null;
    }

    /**
     * Get 'has_almanac' value
     *
     * @return \Protobuf\Collection
     */
    public function getHasAlmanacList()
    {
        return $this->has_almanac;
    }

    /**
     * Set 'has_almanac' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setHasAlmanacList(\Protobuf\Collection $value = null)
    {
        $this->has_almanac = $value;
    }

    /**
     * Add a new element to 'has_almanac'
     *
     * @param bool $value
     */
    public function addHasAlmanac($value)
    {
        if ($this->has_almanac === null) {
            $this->has_almanac = new \Protobuf\ScalarCollection();
        }

        $this->has_almanac->add($value);
    }

    /**
     * Check if 'has_ephemeris' has a value
     *
     * @return bool
     */
    public function hasHasEphemerisList()
    {
        return $this->has_ephemeris !== null;
    }

    /**
     * Get 'has_ephemeris' value
     *
     * @return \Protobuf\Collection
     */
    public function getHasEphemerisList()
    {
        return $this->has_ephemeris;
    }

    /**
     * Set 'has_ephemeris' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setHasEphemerisList(\Protobuf\Collection $value = null)
    {
        $this->has_ephemeris = $value;
    }

    /**
     * Add a new element to 'has_ephemeris'
     *
     * @param bool $value
     */
    public function addHasEphemeris($value)
    {
        if ($this->has_ephemeris === null) {
            $this->has_ephemeris = new \Protobuf\ScalarCollection();
        }

        $this->has_ephemeris->add($value);
    }

    /**
     * Check if 'used_in_fix' has a value
     *
     * @return bool
     */
    public function hasUsedInFixList()
    {
        return $this->used_in_fix !== null;
    }

    /**
     * Get 'used_in_fix' value
     *
     * @return \Protobuf\Collection
     */
    public function getUsedInFixList()
    {
        return $this->used_in_fix;
    }

    /**
     * Set 'used_in_fix' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setUsedInFixList(\Protobuf\Collection $value = null)
    {
        $this->used_in_fix = $value;
    }

    /**
     * Add a new element to 'used_in_fix'
     *
     * @param bool $value
     */
    public function addUsedInFix($value)
    {
        if ($this->used_in_fix === null) {
            $this->used_in_fix = new \Protobuf\ScalarCollection();
        }

        $this->used_in_fix->add($value);
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
            'time_to_fix' => null,
            'satellites_prn' => [],
            'azimuth' => [],
            'elevation' => [],
            'snr' => [],
            'has_almanac' => [],
            'has_ephemeris' => [],
            'used_in_fix' => []
        ], $values);

        $message->setTimeToFix($values['time_to_fix']);

        foreach ($values['satellites_prn'] as $item) {
            $message->addSatellitesPrn($item);
        }

        foreach ($values['azimuth'] as $item) {
            $message->addAzimuth($item);
        }

        foreach ($values['elevation'] as $item) {
            $message->addElevation($item);
        }

        foreach ($values['snr'] as $item) {
            $message->addSnr($item);
        }

        foreach ($values['has_almanac'] as $item) {
            $message->addHasAlmanac($item);
        }

        foreach ($values['has_ephemeris'] as $item) {
            $message->addHasEphemeris($item);
        }

        foreach ($values['used_in_fix'] as $item) {
            $message->addUsedInFix($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AndroidGpsInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'time_to_fix',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'satellites_prn',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'azimuth',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'elevation',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'snr',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'has_almanac',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'has_ephemeris',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'used_in_fix',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->time_to_fix !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->time_to_fix);
        }

        if ($this->satellites_prn !== null) {
            foreach ($this->satellites_prn as $val) {
                $writer->writeVarint($stream, 16);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->azimuth !== null) {
            foreach ($this->azimuth as $val) {
                $writer->writeVarint($stream, 29);
                $writer->writeFloat($stream, $val);
            }
        }

        if ($this->elevation !== null) {
            foreach ($this->elevation as $val) {
                $writer->writeVarint($stream, 37);
                $writer->writeFloat($stream, $val);
            }
        }

        if ($this->snr !== null) {
            foreach ($this->snr as $val) {
                $writer->writeVarint($stream, 45);
                $writer->writeFloat($stream, $val);
            }
        }

        if ($this->has_almanac !== null) {
            foreach ($this->has_almanac as $val) {
                $writer->writeVarint($stream, 48);
                $writer->writeBool($stream, $val);
            }
        }

        if ($this->has_ephemeris !== null) {
            foreach ($this->has_ephemeris as $val) {
                $writer->writeVarint($stream, 56);
                $writer->writeBool($stream, $val);
            }
        }

        if ($this->used_in_fix !== null) {
            foreach ($this->used_in_fix as $val) {
                $writer->writeVarint($stream, 64);
                $writer->writeBool($stream, $val);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->time_to_fix = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->satellites_prn === null) {
                    $this->satellites_prn = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->satellites_prn->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 3) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->azimuth === null) {
                    $this->azimuth = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->azimuth->add($reader->readFloat($stream));
                }

                continue;
            }

            if ($tag === 4) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->elevation === null) {
                    $this->elevation = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->elevation->add($reader->readFloat($stream));
                }

                continue;
            }

            if ($tag === 5) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->snr === null) {
                    $this->snr = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->snr->add($reader->readFloat($stream));
                }

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                if ($this->has_almanac === null) {
                    $this->has_almanac = new \Protobuf\ScalarCollection();
                }

                $this->has_almanac->add($reader->readBool($stream));

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                if ($this->has_ephemeris === null) {
                    $this->has_ephemeris = new \Protobuf\ScalarCollection();
                }

                $this->has_ephemeris->add($reader->readBool($stream));

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                if ($this->used_in_fix === null) {
                    $this->used_in_fix = new \Protobuf\ScalarCollection();
                }

                $this->used_in_fix->add($reader->readBool($stream));

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

        if ($this->time_to_fix !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time_to_fix);
        }

        if ($this->satellites_prn !== null) {
            foreach ($this->satellites_prn as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->azimuth !== null) {
            foreach ($this->azimuth as $val) {
                $size += 1;
                $size += 4;
            }
        }

        if ($this->elevation !== null) {
            foreach ($this->elevation as $val) {
                $size += 1;
                $size += 4;
            }
        }

        if ($this->snr !== null) {
            foreach ($this->snr as $val) {
                $size += 1;
                $size += 4;
            }
        }

        if ($this->has_almanac !== null) {
            foreach ($this->has_almanac as $val) {
                $size += 1;
                $size += 1;
            }
        }

        if ($this->has_ephemeris !== null) {
            foreach ($this->has_ephemeris as $val) {
                $size += 1;
                $size += 1;
            }
        }

        if ($this->used_in_fix !== null) {
            foreach ($this->used_in_fix as $val) {
                $size += 1;
                $size += 1;
            }
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
        $this->time_to_fix = null;
        $this->satellites_prn = null;
        $this->azimuth = null;
        $this->elevation = null;
        $this->snr = null;
        $this->has_almanac = null;
        $this->has_ephemeris = null;
        $this->used_in_fix = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Envelopes\Signature\AndroidGpsInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->time_to_fix = ($message->time_to_fix !== null) ? $message->time_to_fix : $this->time_to_fix;
        $this->satellites_prn = ($message->satellites_prn !== null) ? $message->satellites_prn : $this->satellites_prn;
        $this->azimuth = ($message->azimuth !== null) ? $message->azimuth : $this->azimuth;
        $this->elevation = ($message->elevation !== null) ? $message->elevation : $this->elevation;
        $this->snr = ($message->snr !== null) ? $message->snr : $this->snr;
        $this->has_almanac = ($message->has_almanac !== null) ? $message->has_almanac : $this->has_almanac;
        $this->has_ephemeris = ($message->has_ephemeris !== null) ? $message->has_ephemeris : $this->has_ephemeris;
        $this->used_in_fix = ($message->used_in_fix !== null) ? $message->used_in_fix : $this->used_in_fix;
    }


}

