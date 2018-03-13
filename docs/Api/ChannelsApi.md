# Swagger\Client\ChannelsApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeChannelsList**](ChannelsApi.md#youtubeChannelsList) | **GET** /channels | 
[**youtubeChannelsUpdate**](ChannelsApi.md#youtubeChannelsUpdate) | **PUT** /channels | 


# **youtubeChannelsList**
> \Swagger\Client\Model\ChannelListResponse youtubeChannelsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $category_id, $for_username, $hl, $id, $managed_by_me, $max_results, $mine, $my_subscribers, $on_behalf_of_content_owner, $page_token)



Returns a collection of zero or more channel resources that match the request criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies a comma-separated list of one or more channel resource properties that the API response will include.  If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a channel resource, the contentDetails property contains other properties, such as the uploads properties. As such, if you set part=contentDetails, the API response will also contain all of those nested properties.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$category_id = "category_id_example"; // string | The categoryId parameter specifies a YouTube guide category, thereby requesting YouTube channels associated with that category.
$for_username = "for_username_example"; // string | The forUsername parameter specifies a YouTube username, thereby requesting the channel associated with that username.
$hl = "hl_example"; // string | The hl parameter should be used for filter out the properties that are not in the given language. Used for the brandingSettings part.
$id = "id_example"; // string | The id parameter specifies a comma-separated list of the YouTube channel ID(s) for the resource(s) that are being retrieved. In a channel resource, the id property specifies the channel's YouTube channel ID.
$managed_by_me = true; // bool | Note: This parameter is intended exclusively for YouTube content partners.  Set this parameter's value to true to instruct the API to only return channels managed by the content owner that the onBehalfOfContentOwner parameter specifies. The user must be authenticated as a CMS account linked to the specified content owner and onBehalfOfContentOwner must be provided.
$max_results = 5; // int | The maxResults parameter specifies the maximum number of items that should be returned in the result set.
$mine = true; // bool | Set this parameter's value to true to instruct the API to only return channels owned by the authenticated user.
$my_subscribers = true; // bool | Use the subscriptions.list method and its mySubscribers parameter to retrieve a list of subscribers to the authenticated user's channel.
$on_behalf_of_content_owner = "on_behalf_of_content_owner_example"; // string | Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner.
$page_token = "page_token_example"; // string | The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.

try {
    $result = $apiInstance->youtubeChannelsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $category_id, $for_username, $hl, $id, $managed_by_me, $max_results, $mine, $my_subscribers, $on_behalf_of_content_owner, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->youtubeChannelsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies a comma-separated list of one or more channel resource properties that the API response will include.  If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a channel resource, the contentDetails property contains other properties, such as the uploads properties. As such, if you set part&#x3D;contentDetails, the API response will also contain all of those nested properties. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **category_id** | **string**| The categoryId parameter specifies a YouTube guide category, thereby requesting YouTube channels associated with that category. | [optional]
 **for_username** | **string**| The forUsername parameter specifies a YouTube username, thereby requesting the channel associated with that username. | [optional]
 **hl** | **string**| The hl parameter should be used for filter out the properties that are not in the given language. Used for the brandingSettings part. | [optional]
 **id** | **string**| The id parameter specifies a comma-separated list of the YouTube channel ID(s) for the resource(s) that are being retrieved. In a channel resource, the id property specifies the channel&#39;s YouTube channel ID. | [optional]
 **managed_by_me** | **bool**| Note: This parameter is intended exclusively for YouTube content partners.  Set this parameter&#39;s value to true to instruct the API to only return channels managed by the content owner that the onBehalfOfContentOwner parameter specifies. The user must be authenticated as a CMS account linked to the specified content owner and onBehalfOfContentOwner must be provided. | [optional]
 **max_results** | **int**| The maxResults parameter specifies the maximum number of items that should be returned in the result set. | [optional] [default to 5]
 **mine** | **bool**| Set this parameter&#39;s value to true to instruct the API to only return channels owned by the authenticated user. | [optional]
 **my_subscribers** | **bool**| Use the subscriptions.list method and its mySubscribers parameter to retrieve a list of subscribers to the authenticated user&#39;s channel. | [optional]
 **on_behalf_of_content_owner** | **string**| Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request&#39;s authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner. | [optional]
 **page_token** | **string**| The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved. | [optional]

### Return type

[**\Swagger\Client\Model\ChannelListResponse**](../Model/ChannelListResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeChannelsUpdate**
> \Swagger\Client\Model\Channel youtubeChannelsUpdate($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body, $on_behalf_of_content_owner)



Updates a channel's metadata. Note that this method currently only supports updates to the channel resource's brandingSettings and invideoPromotion objects and their child properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.  The API currently only allows the parameter value to be set to either brandingSettings or invideoPromotion. (You cannot update both of those parts with a single request.)  Note that this method overrides the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$body = new \Swagger\Client\Model\Channel(); // \Swagger\Client\Model\Channel | 
$on_behalf_of_content_owner = "on_behalf_of_content_owner_example"; // string | The onBehalfOfContentOwner parameter indicates that the authenticated user is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The actual CMS account that the user authenticates with needs to be linked to the specified YouTube content owner.

try {
    $result = $apiInstance->youtubeChannelsUpdate($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body, $on_behalf_of_content_owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->youtubeChannelsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.  The API currently only allows the parameter value to be set to either brandingSettings or invideoPromotion. (You cannot update both of those parts with a single request.)  Note that this method overrides the existing values for all of the mutable properties that are contained in any parts that the parameter value specifies. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **body** | [**\Swagger\Client\Model\Channel**](../Model/Channel.md)|  | [optional]
 **on_behalf_of_content_owner** | **string**| The onBehalfOfContentOwner parameter indicates that the authenticated user is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The actual CMS account that the user authenticates with needs to be linked to the specified YouTube content owner. | [optional]

### Return type

[**\Swagger\Client\Model\Channel**](../Model/Channel.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

