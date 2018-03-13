# PlaylistSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_id** | **string** | The ID that YouTube uses to uniquely identify the channel that published the playlist. | [optional] 
**channel_title** | **string** | The channel title of the channel that the video belongs to. | [optional] 
**default_language** | **string** | The language of the playlist&#39;s default title and description. | [optional] 
**description** | **string** | The playlist&#39;s description. | [optional] 
**localized** | [**\Swagger\Client\Model\PlaylistLocalization**](PlaylistLocalization.md) | Localized title and description, read-only. | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | The date and time that the playlist was created. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**tags** | **string[]** | Keyword tags associated with the playlist. | [optional] 
**thumbnails** | [**\Swagger\Client\Model\ThumbnailDetails**](ThumbnailDetails.md) | A map of thumbnail images associated with the playlist. For each object in the map, the key is the name of the thumbnail image, and the value is an object that contains other information about the thumbnail. | [optional] 
**title** | **string** | The playlist&#39;s title. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


