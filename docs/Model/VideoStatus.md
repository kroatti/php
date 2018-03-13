# VideoStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**embeddable** | **bool** | This value indicates if the video can be embedded on another website. | [optional] 
**failure_reason** | **string** | This value explains why a video failed to upload. This property is only present if the uploadStatus property indicates that the upload failed. | [optional] 
**license** | **string** | The video&#39;s license. | [optional] 
**privacy_status** | **string** | The video&#39;s privacy status. | [optional] 
**public_stats_viewable** | **bool** | This value indicates if the extended video statistics on the watch page can be viewed by everyone. Note that the view count, likes, etc will still be visible if this is disabled. | [optional] 
**publish_at** | [**\DateTime**](\DateTime.md) | The date and time when the video is scheduled to publish. It can be set only if the privacy status of the video is private. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**rejection_reason** | **string** | This value explains why YouTube rejected an uploaded video. This property is only present if the uploadStatus property indicates that the upload was rejected. | [optional] 
**upload_status** | **string** | The status of the uploaded video. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


