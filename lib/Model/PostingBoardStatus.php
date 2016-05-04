<?php
/**
 * PostingBoardStatus
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
 * PostingBoardStatus Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostingBoardStatus implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'PostingBoardStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'state' => 'string',
        'queued_at' => '\DateTime',
        'scheduled_at' => '\DateTime',
        'posted_at' => '\DateTime',
        'expires_at' => '\DateTime',
        'deferred_reason' => 'string',
        'live_url' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'state' => 'state',
        'queued_at' => 'queued_at',
        'scheduled_at' => 'scheduled_at',
        'posted_at' => 'posted_at',
        'expires_at' => 'expires_at',
        'deferred_reason' => 'deferred_reason',
        'live_url' => 'live_url'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'state' => 'setState',
        'queued_at' => 'setQueuedAt',
        'scheduled_at' => 'setScheduledAt',
        'posted_at' => 'setPostedAt',
        'expires_at' => 'setExpiresAt',
        'deferred_reason' => 'setDeferredReason',
        'live_url' => 'setLiveUrl'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'state' => 'getState',
        'queued_at' => 'getQueuedAt',
        'scheduled_at' => 'getScheduledAt',
        'posted_at' => 'getPostedAt',
        'expires_at' => 'getExpiresAt',
        'deferred_reason' => 'getDeferredReason',
        'live_url' => 'getLiveUrl'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $state queued|scheduled|posted|deferred|expired
      * @var string
      */
    protected $state;
    /**
      * $queued_at Timestamp when posting was accepted by the system
      * @var \DateTime
      */
    protected $queued_at;
    /**
      * $scheduled_at Timestamp when posting is requested to be published
      * @var \DateTime
      */
    protected $scheduled_at;
    /**
      * $posted_at Timestamp when posting was published on a board
      * @var \DateTime
      */
    protected $posted_at;
    /**
      * $expires_at Timestamp when posting expires on a board
      * @var \DateTime
      */
    protected $expires_at;
    /**
      * $deferred_reason Publishing failure reason from board
      * @var string
      */
    protected $deferred_reason;
    /**
      * $live_url URL of the posting on a board
      * @var string
      */
    protected $live_url;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->state = $data["state"];
            $this->queued_at = $data["queued_at"];
            $this->scheduled_at = $data["scheduled_at"];
            $this->posted_at = $data["posted_at"];
            $this->expires_at = $data["expires_at"];
            $this->deferred_reason = $data["deferred_reason"];
            $this->live_url = $data["live_url"];
        }
    }
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state queued|scheduled|posted|deferred|expired
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
        return $this;
    }
    /**
     * Gets queued_at
     * @return \DateTime
     */
    public function getQueuedAt()
    {
        return $this->queued_at;
    }
  
    /**
     * Sets queued_at
     * @param \DateTime $queued_at Timestamp when posting was accepted by the system
     * @return $this
     */
    public function setQueuedAt($queued_at)
    {
        
        $this->queued_at = $queued_at;
        return $this;
    }
    /**
     * Gets scheduled_at
     * @return \DateTime
     */
    public function getScheduledAt()
    {
        return $this->scheduled_at;
    }
  
    /**
     * Sets scheduled_at
     * @param \DateTime $scheduled_at Timestamp when posting is requested to be published
     * @return $this
     */
    public function setScheduledAt($scheduled_at)
    {
        
        $this->scheduled_at = $scheduled_at;
        return $this;
    }
    /**
     * Gets posted_at
     * @return \DateTime
     */
    public function getPostedAt()
    {
        return $this->posted_at;
    }
  
    /**
     * Sets posted_at
     * @param \DateTime $posted_at Timestamp when posting was published on a board
     * @return $this
     */
    public function setPostedAt($posted_at)
    {
        
        $this->posted_at = $posted_at;
        return $this;
    }
    /**
     * Gets expires_at
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }
  
    /**
     * Sets expires_at
     * @param \DateTime $expires_at Timestamp when posting expires on a board
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        
        $this->expires_at = $expires_at;
        return $this;
    }
    /**
     * Gets deferred_reason
     * @return string
     */
    public function getDeferredReason()
    {
        return $this->deferred_reason;
    }
  
    /**
     * Sets deferred_reason
     * @param string $deferred_reason Publishing failure reason from board
     * @return $this
     */
    public function setDeferredReason($deferred_reason)
    {
        
        $this->deferred_reason = $deferred_reason;
        return $this;
    }
    /**
     * Gets live_url
     * @return string
     */
    public function getLiveUrl()
    {
        return $this->live_url;
    }
  
    /**
     * Sets live_url
     * @param string $live_url URL of the posting on a board
     * @return $this
     */
    public function setLiveUrl($live_url)
    {
        
        $this->live_url = $live_url;
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
