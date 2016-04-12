# Swagger\Client\StubApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteJob**](StubApi.md#deleteJob) | **DELETE** /jobs/{job_id} | Delete/unpost job and close it
[**getJob**](StubApi.md#getJob) | **GET** /jobs/{job_id} | Retrieve job data and status
[**jobsJobIdPostingsPostingIdDelete**](StubApi.md#jobsJobIdPostingsPostingIdDelete) | **DELETE** /jobs/{job_id}/postings/{posting_id} | Delete/unpost job from specific board
[**updateJob**](StubApi.md#updateJob) | **PATCH** /jobs/{job_id} | Change job data without changing board selection


# **deleteJob**
> deleteJob($job_id)

Delete/unpost job and close it

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\StubApi();
$job_id = 789; // int | Job ID

try { 
    $api_instance->deleteJob($job_id);
} catch (Exception $e) {
    echo 'Exception when calling StubApi->deleteJob: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| Job ID | 

### Return type

void (empty response body)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP reuqest headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJob**
> getJob($job_id)

Retrieve job data and status

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\StubApi();
$job_id = 789; // int | Job ID

try { 
    $api_instance->getJob($job_id);
} catch (Exception $e) {
    echo 'Exception when calling StubApi->getJob: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| Job ID | 

### Return type

void (empty response body)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP reuqest headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **jobsJobIdPostingsPostingIdDelete**
> jobsJobIdPostingsPostingIdDelete($job_id, $posting_id)

Delete/unpost job from specific board

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\StubApi();
$job_id = 789; // int | Job ID
$posting_id = 789; // int | Posting ID

try { 
    $api_instance->jobsJobIdPostingsPostingIdDelete($job_id, $posting_id);
} catch (Exception $e) {
    echo 'Exception when calling StubApi->jobsJobIdPostingsPostingIdDelete: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| Job ID | 
 **posting_id** | **int**| Posting ID | 

### Return type

void (empty response body)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP reuqest headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateJob**
> updateJob($job_id)

Change job data without changing board selection

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\StubApi();
$job_id = 789; // int | Job ID

try { 
    $api_instance->updateJob($job_id);
} catch (Exception $e) {
    echo 'Exception when calling StubApi->updateJob: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| Job ID | 

### Return type

void (empty response body)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP reuqest headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

