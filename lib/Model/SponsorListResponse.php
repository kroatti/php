<?php
/**
 * SponsorListResponse
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
 * SponsorListResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SponsorListResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SponsorListResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'etag' => 'string',
        'event_id' => 'string',
        'items' => '\Swagger\Client\Model\Sponsor[]',
        'kind' => 'string',
        'next_page_token' => 'string',
        'page_info' => '\Swagger\Client\Model\PageInfo',
        'token_pagination' => '\Swagger\Client\Model\TokenPagination',
        'visitor_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'etag' => null,
        'event_id' => null,
        'items' => null,
        'kind' => null,
        'next_page_token' => null,
        'page_info' => null,
        'token_pagination' => null,
        'visitor_id' => null
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
        'etag' => 'etag',
        'event_id' => 'eventId',
        'items' => 'items',
        'kind' => 'kind',
        'next_page_token' => 'nextPageToken',
        'page_info' => 'pageInfo',
        'token_pagination' => 'tokenPagination',
        'visitor_id' => 'visitorId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'etag' => 'setEtag',
        'event_id' => 'setEventId',
        'items' => 'setItems',
        'kind' => 'setKind',
        'next_page_token' => 'setNextPageToken',
        'page_info' => 'setPageInfo',
        'token_pagination' => 'setTokenPagination',
        'visitor_id' => 'setVisitorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'etag' => 'getEtag',
        'event_id' => 'getEventId',
        'items' => 'getItems',
        'kind' => 'getKind',
        'next_page_token' => 'getNextPageToken',
        'page_info' => 'getPageInfo',
        'token_pagination' => 'getTokenPagination',
        'visitor_id' => 'getVisitorId'
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
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : 'youtube#sponsorListResponse';
        $this->container['next_page_token'] = isset($data['next_page_token']) ? $data['next_page_token'] : null;
        $this->container['page_info'] = isset($data['page_info']) ? $data['page_info'] : null;
        $this->container['token_pagination'] = isset($data['token_pagination']) ? $data['token_pagination'] : null;
        $this->container['visitor_id'] = isset($data['visitor_id']) ? $data['visitor_id'] : null;
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
     * Gets etag
     *
     * @return string
     */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
     * Sets etag
     *
     * @param string $etag Etag of this resource.
     *
     * @return $this
     */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string $event_id Serialized EventId of the request which produced this response.
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\Sponsor[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\Sponsor[] $items A list of sponsors that match the request criteria.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind Identifies what kind of resource this is. Value: the fixed string \"youtube#sponsorListResponse\".
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets next_page_token
     *
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->container['next_page_token'];
    }

    /**
     * Sets next_page_token
     *
     * @param string $next_page_token The token that can be used as the value of the pageToken parameter to retrieve the next page in the result set.
     *
     * @return $this
     */
    public function setNextPageToken($next_page_token)
    {
        $this->container['next_page_token'] = $next_page_token;

        return $this;
    }

    /**
     * Gets page_info
     *
     * @return \Swagger\Client\Model\PageInfo
     */
    public function getPageInfo()
    {
        return $this->container['page_info'];
    }

    /**
     * Sets page_info
     *
     * @param \Swagger\Client\Model\PageInfo $page_info page_info
     *
     * @return $this
     */
    public function setPageInfo($page_info)
    {
        $this->container['page_info'] = $page_info;

        return $this;
    }

    /**
     * Gets token_pagination
     *
     * @return \Swagger\Client\Model\TokenPagination
     */
    public function getTokenPagination()
    {
        return $this->container['token_pagination'];
    }

    /**
     * Sets token_pagination
     *
     * @param \Swagger\Client\Model\TokenPagination $token_pagination token_pagination
     *
     * @return $this
     */
    public function setTokenPagination($token_pagination)
    {
        $this->container['token_pagination'] = $token_pagination;

        return $this;
    }

    /**
     * Gets visitor_id
     *
     * @return string
     */
    public function getVisitorId()
    {
        return $this->container['visitor_id'];
    }

    /**
     * Sets visitor_id
     *
     * @param string $visitor_id The visitorId identifies the visitor.
     *
     * @return $this
     */
    public function setVisitorId($visitor_id)
    {
        $this->container['visitor_id'] = $visitor_id;

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


