<?php
/**
 * VideoSuggestions
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
 * VideoSuggestions Class Doc Comment
 *
 * @category Class
 * @description Specifies suggestions on how to improve video content, including encoding hints, tag suggestions, and editor suggestions.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoSuggestions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoSuggestions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'editor_suggestions' => 'string[]',
        'processing_errors' => 'string[]',
        'processing_hints' => 'string[]',
        'processing_warnings' => 'string[]',
        'tag_suggestions' => '\Swagger\Client\Model\VideoSuggestionsTagSuggestion[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'editor_suggestions' => null,
        'processing_errors' => null,
        'processing_hints' => null,
        'processing_warnings' => null,
        'tag_suggestions' => null
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
        'editor_suggestions' => 'editorSuggestions',
        'processing_errors' => 'processingErrors',
        'processing_hints' => 'processingHints',
        'processing_warnings' => 'processingWarnings',
        'tag_suggestions' => 'tagSuggestions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'editor_suggestions' => 'setEditorSuggestions',
        'processing_errors' => 'setProcessingErrors',
        'processing_hints' => 'setProcessingHints',
        'processing_warnings' => 'setProcessingWarnings',
        'tag_suggestions' => 'setTagSuggestions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'editor_suggestions' => 'getEditorSuggestions',
        'processing_errors' => 'getProcessingErrors',
        'processing_hints' => 'getProcessingHints',
        'processing_warnings' => 'getProcessingWarnings',
        'tag_suggestions' => 'getTagSuggestions'
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

    const EDITOR_SUGGESTIONS_AUDIO_QUIET_AUDIO_SWAP = 'audioQuietAudioSwap';
    const EDITOR_SUGGESTIONS_VIDEO_AUTO_LEVELS = 'videoAutoLevels';
    const EDITOR_SUGGESTIONS_VIDEO_CROP = 'videoCrop';
    const EDITOR_SUGGESTIONS_VIDEO_STABILIZE = 'videoStabilize';
    const PROCESSING_ERRORS_ARCHIVE_FILE = 'archiveFile';
    const PROCESSING_ERRORS_AUDIO_FILE = 'audioFile';
    const PROCESSING_ERRORS_DOC_FILE = 'docFile';
    const PROCESSING_ERRORS_IMAGE_FILE = 'imageFile';
    const PROCESSING_ERRORS_NOT_A_VIDEO_FILE = 'notAVideoFile';
    const PROCESSING_ERRORS_PROJECT_FILE = 'projectFile';
    const PROCESSING_ERRORS_UNSUPPORTED_SPATIAL_AUDIO_LAYOUT = 'unsupportedSpatialAudioLayout';
    const PROCESSING_HINTS_HDR_VIDEO = 'hdrVideo';
    const PROCESSING_HINTS_NON_STREAMABLE_MOV = 'nonStreamableMov';
    const PROCESSING_HINTS_SEND_BEST_QUALITY_VIDEO = 'sendBestQualityVideo';
    const PROCESSING_HINTS_SPATIAL_AUDIO = 'spatialAudio';
    const PROCESSING_HINTS_SPHERICAL_VIDEO = 'sphericalVideo';
    const PROCESSING_HINTS_VR_VIDEO = 'vrVideo';
    const PROCESSING_WARNINGS_HAS_EDITLIST = 'hasEditlist';
    const PROCESSING_WARNINGS_INCONSISTENT_RESOLUTION = 'inconsistentResolution';
    const PROCESSING_WARNINGS_PROBLEMATIC_AUDIO_CODEC = 'problematicAudioCodec';
    const PROCESSING_WARNINGS_PROBLEMATIC_HDR_LOOKUP_TABLE = 'problematicHdrLookupTable';
    const PROCESSING_WARNINGS_PROBLEMATIC_VIDEO_CODEC = 'problematicVideoCodec';
    const PROCESSING_WARNINGS_UNKNOWN_AUDIO_CODEC = 'unknownAudioCodec';
    const PROCESSING_WARNINGS_UNKNOWN_CONTAINER = 'unknownContainer';
    const PROCESSING_WARNINGS_UNKNOWN_VIDEO_CODEC = 'unknownVideoCodec';
    const PROCESSING_WARNINGS_UNSUPPORTED_HDR_COLOR_METADATA = 'unsupportedHdrColorMetadata';
    const PROCESSING_WARNINGS_UNSUPPORTED_HDR_PIXEL_FORMAT = 'unsupportedHdrPixelFormat';
    const PROCESSING_WARNINGS_UNSUPPORTED_SPHERICAL_PROJECTION_TYPE = 'unsupportedSphericalProjectionType';
    const PROCESSING_WARNINGS_UNSUPPORTED_VR_STEREO_MODE = 'unsupportedVrStereoMode';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEditorSuggestionsAllowableValues()
    {
        return [
            self::EDITOR_SUGGESTIONS_AUDIO_QUIET_AUDIO_SWAP,
            self::EDITOR_SUGGESTIONS_VIDEO_AUTO_LEVELS,
            self::EDITOR_SUGGESTIONS_VIDEO_CROP,
            self::EDITOR_SUGGESTIONS_VIDEO_STABILIZE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingErrorsAllowableValues()
    {
        return [
            self::PROCESSING_ERRORS_ARCHIVE_FILE,
            self::PROCESSING_ERRORS_AUDIO_FILE,
            self::PROCESSING_ERRORS_DOC_FILE,
            self::PROCESSING_ERRORS_IMAGE_FILE,
            self::PROCESSING_ERRORS_NOT_A_VIDEO_FILE,
            self::PROCESSING_ERRORS_PROJECT_FILE,
            self::PROCESSING_ERRORS_UNSUPPORTED_SPATIAL_AUDIO_LAYOUT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingHintsAllowableValues()
    {
        return [
            self::PROCESSING_HINTS_HDR_VIDEO,
            self::PROCESSING_HINTS_NON_STREAMABLE_MOV,
            self::PROCESSING_HINTS_SEND_BEST_QUALITY_VIDEO,
            self::PROCESSING_HINTS_SPATIAL_AUDIO,
            self::PROCESSING_HINTS_SPHERICAL_VIDEO,
            self::PROCESSING_HINTS_VR_VIDEO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingWarningsAllowableValues()
    {
        return [
            self::PROCESSING_WARNINGS_HAS_EDITLIST,
            self::PROCESSING_WARNINGS_INCONSISTENT_RESOLUTION,
            self::PROCESSING_WARNINGS_PROBLEMATIC_AUDIO_CODEC,
            self::PROCESSING_WARNINGS_PROBLEMATIC_HDR_LOOKUP_TABLE,
            self::PROCESSING_WARNINGS_PROBLEMATIC_VIDEO_CODEC,
            self::PROCESSING_WARNINGS_UNKNOWN_AUDIO_CODEC,
            self::PROCESSING_WARNINGS_UNKNOWN_CONTAINER,
            self::PROCESSING_WARNINGS_UNKNOWN_VIDEO_CODEC,
            self::PROCESSING_WARNINGS_UNSUPPORTED_HDR_COLOR_METADATA,
            self::PROCESSING_WARNINGS_UNSUPPORTED_HDR_PIXEL_FORMAT,
            self::PROCESSING_WARNINGS_UNSUPPORTED_SPHERICAL_PROJECTION_TYPE,
            self::PROCESSING_WARNINGS_UNSUPPORTED_VR_STEREO_MODE,
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
        $this->container['editor_suggestions'] = isset($data['editor_suggestions']) ? $data['editor_suggestions'] : null;
        $this->container['processing_errors'] = isset($data['processing_errors']) ? $data['processing_errors'] : null;
        $this->container['processing_hints'] = isset($data['processing_hints']) ? $data['processing_hints'] : null;
        $this->container['processing_warnings'] = isset($data['processing_warnings']) ? $data['processing_warnings'] : null;
        $this->container['tag_suggestions'] = isset($data['tag_suggestions']) ? $data['tag_suggestions'] : null;
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
     * Gets editor_suggestions
     *
     * @return string[]
     */
    public function getEditorSuggestions()
    {
        return $this->container['editor_suggestions'];
    }

    /**
     * Sets editor_suggestions
     *
     * @param string[] $editor_suggestions A list of video editing operations that might improve the video quality or playback experience of the uploaded video.
     *
     * @return $this
     */
    public function setEditorSuggestions($editor_suggestions)
    {
        $allowedValues = $this->getEditorSuggestionsAllowableValues();
        if (!is_null($editor_suggestions) && array_diff($editor_suggestions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'editor_suggestions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['editor_suggestions'] = $editor_suggestions;

        return $this;
    }

    /**
     * Gets processing_errors
     *
     * @return string[]
     */
    public function getProcessingErrors()
    {
        return $this->container['processing_errors'];
    }

    /**
     * Sets processing_errors
     *
     * @param string[] $processing_errors A list of errors that will prevent YouTube from successfully processing the uploaded video video. These errors indicate that, regardless of the video's current processing status, eventually, that status will almost certainly be failed.
     *
     * @return $this
     */
    public function setProcessingErrors($processing_errors)
    {
        $allowedValues = $this->getProcessingErrorsAllowableValues();
        if (!is_null($processing_errors) && array_diff($processing_errors, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processing_errors', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_errors'] = $processing_errors;

        return $this;
    }

    /**
     * Gets processing_hints
     *
     * @return string[]
     */
    public function getProcessingHints()
    {
        return $this->container['processing_hints'];
    }

    /**
     * Sets processing_hints
     *
     * @param string[] $processing_hints A list of suggestions that may improve YouTube's ability to process the video.
     *
     * @return $this
     */
    public function setProcessingHints($processing_hints)
    {
        $allowedValues = $this->getProcessingHintsAllowableValues();
        if (!is_null($processing_hints) && array_diff($processing_hints, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processing_hints', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_hints'] = $processing_hints;

        return $this;
    }

    /**
     * Gets processing_warnings
     *
     * @return string[]
     */
    public function getProcessingWarnings()
    {
        return $this->container['processing_warnings'];
    }

    /**
     * Sets processing_warnings
     *
     * @param string[] $processing_warnings A list of reasons why YouTube may have difficulty transcoding the uploaded video or that might result in an erroneous transcoding. These warnings are generated before YouTube actually processes the uploaded video file. In addition, they identify issues that are unlikely to cause the video processing to fail but that might cause problems such as sync issues, video artifacts, or a missing audio track.
     *
     * @return $this
     */
    public function setProcessingWarnings($processing_warnings)
    {
        $allowedValues = $this->getProcessingWarningsAllowableValues();
        if (!is_null($processing_warnings) && array_diff($processing_warnings, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processing_warnings', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_warnings'] = $processing_warnings;

        return $this;
    }

    /**
     * Gets tag_suggestions
     *
     * @return \Swagger\Client\Model\VideoSuggestionsTagSuggestion[]
     */
    public function getTagSuggestions()
    {
        return $this->container['tag_suggestions'];
    }

    /**
     * Sets tag_suggestions
     *
     * @param \Swagger\Client\Model\VideoSuggestionsTagSuggestion[] $tag_suggestions A list of keyword tags that could be added to the video's metadata to increase the likelihood that users will locate your video when searching or browsing on YouTube.
     *
     * @return $this
     */
    public function setTagSuggestions($tag_suggestions)
    {
        $this->container['tag_suggestions'] = $tag_suggestions;

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


