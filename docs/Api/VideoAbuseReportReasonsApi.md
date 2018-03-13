# Swagger\Client\VideoAbuseReportReasonsApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeVideoAbuseReportReasonsList**](VideoAbuseReportReasonsApi.md#youtubeVideoAbuseReportReasonsList) | **GET** /videoAbuseReportReasons | 


# **youtubeVideoAbuseReportReasonsList**
> \Swagger\Client\Model\VideoAbuseReportReasonListResponse youtubeVideoAbuseReportReasonsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $hl)



Returns a list of abuse reasons that can be used for reporting abusive videos.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\VideoAbuseReportReasonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies the videoCategory resource parts that the API response will include. Supported values are id and snippet.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$hl = "en_US"; // string | The hl parameter specifies the language that should be used for text values in the API response.

try {
    $result = $apiInstance->youtubeVideoAbuseReportReasonsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $hl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoAbuseReportReasonsApi->youtubeVideoAbuseReportReasonsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies the videoCategory resource parts that the API response will include. Supported values are id and snippet. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **hl** | **string**| The hl parameter specifies the language that should be used for text values in the API response. | [optional] [default to en_US]

### Return type

[**\Swagger\Client\Model\VideoAbuseReportReasonListResponse**](../Model/VideoAbuseReportReasonListResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

