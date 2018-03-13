# PlaylistItemSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel_id** | **string** | The ID that YouTube uses to uniquely identify the user that added the item to the playlist. | [optional] 
**channel_title** | **string** | Channel title for the channel that the playlist item belongs to. | [optional] 
**description** | **string** | The item&#39;s description. | [optional] 
**playlist_id** | **string** | The ID that YouTube uses to uniquely identify the playlist that the playlist item is in. | [optional] 
**position** | **int** | The order in which the item appears in the playlist. The value uses a zero-based index, so the first item has a position of 0, the second item has a position of 1, and so forth. | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | The date and time that the item was added to the playlist. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**resource_id** | [**\Swagger\Client\Model\ResourceId**](ResourceId.md) | The id object contains information that can be used to uniquely identify the resource that is included in the playlist as the playlist item. | [optional] 
**thumbnails** | [**\Swagger\Client\Model\ThumbnailDetails**](ThumbnailDetails.md) | A map of thumbnail images associated with the playlist item. For each object in the map, the key is the name of the thumbnail image, and the value is an object that contains other information about the thumbnail. | [optional] 
**title** | **string** | The item&#39;s title. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


