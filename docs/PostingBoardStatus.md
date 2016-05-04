# PostingBoardStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | queued|scheduled|posted|deferred|expired | [optional] 
**queued_at** | [**\DateTime**](\DateTime.md) | Timestamp when posting was accepted by the system | [optional] 
**scheduled_at** | [**\DateTime**](\DateTime.md) | Timestamp when posting is requested to be published | [optional] 
**posted_at** | [**\DateTime**](\DateTime.md) | Timestamp when posting was published on a board | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | Timestamp when posting expires on a board | [optional] 
**deferred_reason** | **string** | Publishing failure reason from board | [optional] 
**live_url** | **string** | URL of the posting on a board | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


