<?php
/**
 * LiveChatUserBannedMessageDetails
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
 * LiveChatUserBannedMessageDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LiveChatUserBannedMessageDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LiveChatUserBannedMessageDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ban_duration_seconds' => 'string',
        'ban_type' => 'string',
        'banned_user_details' => '\Swagger\Client\Model\ChannelProfileDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ban_duration_seconds' => 'uint64',
        'ban_type' => null,
        'banned_user_details' => null
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
        'ban_duration_seconds' => 'banDurationSeconds',
        'ban_type' => 'banType',
        'banned_user_details' => 'bannedUserDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ban_duration_seconds' => 'setBanDurationSeconds',
        'ban_type' => 'setBanType',
        'banned_user_details' => 'setBannedUserDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ban_duration_seconds' => 'getBanDurationSeconds',
        'ban_type' => 'getBanType',
        'banned_user_details' => 'getBannedUserDetails'
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

    const BAN_TYPE_PERMANENT = 'permanent';
    const BAN_TYPE_TEMPORARY = 'temporary';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBanTypeAllowableValues()
    {
        return [
            self::BAN_TYPE_PERMANENT,
            self::BAN_TYPE_TEMPORARY,
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
        $this->container['ban_duration_seconds'] = isset($data['ban_duration_seconds']) ? $data['ban_duration_seconds'] : null;
        $this->container['ban_type'] = isset($data['ban_type']) ? $data['ban_type'] : null;
        $this->container['banned_user_details'] = isset($data['banned_user_details']) ? $data['banned_user_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBanTypeAllowableValues();
        if (!in_array($this->container['ban_type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ban_type', must be one of '%s'",
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

        $allowedValues = $this->getBanTypeAllowableValues();
        if (!in_array($this->container['ban_type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets ban_duration_seconds
     *
     * @return string
     */
    public function getBanDurationSeconds()
    {
        return $this->container['ban_duration_seconds'];
    }

    /**
     * Sets ban_duration_seconds
     *
     * @param string $ban_duration_seconds The duration of the ban. This property is only present if the banType is temporary.
     *
     * @return $this
     */
    public function setBanDurationSeconds($ban_duration_seconds)
    {
        $this->container['ban_duration_seconds'] = $ban_duration_seconds;

        return $this;
    }

    /**
     * Gets ban_type
     *
     * @return string
     */
    public function getBanType()
    {
        return $this->container['ban_type'];
    }

    /**
     * Sets ban_type
     *
     * @param string $ban_type The type of ban.
     *
     * @return $this
     */
    public function setBanType($ban_type)
    {
        $allowedValues = $this->getBanTypeAllowableValues();
        if (!is_null($ban_type) && !in_array($ban_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ban_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ban_type'] = $ban_type;

        return $this;
    }

    /**
     * Gets banned_user_details
     *
     * @return \Swagger\Client\Model\ChannelProfileDetails
     */
    public function getBannedUserDetails()
    {
        return $this->container['banned_user_details'];
    }

    /**
     * Sets banned_user_details
     *
     * @param \Swagger\Client\Model\ChannelProfileDetails $banned_user_details The details of the user that was banned.
     *
     * @return $this
     */
    public function setBannedUserDetails($banned_user_details)
    {
        $this->container['banned_user_details'] = $banned_user_details;

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


