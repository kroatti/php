# SwaggerClient-php
Supports core YouTube features, such as uploading videos, creating and managing playlists, searching for content, and much more.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v3
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://google.com](https://google.com)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/kroatti/php.git"
    }
  ],
  "require": {
    "kroatti/php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://www.googleapis.com/youtube/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivitiesApi* | [**youtubeActivitiesInsert**](docs/Api/ActivitiesApi.md#youtubeactivitiesinsert) | **POST** /activities | 
*ActivitiesApi* | [**youtubeActivitiesList**](docs/Api/ActivitiesApi.md#youtubeactivitieslist) | **GET** /activities | 
*CaptionsApi* | [**youtubeCaptionsDelete**](docs/Api/CaptionsApi.md#youtubecaptionsdelete) | **DELETE** /captions | 
*CaptionsApi* | [**youtubeCaptionsDownload**](docs/Api/CaptionsApi.md#youtubecaptionsdownload) | **GET** /captions/{id} | 
*CaptionsApi* | [**youtubeCaptionsInsert**](docs/Api/CaptionsApi.md#youtubecaptionsinsert) | **POST** /captions | 
*CaptionsApi* | [**youtubeCaptionsList**](docs/Api/CaptionsApi.md#youtubecaptionslist) | **GET** /captions | 
*CaptionsApi* | [**youtubeCaptionsUpdate**](docs/Api/CaptionsApi.md#youtubecaptionsupdate) | **PUT** /captions | 
*ChannelBannersApi* | [**youtubeChannelBannersInsert**](docs/Api/ChannelBannersApi.md#youtubechannelbannersinsert) | **POST** /channelBanners/insert | 
*ChannelSectionsApi* | [**youtubeChannelSectionsDelete**](docs/Api/ChannelSectionsApi.md#youtubechannelsectionsdelete) | **DELETE** /channelSections | 
*ChannelSectionsApi* | [**youtubeChannelSectionsInsert**](docs/Api/ChannelSectionsApi.md#youtubechannelsectionsinsert) | **POST** /channelSections | 
*ChannelSectionsApi* | [**youtubeChannelSectionsList**](docs/Api/ChannelSectionsApi.md#youtubechannelsectionslist) | **GET** /channelSections | 
*ChannelSectionsApi* | [**youtubeChannelSectionsUpdate**](docs/Api/ChannelSectionsApi.md#youtubechannelsectionsupdate) | **PUT** /channelSections | 
*ChannelsApi* | [**youtubeChannelsList**](docs/Api/ChannelsApi.md#youtubechannelslist) | **GET** /channels | 
*ChannelsApi* | [**youtubeChannelsUpdate**](docs/Api/ChannelsApi.md#youtubechannelsupdate) | **PUT** /channels | 
*CommentThreadsApi* | [**youtubeCommentThreadsInsert**](docs/Api/CommentThreadsApi.md#youtubecommentthreadsinsert) | **POST** /commentThreads | 
*CommentThreadsApi* | [**youtubeCommentThreadsList**](docs/Api/CommentThreadsApi.md#youtubecommentthreadslist) | **GET** /commentThreads | 
*CommentThreadsApi* | [**youtubeCommentThreadsUpdate**](docs/Api/CommentThreadsApi.md#youtubecommentthreadsupdate) | **PUT** /commentThreads | 
*CommentsApi* | [**youtubeCommentsDelete**](docs/Api/CommentsApi.md#youtubecommentsdelete) | **DELETE** /comments | 
*CommentsApi* | [**youtubeCommentsInsert**](docs/Api/CommentsApi.md#youtubecommentsinsert) | **POST** /comments | 
*CommentsApi* | [**youtubeCommentsList**](docs/Api/CommentsApi.md#youtubecommentslist) | **GET** /comments | 
*CommentsApi* | [**youtubeCommentsMarkAsSpam**](docs/Api/CommentsApi.md#youtubecommentsmarkasspam) | **POST** /comments/markAsSpam | 
*CommentsApi* | [**youtubeCommentsSetModerationStatus**](docs/Api/CommentsApi.md#youtubecommentssetmoderationstatus) | **POST** /comments/setModerationStatus | 
*CommentsApi* | [**youtubeCommentsUpdate**](docs/Api/CommentsApi.md#youtubecommentsupdate) | **PUT** /comments | 
*FanFundingEventsApi* | [**youtubeFanFundingEventsList**](docs/Api/FanFundingEventsApi.md#youtubefanfundingeventslist) | **GET** /fanFundingEvents | 
*GuideCategoriesApi* | [**youtubeGuideCategoriesList**](docs/Api/GuideCategoriesApi.md#youtubeguidecategorieslist) | **GET** /guideCategories | 
*I18nLanguagesApi* | [**youtubeI18nLanguagesList**](docs/Api/I18nLanguagesApi.md#youtubei18nlanguageslist) | **GET** /i18nLanguages | 
*I18nRegionsApi* | [**youtubeI18nRegionsList**](docs/Api/I18nRegionsApi.md#youtubei18nregionslist) | **GET** /i18nRegions | 
*LiveBroadcastsApi* | [**youtubeLiveBroadcastsBind**](docs/Api/LiveBroadcastsApi.md#youtubelivebroadcastsbind) | **POST** /liveBroadcasts/bind | 
*LiveBroadcastsApi* | [**youtubeLiveBroadcastsControl**](docs/Api/LiveBroadcastsApi.md#youtubelivebroadcastscontrol) | **POST** /liveBroadcasts/control | 
*LiveBroadcastsApi* | [**youtubeLiveBroadcastsDelete**](docs/Api/LiveBroadcastsApi.md#youtubelivebroadcastsdelete) | **DELETE** /liveBroadcasts | 
*LiveBroadcastsApi* | [**youtubeLiveBroadcastsInsert**](docs/Api/LiveBroadcastsApi.md#youtubelivebroadcastsinsert) | **POST** /liveBroadcasts | 
*LiveBroadcastsApi* | [**youtubeLiveBroadcastsList**](docs/Api/LiveBroadcastsApi.md#youtubelivebroadcastslist) | **GET** /liveBroadcasts | 
*LiveBroadcastsApi* | [**youtubeLiveBroadcastsTransition**](docs/Api/LiveBroadcastsApi.md#youtubelivebroadcaststransition) | **POST** /liveBroadcasts/transition | 
*LiveBroadcastsApi* | [**youtubeLiveBroadcastsUpdate**](docs/Api/LiveBroadcastsApi.md#youtubelivebroadcastsupdate) | **PUT** /liveBroadcasts | 
*LiveChatBansApi* | [**youtubeLiveChatBansDelete**](docs/Api/LiveChatBansApi.md#youtubelivechatbansdelete) | **DELETE** /liveChat/bans | 
*LiveChatBansApi* | [**youtubeLiveChatBansInsert**](docs/Api/LiveChatBansApi.md#youtubelivechatbansinsert) | **POST** /liveChat/bans | 
*LiveChatMessagesApi* | [**youtubeLiveChatMessagesDelete**](docs/Api/LiveChatMessagesApi.md#youtubelivechatmessagesdelete) | **DELETE** /liveChat/messages | 
*LiveChatMessagesApi* | [**youtubeLiveChatMessagesInsert**](docs/Api/LiveChatMessagesApi.md#youtubelivechatmessagesinsert) | **POST** /liveChat/messages | 
*LiveChatMessagesApi* | [**youtubeLiveChatMessagesList**](docs/Api/LiveChatMessagesApi.md#youtubelivechatmessageslist) | **GET** /liveChat/messages | 
*LiveChatModeratorsApi* | [**youtubeLiveChatModeratorsDelete**](docs/Api/LiveChatModeratorsApi.md#youtubelivechatmoderatorsdelete) | **DELETE** /liveChat/moderators | 
*LiveChatModeratorsApi* | [**youtubeLiveChatModeratorsInsert**](docs/Api/LiveChatModeratorsApi.md#youtubelivechatmoderatorsinsert) | **POST** /liveChat/moderators | 
*LiveChatModeratorsApi* | [**youtubeLiveChatModeratorsList**](docs/Api/LiveChatModeratorsApi.md#youtubelivechatmoderatorslist) | **GET** /liveChat/moderators | 
*LiveStreamsApi* | [**youtubeLiveStreamsDelete**](docs/Api/LiveStreamsApi.md#youtubelivestreamsdelete) | **DELETE** /liveStreams | 
*LiveStreamsApi* | [**youtubeLiveStreamsInsert**](docs/Api/LiveStreamsApi.md#youtubelivestreamsinsert) | **POST** /liveStreams | 
*LiveStreamsApi* | [**youtubeLiveStreamsList**](docs/Api/LiveStreamsApi.md#youtubelivestreamslist) | **GET** /liveStreams | 
*LiveStreamsApi* | [**youtubeLiveStreamsUpdate**](docs/Api/LiveStreamsApi.md#youtubelivestreamsupdate) | **PUT** /liveStreams | 
*PlaylistItemsApi* | [**youtubePlaylistItemsDelete**](docs/Api/PlaylistItemsApi.md#youtubeplaylistitemsdelete) | **DELETE** /playlistItems | 
*PlaylistItemsApi* | [**youtubePlaylistItemsInsert**](docs/Api/PlaylistItemsApi.md#youtubeplaylistitemsinsert) | **POST** /playlistItems | 
*PlaylistItemsApi* | [**youtubePlaylistItemsList**](docs/Api/PlaylistItemsApi.md#youtubeplaylistitemslist) | **GET** /playlistItems | 
*PlaylistItemsApi* | [**youtubePlaylistItemsUpdate**](docs/Api/PlaylistItemsApi.md#youtubeplaylistitemsupdate) | **PUT** /playlistItems | 
*PlaylistsApi* | [**youtubePlaylistsDelete**](docs/Api/PlaylistsApi.md#youtubeplaylistsdelete) | **DELETE** /playlists | 
*PlaylistsApi* | [**youtubePlaylistsInsert**](docs/Api/PlaylistsApi.md#youtubeplaylistsinsert) | **POST** /playlists | 
*PlaylistsApi* | [**youtubePlaylistsList**](docs/Api/PlaylistsApi.md#youtubeplaylistslist) | **GET** /playlists | 
*PlaylistsApi* | [**youtubePlaylistsUpdate**](docs/Api/PlaylistsApi.md#youtubeplaylistsupdate) | **PUT** /playlists | 
*SearchApi* | [**youtubeSearchList**](docs/Api/SearchApi.md#youtubesearchlist) | **GET** /search | 
*SponsorsApi* | [**youtubeSponsorsList**](docs/Api/SponsorsApi.md#youtubesponsorslist) | **GET** /sponsors | 
*SubscriptionsApi* | [**youtubeSubscriptionsDelete**](docs/Api/SubscriptionsApi.md#youtubesubscriptionsdelete) | **DELETE** /subscriptions | 
*SubscriptionsApi* | [**youtubeSubscriptionsInsert**](docs/Api/SubscriptionsApi.md#youtubesubscriptionsinsert) | **POST** /subscriptions | 
*SubscriptionsApi* | [**youtubeSubscriptionsList**](docs/Api/SubscriptionsApi.md#youtubesubscriptionslist) | **GET** /subscriptions | 
*SuperChatEventsApi* | [**youtubeSuperChatEventsList**](docs/Api/SuperChatEventsApi.md#youtubesuperchateventslist) | **GET** /superChatEvents | 
*ThumbnailsApi* | [**youtubeThumbnailsSet**](docs/Api/ThumbnailsApi.md#youtubethumbnailsset) | **POST** /thumbnails/set | 
*VideoAbuseReportReasonsApi* | [**youtubeVideoAbuseReportReasonsList**](docs/Api/VideoAbuseReportReasonsApi.md#youtubevideoabusereportreasonslist) | **GET** /videoAbuseReportReasons | 
*VideoCategoriesApi* | [**youtubeVideoCategoriesList**](docs/Api/VideoCategoriesApi.md#youtubevideocategorieslist) | **GET** /videoCategories | 
*VideosApi* | [**youtubeVideosDelete**](docs/Api/VideosApi.md#youtubevideosdelete) | **DELETE** /videos | 
*VideosApi* | [**youtubeVideosGetRating**](docs/Api/VideosApi.md#youtubevideosgetrating) | **GET** /videos/getRating | 
*VideosApi* | [**youtubeVideosInsert**](docs/Api/VideosApi.md#youtubevideosinsert) | **POST** /videos | 
*VideosApi* | [**youtubeVideosList**](docs/Api/VideosApi.md#youtubevideoslist) | **GET** /videos | 
*VideosApi* | [**youtubeVideosRate**](docs/Api/VideosApi.md#youtubevideosrate) | **POST** /videos/rate | 
*VideosApi* | [**youtubeVideosReportAbuse**](docs/Api/VideosApi.md#youtubevideosreportabuse) | **POST** /videos/reportAbuse | 
*VideosApi* | [**youtubeVideosUpdate**](docs/Api/VideosApi.md#youtubevideosupdate) | **PUT** /videos | 
*WatermarksApi* | [**youtubeWatermarksSet**](docs/Api/WatermarksApi.md#youtubewatermarksset) | **POST** /watermarks/set | 
*WatermarksApi* | [**youtubeWatermarksUnset**](docs/Api/WatermarksApi.md#youtubewatermarksunset) | **POST** /watermarks/unset | 


## Documentation For Models

 - [AccessPolicy](docs/Model/AccessPolicy.md)
 - [Activity](docs/Model/Activity.md)
 - [ActivityContentDetails](docs/Model/ActivityContentDetails.md)
 - [ActivityContentDetailsBulletin](docs/Model/ActivityContentDetailsBulletin.md)
 - [ActivityContentDetailsChannelItem](docs/Model/ActivityContentDetailsChannelItem.md)
 - [ActivityContentDetailsComment](docs/Model/ActivityContentDetailsComment.md)
 - [ActivityContentDetailsFavorite](docs/Model/ActivityContentDetailsFavorite.md)
 - [ActivityContentDetailsLike](docs/Model/ActivityContentDetailsLike.md)
 - [ActivityContentDetailsPlaylistItem](docs/Model/ActivityContentDetailsPlaylistItem.md)
 - [ActivityContentDetailsPromotedItem](docs/Model/ActivityContentDetailsPromotedItem.md)
 - [ActivityContentDetailsRecommendation](docs/Model/ActivityContentDetailsRecommendation.md)
 - [ActivityContentDetailsSocial](docs/Model/ActivityContentDetailsSocial.md)
 - [ActivityContentDetailsSubscription](docs/Model/ActivityContentDetailsSubscription.md)
 - [ActivityContentDetailsUpload](docs/Model/ActivityContentDetailsUpload.md)
 - [ActivityListResponse](docs/Model/ActivityListResponse.md)
 - [ActivitySnippet](docs/Model/ActivitySnippet.md)
 - [Caption](docs/Model/Caption.md)
 - [CaptionListResponse](docs/Model/CaptionListResponse.md)
 - [CaptionSnippet](docs/Model/CaptionSnippet.md)
 - [CdnSettings](docs/Model/CdnSettings.md)
 - [Channel](docs/Model/Channel.md)
 - [ChannelAuditDetails](docs/Model/ChannelAuditDetails.md)
 - [ChannelBannerResource](docs/Model/ChannelBannerResource.md)
 - [ChannelBrandingSettings](docs/Model/ChannelBrandingSettings.md)
 - [ChannelContentDetails](docs/Model/ChannelContentDetails.md)
 - [ChannelContentDetailsRelatedPlaylists](docs/Model/ChannelContentDetailsRelatedPlaylists.md)
 - [ChannelContentOwnerDetails](docs/Model/ChannelContentOwnerDetails.md)
 - [ChannelConversionPing](docs/Model/ChannelConversionPing.md)
 - [ChannelConversionPings](docs/Model/ChannelConversionPings.md)
 - [ChannelListResponse](docs/Model/ChannelListResponse.md)
 - [ChannelLocalization](docs/Model/ChannelLocalization.md)
 - [ChannelProfileDetails](docs/Model/ChannelProfileDetails.md)
 - [ChannelSection](docs/Model/ChannelSection.md)
 - [ChannelSectionContentDetails](docs/Model/ChannelSectionContentDetails.md)
 - [ChannelSectionListResponse](docs/Model/ChannelSectionListResponse.md)
 - [ChannelSectionLocalization](docs/Model/ChannelSectionLocalization.md)
 - [ChannelSectionSnippet](docs/Model/ChannelSectionSnippet.md)
 - [ChannelSectionTargeting](docs/Model/ChannelSectionTargeting.md)
 - [ChannelSettings](docs/Model/ChannelSettings.md)
 - [ChannelSnippet](docs/Model/ChannelSnippet.md)
 - [ChannelStatistics](docs/Model/ChannelStatistics.md)
 - [ChannelStatus](docs/Model/ChannelStatus.md)
 - [ChannelTopicDetails](docs/Model/ChannelTopicDetails.md)
 - [Comment](docs/Model/Comment.md)
 - [CommentListResponse](docs/Model/CommentListResponse.md)
 - [CommentSnippet](docs/Model/CommentSnippet.md)
 - [CommentThread](docs/Model/CommentThread.md)
 - [CommentThreadListResponse](docs/Model/CommentThreadListResponse.md)
 - [CommentThreadReplies](docs/Model/CommentThreadReplies.md)
 - [CommentThreadSnippet](docs/Model/CommentThreadSnippet.md)
 - [ContentRating](docs/Model/ContentRating.md)
 - [FanFundingEvent](docs/Model/FanFundingEvent.md)
 - [FanFundingEventListResponse](docs/Model/FanFundingEventListResponse.md)
 - [FanFundingEventSnippet](docs/Model/FanFundingEventSnippet.md)
 - [GeoPoint](docs/Model/GeoPoint.md)
 - [GuideCategory](docs/Model/GuideCategory.md)
 - [GuideCategoryListResponse](docs/Model/GuideCategoryListResponse.md)
 - [GuideCategorySnippet](docs/Model/GuideCategorySnippet.md)
 - [I18nLanguage](docs/Model/I18nLanguage.md)
 - [I18nLanguageListResponse](docs/Model/I18nLanguageListResponse.md)
 - [I18nLanguageSnippet](docs/Model/I18nLanguageSnippet.md)
 - [I18nRegion](docs/Model/I18nRegion.md)
 - [I18nRegionListResponse](docs/Model/I18nRegionListResponse.md)
 - [I18nRegionSnippet](docs/Model/I18nRegionSnippet.md)
 - [ImageSettings](docs/Model/ImageSettings.md)
 - [IngestionInfo](docs/Model/IngestionInfo.md)
 - [InvideoBranding](docs/Model/InvideoBranding.md)
 - [InvideoPosition](docs/Model/InvideoPosition.md)
 - [InvideoPromotion](docs/Model/InvideoPromotion.md)
 - [InvideoTiming](docs/Model/InvideoTiming.md)
 - [LanguageTag](docs/Model/LanguageTag.md)
 - [LiveBroadcast](docs/Model/LiveBroadcast.md)
 - [LiveBroadcastContentDetails](docs/Model/LiveBroadcastContentDetails.md)
 - [LiveBroadcastListResponse](docs/Model/LiveBroadcastListResponse.md)
 - [LiveBroadcastSnippet](docs/Model/LiveBroadcastSnippet.md)
 - [LiveBroadcastStatistics](docs/Model/LiveBroadcastStatistics.md)
 - [LiveBroadcastStatus](docs/Model/LiveBroadcastStatus.md)
 - [LiveChatBan](docs/Model/LiveChatBan.md)
 - [LiveChatBanSnippet](docs/Model/LiveChatBanSnippet.md)
 - [LiveChatFanFundingEventDetails](docs/Model/LiveChatFanFundingEventDetails.md)
 - [LiveChatMessage](docs/Model/LiveChatMessage.md)
 - [LiveChatMessageAuthorDetails](docs/Model/LiveChatMessageAuthorDetails.md)
 - [LiveChatMessageDeletedDetails](docs/Model/LiveChatMessageDeletedDetails.md)
 - [LiveChatMessageListResponse](docs/Model/LiveChatMessageListResponse.md)
 - [LiveChatMessageRetractedDetails](docs/Model/LiveChatMessageRetractedDetails.md)
 - [LiveChatMessageSnippet](docs/Model/LiveChatMessageSnippet.md)
 - [LiveChatModerator](docs/Model/LiveChatModerator.md)
 - [LiveChatModeratorListResponse](docs/Model/LiveChatModeratorListResponse.md)
 - [LiveChatModeratorSnippet](docs/Model/LiveChatModeratorSnippet.md)
 - [LiveChatPollClosedDetails](docs/Model/LiveChatPollClosedDetails.md)
 - [LiveChatPollEditedDetails](docs/Model/LiveChatPollEditedDetails.md)
 - [LiveChatPollItem](docs/Model/LiveChatPollItem.md)
 - [LiveChatPollOpenedDetails](docs/Model/LiveChatPollOpenedDetails.md)
 - [LiveChatPollVotedDetails](docs/Model/LiveChatPollVotedDetails.md)
 - [LiveChatSuperChatDetails](docs/Model/LiveChatSuperChatDetails.md)
 - [LiveChatTextMessageDetails](docs/Model/LiveChatTextMessageDetails.md)
 - [LiveChatUserBannedMessageDetails](docs/Model/LiveChatUserBannedMessageDetails.md)
 - [LiveStream](docs/Model/LiveStream.md)
 - [LiveStreamConfigurationIssue](docs/Model/LiveStreamConfigurationIssue.md)
 - [LiveStreamContentDetails](docs/Model/LiveStreamContentDetails.md)
 - [LiveStreamHealthStatus](docs/Model/LiveStreamHealthStatus.md)
 - [LiveStreamListResponse](docs/Model/LiveStreamListResponse.md)
 - [LiveStreamSnippet](docs/Model/LiveStreamSnippet.md)
 - [LiveStreamStatus](docs/Model/LiveStreamStatus.md)
 - [LocalizedProperty](docs/Model/LocalizedProperty.md)
 - [LocalizedString](docs/Model/LocalizedString.md)
 - [MonitorStreamInfo](docs/Model/MonitorStreamInfo.md)
 - [Nonprofit](docs/Model/Nonprofit.md)
 - [NonprofitId](docs/Model/NonprofitId.md)
 - [PageInfo](docs/Model/PageInfo.md)
 - [Playlist](docs/Model/Playlist.md)
 - [PlaylistContentDetails](docs/Model/PlaylistContentDetails.md)
 - [PlaylistItem](docs/Model/PlaylistItem.md)
 - [PlaylistItemContentDetails](docs/Model/PlaylistItemContentDetails.md)
 - [PlaylistItemListResponse](docs/Model/PlaylistItemListResponse.md)
 - [PlaylistItemSnippet](docs/Model/PlaylistItemSnippet.md)
 - [PlaylistItemStatus](docs/Model/PlaylistItemStatus.md)
 - [PlaylistListResponse](docs/Model/PlaylistListResponse.md)
 - [PlaylistLocalization](docs/Model/PlaylistLocalization.md)
 - [PlaylistPlayer](docs/Model/PlaylistPlayer.md)
 - [PlaylistSnippet](docs/Model/PlaylistSnippet.md)
 - [PlaylistStatus](docs/Model/PlaylistStatus.md)
 - [PromotedItem](docs/Model/PromotedItem.md)
 - [PromotedItemId](docs/Model/PromotedItemId.md)
 - [PropertyValue](docs/Model/PropertyValue.md)
 - [ResourceId](docs/Model/ResourceId.md)
 - [SearchListResponse](docs/Model/SearchListResponse.md)
 - [SearchResult](docs/Model/SearchResult.md)
 - [SearchResultSnippet](docs/Model/SearchResultSnippet.md)
 - [Sponsor](docs/Model/Sponsor.md)
 - [SponsorListResponse](docs/Model/SponsorListResponse.md)
 - [SponsorSnippet](docs/Model/SponsorSnippet.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionContentDetails](docs/Model/SubscriptionContentDetails.md)
 - [SubscriptionListResponse](docs/Model/SubscriptionListResponse.md)
 - [SubscriptionSnippet](docs/Model/SubscriptionSnippet.md)
 - [SubscriptionSubscriberSnippet](docs/Model/SubscriptionSubscriberSnippet.md)
 - [SuperChatEvent](docs/Model/SuperChatEvent.md)
 - [SuperChatEventListResponse](docs/Model/SuperChatEventListResponse.md)
 - [SuperChatEventSnippet](docs/Model/SuperChatEventSnippet.md)
 - [Thumbnail](docs/Model/Thumbnail.md)
 - [ThumbnailDetails](docs/Model/ThumbnailDetails.md)
 - [ThumbnailSetResponse](docs/Model/ThumbnailSetResponse.md)
 - [TokenPagination](docs/Model/TokenPagination.md)
 - [Video](docs/Model/Video.md)
 - [VideoAbuseReport](docs/Model/VideoAbuseReport.md)
 - [VideoAbuseReportReason](docs/Model/VideoAbuseReportReason.md)
 - [VideoAbuseReportReasonListResponse](docs/Model/VideoAbuseReportReasonListResponse.md)
 - [VideoAbuseReportReasonSnippet](docs/Model/VideoAbuseReportReasonSnippet.md)
 - [VideoAbuseReportSecondaryReason](docs/Model/VideoAbuseReportSecondaryReason.md)
 - [VideoAgeGating](docs/Model/VideoAgeGating.md)
 - [VideoCategory](docs/Model/VideoCategory.md)
 - [VideoCategoryListResponse](docs/Model/VideoCategoryListResponse.md)
 - [VideoCategorySnippet](docs/Model/VideoCategorySnippet.md)
 - [VideoContentDetails](docs/Model/VideoContentDetails.md)
 - [VideoContentDetailsRegionRestriction](docs/Model/VideoContentDetailsRegionRestriction.md)
 - [VideoFileDetails](docs/Model/VideoFileDetails.md)
 - [VideoFileDetailsAudioStream](docs/Model/VideoFileDetailsAudioStream.md)
 - [VideoFileDetailsVideoStream](docs/Model/VideoFileDetailsVideoStream.md)
 - [VideoGetRatingResponse](docs/Model/VideoGetRatingResponse.md)
 - [VideoListResponse](docs/Model/VideoListResponse.md)
 - [VideoLiveStreamingDetails](docs/Model/VideoLiveStreamingDetails.md)
 - [VideoLocalization](docs/Model/VideoLocalization.md)
 - [VideoMonetizationDetails](docs/Model/VideoMonetizationDetails.md)
 - [VideoPlayer](docs/Model/VideoPlayer.md)
 - [VideoProcessingDetails](docs/Model/VideoProcessingDetails.md)
 - [VideoProcessingDetailsProcessingProgress](docs/Model/VideoProcessingDetailsProcessingProgress.md)
 - [VideoProjectDetails](docs/Model/VideoProjectDetails.md)
 - [VideoRating](docs/Model/VideoRating.md)
 - [VideoRecordingDetails](docs/Model/VideoRecordingDetails.md)
 - [VideoSnippet](docs/Model/VideoSnippet.md)
 - [VideoStatistics](docs/Model/VideoStatistics.md)
 - [VideoStatus](docs/Model/VideoStatus.md)
 - [VideoSuggestions](docs/Model/VideoSuggestions.md)
 - [VideoSuggestionsTagSuggestion](docs/Model/VideoSuggestionsTagSuggestion.md)
 - [VideoTopicDetails](docs/Model/VideoTopicDetails.md)
 - [WatchSettings](docs/Model/WatchSettings.md)


## Documentation For Authorization


## Oauth2

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://accounts.google.com/o/oauth2/auth
- **Scopes**: 
 - **https://www.googleapis.com/auth/youtube**: Manage your YouTube account
 - **https://www.googleapis.com/auth/youtube.force-ssl**: Manage your YouTube account
 - **https://www.googleapis.com/auth/youtube.readonly**: View your YouTube account
 - **https://www.googleapis.com/auth/youtube.upload**: Manage your YouTube videos
 - **https://www.googleapis.com/auth/youtubepartner**: View and manage your assets and associated content on YouTube
 - **https://www.googleapis.com/auth/youtubepartner-channel-audit**: View private information of your YouTube channel relevant during the audit process with a YouTube partner


## Author




