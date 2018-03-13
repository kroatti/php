# SuperChatEventSnippet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_micros** | **string** | The purchase amount, in micros of the purchase currency. e.g., 1 is represented as 1000000. | [optional] 
**channel_id** | **string** | Channel id where the event occurred. | [optional] 
**comment_text** | **string** | The text contents of the comment left by the user. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time when the event occurred. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional] 
**currency** | **string** | The currency in which the purchase was made. ISO 4217. | [optional] 
**display_string** | **string** | A rendered string that displays the purchase amount and currency (e.g., \&quot;$1.00\&quot;). The string is rendered for the given language. | [optional] 
**is_super_chat_for_good** | **bool** | True if this event is a Super Chat for Good purchase. | [optional] 
**message_type** | **int** | The tier for the paid message, which is based on the amount of money spent to purchase the message. | [optional] 
**nonprofit** | [**\Swagger\Client\Model\Nonprofit**](Nonprofit.md) | If this event is a Super Chat for Good purchase, this field will contain information about the charity the purchase is donated to. | [optional] 
**supporter_details** | [**\Swagger\Client\Model\ChannelProfileDetails**](ChannelProfileDetails.md) | Details about the supporter. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


