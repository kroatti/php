# Video

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**age_gating** | [**\Swagger\Client\Model\VideoAgeGating**](VideoAgeGating.md) | Age restriction details related to a video. This data can only be retrieved by the video owner. | [optional] 
**content_details** | [**\Swagger\Client\Model\VideoContentDetails**](VideoContentDetails.md) | The contentDetails object contains information about the video content, including the length of the video and its aspect ratio. | [optional] 
**etag** | **string** | Etag of this resource. | [optional] 
**file_details** | [**\Swagger\Client\Model\VideoFileDetails**](VideoFileDetails.md) | The fileDetails object encapsulates information about the video file that was uploaded to YouTube, including the file&#39;s resolution, duration, audio and video codecs, stream bitrates, and more. This data can only be retrieved by the video owner. | [optional] 
**id** | **string** | The ID that YouTube uses to uniquely identify the video. | [optional] 
**kind** | **string** | Identifies what kind of resource this is. Value: the fixed string \&quot;youtube#video\&quot;. | [optional] [default to 'youtube#video']
**live_streaming_details** | [**\Swagger\Client\Model\VideoLiveStreamingDetails**](VideoLiveStreamingDetails.md) | The liveStreamingDetails object contains metadata about a live video broadcast. The object will only be present in a video resource if the video is an upcoming, live, or completed live broadcast. | [optional] 
**localizations** | [**map[string,\Swagger\Client\Model\VideoLocalization]**](VideoLocalization.md) | List with all localizations. | [optional] 
**monetization_details** | [**\Swagger\Client\Model\VideoMonetizationDetails**](VideoMonetizationDetails.md) | The monetizationDetails object encapsulates information about the monetization status of the video. | [optional] 
**player** | [**\Swagger\Client\Model\VideoPlayer**](VideoPlayer.md) | The player object contains information that you would use to play the video in an embedded player. | [optional] 
**processing_details** | [**\Swagger\Client\Model\VideoProcessingDetails**](VideoProcessingDetails.md) | The processingDetails object encapsulates information about YouTube&#39;s progress in processing the uploaded video file. The properties in the object identify the current processing status and an estimate of the time remaining until YouTube finishes processing the video. This part also indicates whether different types of data or content, such as file details or thumbnail images, are available for the video.  The processingProgress object is designed to be polled so that the video uploaded can track the progress that YouTube has made in processing the uploaded video file. This data can only be retrieved by the video owner. | [optional] 
**project_details** | [**\Swagger\Client\Model\VideoProjectDetails**](VideoProjectDetails.md) | The projectDetails object contains information about the project specific video metadata. | [optional] 
**recording_details** | [**\Swagger\Client\Model\VideoRecordingDetails**](VideoRecordingDetails.md) | The recordingDetails object encapsulates information about the location, date and address where the video was recorded. | [optional] 
**snippet** | [**\Swagger\Client\Model\VideoSnippet**](VideoSnippet.md) | The snippet object contains basic details about the video, such as its title, description, and category. | [optional] 
**statistics** | [**\Swagger\Client\Model\VideoStatistics**](VideoStatistics.md) | The statistics object contains statistics about the video. | [optional] 
**status** | [**\Swagger\Client\Model\VideoStatus**](VideoStatus.md) | The status object contains information about the video&#39;s uploading, processing, and privacy statuses. | [optional] 
**suggestions** | [**\Swagger\Client\Model\VideoSuggestions**](VideoSuggestions.md) | The suggestions object encapsulates suggestions that identify opportunities to improve the video quality or the metadata for the uploaded video. This data can only be retrieved by the video owner. | [optional] 
**topic_details** | [**\Swagger\Client\Model\VideoTopicDetails**](VideoTopicDetails.md) | The topicDetails object encapsulates information about Freebase topics associated with the video. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


