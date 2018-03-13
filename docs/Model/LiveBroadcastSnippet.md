# LiveBroadcastSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actual_end_time** | [**\DateTime**](\DateTime.md) | The date and time that the broadcast actually ended. This information is only available once the broadcast&#39;s state is complete. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**actual_start_time** | [**\DateTime**](\DateTime.md) | The date and time that the broadcast actually started. This information is only available once the broadcast&#39;s state is live. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**channel_id** | **string** | The ID that YouTube uses to uniquely identify the channel that is publishing the broadcast. | [optional] 
**description** | **string** | The broadcast&#39;s description. As with the title, you can set this field by modifying the broadcast resource or by setting the description field of the corresponding video resource. | [optional] 
**is_default_broadcast** | **bool** |  | [optional] 
**live_chat_id** | **string** | The id of the live chat for this broadcast. | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | The date and time that the broadcast was added to YouTube&#39;s live broadcast schedule. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**scheduled_end_time** | [**\DateTime**](\DateTime.md) | The date and time that the broadcast is scheduled to end. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**scheduled_start_time** | [**\DateTime**](\DateTime.md) | The date and time that the broadcast is scheduled to start. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**thumbnails** | [**\Swagger\Client\Model\ThumbnailDetails**](ThumbnailDetails.md) | A map of thumbnail images associated with the broadcast. For each nested object in this object, the key is the name of the thumbnail image, and the value is an object that contains other information about the thumbnail. | [optional] 
**title** | **string** | The broadcast&#39;s title. Note that the broadcast represents exactly one YouTube video. You can set this field by modifying the broadcast resource or by setting the title field of the corresponding video resource. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


