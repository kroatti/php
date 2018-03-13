# Swagger\Client\SearchApi

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**youtubeSearchList**](SearchApi.md#youtubeSearchList) | **GET** /search | 


# **youtubeSearchList**
> \Swagger\Client\Model\SearchListResponse youtubeSearchList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $channel_id, $channel_type, $event_type, $for_content_owner, $for_developer, $for_mine, $location, $location_radius, $max_results, $on_behalf_of_content_owner, $order, $page_token, $published_after, $published_before, $q, $region_code, $related_to_video_id, $relevance_language, $safe_search, $topic_id, $type, $video_caption, $video_category_id, $video_definition, $video_dimension, $video_duration, $video_embeddable, $video_license, $video_syndicated, $video_type)



Returns a collection of search results that match the query parameters specified in the API request. By default, a search result set identifies matching video, channel, and playlist resources, but you can also configure queries to only retrieve a specific type of resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$part = "part_example"; // string | The part parameter specifies a comma-separated list of one or more search resource properties that the API response will include. Set the parameter value to snippet.
$alt = "json"; // string | Data format for the response.
$fields = "fields_example"; // string | Selector specifying which fields to include in a partial response.
$key = "key_example"; // string | API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token.
$oauth_token = "oauth_token_example"; // string | OAuth 2.0 token for the current user.
$pretty_print = true; // bool | Returns response with indentations and line breaks.
$quota_user = "quota_user_example"; // string | Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided.
$user_ip = "user_ip_example"; // string | IP address of the site where the request originates. Use this if you want to enforce per-user limits.
$channel_id = "channel_id_example"; // string | The channelId parameter indicates that the API response should only contain resources created by the channel
$channel_type = "channel_type_example"; // string | The channelType parameter lets you restrict a search to a particular type of channel.
$event_type = "event_type_example"; // string | The eventType parameter restricts a search to broadcast events. If you specify a value for this parameter, you must also set the type parameter's value to video.
$for_content_owner = true; // bool | Note: This parameter is intended exclusively for YouTube content partners.  The forContentOwner parameter restricts the search to only retrieve resources owned by the content owner specified by the onBehalfOfContentOwner parameter. The user must be authenticated using a CMS account linked to the specified content owner and onBehalfOfContentOwner must be provided.
$for_developer = true; // bool | The forDeveloper parameter restricts the search to only retrieve videos uploaded via the developer's application or website. The API server uses the request's authorization credentials to identify the developer. Therefore, a developer can restrict results to videos uploaded through the developer's own app or website but not to videos uploaded through other apps or sites.
$for_mine = true; // bool | The forMine parameter restricts the search to only retrieve videos owned by the authenticated user. If you set this parameter to true, then the type parameter's value must also be set to video.
$location = "location_example"; // string | The location parameter, in conjunction with the locationRadius parameter, defines a circular geographic area and also restricts a search to videos that specify, in their metadata, a geographic location that falls within that area. The parameter value is a string that specifies latitude/longitude coordinates e.g. (37.42307,-122.08427).   - The location parameter value identifies the point at the center of the area. - The locationRadius parameter specifies the maximum distance that the location associated with a video can be from that point for the video to still be included in the search results.The API returns an error if your request specifies a value for the location parameter but does not also specify a value for the locationRadius parameter.
$location_radius = "location_radius_example"; // string | The locationRadius parameter, in conjunction with the location parameter, defines a circular geographic area.  The parameter value must be a floating point number followed by a measurement unit. Valid measurement units are m, km, ft, and mi. For example, valid parameter values include 1500m, 5km, 10000ft, and 0.75mi. The API does not support locationRadius parameter values larger than 1000 kilometers.  Note: See the definition of the location parameter for more information.
$max_results = 5; // int | The maxResults parameter specifies the maximum number of items that should be returned in the result set.
$on_behalf_of_content_owner = "on_behalf_of_content_owner_example"; // string | Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner.
$order = "relevance"; // string | The order parameter specifies the method that will be used to order resources in the API response.
$page_token = "page_token_example"; // string | The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved.
$published_after = "published_after_example"; // string | The publishedAfter parameter indicates that the API response should only contain resources created after the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z).
$published_before = "published_before_example"; // string | The publishedBefore parameter indicates that the API response should only contain resources created before the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z).
$q = "q_example"; // string | The q parameter specifies the query term to search for.  Your request can also use the Boolean NOT (-) and OR (|) operators to exclude videos or to find videos that are associated with one of several search terms. For example, to search for videos matching either \"boating\" or \"sailing\", set the q parameter value to boating|sailing. Similarly, to search for videos matching either \"boating\" or \"sailing\" but not \"fishing\", set the q parameter value to boating|sailing -fishing. Note that the pipe character must be URL-escaped when it is sent in your API request. The URL-escaped value for the pipe character is %7C.
$region_code = "region_code_example"; // string | The regionCode parameter instructs the API to return search results for the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
$related_to_video_id = "related_to_video_id_example"; // string | The relatedToVideoId parameter retrieves a list of videos that are related to the video that the parameter value identifies. The parameter value must be set to a YouTube video ID and, if you are using this parameter, the type parameter must be set to video.
$relevance_language = "relevance_language_example"; // string | The relevanceLanguage parameter instructs the API to return search results that are most relevant to the specified language. The parameter value is typically an ISO 639-1 two-letter language code. However, you should use the values zh-Hans for simplified Chinese and zh-Hant for traditional Chinese. Please note that results in other languages will still be returned if they are highly relevant to the search query term.
$safe_search = "safe_search_example"; // string | The safeSearch parameter indicates whether the search results should include restricted content as well as standard content.
$topic_id = "topic_id_example"; // string | The topicId parameter indicates that the API response should only contain resources associated with the specified topic. The value identifies a Freebase topic ID.
$type = "video,channel,playlist"; // string | The type parameter restricts a search query to only retrieve a particular type of resource. The value is a comma-separated list of resource types.
$video_caption = "video_caption_example"; // string | The videoCaption parameter indicates whether the API should filter video search results based on whether they have captions. If you specify a value for this parameter, you must also set the type parameter's value to video.
$video_category_id = "video_category_id_example"; // string | The videoCategoryId parameter filters video search results based on their category. If you specify a value for this parameter, you must also set the type parameter's value to video.
$video_definition = "video_definition_example"; // string | The videoDefinition parameter lets you restrict a search to only include either high definition (HD) or standard definition (SD) videos. HD videos are available for playback in at least 720p, though higher resolutions, like 1080p, might also be available. If you specify a value for this parameter, you must also set the type parameter's value to video.
$video_dimension = "video_dimension_example"; // string | The videoDimension parameter lets you restrict a search to only retrieve 2D or 3D videos. If you specify a value for this parameter, you must also set the type parameter's value to video.
$video_duration = "video_duration_example"; // string | The videoDuration parameter filters video search results based on their duration. If you specify a value for this parameter, you must also set the type parameter's value to video.
$video_embeddable = "video_embeddable_example"; // string | The videoEmbeddable parameter lets you to restrict a search to only videos that can be embedded into a webpage. If you specify a value for this parameter, you must also set the type parameter's value to video.
$video_license = "video_license_example"; // string | The videoLicense parameter filters search results to only include videos with a particular license. YouTube lets video uploaders choose to attach either the Creative Commons license or the standard YouTube license to each of their videos. If you specify a value for this parameter, you must also set the type parameter's value to video.
$video_syndicated = "video_syndicated_example"; // string | The videoSyndicated parameter lets you to restrict a search to only videos that can be played outside youtube.com. If you specify a value for this parameter, you must also set the type parameter's value to video.
$video_type = "video_type_example"; // string | The videoType parameter lets you restrict a search to a particular type of videos. If you specify a value for this parameter, you must also set the type parameter's value to video.

try {
    $result = $apiInstance->youtubeSearchList($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $channel_id, $channel_type, $event_type, $for_content_owner, $for_developer, $for_mine, $location, $location_radius, $max_results, $on_behalf_of_content_owner, $order, $page_token, $published_after, $published_before, $q, $region_code, $related_to_video_id, $relevance_language, $safe_search, $topic_id, $type, $video_caption, $video_category_id, $video_definition, $video_dimension, $video_duration, $video_embeddable, $video_license, $video_syndicated, $video_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->youtubeSearchList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **part** | **string**| The part parameter specifies a comma-separated list of one or more search resource properties that the API response will include. Set the parameter value to snippet. |
 **alt** | **string**| Data format for the response. | [optional] [default to json]
 **fields** | **string**| Selector specifying which fields to include in a partial response. | [optional]
 **key** | **string**| API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. | [optional]
 **oauth_token** | **string**| OAuth 2.0 token for the current user. | [optional]
 **pretty_print** | **bool**| Returns response with indentations and line breaks. | [optional] [default to true]
 **quota_user** | **string**| Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. | [optional]
 **user_ip** | **string**| IP address of the site where the request originates. Use this if you want to enforce per-user limits. | [optional]
 **channel_id** | **string**| The channelId parameter indicates that the API response should only contain resources created by the channel | [optional]
 **channel_type** | **string**| The channelType parameter lets you restrict a search to a particular type of channel. | [optional]
 **event_type** | **string**| The eventType parameter restricts a search to broadcast events. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **for_content_owner** | **bool**| Note: This parameter is intended exclusively for YouTube content partners.  The forContentOwner parameter restricts the search to only retrieve resources owned by the content owner specified by the onBehalfOfContentOwner parameter. The user must be authenticated using a CMS account linked to the specified content owner and onBehalfOfContentOwner must be provided. | [optional]
 **for_developer** | **bool**| The forDeveloper parameter restricts the search to only retrieve videos uploaded via the developer&#39;s application or website. The API server uses the request&#39;s authorization credentials to identify the developer. Therefore, a developer can restrict results to videos uploaded through the developer&#39;s own app or website but not to videos uploaded through other apps or sites. | [optional]
 **for_mine** | **bool**| The forMine parameter restricts the search to only retrieve videos owned by the authenticated user. If you set this parameter to true, then the type parameter&#39;s value must also be set to video. | [optional]
 **location** | **string**| The location parameter, in conjunction with the locationRadius parameter, defines a circular geographic area and also restricts a search to videos that specify, in their metadata, a geographic location that falls within that area. The parameter value is a string that specifies latitude/longitude coordinates e.g. (37.42307,-122.08427).   - The location parameter value identifies the point at the center of the area. - The locationRadius parameter specifies the maximum distance that the location associated with a video can be from that point for the video to still be included in the search results.The API returns an error if your request specifies a value for the location parameter but does not also specify a value for the locationRadius parameter. | [optional]
 **location_radius** | **string**| The locationRadius parameter, in conjunction with the location parameter, defines a circular geographic area.  The parameter value must be a floating point number followed by a measurement unit. Valid measurement units are m, km, ft, and mi. For example, valid parameter values include 1500m, 5km, 10000ft, and 0.75mi. The API does not support locationRadius parameter values larger than 1000 kilometers.  Note: See the definition of the location parameter for more information. | [optional]
 **max_results** | **int**| The maxResults parameter specifies the maximum number of items that should be returned in the result set. | [optional] [default to 5]
 **on_behalf_of_content_owner** | **string**| Note: This parameter is intended exclusively for YouTube content partners.  The onBehalfOfContentOwner parameter indicates that the request&#39;s authorization credentials identify a YouTube CMS user who is acting on behalf of the content owner specified in the parameter value. This parameter is intended for YouTube content partners that own and manage many different YouTube channels. It allows content owners to authenticate once and get access to all their video and channel data, without having to provide authentication credentials for each individual channel. The CMS account that the user authenticates with must be linked to the specified YouTube content owner. | [optional]
 **order** | **string**| The order parameter specifies the method that will be used to order resources in the API response. | [optional] [default to relevance]
 **page_token** | **string**| The pageToken parameter identifies a specific page in the result set that should be returned. In an API response, the nextPageToken and prevPageToken properties identify other pages that could be retrieved. | [optional]
 **published_after** | **string**| The publishedAfter parameter indicates that the API response should only contain resources created after the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z). | [optional]
 **published_before** | **string**| The publishedBefore parameter indicates that the API response should only contain resources created before the specified time. The value is an RFC 3339 formatted date-time value (1970-01-01T00:00:00Z). | [optional]
 **q** | **string**| The q parameter specifies the query term to search for.  Your request can also use the Boolean NOT (-) and OR (|) operators to exclude videos or to find videos that are associated with one of several search terms. For example, to search for videos matching either \&quot;boating\&quot; or \&quot;sailing\&quot;, set the q parameter value to boating|sailing. Similarly, to search for videos matching either \&quot;boating\&quot; or \&quot;sailing\&quot; but not \&quot;fishing\&quot;, set the q parameter value to boating|sailing -fishing. Note that the pipe character must be URL-escaped when it is sent in your API request. The URL-escaped value for the pipe character is %7C. | [optional]
 **region_code** | **string**| The regionCode parameter instructs the API to return search results for the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. | [optional]
 **related_to_video_id** | **string**| The relatedToVideoId parameter retrieves a list of videos that are related to the video that the parameter value identifies. The parameter value must be set to a YouTube video ID and, if you are using this parameter, the type parameter must be set to video. | [optional]
 **relevance_language** | **string**| The relevanceLanguage parameter instructs the API to return search results that are most relevant to the specified language. The parameter value is typically an ISO 639-1 two-letter language code. However, you should use the values zh-Hans for simplified Chinese and zh-Hant for traditional Chinese. Please note that results in other languages will still be returned if they are highly relevant to the search query term. | [optional]
 **safe_search** | **string**| The safeSearch parameter indicates whether the search results should include restricted content as well as standard content. | [optional]
 **topic_id** | **string**| The topicId parameter indicates that the API response should only contain resources associated with the specified topic. The value identifies a Freebase topic ID. | [optional]
 **type** | **string**| The type parameter restricts a search query to only retrieve a particular type of resource. The value is a comma-separated list of resource types. | [optional] [default to video,channel,playlist]
 **video_caption** | **string**| The videoCaption parameter indicates whether the API should filter video search results based on whether they have captions. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **video_category_id** | **string**| The videoCategoryId parameter filters video search results based on their category. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **video_definition** | **string**| The videoDefinition parameter lets you restrict a search to only include either high definition (HD) or standard definition (SD) videos. HD videos are available for playback in at least 720p, though higher resolutions, like 1080p, might also be available. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **video_dimension** | **string**| The videoDimension parameter lets you restrict a search to only retrieve 2D or 3D videos. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **video_duration** | **string**| The videoDuration parameter filters video search results based on their duration. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **video_embeddable** | **string**| The videoEmbeddable parameter lets you to restrict a search to only videos that can be embedded into a webpage. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **video_license** | **string**| The videoLicense parameter filters search results to only include videos with a particular license. YouTube lets video uploaders choose to attach either the Creative Commons license or the standard YouTube license to each of their videos. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **video_syndicated** | **string**| The videoSyndicated parameter lets you to restrict a search to only videos that can be played outside youtube.com. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]
 **video_type** | **string**| The videoType parameter lets you restrict a search to a particular type of videos. If you specify a value for this parameter, you must also set the type parameter&#39;s value to video. | [optional]

### Return type

[**\Swagger\Client\Model\SearchListResponse**](../Model/SearchListResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

