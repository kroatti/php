# VideoProcessingDetailsProcessingProgress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parts_processed** | **string** | The number of parts of the video that YouTube has already processed. You can estimate the percentage of the video that YouTube has already processed by calculating: 100 * parts_processed / parts_total  Note that since the estimated number of parts could increase without a corresponding increase in the number of parts that have already been processed, it is possible that the calculated progress could periodically decrease while YouTube processes a video. | [optional] 
**parts_total** | **string** | An estimate of the total number of parts that need to be processed for the video. The number may be updated with more precise estimates while YouTube processes the video. | [optional] 
**time_left_ms** | **string** | An estimate of the amount of time, in millseconds, that YouTube needs to finish processing the video. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


