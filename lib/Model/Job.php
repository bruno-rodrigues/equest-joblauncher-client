<?php
/**
 * Job
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

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
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Job Class Doc Comment
 *
 * @category    Class */
 // @description See Job/Draft parameter description at https://support.equest.com/index.php?pg&#x3D;kb.page&amp;id&#x3D;224
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Job implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Job';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'state' => 'string',
        'requisition_number' => 'string',
        'position' => '\Swagger\Client\Model\Position',
        'company' => '\Swagger\Client\Model\Company',
        'candidate_response' => '\Swagger\Client\Model\CandidateResponse',
        'language' => 'string',
        'additional_languages' => '\Swagger\Client\Model\JobLanguage[]',
        '_links' => 'object'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'state' => 'state',
        'requisition_number' => 'requisition_number',
        'position' => 'position',
        'company' => 'company',
        'candidate_response' => 'candidate_response',
        'language' => 'language',
        'additional_languages' => 'additional_languages',
        '_links' => '_links'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'state' => 'setState',
        'requisition_number' => 'setRequisitionNumber',
        'position' => 'setPosition',
        'company' => 'setCompany',
        'candidate_response' => 'setCandidateResponse',
        'language' => 'setLanguage',
        'additional_languages' => 'setAdditionalLanguages',
        '_links' => 'setLinks'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'state' => 'getState',
        'requisition_number' => 'getRequisitionNumber',
        'position' => 'getPosition',
        'company' => 'getCompany',
        'candidate_response' => 'getCandidateResponse',
        'language' => 'getLanguage',
        'additional_languages' => 'getAdditionalLanguages',
        '_links' => 'getLinks'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['requisition_number'] = isset($data['requisition_number']) ? $data['requisition_number'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['candidate_response'] = isset($data['candidate_response']) ? $data['candidate_response'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['additional_languages'] = isset($data['additional_languages']) ? $data['additional_languages'] : null;
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;

        // Initialize discriminator property with the model name.
        $discrimintor = array_search('job_type', self::$attributeMap);
        $this->container[$discrimintor] = static::$swaggerModelName;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['requisition_number'] === null) {
            $invalid_properties[] = "'requisition_number' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalid_properties[] = "'position' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalid_properties[] = "'company' can't be null";
        }
        if ($this->container['candidate_response'] === null) {
            $invalid_properties[] = "'candidate_response' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['requisition_number'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        if ($this->container['company'] === null) {
            return false;
        }
        if ($this->container['candidate_response'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets requisition_number
     * @return string
     */
    public function getRequisitionNumber()
    {
        return $this->container['requisition_number'];
    }

    /**
     * Sets requisition_number
     * @param string $requisition_number
     * @return $this
     */
    public function setRequisitionNumber($requisition_number)
    {
        $this->container['requisition_number'] = $requisition_number;

        return $this;
    }

    /**
     * Gets position
     * @return \Swagger\Client\Model\Position
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param \Swagger\Client\Model\Position $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets company
     * @return \Swagger\Client\Model\Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \Swagger\Client\Model\Company $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets candidate_response
     * @return \Swagger\Client\Model\CandidateResponse
     */
    public function getCandidateResponse()
    {
        return $this->container['candidate_response'];
    }

    /**
     * Sets candidate_response
     * @param \Swagger\Client\Model\CandidateResponse $candidate_response
     * @return $this
     */
    public function setCandidateResponse($candidate_response)
    {
        $this->container['candidate_response'] = $candidate_response;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets additional_languages
     * @return \Swagger\Client\Model\JobLanguage[]
     */
    public function getAdditionalLanguages()
    {
        return $this->container['additional_languages'];
    }

    /**
     * Sets additional_languages
     * @param \Swagger\Client\Model\JobLanguage[] $additional_languages
     * @return $this
     */
    public function setAdditionalLanguages($additional_languages)
    {
        $this->container['additional_languages'] = $additional_languages;

        return $this;
    }

    /**
     * Gets _links
     * @return object
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     * @param object $_links Dictionary of related links
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


