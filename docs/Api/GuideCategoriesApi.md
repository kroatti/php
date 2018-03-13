# Swagger\Client\GuideCategoriesApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeGuideCategoriesList**](GuideCategoriesApi.md#youtubeGuideCategoriesList) | **GET** /guideCategories | 


# **youtubeGuideCategoriesList**
> \Swagger\Client\Model\GuideCategoryListResponse youtubeGuideCategoriesList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $hl, $id, $region_code)



Returns a list of categories that can be associated with YouTube channels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\GuideCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies the guideCategory resource properties that the API response will include. Set the parameter value to snippet.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$hl = "en-US"; // string | The hl parameter specifies the language that will be used for text values in the API response.
$id = "id_example"; // string | The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID.
$region_code = "region_code_example"; // string | The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.

try {
    $result = $apiInstance->youtubeGuideCategoriesList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $hl, $id, $region_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuideCategoriesApi->youtubeGuideCategoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies the guideCategory resource properties that the API response will include. Set the parameter value to snippet. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **hl** | **string**| The hl parameter specifies the language that will be used for text values in the API response. | [optional] [default to en-US]
 **id** | **string**| The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID. | [optional]
 **region_code** | **string**| The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. | [optional]

### Return type

[**\Swagger\Client\Model\GuideCategoryListResponse**](../Model/GuideCategoryListResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

