<?php
/**
 * LiveChatSuperChatDetails
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
 * LiveChatSuperChatDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LiveChatSuperChatDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LiveChatSuperChatDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount_display_string' => 'string',
        'amount_micros' => 'string',
        'currency' => 'string',
        'tier' => 'int',
        'user_comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount_display_string' => null,
        'amount_micros' => 'uint64',
        'currency' => null,
        'tier' => 'uint32',
        'user_comment' => null
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
        'amount_display_string' => 'amountDisplayString',
        'amount_micros' => 'amountMicros',
        'currency' => 'currency',
        'tier' => 'tier',
        'user_comment' => 'userComment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_display_string' => 'setAmountDisplayString',
        'amount_micros' => 'setAmountMicros',
        'currency' => 'setCurrency',
        'tier' => 'setTier',
        'user_comment' => 'setUserComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_display_string' => 'getAmountDisplayString',
        'amount_micros' => 'getAmountMicros',
        'currency' => 'getCurrency',
        'tier' => 'getTier',
        'user_comment' => 'getUserComment'
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
        $this->container['amount_display_string'] = isset($data['amount_display_string']) ? $data['amount_display_string'] : null;
        $this->container['amount_micros'] = isset($data['amount_micros']) ? $data['amount_micros'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['user_comment'] = isset($data['user_comment']) ? $data['user_comment'] : null;
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
     * Gets amount_display_string
     *
     * @return string
     */
    public function getAmountDisplayString()
    {
        return $this->container['amount_display_string'];
    }

    /**
     * Sets amount_display_string
     *
     * @param string $amount_display_string A rendered string that displays the fund amount and currency to the user.
     *
     * @return $this
     */
    public function setAmountDisplayString($amount_display_string)
    {
        $this->container['amount_display_string'] = $amount_display_string;

        return $this;
    }

    /**
     * Gets amount_micros
     *
     * @return string
     */
    public function getAmountMicros()
    {
        return $this->container['amount_micros'];
    }

    /**
     * Sets amount_micros
     *
     * @param string $amount_micros The amount purchased by the user, in micros (1,750,000 micros = 1.75).
     *
     * @return $this
     */
    public function setAmountMicros($amount_micros)
    {
        $this->container['amount_micros'] = $amount_micros;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The currency in which the purchase was made.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets tier
     *
     * @return int
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param int $tier The tier in which the amount belongs to. Lower amounts belong to lower tiers. Starts at 1.
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets user_comment
     *
     * @return string
     */
    public function getUserComment()
    {
        return $this->container['user_comment'];
    }

    /**
     * Sets user_comment
     *
     * @param string $user_comment The comment added by the user to this Super Chat event.
     *
     * @return $this
     */
    public function setUserComment($user_comment)
    {
        $this->container['user_comment'] = $user_comment;

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


