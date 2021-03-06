<?php
/**
 * CommentThreadSnippet
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
 * CommentThreadSnippet Class Doc Comment
 *
 * @category Class
 * @description Basic details about a comment thread.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommentThreadSnippet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommentThreadSnippet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_reply' => 'bool',
        'channel_id' => 'string',
        'is_public' => 'bool',
        'top_level_comment' => '\Swagger\Client\Model\Comment',
        'total_reply_count' => 'int',
        'video_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can_reply' => null,
        'channel_id' => null,
        'is_public' => null,
        'top_level_comment' => null,
        'total_reply_count' => 'uint32',
        'video_id' => null
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
        'can_reply' => 'canReply',
        'channel_id' => 'channelId',
        'is_public' => 'isPublic',
        'top_level_comment' => 'topLevelComment',
        'total_reply_count' => 'totalReplyCount',
        'video_id' => 'videoId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_reply' => 'setCanReply',
        'channel_id' => 'setChannelId',
        'is_public' => 'setIsPublic',
        'top_level_comment' => 'setTopLevelComment',
        'total_reply_count' => 'setTotalReplyCount',
        'video_id' => 'setVideoId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_reply' => 'getCanReply',
        'channel_id' => 'getChannelId',
        'is_public' => 'getIsPublic',
        'top_level_comment' => 'getTopLevelComment',
        'total_reply_count' => 'getTotalReplyCount',
        'video_id' => 'getVideoId'
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
        $this->container['can_reply'] = isset($data['can_reply']) ? $data['can_reply'] : null;
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['top_level_comment'] = isset($data['top_level_comment']) ? $data['top_level_comment'] : null;
        $this->container['total_reply_count'] = isset($data['total_reply_count']) ? $data['total_reply_count'] : null;
        $this->container['video_id'] = isset($data['video_id']) ? $data['video_id'] : null;
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
     * Gets can_reply
     *
     * @return bool
     */
    public function getCanReply()
    {
        return $this->container['can_reply'];
    }

    /**
     * Sets can_reply
     *
     * @param bool $can_reply Whether the current viewer of the thread can reply to it. This is viewer specific - other viewers may see a different value for this field.
     *
     * @return $this
     */
    public function setCanReply($can_reply)
    {
        $this->container['can_reply'] = $can_reply;

        return $this;
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
     * @param string $channel_id The YouTube channel the comments in the thread refer to or the channel with the video the comments refer to. If video_id isn't set the comments refer to the channel itself.
     *
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool $is_public Whether the thread (and therefore all its comments) is visible to all YouTube users.
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets top_level_comment
     *
     * @return \Swagger\Client\Model\Comment
     */
    public function getTopLevelComment()
    {
        return $this->container['top_level_comment'];
    }

    /**
     * Sets top_level_comment
     *
     * @param \Swagger\Client\Model\Comment $top_level_comment The top level comment of this thread.
     *
     * @return $this
     */
    public function setTopLevelComment($top_level_comment)
    {
        $this->container['top_level_comment'] = $top_level_comment;

        return $this;
    }

    /**
     * Gets total_reply_count
     *
     * @return int
     */
    public function getTotalReplyCount()
    {
        return $this->container['total_reply_count'];
    }

    /**
     * Sets total_reply_count
     *
     * @param int $total_reply_count The total number of replies (not including the top level comment).
     *
     * @return $this
     */
    public function setTotalReplyCount($total_reply_count)
    {
        $this->container['total_reply_count'] = $total_reply_count;

        return $this;
    }

    /**
     * Gets video_id
     *
     * @return string
     */
    public function getVideoId()
    {
        return $this->container['video_id'];
    }

    /**
     * Sets video_id
     *
     * @param string $video_id The ID of the video the comments refer to, if any. No video_id implies a channel discussion comment.
     *
     * @return $this
     */
    public function setVideoId($video_id)
    {
        $this->container['video_id'] = $video_id;

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


