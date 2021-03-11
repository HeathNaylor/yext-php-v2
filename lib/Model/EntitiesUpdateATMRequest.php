<?php
/**
 * EntitiesUpdateATMRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * developer.yext.com (read-only)
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
 * EntitiesUpdateATMRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EntitiesUpdateATMRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Entities:Update(ATM)Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meta' => '\Swagger\Client\Model\Meta',
        'name' => 'string',
        'category_ids' => 'string[]',
        'additional_hours_text' => 'string',
        'address' => '\Swagger\Client\Model\Address',
        'alternate_phone' => 'string',
        'closed' => 'bool',
        'display_coordinate' => '\Swagger\Client\Model\DisplayCoordinate',
        'dropoff_coordinate' => '\Swagger\Client\Model\DropoffCoordinate',
        'facebook_page_url' => 'string',
        'fax' => 'string',
        'featured_message' => '\Swagger\Client\Model\FeaturedMessage',
        'google_attributes' => 'object',
        'holiday_hours_conversation_enabled' => 'bool',
        'hours' => '\Swagger\Client\Model\Hours',
        'iso_region_code' => 'string',
        'labels' => 'string[]',
        'local_phone' => 'string',
        'located_in' => 'string',
        'location_type' => 'string',
        'logo' => '\Swagger\Client\Model\Logo',
        'main_phone' => 'string',
        'mobile_phone' => 'string',
        'nudge_enabled' => 'bool',
        'pickup_coordinate' => '\Swagger\Client\Model\PickupCoordinate',
        'price_range' => 'string',
        'primary_conversation_contact' => 'string',
        'review_response_conversation_enabled' => 'bool',
        'routable_coordinate' => '\Swagger\Client\Model\RoutableCoordinate',
        'timezone' => 'string',
        'toll_free_phone' => 'string',
        'tty_phone' => 'string',
        'walkable_coordinate' => '\Swagger\Client\Model\WalkableCoordinate',
        'website_url' => '\Swagger\Client\Model\WebsiteUrl'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meta' => null,
        'name' => null,
        'category_ids' => null,
        'additional_hours_text' => null,
        'address' => null,
        'alternate_phone' => null,
        'closed' => null,
        'display_coordinate' => null,
        'dropoff_coordinate' => null,
        'facebook_page_url' => null,
        'fax' => null,
        'featured_message' => null,
        'google_attributes' => null,
        'holiday_hours_conversation_enabled' => null,
        'hours' => null,
        'iso_region_code' => null,
        'labels' => null,
        'local_phone' => null,
        'located_in' => null,
        'location_type' => null,
        'logo' => null,
        'main_phone' => null,
        'mobile_phone' => null,
        'nudge_enabled' => null,
        'pickup_coordinate' => null,
        'price_range' => null,
        'primary_conversation_contact' => null,
        'review_response_conversation_enabled' => null,
        'routable_coordinate' => null,
        'timezone' => null,
        'toll_free_phone' => null,
        'tty_phone' => null,
        'walkable_coordinate' => null,
        'website_url' => null
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
        'meta' => 'meta',
        'name' => 'name',
        'category_ids' => 'categoryIds',
        'additional_hours_text' => 'additionalHoursText',
        'address' => 'address',
        'alternate_phone' => 'alternatePhone',
        'closed' => 'closed',
        'display_coordinate' => 'displayCoordinate',
        'dropoff_coordinate' => 'dropoffCoordinate',
        'facebook_page_url' => 'facebookPageUrl',
        'fax' => 'fax',
        'featured_message' => 'featuredMessage',
        'google_attributes' => 'googleAttributes',
        'holiday_hours_conversation_enabled' => 'holidayHoursConversationEnabled',
        'hours' => 'hours',
        'iso_region_code' => 'isoRegionCode',
        'labels' => 'labels',
        'local_phone' => 'localPhone',
        'located_in' => 'locatedIn',
        'location_type' => 'locationType',
        'logo' => 'logo',
        'main_phone' => 'mainPhone',
        'mobile_phone' => 'mobilePhone',
        'nudge_enabled' => 'nudgeEnabled',
        'pickup_coordinate' => 'pickupCoordinate',
        'price_range' => 'priceRange',
        'primary_conversation_contact' => 'primaryConversationContact',
        'review_response_conversation_enabled' => 'reviewResponseConversationEnabled',
        'routable_coordinate' => 'routableCoordinate',
        'timezone' => 'timezone',
        'toll_free_phone' => 'tollFreePhone',
        'tty_phone' => 'ttyPhone',
        'walkable_coordinate' => 'walkableCoordinate',
        'website_url' => 'websiteUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meta' => 'setMeta',
        'name' => 'setName',
        'category_ids' => 'setCategoryIds',
        'additional_hours_text' => 'setAdditionalHoursText',
        'address' => 'setAddress',
        'alternate_phone' => 'setAlternatePhone',
        'closed' => 'setClosed',
        'display_coordinate' => 'setDisplayCoordinate',
        'dropoff_coordinate' => 'setDropoffCoordinate',
        'facebook_page_url' => 'setFacebookPageUrl',
        'fax' => 'setFax',
        'featured_message' => 'setFeaturedMessage',
        'google_attributes' => 'setGoogleAttributes',
        'holiday_hours_conversation_enabled' => 'setHolidayHoursConversationEnabled',
        'hours' => 'setHours',
        'iso_region_code' => 'setIsoRegionCode',
        'labels' => 'setLabels',
        'local_phone' => 'setLocalPhone',
        'located_in' => 'setLocatedIn',
        'location_type' => 'setLocationType',
        'logo' => 'setLogo',
        'main_phone' => 'setMainPhone',
        'mobile_phone' => 'setMobilePhone',
        'nudge_enabled' => 'setNudgeEnabled',
        'pickup_coordinate' => 'setPickupCoordinate',
        'price_range' => 'setPriceRange',
        'primary_conversation_contact' => 'setPrimaryConversationContact',
        'review_response_conversation_enabled' => 'setReviewResponseConversationEnabled',
        'routable_coordinate' => 'setRoutableCoordinate',
        'timezone' => 'setTimezone',
        'toll_free_phone' => 'setTollFreePhone',
        'tty_phone' => 'setTtyPhone',
        'walkable_coordinate' => 'setWalkableCoordinate',
        'website_url' => 'setWebsiteUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meta' => 'getMeta',
        'name' => 'getName',
        'category_ids' => 'getCategoryIds',
        'additional_hours_text' => 'getAdditionalHoursText',
        'address' => 'getAddress',
        'alternate_phone' => 'getAlternatePhone',
        'closed' => 'getClosed',
        'display_coordinate' => 'getDisplayCoordinate',
        'dropoff_coordinate' => 'getDropoffCoordinate',
        'facebook_page_url' => 'getFacebookPageUrl',
        'fax' => 'getFax',
        'featured_message' => 'getFeaturedMessage',
        'google_attributes' => 'getGoogleAttributes',
        'holiday_hours_conversation_enabled' => 'getHolidayHoursConversationEnabled',
        'hours' => 'getHours',
        'iso_region_code' => 'getIsoRegionCode',
        'labels' => 'getLabels',
        'local_phone' => 'getLocalPhone',
        'located_in' => 'getLocatedIn',
        'location_type' => 'getLocationType',
        'logo' => 'getLogo',
        'main_phone' => 'getMainPhone',
        'mobile_phone' => 'getMobilePhone',
        'nudge_enabled' => 'getNudgeEnabled',
        'pickup_coordinate' => 'getPickupCoordinate',
        'price_range' => 'getPriceRange',
        'primary_conversation_contact' => 'getPrimaryConversationContact',
        'review_response_conversation_enabled' => 'getReviewResponseConversationEnabled',
        'routable_coordinate' => 'getRoutableCoordinate',
        'timezone' => 'getTimezone',
        'toll_free_phone' => 'getTollFreePhone',
        'tty_phone' => 'getTtyPhone',
        'walkable_coordinate' => 'getWalkableCoordinate',
        'website_url' => 'getWebsiteUrl'
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
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category_ids'] = isset($data['category_ids']) ? $data['category_ids'] : null;
        $this->container['additional_hours_text'] = isset($data['additional_hours_text']) ? $data['additional_hours_text'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['alternate_phone'] = isset($data['alternate_phone']) ? $data['alternate_phone'] : null;
        $this->container['closed'] = isset($data['closed']) ? $data['closed'] : null;
        $this->container['display_coordinate'] = isset($data['display_coordinate']) ? $data['display_coordinate'] : null;
        $this->container['dropoff_coordinate'] = isset($data['dropoff_coordinate']) ? $data['dropoff_coordinate'] : null;
        $this->container['facebook_page_url'] = isset($data['facebook_page_url']) ? $data['facebook_page_url'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['featured_message'] = isset($data['featured_message']) ? $data['featured_message'] : null;
        $this->container['google_attributes'] = isset($data['google_attributes']) ? $data['google_attributes'] : null;
        $this->container['holiday_hours_conversation_enabled'] = isset($data['holiday_hours_conversation_enabled']) ? $data['holiday_hours_conversation_enabled'] : null;
        $this->container['hours'] = isset($data['hours']) ? $data['hours'] : null;
        $this->container['iso_region_code'] = isset($data['iso_region_code']) ? $data['iso_region_code'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['local_phone'] = isset($data['local_phone']) ? $data['local_phone'] : null;
        $this->container['located_in'] = isset($data['located_in']) ? $data['located_in'] : null;
        $this->container['location_type'] = isset($data['location_type']) ? $data['location_type'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['main_phone'] = isset($data['main_phone']) ? $data['main_phone'] : null;
        $this->container['mobile_phone'] = isset($data['mobile_phone']) ? $data['mobile_phone'] : null;
        $this->container['nudge_enabled'] = isset($data['nudge_enabled']) ? $data['nudge_enabled'] : null;
        $this->container['pickup_coordinate'] = isset($data['pickup_coordinate']) ? $data['pickup_coordinate'] : null;
        $this->container['price_range'] = isset($data['price_range']) ? $data['price_range'] : null;
        $this->container['primary_conversation_contact'] = isset($data['primary_conversation_contact']) ? $data['primary_conversation_contact'] : null;
        $this->container['review_response_conversation_enabled'] = isset($data['review_response_conversation_enabled']) ? $data['review_response_conversation_enabled'] : null;
        $this->container['routable_coordinate'] = isset($data['routable_coordinate']) ? $data['routable_coordinate'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['toll_free_phone'] = isset($data['toll_free_phone']) ? $data['toll_free_phone'] : null;
        $this->container['tty_phone'] = isset($data['tty_phone']) ? $data['tty_phone'] : null;
        $this->container['walkable_coordinate'] = isset($data['walkable_coordinate']) ? $data['walkable_coordinate'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['meta'] === null) {
            $invalidProperties[] = "'meta' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category_ids'] === null) {
            $invalidProperties[] = "'category_ids' can't be null";
        }
        if ($this->container['additional_hours_text'] === null) {
            $invalidProperties[] = "'additional_hours_text' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['alternate_phone'] === null) {
            $invalidProperties[] = "'alternate_phone' can't be null";
        }
        if ($this->container['closed'] === null) {
            $invalidProperties[] = "'closed' can't be null";
        }
        if ($this->container['display_coordinate'] === null) {
            $invalidProperties[] = "'display_coordinate' can't be null";
        }
        if ($this->container['dropoff_coordinate'] === null) {
            $invalidProperties[] = "'dropoff_coordinate' can't be null";
        }
        if ($this->container['facebook_page_url'] === null) {
            $invalidProperties[] = "'facebook_page_url' can't be null";
        }
        if ($this->container['fax'] === null) {
            $invalidProperties[] = "'fax' can't be null";
        }
        if ($this->container['featured_message'] === null) {
            $invalidProperties[] = "'featured_message' can't be null";
        }
        if ($this->container['google_attributes'] === null) {
            $invalidProperties[] = "'google_attributes' can't be null";
        }
        if ($this->container['holiday_hours_conversation_enabled'] === null) {
            $invalidProperties[] = "'holiday_hours_conversation_enabled' can't be null";
        }
        if ($this->container['hours'] === null) {
            $invalidProperties[] = "'hours' can't be null";
        }
        if ($this->container['iso_region_code'] === null) {
            $invalidProperties[] = "'iso_region_code' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['local_phone'] === null) {
            $invalidProperties[] = "'local_phone' can't be null";
        }
        if ($this->container['located_in'] === null) {
            $invalidProperties[] = "'located_in' can't be null";
        }
        if ($this->container['location_type'] === null) {
            $invalidProperties[] = "'location_type' can't be null";
        }
        if ($this->container['logo'] === null) {
            $invalidProperties[] = "'logo' can't be null";
        }
        if ($this->container['main_phone'] === null) {
            $invalidProperties[] = "'main_phone' can't be null";
        }
        if ($this->container['mobile_phone'] === null) {
            $invalidProperties[] = "'mobile_phone' can't be null";
        }
        if ($this->container['nudge_enabled'] === null) {
            $invalidProperties[] = "'nudge_enabled' can't be null";
        }
        if ($this->container['pickup_coordinate'] === null) {
            $invalidProperties[] = "'pickup_coordinate' can't be null";
        }
        if ($this->container['price_range'] === null) {
            $invalidProperties[] = "'price_range' can't be null";
        }
        if ($this->container['primary_conversation_contact'] === null) {
            $invalidProperties[] = "'primary_conversation_contact' can't be null";
        }
        if ($this->container['review_response_conversation_enabled'] === null) {
            $invalidProperties[] = "'review_response_conversation_enabled' can't be null";
        }
        if ($this->container['routable_coordinate'] === null) {
            $invalidProperties[] = "'routable_coordinate' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ($this->container['toll_free_phone'] === null) {
            $invalidProperties[] = "'toll_free_phone' can't be null";
        }
        if ($this->container['tty_phone'] === null) {
            $invalidProperties[] = "'tty_phone' can't be null";
        }
        if ($this->container['walkable_coordinate'] === null) {
            $invalidProperties[] = "'walkable_coordinate' can't be null";
        }
        if ($this->container['website_url'] === null) {
            $invalidProperties[] = "'website_url' can't be null";
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
     * Gets meta
     *
     * @return \Swagger\Client\Model\Meta
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Swagger\Client\Model\Meta $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category_ids
     *
     * @return string[]
     */
    public function getCategoryIds()
    {
        return $this->container['category_ids'];
    }

    /**
     * Sets category_ids
     *
     * @param string[] $category_ids category_ids
     *
     * @return $this
     */
    public function setCategoryIds($category_ids)
    {
        $this->container['category_ids'] = $category_ids;

        return $this;
    }

    /**
     * Gets additional_hours_text
     *
     * @return string
     */
    public function getAdditionalHoursText()
    {
        return $this->container['additional_hours_text'];
    }

    /**
     * Sets additional_hours_text
     *
     * @param string $additional_hours_text additional_hours_text
     *
     * @return $this
     */
    public function setAdditionalHoursText($additional_hours_text)
    {
        $this->container['additional_hours_text'] = $additional_hours_text;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets alternate_phone
     *
     * @return string
     */
    public function getAlternatePhone()
    {
        return $this->container['alternate_phone'];
    }

    /**
     * Sets alternate_phone
     *
     * @param string $alternate_phone alternate_phone
     *
     * @return $this
     */
    public function setAlternatePhone($alternate_phone)
    {
        $this->container['alternate_phone'] = $alternate_phone;

        return $this;
    }

    /**
     * Gets closed
     *
     * @return bool
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param bool $closed closed
     *
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;

        return $this;
    }

    /**
     * Gets display_coordinate
     *
     * @return \Swagger\Client\Model\DisplayCoordinate
     */
    public function getDisplayCoordinate()
    {
        return $this->container['display_coordinate'];
    }

    /**
     * Sets display_coordinate
     *
     * @param \Swagger\Client\Model\DisplayCoordinate $display_coordinate display_coordinate
     *
     * @return $this
     */
    public function setDisplayCoordinate($display_coordinate)
    {
        $this->container['display_coordinate'] = $display_coordinate;

        return $this;
    }

    /**
     * Gets dropoff_coordinate
     *
     * @return \Swagger\Client\Model\DropoffCoordinate
     */
    public function getDropoffCoordinate()
    {
        return $this->container['dropoff_coordinate'];
    }

    /**
     * Sets dropoff_coordinate
     *
     * @param \Swagger\Client\Model\DropoffCoordinate $dropoff_coordinate dropoff_coordinate
     *
     * @return $this
     */
    public function setDropoffCoordinate($dropoff_coordinate)
    {
        $this->container['dropoff_coordinate'] = $dropoff_coordinate;

        return $this;
    }

    /**
     * Gets facebook_page_url
     *
     * @return string
     */
    public function getFacebookPageUrl()
    {
        return $this->container['facebook_page_url'];
    }

    /**
     * Sets facebook_page_url
     *
     * @param string $facebook_page_url facebook_page_url
     *
     * @return $this
     */
    public function setFacebookPageUrl($facebook_page_url)
    {
        $this->container['facebook_page_url'] = $facebook_page_url;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets featured_message
     *
     * @return \Swagger\Client\Model\FeaturedMessage
     */
    public function getFeaturedMessage()
    {
        return $this->container['featured_message'];
    }

    /**
     * Sets featured_message
     *
     * @param \Swagger\Client\Model\FeaturedMessage $featured_message featured_message
     *
     * @return $this
     */
    public function setFeaturedMessage($featured_message)
    {
        $this->container['featured_message'] = $featured_message;

        return $this;
    }

    /**
     * Gets google_attributes
     *
     * @return object
     */
    public function getGoogleAttributes()
    {
        return $this->container['google_attributes'];
    }

    /**
     * Sets google_attributes
     *
     * @param object $google_attributes google_attributes
     *
     * @return $this
     */
    public function setGoogleAttributes($google_attributes)
    {
        $this->container['google_attributes'] = $google_attributes;

        return $this;
    }

    /**
     * Gets holiday_hours_conversation_enabled
     *
     * @return bool
     */
    public function getHolidayHoursConversationEnabled()
    {
        return $this->container['holiday_hours_conversation_enabled'];
    }

    /**
     * Sets holiday_hours_conversation_enabled
     *
     * @param bool $holiday_hours_conversation_enabled holiday_hours_conversation_enabled
     *
     * @return $this
     */
    public function setHolidayHoursConversationEnabled($holiday_hours_conversation_enabled)
    {
        $this->container['holiday_hours_conversation_enabled'] = $holiday_hours_conversation_enabled;

        return $this;
    }

    /**
     * Gets hours
     *
     * @return \Swagger\Client\Model\Hours
     */
    public function getHours()
    {
        return $this->container['hours'];
    }

    /**
     * Sets hours
     *
     * @param \Swagger\Client\Model\Hours $hours hours
     *
     * @return $this
     */
    public function setHours($hours)
    {
        $this->container['hours'] = $hours;

        return $this;
    }

    /**
     * Gets iso_region_code
     *
     * @return string
     */
    public function getIsoRegionCode()
    {
        return $this->container['iso_region_code'];
    }

    /**
     * Sets iso_region_code
     *
     * @param string $iso_region_code iso_region_code
     *
     * @return $this
     */
    public function setIsoRegionCode($iso_region_code)
    {
        $this->container['iso_region_code'] = $iso_region_code;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets local_phone
     *
     * @return string
     */
    public function getLocalPhone()
    {
        return $this->container['local_phone'];
    }

    /**
     * Sets local_phone
     *
     * @param string $local_phone local_phone
     *
     * @return $this
     */
    public function setLocalPhone($local_phone)
    {
        $this->container['local_phone'] = $local_phone;

        return $this;
    }

    /**
     * Gets located_in
     *
     * @return string
     */
    public function getLocatedIn()
    {
        return $this->container['located_in'];
    }

    /**
     * Sets located_in
     *
     * @param string $located_in located_in
     *
     * @return $this
     */
    public function setLocatedIn($located_in)
    {
        $this->container['located_in'] = $located_in;

        return $this;
    }

    /**
     * Gets location_type
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->container['location_type'];
    }

    /**
     * Sets location_type
     *
     * @param string $location_type location_type
     *
     * @return $this
     */
    public function setLocationType($location_type)
    {
        $this->container['location_type'] = $location_type;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \Swagger\Client\Model\Logo
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Swagger\Client\Model\Logo $logo logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets main_phone
     *
     * @return string
     */
    public function getMainPhone()
    {
        return $this->container['main_phone'];
    }

    /**
     * Sets main_phone
     *
     * @param string $main_phone main_phone
     *
     * @return $this
     */
    public function setMainPhone($main_phone)
    {
        $this->container['main_phone'] = $main_phone;

        return $this;
    }

    /**
     * Gets mobile_phone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     *
     * @param string $mobile_phone mobile_phone
     *
     * @return $this
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->container['mobile_phone'] = $mobile_phone;

        return $this;
    }

    /**
     * Gets nudge_enabled
     *
     * @return bool
     */
    public function getNudgeEnabled()
    {
        return $this->container['nudge_enabled'];
    }

    /**
     * Sets nudge_enabled
     *
     * @param bool $nudge_enabled nudge_enabled
     *
     * @return $this
     */
    public function setNudgeEnabled($nudge_enabled)
    {
        $this->container['nudge_enabled'] = $nudge_enabled;

        return $this;
    }

    /**
     * Gets pickup_coordinate
     *
     * @return \Swagger\Client\Model\PickupCoordinate
     */
    public function getPickupCoordinate()
    {
        return $this->container['pickup_coordinate'];
    }

    /**
     * Sets pickup_coordinate
     *
     * @param \Swagger\Client\Model\PickupCoordinate $pickup_coordinate pickup_coordinate
     *
     * @return $this
     */
    public function setPickupCoordinate($pickup_coordinate)
    {
        $this->container['pickup_coordinate'] = $pickup_coordinate;

        return $this;
    }

    /**
     * Gets price_range
     *
     * @return string
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     *
     * @param string $price_range price_range
     *
     * @return $this
     */
    public function setPriceRange($price_range)
    {
        $this->container['price_range'] = $price_range;

        return $this;
    }

    /**
     * Gets primary_conversation_contact
     *
     * @return string
     */
    public function getPrimaryConversationContact()
    {
        return $this->container['primary_conversation_contact'];
    }

    /**
     * Sets primary_conversation_contact
     *
     * @param string $primary_conversation_contact primary_conversation_contact
     *
     * @return $this
     */
    public function setPrimaryConversationContact($primary_conversation_contact)
    {
        $this->container['primary_conversation_contact'] = $primary_conversation_contact;

        return $this;
    }

    /**
     * Gets review_response_conversation_enabled
     *
     * @return bool
     */
    public function getReviewResponseConversationEnabled()
    {
        return $this->container['review_response_conversation_enabled'];
    }

    /**
     * Sets review_response_conversation_enabled
     *
     * @param bool $review_response_conversation_enabled review_response_conversation_enabled
     *
     * @return $this
     */
    public function setReviewResponseConversationEnabled($review_response_conversation_enabled)
    {
        $this->container['review_response_conversation_enabled'] = $review_response_conversation_enabled;

        return $this;
    }

    /**
     * Gets routable_coordinate
     *
     * @return \Swagger\Client\Model\RoutableCoordinate
     */
    public function getRoutableCoordinate()
    {
        return $this->container['routable_coordinate'];
    }

    /**
     * Sets routable_coordinate
     *
     * @param \Swagger\Client\Model\RoutableCoordinate $routable_coordinate routable_coordinate
     *
     * @return $this
     */
    public function setRoutableCoordinate($routable_coordinate)
    {
        $this->container['routable_coordinate'] = $routable_coordinate;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets toll_free_phone
     *
     * @return string
     */
    public function getTollFreePhone()
    {
        return $this->container['toll_free_phone'];
    }

    /**
     * Sets toll_free_phone
     *
     * @param string $toll_free_phone toll_free_phone
     *
     * @return $this
     */
    public function setTollFreePhone($toll_free_phone)
    {
        $this->container['toll_free_phone'] = $toll_free_phone;

        return $this;
    }

    /**
     * Gets tty_phone
     *
     * @return string
     */
    public function getTtyPhone()
    {
        return $this->container['tty_phone'];
    }

    /**
     * Sets tty_phone
     *
     * @param string $tty_phone tty_phone
     *
     * @return $this
     */
    public function setTtyPhone($tty_phone)
    {
        $this->container['tty_phone'] = $tty_phone;

        return $this;
    }

    /**
     * Gets walkable_coordinate
     *
     * @return \Swagger\Client\Model\WalkableCoordinate
     */
    public function getWalkableCoordinate()
    {
        return $this->container['walkable_coordinate'];
    }

    /**
     * Sets walkable_coordinate
     *
     * @param \Swagger\Client\Model\WalkableCoordinate $walkable_coordinate walkable_coordinate
     *
     * @return $this
     */
    public function setWalkableCoordinate($walkable_coordinate)
    {
        $this->container['walkable_coordinate'] = $walkable_coordinate;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return \Swagger\Client\Model\WebsiteUrl
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param \Swagger\Client\Model\WebsiteUrl $website_url website_url
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

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


