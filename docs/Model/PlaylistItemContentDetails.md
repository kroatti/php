# PlaylistItemContentDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_at** | **string** | The time, measured in seconds from the start of the video, when the video should stop playing. (The playlist owner can specify the times when the video should start and stop playing when the video is played in the context of the playlist.) By default, assume that the video.endTime is the end of the video. | [optional] 
**note** | **string** | A user-generated note for this item. | [optional] 
**start_at** | **string** | The time, measured in seconds from the start of the video, when the video should start playing. (The playlist owner can specify the times when the video should start and stop playing when the video is played in the context of the playlist.) The default value is 0. | [optional] 
**video_id** | **string** | The ID that YouTube uses to uniquely identify a video. To retrieve the video resource, set the id query parameter to this value in your API request. | [optional] 
**video_published_at** | [**\DateTime**](\DateTime.md) | The date and time that the video was published to YouTube. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


