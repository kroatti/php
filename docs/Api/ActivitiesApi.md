# Swagger\Client\ActivitiesApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeActivitiesInsert**](ActivitiesApi.md#youtubeActivitiesInsert) | **POST** /activities | 
[**youtubeActivitiesList**](ActivitiesApi.md#youtubeActivitiesList) | **GET** /activities | 


# **youtubeActivitiesInsert**
> \Swagger\Client\Model\Activity youtubeActivitiesInsert($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body)



Posts a bulletin for a specific channel. (The user submitting the request must be authorized to act on the channel's behalf.)  Note: Even though an activity resource can contain information about actions like a user rating a video or marking a video as a favorite, you need to use other API methods to generate those activity resources. For example, you would use the API's videos.rate() method to rate a video and the playlistItems.insert() method to mark a video as a favorite.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$body = new \Swagger\Client\Model\Activity(); // \Swagger\Client\Model\Activity | 

try {
    $result = $apiInstance->youtubeActivitiesInsert($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->youtubeActivitiesInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter serves two purposes in this operation. It identifies the properties that the write operation will set as well as the properties that the API response will include. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **body** | [**\Swagger\Client\Model\Activity**](../Model/Activity.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Activity**](../Model/Activity.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeActivitiesList**
> \Swagger\Client\Model\ActivityListResponse youtubeActivitiesList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $channel_id, $home, $max_results, $mine, $page_token, $published_after, $published_before, $region_code)



Returns a list of channel activity events that match the request criteria. For example, you can retrieve events associated with a particular channel, events associated with the user's subscriptions and Google+ friends, or the YouTube home page feed, which is customized for each user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies a comma-separated list of one or more activity resource properties that the API response will include.  If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in an activity resource, the snippet property contains other properties that identify the type of activity, a display title for the activity, and so forth. If you set part=snippet, the API response will also contain all of those nested properties.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$channel_id = "channel_id_example"; // string | The channelId parameter specifies a unique YouTube channel ID. The API will then return a list of that channel's activities.
$home = true; // bool | Set this parameter's value to true to retrieve the activity feed that displays on the YouTube home page for the currently authenticated user.
$max_results = 5; // int | The maxResults parameter specifies the maximum number of items that should be returned in the result set.
$mine = true; // bool | Set this parameter's value to true to retrieve a feed of the authenticated user's activities.
$page_token = "page_token_example"; // string | The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.
$published_after = "published_after_example"; // string | The publishedAfter parameter specifies the earliest date and time that an activity could have occurred for that activity to be included in the API response. If the parameter value specifies a day, but not a time, then any activities that occurred that day will be included in the result set. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format.
$published_before = "published_before_example"; // string | The publishedBefore parameter specifies the date and time before which an activity must have occurred for that activity to be included in the API response. If the parameter value specifies a day, but not a time, then any activities that occurred that day will be excluded from the result set. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format.
$region_code = "region_code_example"; // string | The regionCode parameter instructs the API to return results for the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. YouTube uses this value when the authorized user's previous activity on YouTube does not provide enough information to generate the activity feed.

try {
    $result = $apiInstance->youtubeActivitiesList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $channel_id, $home, $max_results, $mine, $page_token, $published_after, $published_before, $region_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->youtubeActivitiesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies a comma-separated list of one or more activity resource properties that the API response will include.  If the parameter identifies a property that contains child properties, the child properties will be included in the response. For example, in an activity resource, the snippet property contains other properties that identify the type of activity, a display title for the activity, and so forth. If you set part&#x3D;snippet, the API response will also contain all of those nested properties. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **channel_id** | **string**| The channelId parameter specifies a unique YouTube channel ID. The API will then return a list of that channel&#39;s activities. | [optional]
 **home** | **bool**| Set this parameter&#39;s value to true to retrieve the activity feed that displays on the YouTube home page for the currently authenticated user. | [optional]
 **max_results** | **int**| The maxResults parameter specifies the maximum number of items that should be returned in the result set. | [optional] [default to 5]
 **mine** | **bool**| Set this parameter&#39;s value to true to retrieve a feed of the authenticated user&#39;s activities. | [optional]
 **page_token** | **string**| The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved. | [optional]
 **published_after** | **string**| The publishedAfter parameter specifies the earliest date and time that an activity could have occurred for that activity to be included in the API response. If the parameter value specifies a day, but not a time, then any activities that occurred that day will be included in the result set. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional]
 **published_before** | **string**| The publishedBefore parameter specifies the date and time before which an activity must have occurred for that activity to be included in the API response. If the parameter value specifies a day, but not a time, then any activities that occurred that day will be excluded from the result set. The value is specified in ISO 8601 (YYYY-MM-DDThh:mm:ss.sZ) format. | [optional]
 **region_code** | **string**| The regionCode parameter instructs the API to return results for the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. YouTube uses this value when the authorized user&#39;s previous activity on YouTube does not provide enough information to generate the activity feed. | [optional]

### Return type

[**\Swagger\Client\Model\ActivityListResponse**](../Model/ActivityListResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

