# VideoFileDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_streams** | [**\Swagger\Client\Model\VideoFileDetailsAudioStream[]**](VideoFileDetailsAudioStream.md) | A list of audio streams contained in the uploaded video file. Each item in the list contains detailed metadata about an audio stream. | [optional] 
**bitrate_bps** | **string** | The uploaded video file&#39;s combined (video and audio) bitrate in bits per second. | [optional] 
**container** | **string** | The uploaded video file&#39;s container format. | [optional] 
**creation_time** | **string** | The date and time when the uploaded video file was created. The value is specified in ISO 8601 format. Currently, the following ISO 8601 formats are supported: - Date only: YYYY-MM-DD - Naive time: YYYY-MM-DDTHH:MM:SS - Time with timezone: YYYY-MM-DDTHH:MM:SS+HH:MM | [optional] 
**duration_ms** | **string** | The length of the uploaded video in milliseconds. | [optional] 
**file_name** | **string** | The uploaded file&#39;s name. This field is present whether a video file or another type of file was uploaded. | [optional] 
**file_size** | **string** | The uploaded file&#39;s size in bytes. This field is present whether a video file or another type of file was uploaded. | [optional] 
**file_type** | **string** | The uploaded file&#39;s type as detected by YouTube&#39;s video processing engine. Currently, YouTube only processes video files, but this field is present whether a video file or another type of file was uploaded. | [optional] 
**video_streams** | [**\Swagger\Client\Model\VideoFileDetailsVideoStream[]**](VideoFileDetailsVideoStream.md) | A list of video streams contained in the uploaded video file. Each item in the list contains detailed metadata about a video stream. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


