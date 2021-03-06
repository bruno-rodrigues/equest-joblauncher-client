<?php
/**
 * Position
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
 * Position Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Position implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Position';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'title' => 'string',
        'description' => 'string',
        'skills' => 'string',
        'education' => 'string',
        'benefits' => 'string',
        'compensation' => '\Swagger\Client\Model\Compensation',
        'location' => '\Swagger\Client\Model\Location',
        'travel_percentage' => 'string',
        'telecommute_percentage' => 'string',
        'classification' => '\Swagger\Client\Model\Classification'
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
        'title' => 'title',
        'description' => 'description',
        'skills' => 'skills',
        'education' => 'education',
        'benefits' => 'benefits',
        'compensation' => 'compensation',
        'location' => 'location',
        'travel_percentage' => 'travel_percentage',
        'telecommute_percentage' => 'telecommute_percentage',
        'classification' => 'classification'
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
        'title' => 'setTitle',
        'description' => 'setDescription',
        'skills' => 'setSkills',
        'education' => 'setEducation',
        'benefits' => 'setBenefits',
        'compensation' => 'setCompensation',
        'location' => 'setLocation',
        'travel_percentage' => 'setTravelPercentage',
        'telecommute_percentage' => 'setTelecommutePercentage',
        'classification' => 'setClassification'
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
        'title' => 'getTitle',
        'description' => 'getDescription',
        'skills' => 'getSkills',
        'education' => 'getEducation',
        'benefits' => 'getBenefits',
        'compensation' => 'getCompensation',
        'location' => 'getLocation',
        'travel_percentage' => 'getTravelPercentage',
        'telecommute_percentage' => 'getTelecommutePercentage',
        'classification' => 'getClassification'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['skills'] = isset($data['skills']) ? $data['skills'] : null;
        $this->container['education'] = isset($data['education']) ? $data['education'] : null;
        $this->container['benefits'] = isset($data['benefits']) ? $data['benefits'] : null;
        $this->container['compensation'] = isset($data['compensation']) ? $data['compensation'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['travel_percentage'] = isset($data['travel_percentage']) ? $data['travel_percentage'] : null;
        $this->container['telecommute_percentage'] = isset($data['telecommute_percentage']) ? $data['telecommute_percentage'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        if ((strlen($this->container['title']) > 500)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be smaller than or equal to 500.";
        }

        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalid_properties[] = "'location' can't be null";
        }
        if ($this->container['classification'] === null) {
            $invalid_properties[] = "'classification' can't be null";
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
        if ($this->container['title'] === null) {
            return false;
        }
        if (strlen($this->container['title']) > 500) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['location'] === null) {
            return false;
        }
        if ($this->container['classification'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        if (strlen($title) > 500) {
            throw new \InvalidArgumentException('invalid length for $title when calling Position., must be smaller than or equal to 500.');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of the job position.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets skills
     * @return string
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     * @param string $skills Description of required skills.
     * @return $this
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

        return $this;
    }

    /**
     * Gets education
     * @return string
     */
    public function getEducation()
    {
        return $this->container['education'];
    }

    /**
     * Sets education
     * @param string $education Description of education requirements.
     * @return $this
     */
    public function setEducation($education)
    {
        $this->container['education'] = $education;

        return $this;
    }

    /**
     * Gets benefits
     * @return string
     */
    public function getBenefits()
    {
        return $this->container['benefits'];
    }

    /**
     * Sets benefits
     * @param string $benefits
     * @return $this
     */
    public function setBenefits($benefits)
    {
        $this->container['benefits'] = $benefits;

        return $this;
    }

    /**
     * Gets compensation
     * @return \Swagger\Client\Model\Compensation
     */
    public function getCompensation()
    {
        return $this->container['compensation'];
    }

    /**
     * Sets compensation
     * @param \Swagger\Client\Model\Compensation $compensation
     * @return $this
     */
    public function setCompensation($compensation)
    {
        $this->container['compensation'] = $compensation;

        return $this;
    }

    /**
     * Gets location
     * @return \Swagger\Client\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param \Swagger\Client\Model\Location $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets travel_percentage
     * @return string
     */
    public function getTravelPercentage()
    {
        return $this->container['travel_percentage'];
    }

    /**
     * Sets travel_percentage
     * @param string $travel_percentage
     * @return $this
     */
    public function setTravelPercentage($travel_percentage)
    {
        $this->container['travel_percentage'] = $travel_percentage;

        return $this;
    }

    /**
     * Gets telecommute_percentage
     * @return string
     */
    public function getTelecommutePercentage()
    {
        return $this->container['telecommute_percentage'];
    }

    /**
     * Sets telecommute_percentage
     * @param string $telecommute_percentage
     * @return $this
     */
    public function setTelecommutePercentage($telecommute_percentage)
    {
        $this->container['telecommute_percentage'] = $telecommute_percentage;

        return $this;
    }

    /**
     * Gets classification
     * @return \Swagger\Client\Model\Classification
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     * @param \Swagger\Client\Model\Classification $classification
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;

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


