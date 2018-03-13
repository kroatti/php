# CaptionSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_track_type** | **string** | The type of audio track associated with the caption track. | [optional] 
**failure_reason** | **string** | The reason that YouTube failed to process the caption track. This property is only present if the state property&#39;s value is failed. | [optional] 
**is_auto_synced** | **bool** | Indicates whether YouTube synchronized the caption track to the audio track in the video. The value will be true if a sync was explicitly requested when the caption track was uploaded. For example, when calling the captions.insert or captions.update methods, you can set the sync parameter to true to instruct YouTube to sync the uploaded track to the video. If the value is false, YouTube uses the time codes in the uploaded caption track to determine when to display captions. | [optional] 
**is_cc** | **bool** | Indicates whether the track contains closed captions for the deaf and hard of hearing. The default value is false. | [optional] 
**is_draft** | **bool** | Indicates whether the caption track is a draft. If the value is true, then the track is not publicly visible. The default value is false. | [optional] 
**is_easy_reader** | **bool** | Indicates whether caption track is formatted for \&quot;easy reader,\&quot; meaning it is at a third-grade level for language learners. The default value is false. | [optional] 
**is_large** | **bool** | Indicates whether the caption track uses large text for the vision-impaired. The default value is false. | [optional] 
**language** | **string** | The language of the caption track. The property value is a BCP-47 language tag. | [optional] 
**last_updated** | [**\DateTime**](\DateTime.md) | The date and time when the caption track was last updated. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**name** | **string** | The name of the caption track. The name is intended to be visible to the user as an option during playback. | [optional] 
**status** | **string** | The caption track&#39;s status. | [optional] 
**track_kind** | **string** | The caption track&#39;s type. | [optional] 
**video_id** | **string** | The ID that YouTube uses to uniquely identify the video associated with the caption track. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


