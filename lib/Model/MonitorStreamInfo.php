<?php
/**
 * MonitorStreamInfo
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
 * MonitorStreamInfo Class Doc Comment
 *
 * @category Class
 * @description Settings and Info of the monitor stream
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MonitorStreamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MonitorStreamInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'broadcast_stream_delay_ms' => 'int',
        'embed_html' => 'string',
        'enable_monitor_stream' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'broadcast_stream_delay_ms' => 'uint32',
        'embed_html' => null,
        'enable_monitor_stream' => null
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
        'broadcast_stream_delay_ms' => 'broadcastStreamDelayMs',
        'embed_html' => 'embedHtml',
        'enable_monitor_stream' => 'enableMonitorStream'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'broadcast_stream_delay_ms' => 'setBroadcastStreamDelayMs',
        'embed_html' => 'setEmbedHtml',
        'enable_monitor_stream' => 'setEnableMonitorStream'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'broadcast_stream_delay_ms' => 'getBroadcastStreamDelayMs',
        'embed_html' => 'getEmbedHtml',
        'enable_monitor_stream' => 'getEnableMonitorStream'
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
        $this->container['broadcast_stream_delay_ms'] = isset($data['broadcast_stream_delay_ms']) ? $data['broadcast_stream_delay_ms'] : null;
        $this->container['embed_html'] = isset($data['embed_html']) ? $data['embed_html'] : null;
        $this->container['enable_monitor_stream'] = isset($data['enable_monitor_stream']) ? $data['enable_monitor_stream'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets broadcast_stream_delay_ms
     *
     * @return int
     */
    public function getBroadcastStreamDelayMs()
    {
        return $this->container['broadcast_stream_delay_ms'];
    }

    /**
     * Sets broadcast_stream_delay_ms
     *
     * @param int $broadcast_stream_delay_ms If you have set the enableMonitorStream property to true, then this property determines the length of the live broadcast delay.
     *
     * @return $this
     */
    public function setBroadcastStreamDelayMs($broadcast_stream_delay_ms)
    {
        $this->container['broadcast_stream_delay_ms'] = $broadcast_stream_delay_ms;

        return $this;
    }

    /**
     * Gets embed_html
     *
     * @return string
     */
    public function getEmbedHtml()
    {
        return $this->container['embed_html'];
    }

    /**
     * Sets embed_html
     *
     * @param string $embed_html HTML code that embeds a player that plays the monitor stream.
     *
     * @return $this
     */
    public function setEmbedHtml($embed_html)
    {
        $this->container['embed_html'] = $embed_html;

        return $this;
    }

    /**
     * Gets enable_monitor_stream
     *
     * @return bool
     */
    public function getEnableMonitorStream()
    {
        return $this->container['enable_monitor_stream'];
    }

    /**
     * Sets enable_monitor_stream
     *
     * @param bool $enable_monitor_stream This value determines whether the monitor stream is enabled for the broadcast. If the monitor stream is enabled, then YouTube will broadcast the event content on a special stream intended only for the broadcaster's consumption. The broadcaster can use the stream to review the event content and also to identify the optimal times to insert cuepoints.  You need to set this value to true if you intend to have a broadcast delay for your event.  Note: This property cannot be updated once the broadcast is in the testing or live state.
     *
     * @return $this
     */
    public function setEnableMonitorStream($enable_monitor_stream)
    {
        $this->container['enable_monitor_stream'] = $enable_monitor_stream;

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

