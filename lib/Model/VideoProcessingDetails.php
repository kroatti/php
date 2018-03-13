<?php
/**
 * VideoProcessingDetails
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
 * VideoProcessingDetails Class Doc Comment
 *
 * @category Class
 * @description Describes processing status and progress and availability of some other Video resource parts.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoProcessingDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoProcessingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'editor_suggestions_availability' => 'string',
        'file_details_availability' => 'string',
        'processing_failure_reason' => 'string',
        'processing_issues_availability' => 'string',
        'processing_progress' => '\Swagger\Client\Model\VideoProcessingDetailsProcessingProgress',
        'processing_status' => 'string',
        'tag_suggestions_availability' => 'string',
        'thumbnails_availability' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'editor_suggestions_availability' => null,
        'file_details_availability' => null,
        'processing_failure_reason' => null,
        'processing_issues_availability' => null,
        'processing_progress' => null,
        'processing_status' => null,
        'tag_suggestions_availability' => null,
        'thumbnails_availability' => null
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
        'editor_suggestions_availability' => 'editorSuggestionsAvailability',
        'file_details_availability' => 'fileDetailsAvailability',
        'processing_failure_reason' => 'processingFailureReason',
        'processing_issues_availability' => 'processingIssuesAvailability',
        'processing_progress' => 'processingProgress',
        'processing_status' => 'processingStatus',
        'tag_suggestions_availability' => 'tagSuggestionsAvailability',
        'thumbnails_availability' => 'thumbnailsAvailability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'editor_suggestions_availability' => 'setEditorSuggestionsAvailability',
        'file_details_availability' => 'setFileDetailsAvailability',
        'processing_failure_reason' => 'setProcessingFailureReason',
        'processing_issues_availability' => 'setProcessingIssuesAvailability',
        'processing_progress' => 'setProcessingProgress',
        'processing_status' => 'setProcessingStatus',
        'tag_suggestions_availability' => 'setTagSuggestionsAvailability',
        'thumbnails_availability' => 'setThumbnailsAvailability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'editor_suggestions_availability' => 'getEditorSuggestionsAvailability',
        'file_details_availability' => 'getFileDetailsAvailability',
        'processing_failure_reason' => 'getProcessingFailureReason',
        'processing_issues_availability' => 'getProcessingIssuesAvailability',
        'processing_progress' => 'getProcessingProgress',
        'processing_status' => 'getProcessingStatus',
        'tag_suggestions_availability' => 'getTagSuggestionsAvailability',
        'thumbnails_availability' => 'getThumbnailsAvailability'
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

    const PROCESSING_FAILURE_REASON_OTHER = 'other';
    const PROCESSING_FAILURE_REASON_STREAMING_FAILED = 'streamingFailed';
    const PROCESSING_FAILURE_REASON_TRANSCODE_FAILED = 'transcodeFailed';
    const PROCESSING_FAILURE_REASON_UPLOAD_FAILED = 'uploadFailed';
    const PROCESSING_STATUS_FAILED = 'failed';
    const PROCESSING_STATUS_PROCESSING = 'processing';
    const PROCESSING_STATUS_SUCCEEDED = 'succeeded';
    const PROCESSING_STATUS_TERMINATED = 'terminated';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingFailureReasonAllowableValues()
    {
        return [
            self::PROCESSING_FAILURE_REASON_OTHER,
            self::PROCESSING_FAILURE_REASON_STREAMING_FAILED,
            self::PROCESSING_FAILURE_REASON_TRANSCODE_FAILED,
            self::PROCESSING_FAILURE_REASON_UPLOAD_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues()
    {
        return [
            self::PROCESSING_STATUS_FAILED,
            self::PROCESSING_STATUS_PROCESSING,
            self::PROCESSING_STATUS_SUCCEEDED,
            self::PROCESSING_STATUS_TERMINATED,
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
        $this->container['editor_suggestions_availability'] = isset($data['editor_suggestions_availability']) ? $data['editor_suggestions_availability'] : null;
        $this->container['file_details_availability'] = isset($data['file_details_availability']) ? $data['file_details_availability'] : null;
        $this->container['processing_failure_reason'] = isset($data['processing_failure_reason']) ? $data['processing_failure_reason'] : null;
        $this->container['processing_issues_availability'] = isset($data['processing_issues_availability']) ? $data['processing_issues_availability'] : null;
        $this->container['processing_progress'] = isset($data['processing_progress']) ? $data['processing_progress'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['tag_suggestions_availability'] = isset($data['tag_suggestions_availability']) ? $data['tag_suggestions_availability'] : null;
        $this->container['thumbnails_availability'] = isset($data['thumbnails_availability']) ? $data['thumbnails_availability'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProcessingFailureReasonAllowableValues();
        if (!in_array($this->container['processing_failure_reason'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'processing_failure_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!in_array($this->container['processing_status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'processing_status', must be one of '%s'",
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

        $allowedValues = $this->getProcessingFailureReasonAllowableValues();
        if (!in_array($this->container['processing_failure_reason'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!in_array($this->container['processing_status'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets editor_suggestions_availability
     *
     * @return string
     */
    public function getEditorSuggestionsAvailability()
    {
        return $this->container['editor_suggestions_availability'];
    }

    /**
     * Sets editor_suggestions_availability
     *
     * @param string $editor_suggestions_availability This value indicates whether video editing suggestions, which might improve video quality or the playback experience, are available for the video. You can retrieve these suggestions by requesting the suggestions part in your videos.list() request.
     *
     * @return $this
     */
    public function setEditorSuggestionsAvailability($editor_suggestions_availability)
    {
        $this->container['editor_suggestions_availability'] = $editor_suggestions_availability;

        return $this;
    }

    /**
     * Gets file_details_availability
     *
     * @return string
     */
    public function getFileDetailsAvailability()
    {
        return $this->container['file_details_availability'];
    }

    /**
     * Sets file_details_availability
     *
     * @param string $file_details_availability This value indicates whether file details are available for the uploaded video. You can retrieve a video's file details by requesting the fileDetails part in your videos.list() request.
     *
     * @return $this
     */
    public function setFileDetailsAvailability($file_details_availability)
    {
        $this->container['file_details_availability'] = $file_details_availability;

        return $this;
    }

    /**
     * Gets processing_failure_reason
     *
     * @return string
     */
    public function getProcessingFailureReason()
    {
        return $this->container['processing_failure_reason'];
    }

    /**
     * Sets processing_failure_reason
     *
     * @param string $processing_failure_reason The reason that YouTube failed to process the video. This property will only have a value if the processingStatus property's value is failed.
     *
     * @return $this
     */
    public function setProcessingFailureReason($processing_failure_reason)
    {
        $allowedValues = $this->getProcessingFailureReasonAllowableValues();
        if (!is_null($processing_failure_reason) && !in_array($processing_failure_reason, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processing_failure_reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_failure_reason'] = $processing_failure_reason;

        return $this;
    }

    /**
     * Gets processing_issues_availability
     *
     * @return string
     */
    public function getProcessingIssuesAvailability()
    {
        return $this->container['processing_issues_availability'];
    }

    /**
     * Sets processing_issues_availability
     *
     * @param string $processing_issues_availability This value indicates whether the video processing engine has generated suggestions that might improve YouTube's ability to process the the video, warnings that explain video processing problems, or errors that cause video processing problems. You can retrieve these suggestions by requesting the suggestions part in your videos.list() request.
     *
     * @return $this
     */
    public function setProcessingIssuesAvailability($processing_issues_availability)
    {
        $this->container['processing_issues_availability'] = $processing_issues_availability;

        return $this;
    }

    /**
     * Gets processing_progress
     *
     * @return \Swagger\Client\Model\VideoProcessingDetailsProcessingProgress
     */
    public function getProcessingProgress()
    {
        return $this->container['processing_progress'];
    }

    /**
     * Sets processing_progress
     *
     * @param \Swagger\Client\Model\VideoProcessingDetailsProcessingProgress $processing_progress The processingProgress object contains information about the progress YouTube has made in processing the video. The values are really only relevant if the video's processing status is processing.
     *
     * @return $this
     */
    public function setProcessingProgress($processing_progress)
    {
        $this->container['processing_progress'] = $processing_progress;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param string $processing_status The video's processing status. This value indicates whether YouTube was able to process the video or if the video is still being processed.
     *
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($processing_status) && !in_array($processing_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'processing_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets tag_suggestions_availability
     *
     * @return string
     */
    public function getTagSuggestionsAvailability()
    {
        return $this->container['tag_suggestions_availability'];
    }

    /**
     * Sets tag_suggestions_availability
     *
     * @param string $tag_suggestions_availability This value indicates whether keyword (tag) suggestions are available for the video. Tags can be added to a video's metadata to make it easier for other users to find the video. You can retrieve these suggestions by requesting the suggestions part in your videos.list() request.
     *
     * @return $this
     */
    public function setTagSuggestionsAvailability($tag_suggestions_availability)
    {
        $this->container['tag_suggestions_availability'] = $tag_suggestions_availability;

        return $this;
    }

    /**
     * Gets thumbnails_availability
     *
     * @return string
     */
    public function getThumbnailsAvailability()
    {
        return $this->container['thumbnails_availability'];
    }

    /**
     * Sets thumbnails_availability
     *
     * @param string $thumbnails_availability This value indicates whether thumbnail images have been generated for the video.
     *
     * @return $this
     */
    public function setThumbnailsAvailability($thumbnails_availability)
    {
        $this->container['thumbnails_availability'] = $thumbnails_availability;

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


