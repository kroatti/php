# Swagger\Client\ChannelSectionsApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeChannelSectionsDelete**](ChannelSectionsApi.md#youtubeChannelSectionsDelete) | **DELETE** /channelSections | 
[**youtubeChannelSectionsInsert**](ChannelSectionsApi.md#youtubeChannelSectionsInsert) | **POST** /channelSections | 
[**youtubeChannelSectionsList**](ChannelSectionsApi.md#youtubeChannelSectionsList) | **GET** /channelSections | 
[**youtubeChannelSectionsUpdate**](ChannelSectionsApi.md#youtubeChannelSectionsUpdate) | **PUT** /channelSections | 


# **youtubeChannelSectionsDelete**
> youtubeChannelSectionsDelete($id, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $on_behalf_of_content_owner)



Deletes a channelSection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id parameter specifies the YouTube channelSection ID for the resource that is being deleted. In a channelSection resource, the id property specifies the YouTube channelSection ID.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$on_behalf_of_content_owner = "on_behalf_of_content_owner_example"; // string | Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner.

try {
    $apiInstance->youtubeChannelSectionsDelete($id, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $on_behalf_of_content_owner);
} catch (Exception $e) {
    echo 'Exception when calling ChannelSectionsApi->youtubeChannelSectionsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id parameter specifies the YouTube channelSection ID for the resource that is being deleted. In a channelSection resource, the id property specifies the YouTube channelSection ID. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **on_behalf_of_content_owner** | **string**| Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request&#39;s authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner. | [optional]

### Return type

void (empty response body)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeChannelSectionsInsert**
> \Swagger\Client\Model\ChannelSection youtubeChannelSectionsInsert($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body, $on_behalf_of_content_owner, $on_behalf_of_content_owner_channel)



Adds a channelSection for the authenticated user's channel.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.  The part names that you can include in the parameter value are snippet and contentDetails.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$body = new \Swagger\Client\Model\ChannelSection(); // \Swagger\Client\Model\ChannelSection | 
$on_behalf_of_content_owner = "on_behalf_of_content_owner_example"; // string | Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner.
$on_behalf_of_content_owner_channel = "on_behalf_of_content_owner_channel_example"; // string | This parameter can only be used in a properly authorized request. Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwnerChannel parameter specifies the YouTube channel ID of the channel to which a video is being added. This parameter is required when a request specifies a value for the onBehalfOfContentOwner parameter, and it can only be used in conjunction with that parameter. In addition, the request must be authorized using a CMS account that is linked to the content owner that the onBehalfOfContentOwner parameter specifies. Finally, the channel that the onBehalfOfContentOwnerChannel parameter value specifies must be linked to the content owner that the onBehalfOfContentOwner parameter specifies.  This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and perform actions on behalf of the channel specified in the parameter value, without having to provide authentication credentials for each separate channel.

try {
    $result = $apiInstance->youtubeChannelSectionsInsert($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body, $on_behalf_of_content_owner, $on_behalf_of_content_owner_channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelSectionsApi->youtubeChannelSectionsInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.  The part names that you can include in the parameter value are snippet and contentDetails. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **body** | [**\Swagger\Client\Model\ChannelSection**](../Model/ChannelSection.md)|  | [optional]
 **on_behalf_of_content_owner** | **string**| Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request&#39;s authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner. | [optional]
 **on_behalf_of_content_owner_channel** | **string**| This parameter can only be used in a properly authorized request. Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwnerChannel parameter specifies the YouTube channel ID of the channel to which a video is being added. This parameter is required when a request specifies a value for the onBehalfOfContentOwner parameter, and it can only be used in conjunction with that parameter. In addition, the request must be authorized using a CMS account that is linked to the content owner that the onBehalfOfContentOwner parameter specifies. Finally, the channel that the onBehalfOfContentOwnerChannel parameter value specifies must be linked to the content owner that the onBehalfOfContentOwner parameter specifies.  This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and perform actions on behalf of the channel specified in the parameter value, without having to provide authentication credentials for each separate channel. | [optional]

### Return type

[**\Swagger\Client\Model\ChannelSection**](../Model/ChannelSection.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeChannelSectionsList**
> \Swagger\Client\Model\ChannelSectionListResponse youtubeChannelSectionsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $channel_id, $hl, $id, $mine, $on_behalf_of_content_owner)



Returns channelSection resources that match the API request criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies a comma-separated list of one or more channelSection resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and contentDetails.  If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a channelSection resource, the snippet property contains other properties, such as a display title for the channelSection. If you set part=snippet, the API response will also contain all of those nested properties.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$channel_id = "channel_id_example"; // string | The channelId parameter specifies a YouTube channel ID. The API will only return that channel's channelSections.
$hl = "hl_example"; // string | The hl parameter indicates that the snippet.localized property values in the returned channelSection resources should be in the specified language if localized values for that language are available. For example, if the API request specifies hl=de, the snippet.localized properties in the API response will contain German titles if German titles are available. Channel owners can provide localized channel section titles using either the channelSections.insert or channelSections.update method.
$id = "id_example"; // string | The id parameter specifies a comma-separated list of the YouTube channelSection ID(s) for the resource(s) that are being retrieved. In a channelSection resource, the id property specifies the YouTube channelSection ID.
$mine = true; // bool | Set this parameter's value to true to retrieve a feed of the authenticated user's channelSections.
$on_behalf_of_content_owner = "on_behalf_of_content_owner_example"; // string | Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner.

try {
    $result = $apiInstance->youtubeChannelSectionsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $channel_id, $hl, $id, $mine, $on_behalf_of_content_owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelSectionsApi->youtubeChannelSectionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies a comma-separated list of one or more channelSection resource properties that the API response will include. The part names that you can include in the parameter value are id, snippet, and contentDetails.  If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in a channelSection resource, the snippet property contains other properties, such as a display title for the channelSection. If you set part&#x3D;snippet, the API response will also contain all of those nested properties. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **channel_id** | **string**| The channelId parameter specifies a YouTube channel ID. The API will only return that channel&#39;s channelSections. | [optional]
 **hl** | **string**| The hl parameter indicates that the snippet.localized property values in the returned channelSection resources should be in the specified language if localized values for that language are available. For example, if the API request specifies hl&#x3D;de, the snippet.localized properties in the API response will contain German titles if German titles are available. Channel owners can provide localized channel section titles using either the channelSections.insert or channelSections.update method. | [optional]
 **id** | **string**| The id parameter specifies a comma-separated list of the YouTube channelSection ID(s) for the resource(s) that are being retrieved. In a channelSection resource, the id property specifies the YouTube channelSection ID. | [optional]
 **mine** | **bool**| Set this parameter&#39;s value to true to retrieve a feed of the authenticated user&#39;s channelSections. | [optional]
 **on_behalf_of_content_owner** | **string**| Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request&#39;s authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner. | [optional]

### Return type

[**\Swagger\Client\Model\ChannelSectionListResponse**](../Model/ChannelSectionListResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeChannelSectionsUpdate**
> \Swagger\Client\Model\ChannelSection youtubeChannelSectionsUpdate($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body, $on_behalf_of_content_owner)



Update a channelSection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ChannelSectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.  The part names that you can include in the parameter value are snippet and contentDetails.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$body = new \Swagger\Client\Model\ChannelSection(); // \Swagger\Client\Model\ChannelSection | 
$on_behalf_of_content_owner = "on_behalf_of_content_owner_example"; // string | Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner.

try {
    $result = $apiInstance->youtubeChannelSectionsUpdate($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body, $on_behalf_of_content_owner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelSectionsApi->youtubeChannelSectionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.  The part names that you can include in the parameter value are snippet and contentDetails. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **body** | [**\Swagger\Client\Model\ChannelSection**](../Model/ChannelSection.md)|  | [optional]
 **on_behalf_of_content_owner** | **string**| Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request&#39;s authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner. | [optional]

### Return type

[**\Swagger\Client\Model\ChannelSection**](../Model/ChannelSection.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

