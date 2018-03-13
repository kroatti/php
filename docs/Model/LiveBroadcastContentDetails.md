# LiveBroadcastContentDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bound_stream_id** | **string** | This value uniquely identifies the live stream bound to the broadcast. | [optional] 
**bound_stream_last_update_time_ms** | [**\DateTime**](\DateTime.md) | The date and time that the live stream referenced by boundStreamId was last updated. | [optional] 
**closed_captions_type** | **string** |  | [optional] 
**enable_auto_start** | **bool** | This setting indicates whether auto start is enabled for this broadcast. | [optional] 
**enable_closed_captions** | **bool** | This setting indicates whether HTTP POST closed captioning is enabled for this broadcast. The ingestion URL of the closed captions is returned through the liveStreams API. This is mutually exclusive with using the closed_captions_type property, and is equivalent to setting closed_captions_type to CLOSED_CAPTIONS_HTTP_POST. | [optional] 
**enable_content_encryption** | **bool** | This setting indicates whether YouTube should enable content encryption for the broadcast. | [optional] 
**enable_dvr** | **bool** | This setting determines whether viewers can access DVR controls while watching the video. DVR controls enable the viewer to control the video playback experience by pausing, rewinding, or fast forwarding content. The default value for this property is true.    Important: You must set the value to true and also set the enableArchive property&#39;s value to true if you want to make playback available immediately after the broadcast ends. | [optional] 
**enable_embed** | **bool** | This setting indicates whether the broadcast video can be played in an embedded player. If you choose to archive the video (using the enableArchive property), this setting will also apply to the archived video. | [optional] 
**enable_low_latency** | **bool** | Indicates whether this broadcast has low latency enabled. | [optional] 
**latency_preference** | **string** | If both this and enable_low_latency are set, they must match. LATENCY_NORMAL should match enable_low_latency&#x3D;false LATENCY_LOW should match enable_low_latency&#x3D;true LATENCY_ULTRA_LOW should have enable_low_latency omitted. | [optional] 
**mesh** | **string** |  | [optional] 
**monitor_stream** | [**\Swagger\Client\Model\MonitorStreamInfo**](MonitorStreamInfo.md) | The monitorStream object contains information about the monitor stream, which the broadcaster can use to review the event content before the broadcast stream is shown publicly. | [optional] 
**projection** | **string** | The projection format of this broadcast. This defaults to rectangular. | [optional] 
**record_from_start** | **bool** | Automatically start recording after the event goes live. The default value for this property is true.    Important: You must also set the enableDvr property&#39;s value to true if you want the playback to be available immediately after the broadcast ends. If you set this property&#39;s value to true but do not also set the enableDvr property to true, there may be a delay of around one day before the archived video will be available for playback. | [optional] 
**start_with_slate** | **bool** | This setting indicates whether the broadcast should automatically begin with an in-stream slate when you update the broadcast&#39;s status to live. After updating the status, you then need to send a liveCuepoints.insert request that sets the cuepoint&#39;s eventState to end to remove the in-stream slate and make your broadcast stream visible to viewers. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


