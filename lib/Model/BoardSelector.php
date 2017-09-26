<?php
/**
 * BoardSelector
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
 * ## Intro **This API is currently in development and should not be used in production or relied upon.**   Every request requires  [HTTP Basic Authentication](ttps://en.wikipedia.org/wiki/Basic_access_authentication\">HTTP Basic Authentication)   with regular posting account that should \"own\" the job. Content-Type and Accept headers should be respected by API in all cases. It's highly recommended to pass User-Agent header with a string identifying your ATS to keep track of API users and have a way for eQuest to contact you. ## Basic usage   Job posting process in eQuest generally consists of at 2 steps - passing  job data (e.g. job title, description) followed by board selection, referred  as \"posting\" in eQuest system (e.g. Monster.com, Craigslist).</p>   Since job in eQuest can't be stored without postings and we don't want to combine all information in one request, there is no way to create job directly. You have to create job draft first using /draft entity and then pass postings information. When request is completed we create job entity. You can use it to  change board selection using appropriate methods on /job/{id}/postings endpoint or DELETE job. ## Versioning This API will evolve with time. Request/response format will change. As a result it's mandatory to stick to specific version at the development time and upgrade down the road. This document will always refer to latest version. You can find it at the bottom of the page.   Version support is implemented through X-Accept-Version header. In generated clients search for a method like `addDefaultHeader` and call it when you configure client. In general make sure that every call to the API (both POST and GET) contains version header. You can find current version at the bottom of this page.   ## Experimenting using cURL Most API methods provide sample request data in both XML and JSON that can be used for experiments. Simply download request file, adjust if necessary and run command below. Note, you have to adjust endpoint domain and URL, authentication credentials content type and path to a file, which must start with @ to use with cURL.   ``` curl -i -H 'Content-type: application/json' -H 'Accept: application/json' -u 'USER:PASS' -d @PATH_TO_FILE     http://joblauncher.ZONE.equest.com/api/drafts ```   Some responses contain links in [Hypertex Application Language](http://stateless.co/hal_specification.html) format for JSON and [Atom Links](http://tools.ietf.org/search/rfc4287#section-4.2.7) for XML, but they are not documented in Swagger specification
 *
 * OpenAPI spec version: 1.4
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
 * BoardSelector Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BoardSelector extends Board implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BoardSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'inventory' => '\Swagger\Client\Model\Inventory'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'inventory' => 'inventory'
    );

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'inventory' => 'setInventory'
    );

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'inventory' => 'getInventory'
    );

    public static function getters()
    {
        return parent::getters() + self::$getters;
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
        parent::__construct($data);

        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets inventory
     * @return \Swagger\Client\Model\Inventory
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     * @param \Swagger\Client\Model\Inventory $inventory
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

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

