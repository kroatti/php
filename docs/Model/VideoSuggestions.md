# VideoSuggestions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**editor_suggestions** | **string[]** | A list of video editing operations that might improve the video quality or playback experience of the uploaded video. | [optional] 
**processing_errors** | **string[]** | A list of errors that will prevent YouTube from successfully processing the uploaded video video. These errors indicate that, regardless of the video&#39;s current processing status, eventually, that status will almost certainly be failed. | [optional] 
**processing_hints** | **string[]** | A list of suggestions that may improve YouTube&#39;s ability to process the video. | [optional] 
**processing_warnings** | **string[]** | A list of reasons why YouTube may have difficulty transcoding the uploaded video or that might result in an erroneous transcoding. These warnings are generated before YouTube actually processes the uploaded video file. In addition, they identify issues that are unlikely to cause the video processing to fail but that might cause problems such as sync issues, video artifacts, or a missing audio track. | [optional] 
**tag_suggestions** | [**\Swagger\Client\Model\VideoSuggestionsTagSuggestion[]**](VideoSuggestionsTagSuggestion.md) | A list of keyword tags that could be added to the video&#39;s metadata to increase the likelihood that users will locate your video when searching or browsing on YouTube. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


