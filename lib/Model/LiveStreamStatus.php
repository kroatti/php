<?php
/**
 * LiveStreamStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YouTube Data
 *
 * Supports core YouTube features, such as uploading videos, creating and managing playlists, searching for content, and much more.
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LiveStreamStatus Class Doc Comment
 *
 * @category Class
 * @description Brief description of the live stream status.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LiveStreamStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LiveStreamStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'health_status' => '\Swagger\Client\Model\LiveStreamHealthStatus',
        'stream_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'health_status' => null,
        'stream_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'health_status' => 'healthStatus',
        'stream_status' => 'streamStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'health_status' => 'setHealthStatus',
        'stream_status' => 'setStreamStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'health_status' => 'getHealthStatus',
        'stream_status' => 'getStreamStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STREAM_STATUS_ACTIVE = 'active';
    const STREAM_STATUS_CREATED = 'created';
    const STREAM_STATUS_ERROR = 'error';
    const STREAM_STATUS_INACTIVE = 'inactive';
    const STREAM_STATUS_READY = 'ready';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStreamStatusAllowableValues()
    {
        return [
            self::STREAM_STATUS_ACTIVE,
            self::STREAM_STATUS_CREATED,
            self::STREAM_STATUS_ERROR,
            self::STREAM_STATUS_INACTIVE,
            self::STREAM_STATUS_READY,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['health_status'] = isset($data['health_status']) ? $data['health_status'] : null;
        $this->container['stream_status'] = isset($data['stream_status']) ? $data['stream_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStreamStatusAllowableValues();
        if (!in_array($this->container['stream_status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'stream_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowedValues = $this->getStreamStatusAllowableValues();
        if (!in_array($this->container['stream_status'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets health_status
     *
     * @return \Swagger\Client\Model\LiveStreamHealthStatus
     */
    public function getHealthStatus()
    {
        return $this->container['health_status'];
    }

    /**
     * Sets health_status
     *
     * @param \Swagger\Client\Model\LiveStreamHealthStatus $health_status The health status of the stream.
     *
     * @return $this
     */
    public function setHealthStatus($health_status)
    {
        $this->container['health_status'] = $health_status;

        return $this;
    }

    /**
     * Gets stream_status
     *
     * @return string
     */
    public function getStreamStatus()
    {
        return $this->container['stream_status'];
    }

    /**
     * Sets stream_status
     *
     * @param string $stream_status stream_status
     *
     * @return $this
     */
    public function setStreamStatus($stream_status)
    {
        $allowedValues = $this->getStreamStatusAllowableValues();
        if (!is_null($stream_status) && !in_array($stream_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'stream_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stream_status'] = $stream_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


