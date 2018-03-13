# CommentThreadSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can_reply** | **bool** | Whether the current viewer of the thread can reply to it. This is viewer specific - other viewers may see a different value for this field. | [optional] 
**channel_id** | **string** | The YouTube channel the comments in the thread refer to or the channel with the video the comments refer to. If video_id isn&#39;t set the comments refer to the channel itself. | [optional] 
**is_public** | **bool** | Whether the thread (and therefore all its comments) is visible to all YouTube users. | [optional] 
**top_level_comment** | [**\Swagger\Client\Model\Comment**](Comment.md) | The top level comment of this thread. | [optional] 
**total_reply_count** | **int** | The total number of replies (not including the top level comment). | [optional] 
**video_id** | **string** | The ID of the video the comments refer to, if any. No video_id implies a channel discussion comment. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


