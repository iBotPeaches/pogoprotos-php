<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/UncommentAnnotationTest.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.UncommentAnnotationTest</code>
 */
class UncommentAnnotationTest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string string_property = 1;</code>
     */
    private $string_property = '';
    /**
     * Generated from protobuf field <code>int64 long_property = 2;</code>
     */
    private $long_property = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $string_property
     *     @type int|string $long_property
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\UncommentAnnotationTest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string string_property = 1;</code>
     * @return string
     */
    public function getStringProperty()
    {
        return $this->string_property;
    }

    /**
     * Generated from protobuf field <code>string string_property = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStringProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->string_property = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 long_property = 2;</code>
     * @return int|string
     */
    public function getLongProperty()
    {
        return $this->long_property;
    }

    /**
     * Generated from protobuf field <code>int64 long_property = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLongProperty($var)
    {
        GPBUtil::checkInt64($var);
        $this->long_property = $var;

        return $this;
    }

}

