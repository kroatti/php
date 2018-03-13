# IngestionInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backup_ingestion_address** | **string** | The backup ingestion URL that you should use to stream video to YouTube. You have the option of simultaneously streaming the content that you are sending to the ingestionAddress to this URL. | [optional] 
**ingestion_address** | **string** | The primary ingestion URL that you should use to stream video to YouTube. You must stream video to this URL.  Depending on which application or tool you use to encode your video stream, you may need to enter the stream URL and stream name separately or you may need to concatenate them in the following format:  STREAM_URL/STREAM_NAME | [optional] 
**stream_name** | **string** | The HTTP or RTMP stream name that YouTube assigns to the video stream. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


