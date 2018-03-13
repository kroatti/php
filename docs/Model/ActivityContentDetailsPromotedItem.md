# ActivityContentDetailsPromotedItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_tag** | **string** | The URL the client should fetch to request a promoted item. | [optional] 
**click_tracking_url** | **string** | The URL the client should ping to indicate that the user clicked through on this promoted item. | [optional] 
**creative_view_url** | **string** | The URL the client should ping to indicate that the user was shown this promoted item. | [optional] 
**cta_type** | **string** | The type of call-to-action, a message to the user indicating action that can be taken. | [optional] 
**custom_cta_button_text** | **string** | The custom call-to-action button text. If specified, it will override the default button text for the cta_type. | [optional] 
**description_text** | **string** | The text description to accompany the promoted item. | [optional] 
**destination_url** | **string** | The URL the client should direct the user to, if the user chooses to visit the advertiser&#39;s website. | [optional] 
**forecasting_url** | **string[]** | The list of forecasting URLs. The client should ping all of these URLs when a promoted item is not available, to indicate that a promoted item could have been shown. | [optional] 
**impression_url** | **string[]** | The list of impression URLs. The client should ping all of these URLs to indicate that the user was shown this promoted item. | [optional] 
**video_id** | **string** | The ID that YouTube uses to uniquely identify the promoted video. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


