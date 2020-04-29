# joblauncher-client-php
## Basic usage   Job posting process in eQuest generally consists of at 2 steps - passing  job data (e.g. job title, description) followed by board selection, referred  as \"posting\" in eQuest system (e.g. Monster.com, Craigslist).</p>   Since job in eQuest can't be stored without postings and we don't want to combine all information in one request, there is no way to create job directly. You have to create job draft first using /draft entity and then pass postings information. When request is completed we create job entity. You can use it to  change board selection using appropriate methods on /job/{id}/postings endpoint or DELETE job. ## Versioning This API will evolve with time. Request/response format will change. As a result it's mandatory to stick to specific version at the development time and upgrade down the road. This document will always refer to latest version. You can find it at the bottom of the page.   Version support is implemented through X-Accept-Version header. In generated clients search for a method like `addDefaultHeader` and call it when you configure client. In general make sure that every call to the API (both POST and GET) contains version header. You can find current version at the bottom of this page.   ## Experimenting using cURL Most API methods provide sample request data in both XML and JSON that can be used for experiments. Simply download request file, adjust if necessary and run command below. Note, you have to adjust endpoint domain and URL, authentication credentials content type and path to a file, which must start with @ to use with cURL.   ``` curl -i -H 'Content-type: application/json' -H 'Accept: application/json' -u 'USER:PASS' -d @PATH_TO_FILE     http://joblauncher.ZONE.equest.com/api/drafts ```   Some responses contain links in [Hypertex Application Language](http://stateless.co/hal_specification.html) format for JSON and [Atom Links](http://tools.ietf.org/search/rfc4287#section-4.2.7) for XML, but they are not documented in Swagger specification

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.7
- Build date: 2020-04-28T17:52:17.539Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/equest/joblauncher-client-php.git"
    }
  ],
  "require": {
    "equest/joblauncher-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/joblauncher-client-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://localhost/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**createDraft**](docs/Api/DefaultApi.md#createdraft) | **POST** /drafts | Create a job draft for posting to boards
*DefaultApi* | [**deleteJob**](docs/Api/DefaultApi.md#deletejob) | **DELETE** /jobs/{job_id} | Delete/unpost job and close it
*DefaultApi* | [**deleteJobPosting**](docs/Api/DefaultApi.md#deletejobposting) | **DELETE** /jobs/{job_id}/postings/{posting_id} | Delete/unpost job from specific board
*DefaultApi* | [**getBoards**](docs/Api/DefaultApi.md#getboards) | **GET** /boards | Returns boards available to post.
*DefaultApi* | [**getDraft**](docs/Api/DefaultApi.md#getdraft) | **GET** /drafts/{draft_id} | Get Job Draft Data
*DefaultApi* | [**getDraftBsdUrl**](docs/Api/DefaultApi.md#getdraftbsdurl) | **GET** /drafts/{draft_id}/bsd | Get Board Specific Data page URL for job draft
*DefaultApi* | [**getJob**](docs/Api/DefaultApi.md#getjob) | **GET** /jobs/{job_id} | Retrieve job data and status
*DefaultApi* | [**getJobPostings**](docs/Api/DefaultApi.md#getjobpostings) | **GET** /jobs/{job_id}/postings | Returns job&#39;s status on boards
*DefaultApi* | [**getJobs**](docs/Api/DefaultApi.md#getjobs) | **GET** /jobs | Search customer&#39;s jobs
*DefaultApi* | [**postDraft**](docs/Api/DefaultApi.md#postdraft) | **POST** /drafts/{draft_id}/postings | Post job draft to specified boards
*StubApi* | [**updateJob**](docs/Api/StubApi.md#updatejob) | **PATCH** /jobs/{job_id} | Change job data without changing board selection


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [Board](docs/Model/Board.md)
 - [BoardSelector](docs/Model/BoardSelector.md)
 - [CandidateResponse](docs/Model/CandidateResponse.md)
 - [Classification](docs/Model/Classification.md)
 - [Company](docs/Model/Company.md)
 - [Compensation](docs/Model/Compensation.md)
 - [Draft](docs/Model/Draft.md)
 - [ErrorMessage](docs/Model/ErrorMessage.md)
 - [Inventory](docs/Model/Inventory.md)
 - [Job](docs/Model/Job.md)
 - [JobLanguage](docs/Model/JobLanguage.md)
 - [Location](docs/Model/Location.md)
 - [Position](docs/Model/Position.md)
 - [Posting](docs/Model/Posting.md)
 - [PostingBoardStatus](docs/Model/PostingBoardStatus.md)
 - [PostingInstructions](docs/Model/PostingInstructions.md)
 - [Range](docs/Model/Range.md)


## Documentation For Authorization


## oauth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://auth.equest.com/oauth/authorize
- **Scopes**: 
 - **joblauncher.equest.com/jobs**: Post jobs using your account

## http_basic

- **Type**: HTTP basic authentication


## Author




