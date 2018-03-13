<?php
/**
 * PromotedItem
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
 * PromotedItem Class Doc Comment
 *
 * @category Class
 * @description Describes a single promoted item.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotedItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PromotedItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_message' => 'string',
        'id' => '\Swagger\Client\Model\PromotedItemId',
        'promoted_by_content_owner' => 'bool',
        'timing' => '\Swagger\Client\Model\InvideoTiming'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_message' => null,
        'id' => null,
        'promoted_by_content_owner' => null,
        'timing' => null
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
        'custom_message' => 'customMessage',
        'id' => 'id',
        'promoted_by_content_owner' => 'promotedByContentOwner',
        'timing' => 'timing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_message' => 'setCustomMessage',
        'id' => 'setId',
        'promoted_by_content_owner' => 'setPromotedByContentOwner',
        'timing' => 'setTiming'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_message' => 'getCustomMessage',
        'id' => 'getId',
        'promoted_by_content_owner' => 'getPromotedByContentOwner',
        'timing' => 'getTiming'
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
        $this->container['custom_message'] = isset($data['custom_message']) ? $data['custom_message'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['promoted_by_content_owner'] = isset($data['promoted_by_content_owner']) ? $data['promoted_by_content_owner'] : null;
        $this->container['timing'] = isset($data['timing']) ? $data['timing'] : null;
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
     * Gets custom_message
     *
     * @return string
     */
    public function getCustomMessage()
    {
        return $this->container['custom_message'];
    }

    /**
     * Sets custom_message
     *
     * @param string $custom_message A custom message to display for this promotion. This field is currently ignored unless the promoted item is a website.
     *
     * @return $this
     */
    public function setCustomMessage($custom_message)
    {
        $this->container['custom_message'] = $custom_message;

        return $this;
    }

    /**
     * Gets id
     *
     * @return \Swagger\Client\Model\PromotedItemId
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \Swagger\Client\Model\PromotedItemId $id Identifies the promoted item.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets promoted_by_content_owner
     *
     * @return bool
     */
    public function getPromotedByContentOwner()
    {
        return $this->container['promoted_by_content_owner'];
    }

    /**
     * Sets promoted_by_content_owner
     *
     * @param bool $promoted_by_content_owner If true, the content owner's name will be used when displaying the promotion. This field can only be set when the update is made on behalf of the content owner.
     *
     * @return $this
     */
    public function setPromotedByContentOwner($promoted_by_content_owner)
    {
        $this->container['promoted_by_content_owner'] = $promoted_by_content_owner;

        return $this;
    }

    /**
     * Gets timing
     *
     * @return \Swagger\Client\Model\InvideoTiming
     */
    public function getTiming()
    {
        return $this->container['timing'];
    }

    /**
     * Sets timing
     *
     * @param \Swagger\Client\Model\InvideoTiming $timing The temporal position within the video where the promoted item will be displayed. If present, it overrides the default timing.
     *
     * @return $this
     */
    public function setTiming($timing)
    {
        $this->container['timing'] = $timing;

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

