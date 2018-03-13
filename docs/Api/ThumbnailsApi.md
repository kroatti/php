# Swagger\Client\ThumbnailsApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeThumbnailsSet**](ThumbnailsApi.md#youtubeThumbnailsSet) | **POST** /thumbnails/set | 


# **youtubeThumbnailsSet**
> \Swagger\Client\Model\ThumbnailSetResponse youtubeThumbnailsSet($video_id, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $on_behalf_of_content_owner)



Uploads a custom video thumbnail to YouTube and sets it for a video.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ThumbnailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$video_id = "video_id_example"; // string | The videoId parameter specifies a YouTube video ID for which the custom video thumbnail is being provided.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$on_behalf_of_content_owner = "on_behalf_of_content_owner_example"; // string | Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The actual CMS account that the user authenticates with must be linked to the specified YouTube content owner.

try {
    $result = $apiInstance->youtubeThumbnailsSet($video_id, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $on_behalf_of_content_owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThumbnailsApi->youtubeThumbnailsSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **string**| The videoId parameter specifies a YouTube video ID for which the custom video thumbnail is being provided. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **on_behalf_of_content_owner** | **string**| Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request&#39;s authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The actual CMS account that the user authenticates with must be linked to the specified YouTube content owner. | [optional]

### Return type

[**\Swagger\Client\Model\ThumbnailSetResponse**](../Model/ThumbnailSetResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: application/octet-stream, image/jpeg, image/png
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

