# Swagger\Client\CommentThreadsApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeCommentThreadsInsert**](CommentThreadsApi.md#youtubeCommentThreadsInsert) | **POST** /commentThreads | 
[**youtubeCommentThreadsList**](CommentThreadsApi.md#youtubeCommentThreadsList) | **GET** /commentThreads | 
[**youtubeCommentThreadsUpdate**](CommentThreadsApi.md#youtubeCommentThreadsUpdate) | **PUT** /commentThreads | 


# **youtubeCommentThreadsInsert**
> \Swagger\Client\Model\CommentThread youtubeCommentThreadsInsert($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body)



Creates a new top-level comment. To add a reply to an existing comment, use the comments.insert method instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter identifies the properties that the API response will include. Set the parameter value to snippet. The snippet part has a quota cost of 2 units.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$body = new \Swagger\Client\Model\CommentThread(); // \Swagger\Client\Model\CommentThread | 

try {
    $result = $apiInstance->youtubeCommentThreadsInsert($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentThreadsApi->youtubeCommentThreadsInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter identifies the properties that the API response will include. Set the parameter value to snippet. The snippet part has a quota cost of 2 units. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **body** | [**\Swagger\Client\Model\CommentThread**](../Model/CommentThread.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CommentThread**](../Model/CommentThread.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeCommentThreadsList**
> \Swagger\Client\Model\CommentThreadListResponse youtubeCommentThreadsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $all_threads_related_to_channel_id, $channel_id, $id, $max_results, $moderation_status, $order, $page_token, $search_terms, $text_format, $video_id)



Returns a list of comment threads that match the API request parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies a comma-separated list of one or more commentThread resource properties that the API response will include.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$all_threads_related_to_channel_id = "all_threads_related_to_channel_id_example"; // string | The allThreadsRelatedToChannelId parameter instructs the API to return all comment threads associated with the specified channel. The response can include comments about the channel or about the channel's videos.
$channel_id = "channel_id_example"; // string | The channelId parameter instructs the API to return comment threads containing comments about the specified channel. (The response will not include comments left on videos that the channel uploaded.)
$id = "id_example"; // string | The id parameter specifies a comma-separated list of comment thread IDs for the resources that should be retrieved.
$max_results = 20; // int | The maxResults parameter specifies the maximum number of items that should be returned in the result set.  Note: This parameter is not supported for use in conjunction with the id parameter.
$moderation_status = "published"; // string | Set this parameter to limit the returned comment threads to a particular moderation state.  Note: This parameter is not supported for use in conjunction with the id parameter.
$order = "order_example"; // string | The order parameter specifies the order in which the API response should list comment threads. Valid values are: - time - Comment threads are ordered by time. This is the default behavior. - relevance - Comment threads are ordered by relevance.Note: This parameter is not supported for use in conjunction with the id parameter.
$page_token = "page_token_example"; // string | The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken property identifies the next page of the result that can be retrieved.  Note: This parameter is not supported for use in conjunction with the id parameter.
$search_terms = "search_terms_example"; // string | The searchTerms parameter instructs the API to limit the API response to only contain comments that contain the specified search terms.  Note: This parameter is not supported for use in conjunction with the id parameter.
$text_format = "html"; // string | Set this parameter's value to html or plainText to instruct the API to return the comments left by users in html formatted or in plain text.
$video_id = "video_id_example"; // string | The videoId parameter instructs the API to return comment threads associated with the specified video ID.

try {
    $result = $apiInstance->youtubeCommentThreadsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $all_threads_related_to_channel_id, $channel_id, $id, $max_results, $moderation_status, $order, $page_token, $search_terms, $text_format, $video_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentThreadsApi->youtubeCommentThreadsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies a comma-separated list of one or more commentThread resource properties that the API response will include. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **all_threads_related_to_channel_id** | **string**| The allThreadsRelatedToChannelId parameter instructs the API to return all comment threads associated with the specified channel. The response can include comments about the channel or about the channel&#39;s videos. | [optional]
 **channel_id** | **string**| The channelId parameter instructs the API to return comment threads containing comments about the specified channel. (The response will not include comments left on videos that the channel uploaded.) | [optional]
 **id** | **string**| The id parameter specifies a comma-separated list of comment thread IDs for the resources that should be retrieved. | [optional]
 **max_results** | **int**| The maxResults parameter specifies the maximum number of items that should be returned in the result set.  Note: This parameter is not supported for use in conjunction with the id parameter. | [optional] [default to 20]
 **moderation_status** | **string**| Set this parameter to limit the returned comment threads to a particular moderation state.  Note: This parameter is not supported for use in conjunction with the id parameter. | [optional] [default to published]
 **order** | **string**| The order parameter specifies the order in which the API response should list comment threads. Valid values are: - time - Comment threads are ordered by time. This is the default behavior. - relevance - Comment threads are ordered by relevance.Note: This parameter is not supported for use in conjunction with the id parameter. | [optional]
 **page_token** | **string**| The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken property identifies the next page of the result that can be retrieved.  Note: This parameter is not supported for use in conjunction with the id parameter. | [optional]
 **search_terms** | **string**| The searchTerms parameter instructs the API to limit the API response to only contain comments that contain the specified search terms.  Note: This parameter is not supported for use in conjunction with the id parameter. | [optional]
 **text_format** | **string**| Set this parameter&#39;s value to html or plainText to instruct the API to return the comments left by users in html formatted or in plain text. | [optional] [default to html]
 **video_id** | **string**| The videoId parameter instructs the API to return comment threads associated with the specified video ID. | [optional]

### Return type

[**\Swagger\Client\Model\CommentThreadListResponse**](../Model/CommentThreadListResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeCommentThreadsUpdate**
> \Swagger\Client\Model\CommentThread youtubeCommentThreadsUpdate($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body)



Modifies the top-level comment in a comment thread.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentThreadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies a comma-separated list of commentThread resource properties that the API response will include. You must at least include the snippet part in the parameter value since that part contains all of the properties that the API request can update.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$body = new \Swagger\Client\Model\CommentThread(); // \Swagger\Client\Model\CommentThread | 

try {
    $result = $apiInstance->youtubeCommentThreadsUpdate($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentThreadsApi->youtubeCommentThreadsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies a comma-separated list of commentThread resource properties that the API response will include. You must at least include the snippet part in the parameter value since that part contains all of the properties that the API request can update. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **body** | [**\Swagger\Client\Model\CommentThread**](../Model/CommentThread.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CommentThread**](../Model/CommentThread.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

