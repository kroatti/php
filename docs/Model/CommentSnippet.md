# CommentSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author_channel_id** | [****](.md) | The id of the author&#39;s YouTube channel, if any. | [optional] 
**author_channel_url** | **string** | Link to the author&#39;s YouTube channel, if any. | [optional] 
**author_display_name** | **string** | The name of the user who posted the comment. | [optional] 
**author_profile_image_url** | **string** | The URL for the avatar of the user who posted the comment. | [optional] 
**can_rate** | **bool** | Whether the current viewer can rate this comment. | [optional] 
**channel_id** | **string** | The id of the corresponding YouTube channel. In case of a channel comment this is the channel the comment refers to. In case of a video comment it&#39;s the video&#39;s channel. | [optional] 
**like_count** | **int** | The total number of likes this comment has received. | [optional] 
**moderation_status** | **string** | The comment&#39;s moderation status. Will not be set if the comments were requested through the id filter. | [optional] 
**parent_id** | **string** | The unique id of the parent comment, only set for replies. | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | The date and time when the comment was orignally published. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**text_display** | **string** | The comment&#39;s text. The format is either plain text or HTML dependent on what has been requested. Even the plain text representation may differ from the text originally posted in that it may replace video links with video titles etc. | [optional] 
**text_original** | **string** | The comment&#39;s original raw text as initially posted or last updated. The original text will only be returned if it is accessible to the viewer, which is only guaranteed if the viewer is the comment&#39;s author. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The date and time when was last updated . The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**video_id** | **string** | The ID of the video the comment refers to, if any. | [optional] 
**viewer_rating** | **string** | The rating the viewer has given to this comment. For the time being this will never return RATE_TYPE_DISLIKE and instead return RATE_TYPE_NONE. This may change in the future. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


