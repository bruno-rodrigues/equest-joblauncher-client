# Swagger\Client\StubApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateJob**](StubApi.md#updateJob) | **PATCH** /jobs/{job_id} | Change job data without changing board selection


# **updateJob**
> updateJob($job_id)

Change job data without changing board selection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\StubApi();
$job_id = 789; // int | Job ID

try {
    $api_instance->updateJob($job_id);
} catch (Exception $e) {
    echo 'Exception when calling StubApi->updateJob: ', $e->getMessage(), PHP_EOL;
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

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

