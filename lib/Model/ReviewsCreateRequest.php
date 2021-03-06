<?php
/**
 * ReviewsCreateRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * developer.yext.com
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ReviewsCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReviewsCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Reviews:CreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location_id' => 'string',
        'account_id' => 'string',
        'rating' => 'int',
        'content' => 'string',
        'author_name' => 'string',
        'author_email' => 'string',
        'status' => 'string',
        'date' => 'string',
        'flag_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location_id' => null,
        'account_id' => null,
        'rating' => 'int32',
        'content' => null,
        'author_name' => null,
        'author_email' => null,
        'status' => null,
        'date' => null,
        'flag_status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'location_id' => 'locationId',
        'account_id' => 'accountId',
        'rating' => 'rating',
        'content' => 'content',
        'author_name' => 'authorName',
        'author_email' => 'authorEmail',
        'status' => 'status',
        'date' => 'date',
        'flag_status' => 'flagStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location_id' => 'setLocationId',
        'account_id' => 'setAccountId',
        'rating' => 'setRating',
        'content' => 'setContent',
        'author_name' => 'setAuthorName',
        'author_email' => 'setAuthorEmail',
        'status' => 'setStatus',
        'date' => 'setDate',
        'flag_status' => 'setFlagStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location_id' => 'getLocationId',
        'account_id' => 'getAccountId',
        'rating' => 'getRating',
        'content' => 'getContent',
        'author_name' => 'getAuthorName',
        'author_email' => 'getAuthorEmail',
        'status' => 'getStatus',
        'date' => 'getDate',
        'flag_status' => 'getFlagStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['author_name'] = isset($data['author_name']) ? $data['author_name'] : null;
        $this->container['author_email'] = isset($data['author_email']) ? $data['author_email'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['flag_status'] = isset($data['flag_status']) ? $data['flag_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['rating'] === null) {
            $invalidProperties[] = "'rating' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ($this->container['author_name'] === null) {
            $invalidProperties[] = "'author_name' can't be null";
        }
        if ($this->container['author_email'] === null) {
            $invalidProperties[] = "'author_email' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['flag_status'] === null) {
            $invalidProperties[] = "'flag_status' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets location_id
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string $location_id location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets author_name
     *
     * @return string
     */
    public function getAuthorName()
    {
        return $this->container['author_name'];
    }

    /**
     * Sets author_name
     *
     * @param string $author_name author_name
     *
     * @return $this
     */
    public function setAuthorName($author_name)
    {
        $this->container['author_name'] = $author_name;

        return $this;
    }

    /**
     * Gets author_email
     *
     * @return string
     */
    public function getAuthorEmail()
    {
        return $this->container['author_email'];
    }

    /**
     * Sets author_email
     *
     * @param string $author_email author_email
     *
     * @return $this
     */
    public function setAuthorEmail($author_email)
    {
        $this->container['author_email'] = $author_email;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets flag_status
     *
     * @return string
     */
    public function getFlagStatus()
    {
        return $this->container['flag_status'];
    }

    /**
     * Sets flag_status
     *
     * @param string $flag_status flag_status
     *
     * @return $this
     */
    public function setFlagStatus($flag_status)
    {
        $this->container['flag_status'] = $flag_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


