# ActivitySnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_id** | **string** | The ID that YouTube uses to uniquely identify the channel associated with the activity. | [optional] 
**channel_title** | **string** | Channel title for the channel responsible for this activity | [optional] 
**description** | **string** | The description of the resource primarily associated with the activity. | [optional] 
**group_id** | **string** | The group ID associated with the activity. A group ID identifies user events that are associated with the same user and resource. For example, if a user rates a video and marks the same video as a favorite, the entries for those events would have the same group ID in the user&#39;s activity feed. In your user interface, you can avoid repetition by grouping events with the same groupId value. | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | The date and time that the video was uploaded. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**thumbnails** | [**\Swagger\Client\Model\ThumbnailDetails**](ThumbnailDetails.md) | A map of thumbnail images associated with the resource that is primarily associated with the activity. For each object in the map, the key is the name of the thumbnail image, and the value is an object that contains other information about the thumbnail. | [optional] 
**title** | **string** | The title of the resource primarily associated with the activity. | [optional] 
**type** | **string** | The type of activity that the resource describes. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


