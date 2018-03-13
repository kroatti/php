# LiveBroadcast

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_details** | [**\Swagger\Client\Model\LiveBroadcastContentDetails**](LiveBroadcastContentDetails.md) | The contentDetails object contains information about the event&#39;s video content, such as whether the content can be shown in an embedded video player or if it will be archived and therefore available for viewing after the event has concluded. | [optional] 
**etag** | **string** | Etag of this resource. | [optional] 
**id** | **string** | The ID that YouTube assigns to uniquely identify the broadcast. | [optional] 
**kind** | **string** | Identifies what kind of resource this is. Value: the fixed string \&quot;youtube#liveBroadcast\&quot;. | [optional] [default to 'youtube#liveBroadcast']
**snippet** | [**\Swagger\Client\Model\LiveBroadcastSnippet**](LiveBroadcastSnippet.md) | The snippet object contains basic details about the event, including its title, description, start time, and end time. | [optional] 
**statistics** | [**\Swagger\Client\Model\LiveBroadcastStatistics**](LiveBroadcastStatistics.md) | The statistics object contains info about the event&#39;s current stats. These include concurrent viewers and total chat count. Statistics can change (in either direction) during the lifetime of an event. Statistics are only returned while the event is live. | [optional] 
**status** | [**\Swagger\Client\Model\LiveBroadcastStatus**](LiveBroadcastStatus.md) | The status object contains information about the event&#39;s status. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


