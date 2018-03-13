# LiveChatMessageListResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**etag** | **string** | Etag of this resource. | [optional] 
**event_id** | **string** | Serialized EventId of the request which produced this response. | [optional] 
**items** | [**\Swagger\Client\Model\LiveChatMessage[]**](LiveChatMessage.md) | A list of live chat messages. | [optional] 
**kind** | **string** | Identifies what kind of resource this is. Value: the fixed string \&quot;youtube#liveChatMessageListResponse\&quot;. | [optional] [default to 'youtube#liveChatMessageListResponse']
**next_page_token** | **string** | The token that can be used as the value of the pageToken parameter to retrieve the next page in the result set. | [optional] 
**offline_at** | [**\DateTime**](\DateTime.md) | The date and time when the underlying stream went offline. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**page_info** | [**\Swagger\Client\Model\PageInfo**](PageInfo.md) |  | [optional] 
**polling_interval_millis** | **int** | The amount of time the client should wait before polling again. | [optional] 
**token_pagination** | [**\Swagger\Client\Model\TokenPagination**](TokenPagination.md) |  | [optional] 
**visitor_id** | **string** | The visitorId identifies the visitor. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


