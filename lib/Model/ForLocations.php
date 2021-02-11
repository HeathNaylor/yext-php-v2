<?php
/**
 * ForLocations
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * developer.yext.com (FINAL)
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
 * ForLocations Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ForLocations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ForLocations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mapping_type' => 'string',
        'folder_id' => 'string',
        'location_ids' => 'string[]',
        'label_ids' => 'string[]',
        'label_operator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mapping_type' => null,
        'folder_id' => null,
        'location_ids' => null,
        'label_ids' => null,
        'label_operator' => null
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
        'mapping_type' => 'mappingType',
        'folder_id' => 'folderId',
        'location_ids' => 'locationIds',
        'label_ids' => 'labelIds',
        'label_operator' => 'labelOperator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mapping_type' => 'setMappingType',
        'folder_id' => 'setFolderId',
        'location_ids' => 'setLocationIds',
        'label_ids' => 'setLabelIds',
        'label_operator' => 'setLabelOperator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mapping_type' => 'getMappingType',
        'folder_id' => 'getFolderId',
        'location_ids' => 'getLocationIds',
        'label_ids' => 'getLabelIds',
        'label_operator' => 'getLabelOperator'
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
        $this->container['mapping_type'] = isset($data['mapping_type']) ? $data['mapping_type'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['location_ids'] = isset($data['location_ids']) ? $data['location_ids'] : null;
        $this->container['label_ids'] = isset($data['label_ids']) ? $data['label_ids'] : null;
        $this->container['label_operator'] = isset($data['label_operator']) ? $data['label_operator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mapping_type'] === null) {
            $invalidProperties[] = "'mapping_type' can't be null";
        }
        if ($this->container['folder_id'] === null) {
            $invalidProperties[] = "'folder_id' can't be null";
        }
        if ($this->container['location_ids'] === null) {
            $invalidProperties[] = "'location_ids' can't be null";
        }
        if ($this->container['label_ids'] === null) {
            $invalidProperties[] = "'label_ids' can't be null";
        }
        if ($this->container['label_operator'] === null) {
            $invalidProperties[] = "'label_operator' can't be null";
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
     * Gets mapping_type
     *
     * @return string
     */
    public function getMappingType()
    {
        return $this->container['mapping_type'];
    }

    /**
     * Sets mapping_type
     *
     * @param string $mapping_type mapping_type
     *
     * @return $this
     */
    public function setMappingType($mapping_type)
    {
        $this->container['mapping_type'] = $mapping_type;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param string $folder_id folder_id
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets location_ids
     *
     * @return string[]
     */
    public function getLocationIds()
    {
        return $this->container['location_ids'];
    }

    /**
     * Sets location_ids
     *
     * @param string[] $location_ids location_ids
     *
     * @return $this
     */
    public function setLocationIds($location_ids)
    {
        $this->container['location_ids'] = $location_ids;

        return $this;
    }

    /**
     * Gets label_ids
     *
     * @return string[]
     */
    public function getLabelIds()
    {
        return $this->container['label_ids'];
    }

    /**
     * Sets label_ids
     *
     * @param string[] $label_ids label_ids
     *
     * @return $this
     */
    public function setLabelIds($label_ids)
    {
        $this->container['label_ids'] = $label_ids;

        return $this;
    }

    /**
     * Gets label_operator
     *
     * @return string
     */
    public function getLabelOperator()
    {
        return $this->container['label_operator'];
    }

    /**
     * Sets label_operator
     *
     * @param string $label_operator label_operator
     *
     * @return $this
     */
    public function setLabelOperator($label_operator)
    {
        $this->container['label_operator'] = $label_operator;

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

