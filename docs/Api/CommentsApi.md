# Swagger\Client\CommentsApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeCommentsDelete**](CommentsApi.md#youtubeCommentsDelete) | **DELETE** /comments | 
[**youtubeCommentsInsert**](CommentsApi.md#youtubeCommentsInsert) | **POST** /comments | 
[**youtubeCommentsList**](CommentsApi.md#youtubeCommentsList) | **GET** /comments | 
[**youtubeCommentsMarkAsSpam**](CommentsApi.md#youtubeCommentsMarkAsSpam) | **POST** /comments/markAsSpam | 
[**youtubeCommentsSetModerationStatus**](CommentsApi.md#youtubeCommentsSetModerationStatus) | **POST** /comments/setModerationStatus | 
[**youtubeCommentsUpdate**](CommentsApi.md#youtubeCommentsUpdate) | **PUT** /comments | 


# **youtubeCommentsDelete**
> youtubeCommentsDelete($id, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip)



Deletes a comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id parameter specifies the comment ID for the resource that is being deleted.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.

try {
    $apiInstance->youtubeCommentsDelete($id, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->youtubeCommentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id parameter specifies the comment ID for the resource that is being deleted. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]

### Return type

void (empty response body)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeCommentsInsert**
> \Swagger\Client\Model\Comment youtubeCommentsInsert($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body)



Creates a reply to an existing comment. Note: To create a top-level comment, use the commentThreads.insert method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentsApi(
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
$body = new \Swagger\Client\Model\Comment(); // \Swagger\Client\Model\Comment | 

try {
    $result = $apiInstance->youtubeCommentsInsert($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->youtubeCommentsInsert: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Swagger\Client\Model\Comment**](../Model/Comment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeCommentsList**
> \Swagger\Client\Model\CommentListResponse youtubeCommentsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $id, $max_results, $page_token, $parent_id, $text_format)



Returns a list of comments that match the API request parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies a comma-separated list of one or more comment resource properties that the API response will include.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$id = "id_example"; // string | The id parameter specifies a comma-separated list of comment IDs for the resources that are being retrieved. In a comment resource, the id property specifies the comment's ID.
$max_results = 20; // int | The maxResults parameter specifies the maximum number of items that should be returned in the result set.  Note: This parameter is not supported for use in conjunction with the id parameter.
$page_token = "page_token_example"; // string | The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken property identifies the next page of the result that can be retrieved.  Note: This parameter is not supported for use in conjunction with the id parameter.
$parent_id = "parent_id_example"; // string | The parentId parameter specifies the ID of the comment for which replies should be retrieved.  Note: YouTube currently supports replies only for top-level comments. However, replies to replies may be supported in the future.
$text_format = "html"; // string | This parameter indicates whether the API should return comments formatted as HTML or as plain text.

try {
    $result = $apiInstance->youtubeCommentsList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $id, $max_results, $page_token, $parent_id, $text_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->youtubeCommentsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies a comma-separated list of one or more comment resource properties that the API response will include. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **id** | **string**| The id parameter specifies a comma-separated list of comment IDs for the resources that are being retrieved. In a comment resource, the id property specifies the comment&#39;s ID. | [optional]
 **max_results** | **int**| The maxResults parameter specifies the maximum number of items that should be returned in the result set.  Note: This parameter is not supported for use in conjunction with the id parameter. | [optional] [default to 20]
 **page_token** | **string**| The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken property identifies the next page of the result that can be retrieved.  Note: This parameter is not supported for use in conjunction with the id parameter. | [optional]
 **parent_id** | **string**| The parentId parameter specifies the ID of the comment for which replies should be retrieved.  Note: YouTube currently supports replies only for top-level comments. However, replies to replies may be supported in the future. | [optional]
 **text_format** | **string**| This parameter indicates whether the API should return comments formatted as HTML or as plain text. | [optional] [default to html]

### Return type

[**\Swagger\Client\Model\CommentListResponse**](../Model/CommentListResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeCommentsMarkAsSpam**
> youtubeCommentsMarkAsSpam($id, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip)



Expresses the caller's opinion that one or more comments should be flagged as spam.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id parameter specifies a comma-separated list of IDs of comments that the caller believes should be classified as spam.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.

try {
    $apiInstance->youtubeCommentsMarkAsSpam($id, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->youtubeCommentsMarkAsSpam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id parameter specifies a comma-separated list of IDs of comments that the caller believes should be classified as spam. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]

### Return type

void (empty response body)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeCommentsSetModerationStatus**
> youtubeCommentsSetModerationStatus($id, $moderation_status, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $ban_author)



Sets the moderation status of one or more comments. The API request must be authorized by the owner of the channel or video associated with the comments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The id parameter specifies a comma-separated list of IDs that identify the comments for which you are updating the moderation status.
$moderation_status = "moderation_status_example"; // string | Identifies the new moderation status of the specified comments.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$ban_author = false; // bool | The banAuthor parameter lets you indicate that you want to automatically reject any additional comments written by the comment's author. Set the parameter value to true to ban the author.  Note: This parameter is only valid if the moderationStatus parameter is also set to rejected.

try {
    $apiInstance->youtubeCommentsSetModerationStatus($id, $moderation_status, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $ban_author);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->youtubeCommentsSetModerationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id parameter specifies a comma-separated list of IDs that identify the comments for which you are updating the moderation status. |
 **moderation_status** | **string**| Identifies the new moderation status of the specified comments. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **ban_author** | **bool**| The banAuthor parameter lets you indicate that you want to automatically reject any additional comments written by the comment&#39;s author. Set the parameter value to true to ban the author.  Note: This parameter is only valid if the moderationStatus parameter is also set to rejected. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **youtubeCommentsUpdate**
> \Swagger\Client\Model\Comment youtubeCommentsUpdate($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body)



Modifies a comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter identifies the properties that the API response will include. You must at least include the snippet part in the parameter value since that part contains all of the properties that the API request can update.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$body = new \Swagger\Client\Model\Comment(); // \Swagger\Client\Model\Comment | 

try {
    $result = $apiInstance->youtubeCommentsUpdate($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->youtubeCommentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter identifies the properties that the API response will include. You must at least include the snippet part in the parameter value since that part contains all of the properties that the API request can update. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **body** | [**\Swagger\Client\Model\Comment**](../Model/Comment.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Comment**](../Model/Comment.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

