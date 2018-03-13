# SubscriptionListResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**etag** | **string** | Etag of this resource. | [optional] 
**event_id** | **string** | Serialized EventId of the request which produced this response. | [optional] 
**items** | [**\Swagger\Client\Model\Subscription[]**](Subscription.md) | A list of subscriptions that match the request criteria. | [optional] 
**kind** | **string** | Identifies what kind of resource this is. Value: the fixed string \&quot;youtube#subscriptionListResponse\&quot;. | [optional] [default to 'youtube#subscriptionListResponse']
**next_page_token** | **string** | The token that can be used as the value of the pageToken parameter to retrieve the next page in the result set. | [optional] 
**page_info** | [**\Swagger\Client\Model\PageInfo**](PageInfo.md) |  | [optional] 
**prev_page_token** | **string** | The token that can be used as the value of the pageToken parameter to retrieve the previous page in the result set. | [optional] 
**token_pagination** | [**\Swagger\Client\Model\TokenPagination**](TokenPagination.md) |  | [optional] 
**visitor_id** | **string** | The visitorId identifies the visitor. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


