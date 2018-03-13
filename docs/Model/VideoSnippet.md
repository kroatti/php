# VideoSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | The YouTube video category associated with the video. | [optional] 
**channel_id** | **string** | The ID that YouTube uses to uniquely identify the channel that the video was uploaded to. | [optional] 
**channel_title** | **string** | Channel title for the channel that the video belongs to. | [optional] 
**default_audio_language** | **string** | The default_audio_language property specifies the language spoken in the video&#39;s default audio track. | [optional] 
**default_language** | **string** | The language of the videos&#39;s default snippet. | [optional] 
**description** | **string** | The video&#39;s description. | [optional] 
**live_broadcast_content** | **string** | Indicates if the video is an upcoming/active live broadcast. Or it&#39;s \&quot;none\&quot; if the video is not an upcoming/active live broadcast. | [optional] 
**localized** | [**\Swagger\Client\Model\VideoLocalization**](VideoLocalization.md) | Localized snippet selected with the hl parameter. If no such localization exists, this field is populated with the default snippet. (Read-only) | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | The date and time that the video was uploaded. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**tags** | **string[]** | A list of keyword tags associated with the video. Tags may contain spaces. | [optional] 
**thumbnails** | [**\Swagger\Client\Model\ThumbnailDetails**](ThumbnailDetails.md) | A map of thumbnail images associated with the video. For each object in the map, the key is the name of the thumbnail image, and the value is an object that contains other information about the thumbnail. | [optional] 
**title** | **string** | The video&#39;s title. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


