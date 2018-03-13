<?php
/**
 * VideoFileDetailsVideoStream
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
 * VideoFileDetailsVideoStream Class Doc Comment
 *
 * @category Class
 * @description Information about a video stream.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoFileDetailsVideoStream implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoFileDetailsVideoStream';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aspect_ratio' => 'double',
        'bitrate_bps' => 'string',
        'codec' => 'string',
        'frame_rate_fps' => 'double',
        'height_pixels' => 'int',
        'rotation' => 'string',
        'vendor' => 'string',
        'width_pixels' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aspect_ratio' => 'double',
        'bitrate_bps' => 'uint64',
        'codec' => null,
        'frame_rate_fps' => 'double',
        'height_pixels' => 'uint32',
        'rotation' => null,
        'vendor' => null,
        'width_pixels' => 'uint32'
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
        'aspect_ratio' => 'aspectRatio',
        'bitrate_bps' => 'bitrateBps',
        'codec' => 'codec',
        'frame_rate_fps' => 'frameRateFps',
        'height_pixels' => 'heightPixels',
        'rotation' => 'rotation',
        'vendor' => 'vendor',
        'width_pixels' => 'widthPixels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspect_ratio' => 'setAspectRatio',
        'bitrate_bps' => 'setBitrateBps',
        'codec' => 'setCodec',
        'frame_rate_fps' => 'setFrameRateFps',
        'height_pixels' => 'setHeightPixels',
        'rotation' => 'setRotation',
        'vendor' => 'setVendor',
        'width_pixels' => 'setWidthPixels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspect_ratio' => 'getAspectRatio',
        'bitrate_bps' => 'getBitrateBps',
        'codec' => 'getCodec',
        'frame_rate_fps' => 'getFrameRateFps',
        'height_pixels' => 'getHeightPixels',
        'rotation' => 'getRotation',
        'vendor' => 'getVendor',
        'width_pixels' => 'getWidthPixels'
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

    const ROTATION_CLOCKWISE = 'clockwise';
    const ROTATION_COUNTER_CLOCKWISE = 'counterClockwise';
    const ROTATION_NONE = 'none';
    const ROTATION_OTHER = 'other';
    const ROTATION_UPSIDE_DOWN = 'upsideDown';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRotationAllowableValues()
    {
        return [
            self::ROTATION_CLOCKWISE,
            self::ROTATION_COUNTER_CLOCKWISE,
            self::ROTATION_NONE,
            self::ROTATION_OTHER,
            self::ROTATION_UPSIDE_DOWN,
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
        $this->container['aspect_ratio'] = isset($data['aspect_ratio']) ? $data['aspect_ratio'] : null;
        $this->container['bitrate_bps'] = isset($data['bitrate_bps']) ? $data['bitrate_bps'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['frame_rate_fps'] = isset($data['frame_rate_fps']) ? $data['frame_rate_fps'] : null;
        $this->container['height_pixels'] = isset($data['height_pixels']) ? $data['height_pixels'] : null;
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['width_pixels'] = isset($data['width_pixels']) ? $data['width_pixels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRotationAllowableValues();
        if (!in_array($this->container['rotation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rotation', must be one of '%s'",
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

        $allowedValues = $this->getRotationAllowableValues();
        if (!in_array($this->container['rotation'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets aspect_ratio
     *
     * @return double
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /**
     * Sets aspect_ratio
     *
     * @param double $aspect_ratio The video content's display aspect ratio, which specifies the aspect ratio in which the video should be displayed.
     *
     * @return $this
     */
    public function setAspectRatio($aspect_ratio)
    {
        $this->container['aspect_ratio'] = $aspect_ratio;

        return $this;
    }

    /**
     * Gets bitrate_bps
     *
     * @return string
     */
    public function getBitrateBps()
    {
        return $this->container['bitrate_bps'];
    }

    /**
     * Sets bitrate_bps
     *
     * @param string $bitrate_bps The video stream's bitrate, in bits per second.
     *
     * @return $this
     */
    public function setBitrateBps($bitrate_bps)
    {
        $this->container['bitrate_bps'] = $bitrate_bps;

        return $this;
    }

    /**
     * Gets codec
     *
     * @return string
     */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
     * Sets codec
     *
     * @param string $codec The video codec that the stream uses.
     *
     * @return $this
     */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;

        return $this;
    }

    /**
     * Gets frame_rate_fps
     *
     * @return double
     */
    public function getFrameRateFps()
    {
        return $this->container['frame_rate_fps'];
    }

    /**
     * Sets frame_rate_fps
     *
     * @param double $frame_rate_fps The video stream's frame rate, in frames per second.
     *
     * @return $this
     */
    public function setFrameRateFps($frame_rate_fps)
    {
        $this->container['frame_rate_fps'] = $frame_rate_fps;

        return $this;
    }

    /**
     * Gets height_pixels
     *
     * @return int
     */
    public function getHeightPixels()
    {
        return $this->container['height_pixels'];
    }

    /**
     * Sets height_pixels
     *
     * @param int $height_pixels The encoded video content's height in pixels.
     *
     * @return $this
     */
    public function setHeightPixels($height_pixels)
    {
        $this->container['height_pixels'] = $height_pixels;

        return $this;
    }

    /**
     * Gets rotation
     *
     * @return string
     */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
     * Sets rotation
     *
     * @param string $rotation The amount that YouTube needs to rotate the original source content to properly display the video.
     *
     * @return $this
     */
    public function setRotation($rotation)
    {
        $allowedValues = $this->getRotationAllowableValues();
        if (!is_null($rotation) && !in_array($rotation, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rotation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rotation'] = $rotation;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string $vendor A value that uniquely identifies a video vendor. Typically, the value is a four-letter vendor code.
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets width_pixels
     *
     * @return int
     */
    public function getWidthPixels()
    {
        return $this->container['width_pixels'];
    }

    /**
     * Sets width_pixels
     *
     * @param int $width_pixels The encoded video content's width in pixels. You can calculate the video's encoding aspect ratio as width_pixels / height_pixels.
     *
     * @return $this
     */
    public function setWidthPixels($width_pixels)
    {
        $this->container['width_pixels'] = $width_pixels;

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

