<?php
/**
 * Playlist
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
 * Playlist Class Doc Comment
 *
 * @category Class
 * @description A playlist resource represents a YouTube playlist. A playlist is a collection of videos that can be viewed sequentially and shared with other users. A playlist can contain up to 200 videos, and YouTube does not limit the number of playlists that each user creates. By default, playlists are publicly visible to other users, but playlists can be public or private.  YouTube also uses playlists to identify special collections of videos for a channel, such as: - uploaded videos - favorite videos - positively rated (liked) videos - watch history - watch later  To be more specific, these lists are associated with a channel, which is a collection of a person, group, or company&#39;s videos, playlists, and other YouTube information. You can retrieve the playlist IDs for each of these lists from the  channel resource for a given channel.  You can then use the   playlistItems.list method to retrieve any of those lists. You can also add or remove items from those lists by calling the   playlistItems.insert and   playlistItems.delete methods.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Playlist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Playlist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content_details' => '\Swagger\Client\Model\PlaylistContentDetails',
        'etag' => 'string',
        'id' => 'string',
        'kind' => 'string',
        'localizations' => 'map[string,\Swagger\Client\Model\PlaylistLocalization]',
        'player' => '\Swagger\Client\Model\PlaylistPlayer',
        'snippet' => '\Swagger\Client\Model\PlaylistSnippet',
        'status' => '\Swagger\Client\Model\PlaylistStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'content_details' => null,
        'etag' => null,
        'id' => null,
        'kind' => null,
        'localizations' => null,
        'player' => null,
        'snippet' => null,
        'status' => null
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
        'content_details' => 'contentDetails',
        'etag' => 'etag',
        'id' => 'id',
        'kind' => 'kind',
        'localizations' => 'localizations',
        'player' => 'player',
        'snippet' => 'snippet',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_details' => 'setContentDetails',
        'etag' => 'setEtag',
        'id' => 'setId',
        'kind' => 'setKind',
        'localizations' => 'setLocalizations',
        'player' => 'setPlayer',
        'snippet' => 'setSnippet',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_details' => 'getContentDetails',
        'etag' => 'getEtag',
        'id' => 'getId',
        'kind' => 'getKind',
        'localizations' => 'getLocalizations',
        'player' => 'getPlayer',
        'snippet' => 'getSnippet',
        'status' => 'getStatus'
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
        $this->container['content_details'] = isset($data['content_details']) ? $data['content_details'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : 'youtube#playlist';
        $this->container['localizations'] = isset($data['localizations']) ? $data['localizations'] : null;
        $this->container['player'] = isset($data['player']) ? $data['player'] : null;
        $this->container['snippet'] = isset($data['snippet']) ? $data['snippet'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets content_details
     *
     * @return \Swagger\Client\Model\PlaylistContentDetails
     */
    public function getContentDetails()
    {
        return $this->container['content_details'];
    }

    /**
     * Sets content_details
     *
     * @param \Swagger\Client\Model\PlaylistContentDetails $content_details The contentDetails object contains information like video count.
     *
     * @return $this
     */
    public function setContentDetails($content_details)
    {
        $this->container['content_details'] = $content_details;

        return $this;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID that YouTube uses to uniquely identify the playlist.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $kind Identifies what kind of resource this is. Value: the fixed string \"youtube#playlist\".
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets localizations
     *
     * @return map[string,\Swagger\Client\Model\PlaylistLocalization]
     */
    public function getLocalizations()
    {
        return $this->container['localizations'];
    }

    /**
     * Sets localizations
     *
     * @param map[string,\Swagger\Client\Model\PlaylistLocalization] $localizations Localizations for different languages
     *
     * @return $this
     */
    public function setLocalizations($localizations)
    {
        $this->container['localizations'] = $localizations;

        return $this;
    }

    /**
     * Gets player
     *
     * @return \Swagger\Client\Model\PlaylistPlayer
     */
    public function getPlayer()
    {
        return $this->container['player'];
    }

    /**
     * Sets player
     *
     * @param \Swagger\Client\Model\PlaylistPlayer $player The player object contains information that you would use to play the playlist in an embedded player.
     *
     * @return $this
     */
    public function setPlayer($player)
    {
        $this->container['player'] = $player;

        return $this;
    }

    /**
     * Gets snippet
     *
     * @return \Swagger\Client\Model\PlaylistSnippet
     */
    public function getSnippet()
    {
        return $this->container['snippet'];
    }

    /**
     * Sets snippet
     *
     * @param \Swagger\Client\Model\PlaylistSnippet $snippet The snippet object contains basic details about the playlist, such as its title and description.
     *
     * @return $this
     */
    public function setSnippet($snippet)
    {
        $this->container['snippet'] = $snippet;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\PlaylistStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\PlaylistStatus $status The status object contains status information for the playlist.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


