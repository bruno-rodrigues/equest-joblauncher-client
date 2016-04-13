<?php
/**
 * Classification
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
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * Classification Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Classification implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'type' => 'string',
        'time' => 'string',
        'function' => 'string',
        'industry' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'type' => 'type',
        'time' => 'time',
        'function' => 'function',
        'industry' => 'industry'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'type' => 'setType',
        'time' => 'setTime',
        'function' => 'setFunction',
        'industry' => 'setIndustry'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'type' => 'getType',
        'time' => 'getTime',
        'function' => 'getFunction',
        'industry' => 'getIndustry'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $type 
      * @var string
      */
    protected $type;
    
    /**
      * $time 
      * @var string
      */
    protected $time;
    
    /**
      * $function 
      * @var string
      */
    protected $function;
    
    /**
      * $industry 
      * @var int
      */
    protected $industry;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->type = $data["type"];
            $this->time = $data["time"];
            $this->function = $data["function"];
            $this->industry = $data["industry"];
        }
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type 
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets time
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }
  
    /**
     * Sets time
     * @param string $time 
     * @return $this
     */
    public function setTime($time)
    {
        
        $this->time = $time;
        return $this;
    }
    
    /**
     * Gets function
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }
  
    /**
     * Sets function
     * @param string $function 
     * @return $this
     */
    public function setFunction($function)
    {
        
        $this->function = $function;
        return $this;
    }
    
    /**
     * Gets industry
     * @return int
     */
    public function getIndustry()
    {
        return $this->industry;
    }
  
    /**
     * Sets industry
     * @param int $industry 
     * @return $this
     */
    public function setIndustry($industry)
    {
        
        $this->industry = $industry;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}