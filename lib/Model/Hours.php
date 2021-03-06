<?php
/**
 * Hours
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
 * Hours Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Hours implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hours';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'monday' => 'object',
        'tuesday' => 'object',
        'wednesday' => 'object',
        'thursday' => 'object',
        'friday' => 'object',
        'saturday' => 'object',
        'sunday' => 'object',
        'holiday_hours' => '\Swagger\Client\Model\HolidayHour[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'monday' => null,
        'tuesday' => null,
        'wednesday' => null,
        'thursday' => null,
        'friday' => null,
        'saturday' => null,
        'sunday' => null,
        'holiday_hours' => null
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
        'monday' => 'monday',
        'tuesday' => 'tuesday',
        'wednesday' => 'wednesday',
        'thursday' => 'thursday',
        'friday' => 'friday',
        'saturday' => 'saturday',
        'sunday' => 'sunday',
        'holiday_hours' => 'holidayHours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'monday' => 'setMonday',
        'tuesday' => 'setTuesday',
        'wednesday' => 'setWednesday',
        'thursday' => 'setThursday',
        'friday' => 'setFriday',
        'saturday' => 'setSaturday',
        'sunday' => 'setSunday',
        'holiday_hours' => 'setHolidayHours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'monday' => 'getMonday',
        'tuesday' => 'getTuesday',
        'wednesday' => 'getWednesday',
        'thursday' => 'getThursday',
        'friday' => 'getFriday',
        'saturday' => 'getSaturday',
        'sunday' => 'getSunday',
        'holiday_hours' => 'getHolidayHours'
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
        $this->container['monday'] = isset($data['monday']) ? $data['monday'] : null;
        $this->container['tuesday'] = isset($data['tuesday']) ? $data['tuesday'] : null;
        $this->container['wednesday'] = isset($data['wednesday']) ? $data['wednesday'] : null;
        $this->container['thursday'] = isset($data['thursday']) ? $data['thursday'] : null;
        $this->container['friday'] = isset($data['friday']) ? $data['friday'] : null;
        $this->container['saturday'] = isset($data['saturday']) ? $data['saturday'] : null;
        $this->container['sunday'] = isset($data['sunday']) ? $data['sunday'] : null;
        $this->container['holiday_hours'] = isset($data['holiday_hours']) ? $data['holiday_hours'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['monday'] === null) {
            $invalidProperties[] = "'monday' can't be null";
        }
        if ($this->container['tuesday'] === null) {
            $invalidProperties[] = "'tuesday' can't be null";
        }
        if ($this->container['wednesday'] === null) {
            $invalidProperties[] = "'wednesday' can't be null";
        }
        if ($this->container['thursday'] === null) {
            $invalidProperties[] = "'thursday' can't be null";
        }
        if ($this->container['friday'] === null) {
            $invalidProperties[] = "'friday' can't be null";
        }
        if ($this->container['saturday'] === null) {
            $invalidProperties[] = "'saturday' can't be null";
        }
        if ($this->container['sunday'] === null) {
            $invalidProperties[] = "'sunday' can't be null";
        }
        if ($this->container['holiday_hours'] === null) {
            $invalidProperties[] = "'holiday_hours' can't be null";
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
     * Gets monday
     *
     * @return object
     */
    public function getMonday()
    {
        return $this->container['monday'];
    }

    /**
     * Sets monday
     *
     * @param object $monday monday
     *
     * @return $this
     */
    public function setMonday($monday)
    {
        $this->container['monday'] = $monday;

        return $this;
    }

    /**
     * Gets tuesday
     *
     * @return object
     */
    public function getTuesday()
    {
        return $this->container['tuesday'];
    }

    /**
     * Sets tuesday
     *
     * @param object $tuesday tuesday
     *
     * @return $this
     */
    public function setTuesday($tuesday)
    {
        $this->container['tuesday'] = $tuesday;

        return $this;
    }

    /**
     * Gets wednesday
     *
     * @return object
     */
    public function getWednesday()
    {
        return $this->container['wednesday'];
    }

    /**
     * Sets wednesday
     *
     * @param object $wednesday wednesday
     *
     * @return $this
     */
    public function setWednesday($wednesday)
    {
        $this->container['wednesday'] = $wednesday;

        return $this;
    }

    /**
     * Gets thursday
     *
     * @return object
     */
    public function getThursday()
    {
        return $this->container['thursday'];
    }

    /**
     * Sets thursday
     *
     * @param object $thursday thursday
     *
     * @return $this
     */
    public function setThursday($thursday)
    {
        $this->container['thursday'] = $thursday;

        return $this;
    }

    /**
     * Gets friday
     *
     * @return object
     */
    public function getFriday()
    {
        return $this->container['friday'];
    }

    /**
     * Sets friday
     *
     * @param object $friday friday
     *
     * @return $this
     */
    public function setFriday($friday)
    {
        $this->container['friday'] = $friday;

        return $this;
    }

    /**
     * Gets saturday
     *
     * @return object
     */
    public function getSaturday()
    {
        return $this->container['saturday'];
    }

    /**
     * Sets saturday
     *
     * @param object $saturday saturday
     *
     * @return $this
     */
    public function setSaturday($saturday)
    {
        $this->container['saturday'] = $saturday;

        return $this;
    }

    /**
     * Gets sunday
     *
     * @return object
     */
    public function getSunday()
    {
        return $this->container['sunday'];
    }

    /**
     * Sets sunday
     *
     * @param object $sunday sunday
     *
     * @return $this
     */
    public function setSunday($sunday)
    {
        $this->container['sunday'] = $sunday;

        return $this;
    }

    /**
     * Gets holiday_hours
     *
     * @return \Swagger\Client\Model\HolidayHour[]
     */
    public function getHolidayHours()
    {
        return $this->container['holiday_hours'];
    }

    /**
     * Sets holiday_hours
     *
     * @param \Swagger\Client\Model\HolidayHour[] $holiday_hours holiday_hours
     *
     * @return $this
     */
    public function setHolidayHours($holiday_hours)
    {
        $this->container['holiday_hours'] = $holiday_hours;

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


