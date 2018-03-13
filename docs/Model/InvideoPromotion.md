# InvideoPromotion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_timing** | [**\Swagger\Client\Model\InvideoTiming**](InvideoTiming.md) | The default temporal position within the video where the promoted item will be displayed. Can be overriden by more specific timing in the item. | [optional] 
**items** | [**\Swagger\Client\Model\PromotedItem[]**](PromotedItem.md) | List of promoted items in decreasing priority. | [optional] 
**position** | [**\Swagger\Client\Model\InvideoPosition**](InvideoPosition.md) | The spatial position within the video where the promoted item will be displayed. | [optional] 
**use_smart_timing** | **bool** | Indicates whether the channel&#39;s promotional campaign uses \&quot;smart timing.\&quot; This feature attempts to show promotions at a point in the video when they are more likely to be clicked and less likely to disrupt the viewing experience. This feature also picks up a single promotion to show on each video. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


