<?php
/**
 * ChannelSectionSnippet
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
 * ChannelSectionSnippet Class Doc Comment
 *
 * @category Class
 * @description Basic details about a channel section, including title, style and position.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelSectionSnippet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelSectionSnippet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel_id' => 'string',
        'default_language' => 'string',
        'localized' => '\Swagger\Client\Model\ChannelSectionLocalization',
        'position' => 'int',
        'style' => 'string',
        'title' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel_id' => null,
        'default_language' => null,
        'localized' => null,
        'position' => 'uint32',
        'style' => null,
        'title' => null,
        'type' => null
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
        'channel_id' => 'channelId',
        'default_language' => 'defaultLanguage',
        'localized' => 'localized',
        'position' => 'position',
        'style' => 'style',
        'title' => 'title',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_id' => 'setChannelId',
        'default_language' => 'setDefaultLanguage',
        'localized' => 'setLocalized',
        'position' => 'setPosition',
        'style' => 'setStyle',
        'title' => 'setTitle',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_id' => 'getChannelId',
        'default_language' => 'getDefaultLanguage',
        'localized' => 'getLocalized',
        'position' => 'getPosition',
        'style' => 'getStyle',
        'title' => 'getTitle',
        'type' => 'getType'
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

    const STYLE_CHANNELSECTION_STYLE_UNDEFINED = 'channelsectionStyleUndefined';
    const STYLE_HORIZONTAL_ROW = 'horizontalRow';
    const STYLE_VERTICAL_LIST = 'verticalList';
    const TYPE_ALL_PLAYLISTS = 'allPlaylists';
    const TYPE_CHANNELSECTION_TYPE_UNDEFINED = 'channelsectionTypeUndefined';
    const TYPE_COMPLETED_EVENTS = 'completedEvents';
    const TYPE_LIKED_PLAYLISTS = 'likedPlaylists';
    const TYPE_LIKES = 'likes';
    const TYPE_LIVE_EVENTS = 'liveEvents';
    const TYPE_MULTIPLE_CHANNELS = 'multipleChannels';
    const TYPE_MULTIPLE_PLAYLISTS = 'multiplePlaylists';
    const TYPE_POPULAR_UPLOADS = 'popularUploads';
    const TYPE_POSTED_PLAYLISTS = 'postedPlaylists';
    const TYPE_POSTED_VIDEOS = 'postedVideos';
    const TYPE_RECENT_ACTIVITY = 'recentActivity';
    const TYPE_RECENT_POSTS = 'recentPosts';
    const TYPE_RECENT_UPLOADS = 'recentUploads';
    const TYPE_SINGLE_PLAYLIST = 'singlePlaylist';
    const TYPE_SUBSCRIPTIONS = 'subscriptions';
    const TYPE_UPCOMING_EVENTS = 'upcomingEvents';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_CHANNELSECTION_STYLE_UNDEFINED,
            self::STYLE_HORIZONTAL_ROW,
            self::STYLE_VERTICAL_LIST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ALL_PLAYLISTS,
            self::TYPE_CHANNELSECTION_TYPE_UNDEFINED,
            self::TYPE_COMPLETED_EVENTS,
            self::TYPE_LIKED_PLAYLISTS,
            self::TYPE_LIKES,
            self::TYPE_LIVE_EVENTS,
            self::TYPE_MULTIPLE_CHANNELS,
            self::TYPE_MULTIPLE_PLAYLISTS,
            self::TYPE_POPULAR_UPLOADS,
            self::TYPE_POSTED_PLAYLISTS,
            self::TYPE_POSTED_VIDEOS,
            self::TYPE_RECENT_ACTIVITY,
            self::TYPE_RECENT_POSTS,
            self::TYPE_RECENT_UPLOADS,
            self::TYPE_SINGLE_PLAYLIST,
            self::TYPE_SUBSCRIPTIONS,
            self::TYPE_UPCOMING_EVENTS,
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
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['default_language'] = isset($data['default_language']) ? $data['default_language'] : null;
        $this->container['localized'] = isset($data['localized']) ? $data['localized'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($this->container['style'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'style', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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

        $allowedValues = $this->getStyleAllowableValues();
        if (!in_array($this->container['style'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel_id
     *
     * @return string
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     *
     * @param string $channel_id The ID that YouTube uses to uniquely identify the channel that published the channel section.
     *
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets default_language
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->container['default_language'];
    }

    /**
     * Sets default_language
     *
     * @param string $default_language The language of the channel section's default title and description.
     *
     * @return $this
     */
    public function setDefaultLanguage($default_language)
    {
        $this->container['default_language'] = $default_language;

        return $this;
    }

    /**
     * Gets localized
     *
     * @return \Swagger\Client\Model\ChannelSectionLocalization
     */
    public function getLocalized()
    {
        return $this->container['localized'];
    }

    /**
     * Sets localized
     *
     * @param \Swagger\Client\Model\ChannelSectionLocalization $localized Localized title, read-only.
     *
     * @return $this
     */
    public function setLocalized($localized)
    {
        $this->container['localized'] = $localized;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position The position of the channel section in the channel.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string $style The style of the channel section.
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $allowedValues = $this->getStyleAllowableValues();
        if (!is_null($style) && !in_array($style, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'style', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The channel section's title for multiple_playlists and multiple_channels.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the channel section.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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

