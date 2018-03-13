<?php
/**
 * VideoStatus
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
 * VideoStatus Class Doc Comment
 *
 * @category Class
 * @description Basic details about a video category, such as its localized title.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VideoStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VideoStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'embeddable' => 'bool',
        'failure_reason' => 'string',
        'license' => 'string',
        'privacy_status' => 'string',
        'public_stats_viewable' => 'bool',
        'publish_at' => '\DateTime',
        'rejection_reason' => 'string',
        'upload_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'embeddable' => null,
        'failure_reason' => null,
        'license' => null,
        'privacy_status' => null,
        'public_stats_viewable' => null,
        'publish_at' => 'date-time',
        'rejection_reason' => null,
        'upload_status' => null
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
        'embeddable' => 'embeddable',
        'failure_reason' => 'failureReason',
        'license' => 'license',
        'privacy_status' => 'privacyStatus',
        'public_stats_viewable' => 'publicStatsViewable',
        'publish_at' => 'publishAt',
        'rejection_reason' => 'rejectionReason',
        'upload_status' => 'uploadStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'embeddable' => 'setEmbeddable',
        'failure_reason' => 'setFailureReason',
        'license' => 'setLicense',
        'privacy_status' => 'setPrivacyStatus',
        'public_stats_viewable' => 'setPublicStatsViewable',
        'publish_at' => 'setPublishAt',
        'rejection_reason' => 'setRejectionReason',
        'upload_status' => 'setUploadStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'embeddable' => 'getEmbeddable',
        'failure_reason' => 'getFailureReason',
        'license' => 'getLicense',
        'privacy_status' => 'getPrivacyStatus',
        'public_stats_viewable' => 'getPublicStatsViewable',
        'publish_at' => 'getPublishAt',
        'rejection_reason' => 'getRejectionReason',
        'upload_status' => 'getUploadStatus'
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

    const FAILURE_REASON_CODEC = 'codec';
    const FAILURE_REASON_CONVERSION = 'conversion';
    const FAILURE_REASON_EMPTY_FILE = 'emptyFile';
    const FAILURE_REASON_INVALID_FILE = 'invalidFile';
    const FAILURE_REASON_TOO_SMALL = 'tooSmall';
    const FAILURE_REASON_UPLOAD_ABORTED = 'uploadAborted';
    const LICENSE_CREATIVE_COMMON = 'creativeCommon';
    const LICENSE_YOUTUBE = 'youtube';
    const PRIVACY_STATUS__PRIVATE = 'private';
    const PRIVACY_STATUS__PUBLIC = 'public';
    const PRIVACY_STATUS_UNLISTED = 'unlisted';
    const REJECTION_REASON_CLAIM = 'claim';
    const REJECTION_REASON_COPYRIGHT = 'copyright';
    const REJECTION_REASON_DUPLICATE = 'duplicate';
    const REJECTION_REASON_INAPPROPRIATE = 'inappropriate';
    const REJECTION_REASON_LEGAL = 'legal';
    const REJECTION_REASON_LENGTH = 'length';
    const REJECTION_REASON_TERMS_OF_USE = 'termsOfUse';
    const REJECTION_REASON_TRADEMARK = 'trademark';
    const REJECTION_REASON_UPLOADER_ACCOUNT_CLOSED = 'uploaderAccountClosed';
    const REJECTION_REASON_UPLOADER_ACCOUNT_SUSPENDED = 'uploaderAccountSuspended';
    const UPLOAD_STATUS_DELETED = 'deleted';
    const UPLOAD_STATUS_FAILED = 'failed';
    const UPLOAD_STATUS_PROCESSED = 'processed';
    const UPLOAD_STATUS_REJECTED = 'rejected';
    const UPLOAD_STATUS_UPLOADED = 'uploaded';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFailureReasonAllowableValues()
    {
        return [
            self::FAILURE_REASON_CODEC,
            self::FAILURE_REASON_CONVERSION,
            self::FAILURE_REASON_EMPTY_FILE,
            self::FAILURE_REASON_INVALID_FILE,
            self::FAILURE_REASON_TOO_SMALL,
            self::FAILURE_REASON_UPLOAD_ABORTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLicenseAllowableValues()
    {
        return [
            self::LICENSE_CREATIVE_COMMON,
            self::LICENSE_YOUTUBE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrivacyStatusAllowableValues()
    {
        return [
            self::PRIVACY_STATUS__PRIVATE,
            self::PRIVACY_STATUS__PUBLIC,
            self::PRIVACY_STATUS_UNLISTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRejectionReasonAllowableValues()
    {
        return [
            self::REJECTION_REASON_CLAIM,
            self::REJECTION_REASON_COPYRIGHT,
            self::REJECTION_REASON_DUPLICATE,
            self::REJECTION_REASON_INAPPROPRIATE,
            self::REJECTION_REASON_LEGAL,
            self::REJECTION_REASON_LENGTH,
            self::REJECTION_REASON_TERMS_OF_USE,
            self::REJECTION_REASON_TRADEMARK,
            self::REJECTION_REASON_UPLOADER_ACCOUNT_CLOSED,
            self::REJECTION_REASON_UPLOADER_ACCOUNT_SUSPENDED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUploadStatusAllowableValues()
    {
        return [
            self::UPLOAD_STATUS_DELETED,
            self::UPLOAD_STATUS_FAILED,
            self::UPLOAD_STATUS_PROCESSED,
            self::UPLOAD_STATUS_REJECTED,
            self::UPLOAD_STATUS_UPLOADED,
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
        $this->container['embeddable'] = isset($data['embeddable']) ? $data['embeddable'] : null;
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
        $this->container['privacy_status'] = isset($data['privacy_status']) ? $data['privacy_status'] : null;
        $this->container['public_stats_viewable'] = isset($data['public_stats_viewable']) ? $data['public_stats_viewable'] : null;
        $this->container['publish_at'] = isset($data['publish_at']) ? $data['publish_at'] : null;
        $this->container['rejection_reason'] = isset($data['rejection_reason']) ? $data['rejection_reason'] : null;
        $this->container['upload_status'] = isset($data['upload_status']) ? $data['upload_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFailureReasonAllowableValues();
        if (!in_array($this->container['failure_reason'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'failure_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLicenseAllowableValues();
        if (!in_array($this->container['license'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'license', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPrivacyStatusAllowableValues();
        if (!in_array($this->container['privacy_status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'privacy_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (!in_array($this->container['rejection_reason'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rejection_reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUploadStatusAllowableValues();
        if (!in_array($this->container['upload_status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'upload_status', must be one of '%s'",
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

        $allowedValues = $this->getFailureReasonAllowableValues();
        if (!in_array($this->container['failure_reason'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getLicenseAllowableValues();
        if (!in_array($this->container['license'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPrivacyStatusAllowableValues();
        if (!in_array($this->container['privacy_status'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (!in_array($this->container['rejection_reason'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getUploadStatusAllowableValues();
        if (!in_array($this->container['upload_status'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets embeddable
     *
     * @return bool
     */
    public function getEmbeddable()
    {
        return $this->container['embeddable'];
    }

    /**
     * Sets embeddable
     *
     * @param bool $embeddable This value indicates if the video can be embedded on another website.
     *
     * @return $this
     */
    public function setEmbeddable($embeddable)
    {
        $this->container['embeddable'] = $embeddable;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return string
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param string $failure_reason This value explains why a video failed to upload. This property is only present if the uploadStatus property indicates that the upload failed.
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $allowedValues = $this->getFailureReasonAllowableValues();
        if (!is_null($failure_reason) && !in_array($failure_reason, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'failure_reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param string $license The video's license.
     *
     * @return $this
     */
    public function setLicense($license)
    {
        $allowedValues = $this->getLicenseAllowableValues();
        if (!is_null($license) && !in_array($license, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'license', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets privacy_status
     *
     * @return string
     */
    public function getPrivacyStatus()
    {
        return $this->container['privacy_status'];
    }

    /**
     * Sets privacy_status
     *
     * @param string $privacy_status The video's privacy status.
     *
     * @return $this
     */
    public function setPrivacyStatus($privacy_status)
    {
        $allowedValues = $this->getPrivacyStatusAllowableValues();
        if (!is_null($privacy_status) && !in_array($privacy_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'privacy_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['privacy_status'] = $privacy_status;

        return $this;
    }

    /**
     * Gets public_stats_viewable
     *
     * @return bool
     */
    public function getPublicStatsViewable()
    {
        return $this->container['public_stats_viewable'];
    }

    /**
     * Sets public_stats_viewable
     *
     * @param bool $public_stats_viewable This value indicates if the extended video statistics on the watch page can be viewed by everyone. Note that the view count, likes, etc will still be visible if this is disabled.
     *
     * @return $this
     */
    public function setPublicStatsViewable($public_stats_viewable)
    {
        $this->container['public_stats_viewable'] = $public_stats_viewable;

        return $this;
    }

    /**
     * Gets publish_at
     *
     * @return \DateTime
     */
    public function getPublishAt()
    {
        return $this->container['publish_at'];
    }

    /**
     * Sets publish_at
     *
     * @param \DateTime $publish_at The date and time when the video is scheduled to publish. It can be set only if the privacy status of the video is private. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format.
     *
     * @return $this
     */
    public function setPublishAt($publish_at)
    {
        $this->container['publish_at'] = $publish_at;

        return $this;
    }

    /**
     * Gets rejection_reason
     *
     * @return string
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param string $rejection_reason This value explains why YouTube rejected an uploaded video. This property is only present if the uploadStatus property indicates that the upload was rejected.
     *
     * @return $this
     */
    public function setRejectionReason($rejection_reason)
    {
        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (!is_null($rejection_reason) && !in_array($rejection_reason, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rejection_reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rejection_reason'] = $rejection_reason;

        return $this;
    }

    /**
     * Gets upload_status
     *
     * @return string
     */
    public function getUploadStatus()
    {
        return $this->container['upload_status'];
    }

    /**
     * Sets upload_status
     *
     * @param string $upload_status The status of the uploaded video.
     *
     * @return $this
     */
    public function setUploadStatus($upload_status)
    {
        $allowedValues = $this->getUploadStatusAllowableValues();
        if (!is_null($upload_status) && !in_array($upload_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'upload_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['upload_status'] = $upload_status;

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


