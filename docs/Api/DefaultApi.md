# Swagger\Client\DefaultApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDraft**](DefaultApi.md#createDraft) | **POST** /drafts | Create a job draft for posting to boards
[**deleteJob**](DefaultApi.md#deleteJob) | **DELETE** /jobs/{job_id} | Delete/unpost job and close it
[**deleteJobPosting**](DefaultApi.md#deleteJobPosting) | **DELETE** /jobs/{job_id}/postings/{posting_id} | Delete/unpost job from specific board
[**getBoards**](DefaultApi.md#getBoards) | **GET** /boards | Returns boards available to post.
[**getDraft**](DefaultApi.md#getDraft) | **GET** /drafts/{draft_id} | Get Job Draft Data
[**getDraftBsdUrl**](DefaultApi.md#getDraftBsdUrl) | **GET** /drafts/{draft_id}/bsd | Get Board Specific Data page URL for job draft
[**getJob**](DefaultApi.md#getJob) | **GET** /jobs/{job_id} | Retrieve job data and status
[**getJobPostings**](DefaultApi.md#getJobPostings) | **GET** /jobs/{job_id}/postings | Returns job&#39;s status on boards
[**getJobs**](DefaultApi.md#getJobs) | **GET** /jobs | Search customer&#39;s jobs
[**postDraft**](DefaultApi.md#postDraft) | **POST** /drafts/{draft_id}/postings | Post job draft to specified boards


# **createDraft**
> \Swagger\Client\Model\Draft createDraft($draft)

Create a job draft for posting to boards

Every time you want to change job data you have to create job draft first and then you can publish it to selected boards.   Default value vs empty value. If you decide to use eQuest defaults for some field - make sure you don't pass element in the request. Fields not present in the request will result in default value while empty value will be treated as intention to have it blank. Response of this method includes Location header with URL of the created resource that you'll need to use for further actions. Job draft is one time object, if you need to change its data you should create a new one.   You can use sample [XML](/bundles/equestpostjobapi/job_data.xml) and [JSON](/bundles/equestpostjobapi/job_data.json) formatted data for experiments.  Response will contain link(s), that allow you to navigate to interactive job edit form.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$draft = new \Swagger\Client\Model\Draft(); // \Swagger\Client\Model\Draft | 

try {
    $result = $api_instance->createDraft($draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft** | [**\Swagger\Client\Model\Draft**](../Model/\Swagger\Client\Model\Draft.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Draft**](../Model/Draft.md)

### Authorization

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJob**
> deleteJob($job_id)

Delete/unpost job and close it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$job_id = 789; // int | Job ID

try {
    $api_instance->deleteJob($job_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteJob: ', $e->getMessage(), PHP_EOL;
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

# **deleteJobPosting**
> deleteJobPosting($job_id, $posting_id)

Delete/unpost job from specific board

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$job_id = 789; // int | Job ID
$posting_id = 789; // int | Posting ID

try {
    $api_instance->deleteJobPosting($job_id, $posting_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteJobPosting: ', $e->getMessage(), PHP_EOL;
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

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBoards**
> \Swagger\Client\Model\BoardSelector[] getBoards()

Returns boards available to post.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->getBoards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBoards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BoardSelector[]**](../Model/BoardSelector.md)

### Authorization

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDraft**
> \Swagger\Client\Model\Draft getDraft($draft_id)

Get Job Draft Data

this method is to test state of job draft after creating one. There is no real use for production environment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$draft_id = 56; // int | 

try {
    $result = $api_instance->getDraft($draft_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Draft**](../Model/Draft.md)

### Authorization

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDraftBsdUrl**
> string getDraftBsdUrl($draft_id, $boards, $return_url)

Get Board Specific Data page URL for job draft

Allows to retrieve URL to eQuest page that collects board specific data for requested boards and returns customer back afterwards. Required GET parameters are plural boards[] with list of board IDs from GET /boards method and return_url to redirect customer after they fill and submit board specific data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$draft_id = 56; // int | 
$boards = array(56); // int[] | Board IDs to pass specific data
$return_url = "return_url_example"; // string | URL to return user after they submit board specific data

try {
    $result = $api_instance->getDraftBsdUrl($draft_id, $boards, $return_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDraftBsdUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **int**|  |
 **boards** | [**int[]**](../Model/int.md)| Board IDs to pass specific data | [optional]
 **return_url** | **string**| URL to return user after they submit board specific data | [optional]

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJob**
> \Swagger\Client\Model\Job getJob($job_id)

Retrieve job data and status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$job_id = 789; // int | Job ID

try {
    $result = $api_instance->getJob($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| Job ID |

### Return type

[**\Swagger\Client\Model\Job**](../Model/Job.md)

### Authorization

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobPostings**
> \Swagger\Client\Model\Posting[] getJobPostings($job_id, $include_deleted)

Returns job's status on boards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$job_id = 789; // int | Job ID
$include_deleted = false; // bool | Include Deleted

try {
    $result = $api_instance->getJobPostings($job_id, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getJobPostings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **int**| Job ID |
 **include_deleted** | **bool**| Include Deleted | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Posting[]**](../Model/Posting.md)

### Authorization

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobs**
> \Swagger\Client\Model\Job[] getJobs($requisition_number, $include_deleted)

Search customer's jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$requisition_number = "requisition_number_example"; // string | Requisition Number
$include_deleted = false; // bool | Include Deleted

try {
    $result = $api_instance->getJobs($requisition_number, $include_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requisition_number** | **string**| Requisition Number | [optional]
 **include_deleted** | **bool**| Include Deleted | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Job[]**](../Model/Job.md)

### Authorization

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDraft**
> postDraft($draft_id, $postings)

Post job draft to specified boards

This is a second (final) step of job posting process where you specify which boards you want job to be posted to.   This method implies the following rules related to existing postings:   if there is existing active posting - it will be updated if posting is expired on a board - it will be reposted   When this method suceeds job draft becomes inactive and can't be reused. Response of this method includes URL of the job that can be used to manage job lifecycle (see /job methods).   Note, due to eQuest billing system customer is charged \"per transaction\". Each call to this method is a separate transaction. Thus make sure that you include all boards at once to avoid extra charges to a customer.   You can use sample [XML](/bundles/equestpostjobapi/postings_data.xml) and [JSON](/bundles/equestpostjobapi/postings_data.json) formatted data for experiments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: http_basic
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\DefaultApi();
$draft_id = 56; // int | 
$postings = array(new Posting()); // \Swagger\Client\Model\Posting[] | 

try {
    $api_instance->postDraft($draft_id, $postings);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draft_id** | **int**|  |
 **postings** | [**\Swagger\Client\Model\Posting[]**](../Model/Posting.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [http_basic](../../README.md#http_basic)

### HTTP request headers

 - **Content-Type**: application/json, text/xml
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

