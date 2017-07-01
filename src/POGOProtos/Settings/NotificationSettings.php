<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/NotificationSettings.proto
 */


namespace POGOProtos\Settings;

/**
 * Protobuf message : POGOProtos.Settings.NotificationSettings
 */
class NotificationSettings extends \Protobuf\AbstractMessage
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
     * pull_notifications optional bool = 1
     *
     * @var bool
     */
    protected $pull_notifications = null;

    /**
     * show_notifications optional bool = 2
     *
     * @var bool
     */
    protected $show_notifications = null;

    /**
     * Check if 'pull_notifications' has a value
     *
     * @return bool
     */
    public function hasPullNotifications()
    {
        return $this->pull_notifications !== null;
    }

    /**
     * Get 'pull_notifications' value
     *
     * @return bool
     */
    public function getPullNotifications()
    {
        return $this->pull_notifications;
    }

    /**
     * Set 'pull_notifications' value
     *
     * @param bool $value
     */
    public function setPullNotifications($value = null)
    {
        $this->pull_notifications = $value;
    }

    /**
     * Check if 'show_notifications' has a value
     *
     * @return bool
     */
    public function hasShowNotifications()
    {
        return $this->show_notifications !== null;
    }

    /**
     * Get 'show_notifications' value
     *
     * @return bool
     */
    public function getShowNotifications()
    {
        return $this->show_notifications;
    }

    /**
     * Set 'show_notifications' value
     *
     * @param bool $value
     */
    public function setShowNotifications($value = null)
    {
        $this->show_notifications = $value;
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
            'pull_notifications' => null,
            'show_notifications' => null
        ], $values);

        $message->setPullNotifications($values['pull_notifications']);
        $message->setShowNotifications($values['show_notifications']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'NotificationSettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pull_notifications',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'show_notifications',
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

        if ($this->pull_notifications !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->pull_notifications);
        }

        if ($this->show_notifications !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->show_notifications);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->pull_notifications = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->show_notifications = $reader->readBool($stream);

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

        if ($this->pull_notifications !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->show_notifications !== null) {
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
        $this->pull_notifications = null;
        $this->show_notifications = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Settings\NotificationSettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pull_notifications = ($message->pull_notifications !== null) ? $message->pull_notifications : $this->pull_notifications;
        $this->show_notifications = ($message->show_notifications !== null) ? $message->show_notifications : $this->show_notifications;
    }


}

