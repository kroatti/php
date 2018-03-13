# LiveChatMessageSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author_channel_id** | **string** | The ID of the user that authored this message, this field is not always filled. textMessageEvent - the user that wrote the message fanFundingEvent - the user that funded the broadcast newSponsorEvent - the user that just became a sponsor messageDeletedEvent - the moderator that took the action messageRetractedEvent - the author that retracted their message userBannedEvent - the moderator that took the action superChatEvent - the user that made the purchase | [optional] 
**display_message** | **string** | Contains a string that can be displayed to the user. If this field is not present the message is silent, at the moment only messages of type TOMBSTONE and CHAT_ENDED_EVENT are silent. | [optional] 
**fan_funding_event_details** | [**\Swagger\Client\Model\LiveChatFanFundingEventDetails**](LiveChatFanFundingEventDetails.md) | Details about the funding event, this is only set if the type is &#39;fanFundingEvent&#39;. | [optional] 
**has_display_content** | **bool** | Whether the message has display content that should be displayed to users. | [optional] 
**live_chat_id** | **string** |  | [optional] 
**message_deleted_details** | [**\Swagger\Client\Model\LiveChatMessageDeletedDetails**](LiveChatMessageDeletedDetails.md) |  | [optional] 
**message_retracted_details** | [**\Swagger\Client\Model\LiveChatMessageRetractedDetails**](LiveChatMessageRetractedDetails.md) |  | [optional] 
**poll_closed_details** | [**\Swagger\Client\Model\LiveChatPollClosedDetails**](LiveChatPollClosedDetails.md) |  | [optional] 
**poll_edited_details** | [**\Swagger\Client\Model\LiveChatPollEditedDetails**](LiveChatPollEditedDetails.md) |  | [optional] 
**poll_opened_details** | [**\Swagger\Client\Model\LiveChatPollOpenedDetails**](LiveChatPollOpenedDetails.md) |  | [optional] 
**poll_voted_details** | [**\Swagger\Client\Model\LiveChatPollVotedDetails**](LiveChatPollVotedDetails.md) |  | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | The date and time when the message was orignally published. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**super_chat_details** | [**\Swagger\Client\Model\LiveChatSuperChatDetails**](LiveChatSuperChatDetails.md) | Details about the Super Chat event, this is only set if the type is &#39;superChatEvent&#39;. | [optional] 
**text_message_details** | [**\Swagger\Client\Model\LiveChatTextMessageDetails**](LiveChatTextMessageDetails.md) | Details about the text message, this is only set if the type is &#39;textMessageEvent&#39;. | [optional] 
**type** | **string** | The type of message, this will always be present, it determines the contents of the message as well as which fields will be present. | [optional] 
**user_banned_details** | [**\Swagger\Client\Model\LiveChatUserBannedMessageDetails**](LiveChatUserBannedMessageDetails.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


