# VideoLiveStreamingDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_live_chat_id** | **string** | The ID of the currently active live chat attached to this video. This field is filled only if the video is a currently live broadcast that has live chat. Once the broadcast transitions to complete this field will be removed and the live chat closed down. For persistent broadcasts that live chat id will no longer be tied to this video but rather to the new video being displayed at the persistent page. | [optional] 
**actual_end_time** | [**\DateTime**](\DateTime.md) | The time that the broadcast actually ended. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. This value will not be available until the broadcast is over. | [optional] 
**actual_start_time** | [**\DateTime**](\DateTime.md) | The time that the broadcast actually started. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. This value will not be available until the broadcast begins. | [optional] 
**concurrent_viewers** | **string** | The number of viewers currently watching the broadcast. The property and its value will be present if the broadcast has current viewers and the broadcast owner has not hidden the viewcount for the video. Note that YouTube stops tracking the number of concurrent viewers for a broadcast when the broadcast ends. So, this property would not identify the number of viewers watching an archived video of a live broadcast that already ended. | [optional] 
**scheduled_end_time** | [**\DateTime**](\DateTime.md) | The time that the broadcast is scheduled to end. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. If the value is empty or the property is not present, then the broadcast is scheduled to continue indefinitely. | [optional] 
**scheduled_start_time** | [**\DateTime**](\DateTime.md) | The time that the broadcast is scheduled to begin. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


