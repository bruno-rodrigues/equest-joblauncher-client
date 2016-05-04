# Swagger\Client\DefaultApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDraft**](DefaultApi.md#createDraft) | **POST** /drafts | Create a job draft for posting to boards
[**getBoards**](DefaultApi.md#getBoards) | **GET** /boards | Returns boards available to post.
[**getDraft**](DefaultApi.md#getDraft) | **GET** /drafts/{draft_id} | Get Job Draft Data
[**getJob**](DefaultApi.md#getJob) | **GET** /jobs/{job_id} | Retrieve job data and status
[**getJobPostings**](DefaultApi.md#getJobPostings) | **GET** /jobs/{job_id}/postings | Returns job&#39;s status on boards
[**getJobs**](DefaultApi.md#getJobs) | **GET** /jobs | Search customer&#39;s jobs
[**postDraft**](DefaultApi.md#postDraft) | **POST** /drafts/{draft_id}/postings | Post job draft to specified boards


# **createDraft**
> \Swagger\Client\Model\Job createDraft($draft)

Create a job draft for posting to boards

Every time you want to change job data you have to create job draft first and then you can publish it to selected boards.\n \nDefault value vs empty value. If you decide to use eQuest defaults for some field - make sure you don't pass element in the request. Fields not present in the request will result in default value while empty value will be treated as intention to have it blank.\nResponse of this method includes Location header with URL of the created resource that you'll need to use for further actions. Job draft is one time object, if you need to change its data you should create a new one.\n \nYou can use sample [XML](/bundles/equestpostjobapi/job_data.xml) and [JSON](/bundles/equestpostjobapi/job_data.json) formatted data for experiments.\n\nResponse will contain link(s), that allow you to navigate to interactive job edit form.\n

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$draft = new \Swagger\Client\Model\Job(); // \Swagger\Client\Model\Job | 

try { 
    $result = $api_instance->createDraft($draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createDraft: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft** | [**\Swagger\Client\Model\Job**](\Swagger\Client\Model\Job.md)|  | [optional] 

### Return type

[**\Swagger\Client\Model\Job**](Job.md)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getBoards**
> \Swagger\Client\Model\BoardsList getBoards()

Returns boards available to post.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();

try { 
    $result = $api_instance->getBoards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBoards: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BoardsList**](BoardsList.md)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getDraft**
> \Swagger\Client\Model\Job getDraft($draft_id)

Get Job Draft Data

this method is to test state of job draft after creating one. There is no real use for production environment.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$draft_id = 56; // int | 

try { 
    $result = $api_instance->getDraft($draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDraft: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **int**|  | 

### Return type

[**\Swagger\Client\Model\Job**](Job.md)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJob**
> \Swagger\Client\Model\Job getJob($job_id)

Retrieve job data and status

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$job_id = 789; // int | Job ID

try { 
    $result = $api_instance->getJob($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getJob: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| Job ID | 

### Return type

[**\Swagger\Client\Model\Job**](Job.md)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJobPostings**
> \Swagger\Client\Model\Posting[] getJobPostings($job_id)

Returns job's status on boards

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$job_id = 789; // int | Job ID

try { 
    $result = $api_instance->getJobPostings($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getJobPostings: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| Job ID | 

### Return type

[**\Swagger\Client\Model\Posting[]**](Posting.md)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getJobs**
> object getJobs()

Search customer's jobs

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();

try { 
    $result = $api_instance->getJobs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getJobs: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[http_basic](../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **postDraft**
> postDraft($draft_id, $postings)

Post job draft to specified boards

This is a second (final) step of job posting process where you specify which boards you want job to be posted to.\n \nThis method implies the following rules related to existing postings:\n \nif there is existing active posting - it will be updated if posting is expired on a board - it will be reposted\n \nWhen this method suceeds job draft becomes inactive and can't be reused. Response of this method includes URL of the job that can be used to manage job lifecycle (see /job methods).\n \nNote, due to eQuest billing system customer is charged \"per transaction\". Each call to this method is a separate transaction. Thus make sure that you include all boards at once to avoid extra charges to a customer.\n \nYou can use sample [XML](/bundles/equestpostjobapi/postings_data.xml) and [JSON](/bundles/equestpostjobapi/postings_data.json) formatted data for experiments\n

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$draft_id = 56; // int | 
$postings = new \Swagger\Client\Model\Postings(); // \Swagger\Client\Model\Postings | 

try { 
    $api_instance->postDraft($draft_id, $postings);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postDraft: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **int**|  | 
 **postings** | [**\Swagger\Client\Model\Postings**](\Swagger\Client\Model\Postings.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

[http_basic](../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

