<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Location.proto

namespace POGOProtos\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POGOProtos.Data.Location</code>
 */
class Location extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double lat_degree = 1;</code>
     */
    private $lat_degree = 0.0;
    /**
     * Generated from protobuf field <code>double lng_degree = 2;</code>
     */
    private $lng_degree = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $lat_degree
     *     @type float $lng_degree
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\POGOProtos\Data\Location::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>double lat_degree = 1;</code>
     * @return float
     */
    public function getLatDegree()
    {
        return $this->lat_degree;
    }

    /**
     * Generated from protobuf field <code>double lat_degree = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setLatDegree($var)
    {
        GPBUtil::checkDouble($var);
        $this->lat_degree = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double lng_degree = 2;</code>
     * @return float
     */
    public function getLngDegree()
    {
        return $this->lng_degree;
    }

    /**
     * Generated from protobuf field <code>double lng_degree = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setLngDegree($var)
    {
        GPBUtil::checkDouble($var);
        $this->lng_degree = $var;

        return $this;
    }

}

