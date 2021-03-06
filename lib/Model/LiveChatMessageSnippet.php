<?php
/**
 * LiveChatMessageSnippet
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
 * LiveChatMessageSnippet Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LiveChatMessageSnippet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LiveChatMessageSnippet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'author_channel_id' => 'string',
        'display_message' => 'string',
        'fan_funding_event_details' => '\Swagger\Client\Model\LiveChatFanFundingEventDetails',
        'has_display_content' => 'bool',
        'live_chat_id' => 'string',
        'message_deleted_details' => '\Swagger\Client\Model\LiveChatMessageDeletedDetails',
        'message_retracted_details' => '\Swagger\Client\Model\LiveChatMessageRetractedDetails',
        'poll_closed_details' => '\Swagger\Client\Model\LiveChatPollClosedDetails',
        'poll_edited_details' => '\Swagger\Client\Model\LiveChatPollEditedDetails',
        'poll_opened_details' => '\Swagger\Client\Model\LiveChatPollOpenedDetails',
        'poll_voted_details' => '\Swagger\Client\Model\LiveChatPollVotedDetails',
        'published_at' => '\DateTime',
        'super_chat_details' => '\Swagger\Client\Model\LiveChatSuperChatDetails',
        'text_message_details' => '\Swagger\Client\Model\LiveChatTextMessageDetails',
        'type' => 'string',
        'user_banned_details' => '\Swagger\Client\Model\LiveChatUserBannedMessageDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'author_channel_id' => null,
        'display_message' => null,
        'fan_funding_event_details' => null,
        'has_display_content' => null,
        'live_chat_id' => null,
        'message_deleted_details' => null,
        'message_retracted_details' => null,
        'poll_closed_details' => null,
        'poll_edited_details' => null,
        'poll_opened_details' => null,
        'poll_voted_details' => null,
        'published_at' => 'date-time',
        'super_chat_details' => null,
        'text_message_details' => null,
        'type' => null,
        'user_banned_details' => null
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
        'author_channel_id' => 'authorChannelId',
        'display_message' => 'displayMessage',
        'fan_funding_event_details' => 'fanFundingEventDetails',
        'has_display_content' => 'hasDisplayContent',
        'live_chat_id' => 'liveChatId',
        'message_deleted_details' => 'messageDeletedDetails',
        'message_retracted_details' => 'messageRetractedDetails',
        'poll_closed_details' => 'pollClosedDetails',
        'poll_edited_details' => 'pollEditedDetails',
        'poll_opened_details' => 'pollOpenedDetails',
        'poll_voted_details' => 'pollVotedDetails',
        'published_at' => 'publishedAt',
        'super_chat_details' => 'superChatDetails',
        'text_message_details' => 'textMessageDetails',
        'type' => 'type',
        'user_banned_details' => 'userBannedDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author_channel_id' => 'setAuthorChannelId',
        'display_message' => 'setDisplayMessage',
        'fan_funding_event_details' => 'setFanFundingEventDetails',
        'has_display_content' => 'setHasDisplayContent',
        'live_chat_id' => 'setLiveChatId',
        'message_deleted_details' => 'setMessageDeletedDetails',
        'message_retracted_details' => 'setMessageRetractedDetails',
        'poll_closed_details' => 'setPollClosedDetails',
        'poll_edited_details' => 'setPollEditedDetails',
        'poll_opened_details' => 'setPollOpenedDetails',
        'poll_voted_details' => 'setPollVotedDetails',
        'published_at' => 'setPublishedAt',
        'super_chat_details' => 'setSuperChatDetails',
        'text_message_details' => 'setTextMessageDetails',
        'type' => 'setType',
        'user_banned_details' => 'setUserBannedDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author_channel_id' => 'getAuthorChannelId',
        'display_message' => 'getDisplayMessage',
        'fan_funding_event_details' => 'getFanFundingEventDetails',
        'has_display_content' => 'getHasDisplayContent',
        'live_chat_id' => 'getLiveChatId',
        'message_deleted_details' => 'getMessageDeletedDetails',
        'message_retracted_details' => 'getMessageRetractedDetails',
        'poll_closed_details' => 'getPollClosedDetails',
        'poll_edited_details' => 'getPollEditedDetails',
        'poll_opened_details' => 'getPollOpenedDetails',
        'poll_voted_details' => 'getPollVotedDetails',
        'published_at' => 'getPublishedAt',
        'super_chat_details' => 'getSuperChatDetails',
        'text_message_details' => 'getTextMessageDetails',
        'type' => 'getType',
        'user_banned_details' => 'getUserBannedDetails'
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

    const TYPE_CHAT_ENDED_EVENT = 'chatEndedEvent';
    const TYPE_FAN_FUNDING_EVENT = 'fanFundingEvent';
    const TYPE_MESSAGE_DELETED_EVENT = 'messageDeletedEvent';
    const TYPE_MESSAGE_RETRACTED_EVENT = 'messageRetractedEvent';
    const TYPE_NEW_SPONSOR_EVENT = 'newSponsorEvent';
    const TYPE_POLL_CLOSED_EVENT = 'pollClosedEvent';
    const TYPE_POLL_EDITED_EVENT = 'pollEditedEvent';
    const TYPE_POLL_OPENED_EVENT = 'pollOpenedEvent';
    const TYPE_POLL_VOTED_EVENT = 'pollVotedEvent';
    const TYPE_SPONSOR_ONLY_MODE_ENDED_EVENT = 'sponsorOnlyModeEndedEvent';
    const TYPE_SPONSOR_ONLY_MODE_STARTED_EVENT = 'sponsorOnlyModeStartedEvent';
    const TYPE_SUPER_CHAT_EVENT = 'superChatEvent';
    const TYPE_TEXT_MESSAGE_EVENT = 'textMessageEvent';
    const TYPE_TOMBSTONE = 'tombstone';
    const TYPE_USER_BANNED_EVENT = 'userBannedEvent';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CHAT_ENDED_EVENT,
            self::TYPE_FAN_FUNDING_EVENT,
            self::TYPE_MESSAGE_DELETED_EVENT,
            self::TYPE_MESSAGE_RETRACTED_EVENT,
            self::TYPE_NEW_SPONSOR_EVENT,
            self::TYPE_POLL_CLOSED_EVENT,
            self::TYPE_POLL_EDITED_EVENT,
            self::TYPE_POLL_OPENED_EVENT,
            self::TYPE_POLL_VOTED_EVENT,
            self::TYPE_SPONSOR_ONLY_MODE_ENDED_EVENT,
            self::TYPE_SPONSOR_ONLY_MODE_STARTED_EVENT,
            self::TYPE_SUPER_CHAT_EVENT,
            self::TYPE_TEXT_MESSAGE_EVENT,
            self::TYPE_TOMBSTONE,
            self::TYPE_USER_BANNED_EVENT,
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
        $this->container['author_channel_id'] = isset($data['author_channel_id']) ? $data['author_channel_id'] : null;
        $this->container['display_message'] = isset($data['display_message']) ? $data['display_message'] : null;
        $this->container['fan_funding_event_details'] = isset($data['fan_funding_event_details']) ? $data['fan_funding_event_details'] : null;
        $this->container['has_display_content'] = isset($data['has_display_content']) ? $data['has_display_content'] : null;
        $this->container['live_chat_id'] = isset($data['live_chat_id']) ? $data['live_chat_id'] : null;
        $this->container['message_deleted_details'] = isset($data['message_deleted_details']) ? $data['message_deleted_details'] : null;
        $this->container['message_retracted_details'] = isset($data['message_retracted_details']) ? $data['message_retracted_details'] : null;
        $this->container['poll_closed_details'] = isset($data['poll_closed_details']) ? $data['poll_closed_details'] : null;
        $this->container['poll_edited_details'] = isset($data['poll_edited_details']) ? $data['poll_edited_details'] : null;
        $this->container['poll_opened_details'] = isset($data['poll_opened_details']) ? $data['poll_opened_details'] : null;
        $this->container['poll_voted_details'] = isset($data['poll_voted_details']) ? $data['poll_voted_details'] : null;
        $this->container['published_at'] = isset($data['published_at']) ? $data['published_at'] : null;
        $this->container['super_chat_details'] = isset($data['super_chat_details']) ? $data['super_chat_details'] : null;
        $this->container['text_message_details'] = isset($data['text_message_details']) ? $data['text_message_details'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user_banned_details'] = isset($data['user_banned_details']) ? $data['user_banned_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets author_channel_id
     *
     * @return string
     */
    public function getAuthorChannelId()
    {
        return $this->container['author_channel_id'];
    }

    /**
     * Sets author_channel_id
     *
     * @param string $author_channel_id The ID of the user that authored this message, this field is not always filled. textMessageEvent - the user that wrote the message fanFundingEvent - the user that funded the broadcast newSponsorEvent - the user that just became a sponsor messageDeletedEvent - the moderator that took the action messageRetractedEvent - the author that retracted their message userBannedEvent - the moderator that took the action superChatEvent - the user that made the purchase
     *
     * @return $this
     */
    public function setAuthorChannelId($author_channel_id)
    {
        $this->container['author_channel_id'] = $author_channel_id;

        return $this;
    }

    /**
     * Gets display_message
     *
     * @return string
     */
    public function getDisplayMessage()
    {
        return $this->container['display_message'];
    }

    /**
     * Sets display_message
     *
     * @param string $display_message Contains a string that can be displayed to the user. If this field is not present the message is silent, at the moment only messages of type TOMBSTONE and CHAT_ENDED_EVENT are silent.
     *
     * @return $this
     */
    public function setDisplayMessage($display_message)
    {
        $this->container['display_message'] = $display_message;

        return $this;
    }

    /**
     * Gets fan_funding_event_details
     *
     * @return \Swagger\Client\Model\LiveChatFanFundingEventDetails
     */
    public function getFanFundingEventDetails()
    {
        return $this->container['fan_funding_event_details'];
    }

    /**
     * Sets fan_funding_event_details
     *
     * @param \Swagger\Client\Model\LiveChatFanFundingEventDetails $fan_funding_event_details Details about the funding event, this is only set if the type is 'fanFundingEvent'.
     *
     * @return $this
     */
    public function setFanFundingEventDetails($fan_funding_event_details)
    {
        $this->container['fan_funding_event_details'] = $fan_funding_event_details;

        return $this;
    }

    /**
     * Gets has_display_content
     *
     * @return bool
     */
    public function getHasDisplayContent()
    {
        return $this->container['has_display_content'];
    }

    /**
     * Sets has_display_content
     *
     * @param bool $has_display_content Whether the message has display content that should be displayed to users.
     *
     * @return $this
     */
    public function setHasDisplayContent($has_display_content)
    {
        $this->container['has_display_content'] = $has_display_content;

        return $this;
    }

    /**
     * Gets live_chat_id
     *
     * @return string
     */
    public function getLiveChatId()
    {
        return $this->container['live_chat_id'];
    }

    /**
     * Sets live_chat_id
     *
     * @param string $live_chat_id live_chat_id
     *
     * @return $this
     */
    public function setLiveChatId($live_chat_id)
    {
        $this->container['live_chat_id'] = $live_chat_id;

        return $this;
    }

    /**
     * Gets message_deleted_details
     *
     * @return \Swagger\Client\Model\LiveChatMessageDeletedDetails
     */
    public function getMessageDeletedDetails()
    {
        return $this->container['message_deleted_details'];
    }

    /**
     * Sets message_deleted_details
     *
     * @param \Swagger\Client\Model\LiveChatMessageDeletedDetails $message_deleted_details message_deleted_details
     *
     * @return $this
     */
    public function setMessageDeletedDetails($message_deleted_details)
    {
        $this->container['message_deleted_details'] = $message_deleted_details;

        return $this;
    }

    /**
     * Gets message_retracted_details
     *
     * @return \Swagger\Client\Model\LiveChatMessageRetractedDetails
     */
    public function getMessageRetractedDetails()
    {
        return $this->container['message_retracted_details'];
    }

    /**
     * Sets message_retracted_details
     *
     * @param \Swagger\Client\Model\LiveChatMessageRetractedDetails $message_retracted_details message_retracted_details
     *
     * @return $this
     */
    public function setMessageRetractedDetails($message_retracted_details)
    {
        $this->container['message_retracted_details'] = $message_retracted_details;

        return $this;
    }

    /**
     * Gets poll_closed_details
     *
     * @return \Swagger\Client\Model\LiveChatPollClosedDetails
     */
    public function getPollClosedDetails()
    {
        return $this->container['poll_closed_details'];
    }

    /**
     * Sets poll_closed_details
     *
     * @param \Swagger\Client\Model\LiveChatPollClosedDetails $poll_closed_details poll_closed_details
     *
     * @return $this
     */
    public function setPollClosedDetails($poll_closed_details)
    {
        $this->container['poll_closed_details'] = $poll_closed_details;

        return $this;
    }

    /**
     * Gets poll_edited_details
     *
     * @return \Swagger\Client\Model\LiveChatPollEditedDetails
     */
    public function getPollEditedDetails()
    {
        return $this->container['poll_edited_details'];
    }

    /**
     * Sets poll_edited_details
     *
     * @param \Swagger\Client\Model\LiveChatPollEditedDetails $poll_edited_details poll_edited_details
     *
     * @return $this
     */
    public function setPollEditedDetails($poll_edited_details)
    {
        $this->container['poll_edited_details'] = $poll_edited_details;

        return $this;
    }

    /**
     * Gets poll_opened_details
     *
     * @return \Swagger\Client\Model\LiveChatPollOpenedDetails
     */
    public function getPollOpenedDetails()
    {
        return $this->container['poll_opened_details'];
    }

    /**
     * Sets poll_opened_details
     *
     * @param \Swagger\Client\Model\LiveChatPollOpenedDetails $poll_opened_details poll_opened_details
     *
     * @return $this
     */
    public function setPollOpenedDetails($poll_opened_details)
    {
        $this->container['poll_opened_details'] = $poll_opened_details;

        return $this;
    }

    /**
     * Gets poll_voted_details
     *
     * @return \Swagger\Client\Model\LiveChatPollVotedDetails
     */
    public function getPollVotedDetails()
    {
        return $this->container['poll_voted_details'];
    }

    /**
     * Sets poll_voted_details
     *
     * @param \Swagger\Client\Model\LiveChatPollVotedDetails $poll_voted_details poll_voted_details
     *
     * @return $this
     */
    public function setPollVotedDetails($poll_voted_details)
    {
        $this->container['poll_voted_details'] = $poll_voted_details;

        return $this;
    }

    /**
     * Gets published_at
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->container['published_at'];
    }

    /**
     * Sets published_at
     *
     * @param \DateTime $published_at The date and time when the message was orignally published. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format.
     *
     * @return $this
     */
    public function setPublishedAt($published_at)
    {
        $this->container['published_at'] = $published_at;

        return $this;
    }

    /**
     * Gets super_chat_details
     *
     * @return \Swagger\Client\Model\LiveChatSuperChatDetails
     */
    public function getSuperChatDetails()
    {
        return $this->container['super_chat_details'];
    }

    /**
     * Sets super_chat_details
     *
     * @param \Swagger\Client\Model\LiveChatSuperChatDetails $super_chat_details Details about the Super Chat event, this is only set if the type is 'superChatEvent'.
     *
     * @return $this
     */
    public function setSuperChatDetails($super_chat_details)
    {
        $this->container['super_chat_details'] = $super_chat_details;

        return $this;
    }

    /**
     * Gets text_message_details
     *
     * @return \Swagger\Client\Model\LiveChatTextMessageDetails
     */
    public function getTextMessageDetails()
    {
        return $this->container['text_message_details'];
    }

    /**
     * Sets text_message_details
     *
     * @param \Swagger\Client\Model\LiveChatTextMessageDetails $text_message_details Details about the text message, this is only set if the type is 'textMessageEvent'.
     *
     * @return $this
     */
    public function setTextMessageDetails($text_message_details)
    {
        $this->container['text_message_details'] = $text_message_details;

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
     * @param string $type The type of message, this will always be present, it determines the contents of the message as well as which fields will be present.
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
     * Gets user_banned_details
     *
     * @return \Swagger\Client\Model\LiveChatUserBannedMessageDetails
     */
    public function getUserBannedDetails()
    {
        return $this->container['user_banned_details'];
    }

    /**
     * Sets user_banned_details
     *
     * @param \Swagger\Client\Model\LiveChatUserBannedMessageDetails $user_banned_details user_banned_details
     *
     * @return $this
     */
    public function setUserBannedDetails($user_banned_details)
    {
        $this->container['user_banned_details'] = $user_banned_details;

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


