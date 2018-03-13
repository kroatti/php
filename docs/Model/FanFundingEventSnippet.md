# FanFundingEventSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_micros** | **string** | The amount of funding in micros of fund_currency. e.g., 1 is represented | [optional] 
**channel_id** | **string** | Channel id where the funding event occurred. | [optional] 
**comment_text** | **string** | The text contents of the comment left by the user. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when the funding occurred. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**currency** | **string** | The currency in which the fund was made. ISO 4217. | [optional] 
**display_string** | **string** | A rendered string that displays the fund amount and currency (e.g., \&quot;$1.00\&quot;). The string is rendered for the given language. | [optional] 
**supporter_details** | [**\Swagger\Client\Model\ChannelProfileDetails**](ChannelProfileDetails.md) | Details about the supporter. Only filled if the event was made public by the user. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


