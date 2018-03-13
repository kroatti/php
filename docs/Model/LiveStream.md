# LiveStream

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cdn** | [**\Swagger\Client\Model\CdnSettings**](CdnSettings.md) | The cdn object defines the live stream&#39;s content delivery network (CDN) settings. These settings provide details about the manner in which you stream your content to YouTube. | [optional] 
**content_details** | [**\Swagger\Client\Model\LiveStreamContentDetails**](LiveStreamContentDetails.md) | The content_details object contains information about the stream, including the closed captions ingestion URL. | [optional] 
**etag** | **string** | Etag of this resource. | [optional] 
**id** | **string** | The ID that YouTube assigns to uniquely identify the stream. | [optional] 
**kind** | **string** | Identifies what kind of resource this is. Value: the fixed string \&quot;youtube#liveStream\&quot;. | [optional] [default to 'youtube#liveStream']
**snippet** | [**\Swagger\Client\Model\LiveStreamSnippet**](LiveStreamSnippet.md) | The snippet object contains basic details about the stream, including its channel, title, and description. | [optional] 
**status** | [**\Swagger\Client\Model\LiveStreamStatus**](LiveStreamStatus.md) | The status object contains information about live stream&#39;s status. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


