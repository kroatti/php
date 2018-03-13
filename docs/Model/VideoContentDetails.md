# VideoContentDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**caption** | **string** | The value of captions indicates whether the video has captions or not. | [optional] 
**content_rating** | [**\Swagger\Client\Model\ContentRating**](ContentRating.md) | Specifies the ratings that the video received under various rating schemes. | [optional] 
**country_restriction** | [**\Swagger\Client\Model\AccessPolicy**](AccessPolicy.md) | The countryRestriction object contains information about the countries where a video is (or is not) viewable. | [optional] 
**definition** | **string** | The value of definition indicates whether the video is available in high definition or only in standard definition. | [optional] 
**dimension** | **string** | The value of dimension indicates whether the video is available in 3D or in 2D. | [optional] 
**duration** | **string** | The length of the video. The tag value is an ISO 8601 duration in the format PT#M#S, in which the letters PT indicate that the value specifies a period of time, and the letters M and S refer to length in minutes and seconds, respectively. The # characters preceding the M and S letters are both integers that specify the number of minutes (or seconds) of the video. For example, a value of PT15M51S indicates that the video is 15 minutes and 51 seconds long. | [optional] 
**has_custom_thumbnail** | **bool** | Indicates whether the video uploader has provided a custom thumbnail image for the video. This property is only visible to the video uploader. | [optional] 
**licensed_content** | **bool** | The value of is_license_content indicates whether the video is licensed content. | [optional] 
**projection** | **string** | Specifies the projection format of the video. | [optional] 
**region_restriction** | [**\Swagger\Client\Model\VideoContentDetailsRegionRestriction**](VideoContentDetailsRegionRestriction.md) | The regionRestriction object contains information about the countries where a video is (or is not) viewable. The object will contain either the contentDetails.regionRestriction.allowed property or the contentDetails.regionRestriction.blocked property. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


