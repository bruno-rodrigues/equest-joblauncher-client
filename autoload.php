<?php

/**
 * eQuest Job Posting API
 *
 * ## Basic usage   Job posting process in eQuest generally consists of at 2 steps - passing  job data (e.g. job title, description) followed by board selection, referred  as \"posting\" in eQuest system (e.g. Monster.com, Craigslist).</p>   Since job in eQuest can't be stored without postings and we don't want to combine all information in one request, there is no way to create job directly. You have to create job draft first using /draft entity and then pass postings information. When request is completed we create job entity. You can use it to  change board selection using appropriate methods on /job/{id}/postings endpoint or DELETE job. ## Versioning This API will evolve with time. Request/response format will change. As a result it's mandatory to stick to specific version at the development time and upgrade down the road. This document will always refer to latest version. You can find it at the bottom of the page.   Version support is implemented through X-Accept-Version header. In generated clients search for a method like `addDefaultHeader` and call it when you configure client. In general make sure that every call to the API (both POST and GET) contains version header. You can find current version at the bottom of this page.   ## Experimenting using cURL Most API methods provide sample request data in both XML and JSON that can be used for experiments. Simply download request file, adjust if necessary and run command below. Note, you have to adjust endpoint domain and URL, authentication credentials content type and path to a file, which must start with @ to use with cURL.   ``` curl -i -H 'Content-type: application/json' -H 'Accept: application/json' -u 'USER:PASS' -d @PATH_TO_FILE     http://joblauncher.ZONE.equest.com/api/drafts ```   Some responses contain links in [Hypertex Application Language](http://stateless.co/hal_specification.html) format for JSON and [Atom Links](http://tools.ietf.org/search/rfc4287#section-4.2.7) for XML, but they are not documented in Swagger specification
 *
 * OpenAPI spec version: 1.7
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * An example of a project-specific implementation.
 *
 * After registering this autoload function with SPL, the following line
 * would cause the function to attempt to load the \Swagger\Client\Baz\Qux class
 * from /path/to/project/lib/Baz/Qux.php:
 *
 *      new \Swagger\Client\Baz\Qux;
 *
 * @param string $class The fully-qualified class name.
 *
 * @return void
 */
spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'Swagger\\Client\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/lib/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});
