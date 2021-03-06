<?php
/**
 * ChannelAuditDetails
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
 * ChannelAuditDetails Class Doc Comment
 *
 * @category Class
 * @description The auditDetails object encapsulates channel data that is relevant for YouTube Partners during the audit process.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelAuditDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelAuditDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'community_guidelines_good_standing' => 'bool',
        'content_id_claims_good_standing' => 'bool',
        'copyright_strikes_good_standing' => 'bool',
        'overall_good_standing' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'community_guidelines_good_standing' => null,
        'content_id_claims_good_standing' => null,
        'copyright_strikes_good_standing' => null,
        'overall_good_standing' => null
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
        'community_guidelines_good_standing' => 'communityGuidelinesGoodStanding',
        'content_id_claims_good_standing' => 'contentIdClaimsGoodStanding',
        'copyright_strikes_good_standing' => 'copyrightStrikesGoodStanding',
        'overall_good_standing' => 'overallGoodStanding'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'community_guidelines_good_standing' => 'setCommunityGuidelinesGoodStanding',
        'content_id_claims_good_standing' => 'setContentIdClaimsGoodStanding',
        'copyright_strikes_good_standing' => 'setCopyrightStrikesGoodStanding',
        'overall_good_standing' => 'setOverallGoodStanding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'community_guidelines_good_standing' => 'getCommunityGuidelinesGoodStanding',
        'content_id_claims_good_standing' => 'getContentIdClaimsGoodStanding',
        'copyright_strikes_good_standing' => 'getCopyrightStrikesGoodStanding',
        'overall_good_standing' => 'getOverallGoodStanding'
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
        $this->container['community_guidelines_good_standing'] = isset($data['community_guidelines_good_standing']) ? $data['community_guidelines_good_standing'] : null;
        $this->container['content_id_claims_good_standing'] = isset($data['content_id_claims_good_standing']) ? $data['content_id_claims_good_standing'] : null;
        $this->container['copyright_strikes_good_standing'] = isset($data['copyright_strikes_good_standing']) ? $data['copyright_strikes_good_standing'] : null;
        $this->container['overall_good_standing'] = isset($data['overall_good_standing']) ? $data['overall_good_standing'] : null;
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
     * Gets community_guidelines_good_standing
     *
     * @return bool
     */
    public function getCommunityGuidelinesGoodStanding()
    {
        return $this->container['community_guidelines_good_standing'];
    }

    /**
     * Sets community_guidelines_good_standing
     *
     * @param bool $community_guidelines_good_standing Whether or not the channel respects the community guidelines.
     *
     * @return $this
     */
    public function setCommunityGuidelinesGoodStanding($community_guidelines_good_standing)
    {
        $this->container['community_guidelines_good_standing'] = $community_guidelines_good_standing;

        return $this;
    }

    /**
     * Gets content_id_claims_good_standing
     *
     * @return bool
     */
    public function getContentIdClaimsGoodStanding()
    {
        return $this->container['content_id_claims_good_standing'];
    }

    /**
     * Sets content_id_claims_good_standing
     *
     * @param bool $content_id_claims_good_standing Whether or not the channel has any unresolved claims.
     *
     * @return $this
     */
    public function setContentIdClaimsGoodStanding($content_id_claims_good_standing)
    {
        $this->container['content_id_claims_good_standing'] = $content_id_claims_good_standing;

        return $this;
    }

    /**
     * Gets copyright_strikes_good_standing
     *
     * @return bool
     */
    public function getCopyrightStrikesGoodStanding()
    {
        return $this->container['copyright_strikes_good_standing'];
    }

    /**
     * Sets copyright_strikes_good_standing
     *
     * @param bool $copyright_strikes_good_standing Whether or not the channel has any copyright strikes.
     *
     * @return $this
     */
    public function setCopyrightStrikesGoodStanding($copyright_strikes_good_standing)
    {
        $this->container['copyright_strikes_good_standing'] = $copyright_strikes_good_standing;

        return $this;
    }

    /**
     * Gets overall_good_standing
     *
     * @return bool
     */
    public function getOverallGoodStanding()
    {
        return $this->container['overall_good_standing'];
    }

    /**
     * Sets overall_good_standing
     *
     * @param bool $overall_good_standing Describes the general state of the channel. This field will always show if there are any issues whatsoever with the channel. Currently this field represents the result of the logical and operation over the community guidelines good standing, the copyright strikes good standing and the content ID claims good standing, but this may change in the future.
     *
     * @return $this
     */
    public function setOverallGoodStanding($overall_good_standing)
    {
        $this->container['overall_good_standing'] = $overall_good_standing;

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


