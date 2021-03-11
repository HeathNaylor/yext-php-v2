<?php
/**
 * EntitiesCreateEventRequest
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
 * EntitiesCreateEventRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EntitiesCreateEventRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Entities:Create(Event)Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meta' => '\Swagger\Client\Model\Meta',
        'name' => 'string',
        'category_ids' => 'string[]',
        'address' => '\Swagger\Client\Model\Address',
        'linked_location' => 'string',
        'additional_promoting_locations' => 'string[]',
        'age_range' => '\Swagger\Client\Model\AgeRange',
        'description' => 'string',
        'display_coordinate' => '\Swagger\Client\Model\DisplayCoordinate',
        'dropoff_coordinate' => '\Swagger\Client\Model\DropoffCoordinate',
        'event_status' => 'string',
        'is_free_event' => 'bool',
        'is_ticketed_event' => 'bool',
        'keywords' => 'string[]',
        'labels' => 'string[]',
        'landing_page_url' => 'string',
        'organizer_email' => 'string',
        'organizer_name' => 'string',
        'organizer_phone' => 'string',
        'performers' => 'string[]',
        'photo_gallery' => '\Swagger\Client\Model\PhotoGallery[]',
        'pickup_coordinate' => '\Swagger\Client\Model\PickupCoordinate',
        'routable_coordinate' => '\Swagger\Client\Model\RoutableCoordinate',
        'ticket_availability' => 'string',
        'ticket_price_range' => '\Swagger\Client\Model\TicketPriceRange',
        'ticket_sale_date_time' => 'string',
        'ticket_url' => 'string',
        'time' => '\Swagger\Client\Model\Time',
        'timezone' => 'string',
        'venue_name' => 'string',
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
        'address' => null,
        'linked_location' => null,
        'additional_promoting_locations' => null,
        'age_range' => null,
        'description' => null,
        'display_coordinate' => null,
        'dropoff_coordinate' => null,
        'event_status' => null,
        'is_free_event' => null,
        'is_ticketed_event' => null,
        'keywords' => null,
        'labels' => null,
        'landing_page_url' => null,
        'organizer_email' => null,
        'organizer_name' => null,
        'organizer_phone' => null,
        'performers' => null,
        'photo_gallery' => null,
        'pickup_coordinate' => null,
        'routable_coordinate' => null,
        'ticket_availability' => null,
        'ticket_price_range' => null,
        'ticket_sale_date_time' => null,
        'ticket_url' => null,
        'time' => null,
        'timezone' => null,
        'venue_name' => null,
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
        'address' => 'address',
        'linked_location' => 'linkedLocation',
        'additional_promoting_locations' => 'additionalPromotingLocations',
        'age_range' => 'ageRange',
        'description' => 'description',
        'display_coordinate' => 'displayCoordinate',
        'dropoff_coordinate' => 'dropoffCoordinate',
        'event_status' => 'eventStatus',
        'is_free_event' => 'isFreeEvent',
        'is_ticketed_event' => 'isTicketedEvent',
        'keywords' => 'keywords',
        'labels' => 'labels',
        'landing_page_url' => 'landingPageUrl',
        'organizer_email' => 'organizerEmail',
        'organizer_name' => 'organizerName',
        'organizer_phone' => 'organizerPhone',
        'performers' => 'performers',
        'photo_gallery' => 'photoGallery',
        'pickup_coordinate' => 'pickupCoordinate',
        'routable_coordinate' => 'routableCoordinate',
        'ticket_availability' => 'ticketAvailability',
        'ticket_price_range' => 'ticketPriceRange',
        'ticket_sale_date_time' => 'ticketSaleDateTime',
        'ticket_url' => 'ticketUrl',
        'time' => 'time',
        'timezone' => 'timezone',
        'venue_name' => 'venueName',
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
        'address' => 'setAddress',
        'linked_location' => 'setLinkedLocation',
        'additional_promoting_locations' => 'setAdditionalPromotingLocations',
        'age_range' => 'setAgeRange',
        'description' => 'setDescription',
        'display_coordinate' => 'setDisplayCoordinate',
        'dropoff_coordinate' => 'setDropoffCoordinate',
        'event_status' => 'setEventStatus',
        'is_free_event' => 'setIsFreeEvent',
        'is_ticketed_event' => 'setIsTicketedEvent',
        'keywords' => 'setKeywords',
        'labels' => 'setLabels',
        'landing_page_url' => 'setLandingPageUrl',
        'organizer_email' => 'setOrganizerEmail',
        'organizer_name' => 'setOrganizerName',
        'organizer_phone' => 'setOrganizerPhone',
        'performers' => 'setPerformers',
        'photo_gallery' => 'setPhotoGallery',
        'pickup_coordinate' => 'setPickupCoordinate',
        'routable_coordinate' => 'setRoutableCoordinate',
        'ticket_availability' => 'setTicketAvailability',
        'ticket_price_range' => 'setTicketPriceRange',
        'ticket_sale_date_time' => 'setTicketSaleDateTime',
        'ticket_url' => 'setTicketUrl',
        'time' => 'setTime',
        'timezone' => 'setTimezone',
        'venue_name' => 'setVenueName',
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
        'address' => 'getAddress',
        'linked_location' => 'getLinkedLocation',
        'additional_promoting_locations' => 'getAdditionalPromotingLocations',
        'age_range' => 'getAgeRange',
        'description' => 'getDescription',
        'display_coordinate' => 'getDisplayCoordinate',
        'dropoff_coordinate' => 'getDropoffCoordinate',
        'event_status' => 'getEventStatus',
        'is_free_event' => 'getIsFreeEvent',
        'is_ticketed_event' => 'getIsTicketedEvent',
        'keywords' => 'getKeywords',
        'labels' => 'getLabels',
        'landing_page_url' => 'getLandingPageUrl',
        'organizer_email' => 'getOrganizerEmail',
        'organizer_name' => 'getOrganizerName',
        'organizer_phone' => 'getOrganizerPhone',
        'performers' => 'getPerformers',
        'photo_gallery' => 'getPhotoGallery',
        'pickup_coordinate' => 'getPickupCoordinate',
        'routable_coordinate' => 'getRoutableCoordinate',
        'ticket_availability' => 'getTicketAvailability',
        'ticket_price_range' => 'getTicketPriceRange',
        'ticket_sale_date_time' => 'getTicketSaleDateTime',
        'ticket_url' => 'getTicketUrl',
        'time' => 'getTime',
        'timezone' => 'getTimezone',
        'venue_name' => 'getVenueName',
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['linked_location'] = isset($data['linked_location']) ? $data['linked_location'] : null;
        $this->container['additional_promoting_locations'] = isset($data['additional_promoting_locations']) ? $data['additional_promoting_locations'] : null;
        $this->container['age_range'] = isset($data['age_range']) ? $data['age_range'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['display_coordinate'] = isset($data['display_coordinate']) ? $data['display_coordinate'] : null;
        $this->container['dropoff_coordinate'] = isset($data['dropoff_coordinate']) ? $data['dropoff_coordinate'] : null;
        $this->container['event_status'] = isset($data['event_status']) ? $data['event_status'] : null;
        $this->container['is_free_event'] = isset($data['is_free_event']) ? $data['is_free_event'] : null;
        $this->container['is_ticketed_event'] = isset($data['is_ticketed_event']) ? $data['is_ticketed_event'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['landing_page_url'] = isset($data['landing_page_url']) ? $data['landing_page_url'] : null;
        $this->container['organizer_email'] = isset($data['organizer_email']) ? $data['organizer_email'] : null;
        $this->container['organizer_name'] = isset($data['organizer_name']) ? $data['organizer_name'] : null;
        $this->container['organizer_phone'] = isset($data['organizer_phone']) ? $data['organizer_phone'] : null;
        $this->container['performers'] = isset($data['performers']) ? $data['performers'] : null;
        $this->container['photo_gallery'] = isset($data['photo_gallery']) ? $data['photo_gallery'] : null;
        $this->container['pickup_coordinate'] = isset($data['pickup_coordinate']) ? $data['pickup_coordinate'] : null;
        $this->container['routable_coordinate'] = isset($data['routable_coordinate']) ? $data['routable_coordinate'] : null;
        $this->container['ticket_availability'] = isset($data['ticket_availability']) ? $data['ticket_availability'] : null;
        $this->container['ticket_price_range'] = isset($data['ticket_price_range']) ? $data['ticket_price_range'] : null;
        $this->container['ticket_sale_date_time'] = isset($data['ticket_sale_date_time']) ? $data['ticket_sale_date_time'] : null;
        $this->container['ticket_url'] = isset($data['ticket_url']) ? $data['ticket_url'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['venue_name'] = isset($data['venue_name']) ? $data['venue_name'] : null;
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
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['linked_location'] === null) {
            $invalidProperties[] = "'linked_location' can't be null";
        }
        if ($this->container['additional_promoting_locations'] === null) {
            $invalidProperties[] = "'additional_promoting_locations' can't be null";
        }
        if ($this->container['age_range'] === null) {
            $invalidProperties[] = "'age_range' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['display_coordinate'] === null) {
            $invalidProperties[] = "'display_coordinate' can't be null";
        }
        if ($this->container['dropoff_coordinate'] === null) {
            $invalidProperties[] = "'dropoff_coordinate' can't be null";
        }
        if ($this->container['event_status'] === null) {
            $invalidProperties[] = "'event_status' can't be null";
        }
        if ($this->container['is_free_event'] === null) {
            $invalidProperties[] = "'is_free_event' can't be null";
        }
        if ($this->container['is_ticketed_event'] === null) {
            $invalidProperties[] = "'is_ticketed_event' can't be null";
        }
        if ($this->container['keywords'] === null) {
            $invalidProperties[] = "'keywords' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['landing_page_url'] === null) {
            $invalidProperties[] = "'landing_page_url' can't be null";
        }
        if ($this->container['organizer_email'] === null) {
            $invalidProperties[] = "'organizer_email' can't be null";
        }
        if ($this->container['organizer_name'] === null) {
            $invalidProperties[] = "'organizer_name' can't be null";
        }
        if ($this->container['organizer_phone'] === null) {
            $invalidProperties[] = "'organizer_phone' can't be null";
        }
        if ($this->container['performers'] === null) {
            $invalidProperties[] = "'performers' can't be null";
        }
        if ($this->container['photo_gallery'] === null) {
            $invalidProperties[] = "'photo_gallery' can't be null";
        }
        if ($this->container['pickup_coordinate'] === null) {
            $invalidProperties[] = "'pickup_coordinate' can't be null";
        }
        if ($this->container['routable_coordinate'] === null) {
            $invalidProperties[] = "'routable_coordinate' can't be null";
        }
        if ($this->container['ticket_availability'] === null) {
            $invalidProperties[] = "'ticket_availability' can't be null";
        }
        if ($this->container['ticket_price_range'] === null) {
            $invalidProperties[] = "'ticket_price_range' can't be null";
        }
        if ($this->container['ticket_sale_date_time'] === null) {
            $invalidProperties[] = "'ticket_sale_date_time' can't be null";
        }
        if ($this->container['ticket_url'] === null) {
            $invalidProperties[] = "'ticket_url' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ($this->container['venue_name'] === null) {
            $invalidProperties[] = "'venue_name' can't be null";
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
     * Gets linked_location
     *
     * @return string
     */
    public function getLinkedLocation()
    {
        return $this->container['linked_location'];
    }

    /**
     * Sets linked_location
     *
     * @param string $linked_location linked_location
     *
     * @return $this
     */
    public function setLinkedLocation($linked_location)
    {
        $this->container['linked_location'] = $linked_location;

        return $this;
    }

    /**
     * Gets additional_promoting_locations
     *
     * @return string[]
     */
    public function getAdditionalPromotingLocations()
    {
        return $this->container['additional_promoting_locations'];
    }

    /**
     * Sets additional_promoting_locations
     *
     * @param string[] $additional_promoting_locations additional_promoting_locations
     *
     * @return $this
     */
    public function setAdditionalPromotingLocations($additional_promoting_locations)
    {
        $this->container['additional_promoting_locations'] = $additional_promoting_locations;

        return $this;
    }

    /**
     * Gets age_range
     *
     * @return \Swagger\Client\Model\AgeRange
     */
    public function getAgeRange()
    {
        return $this->container['age_range'];
    }

    /**
     * Sets age_range
     *
     * @param \Swagger\Client\Model\AgeRange $age_range age_range
     *
     * @return $this
     */
    public function setAgeRange($age_range)
    {
        $this->container['age_range'] = $age_range;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets event_status
     *
     * @return string
     */
    public function getEventStatus()
    {
        return $this->container['event_status'];
    }

    /**
     * Sets event_status
     *
     * @param string $event_status event_status
     *
     * @return $this
     */
    public function setEventStatus($event_status)
    {
        $this->container['event_status'] = $event_status;

        return $this;
    }

    /**
     * Gets is_free_event
     *
     * @return bool
     */
    public function getIsFreeEvent()
    {
        return $this->container['is_free_event'];
    }

    /**
     * Sets is_free_event
     *
     * @param bool $is_free_event is_free_event
     *
     * @return $this
     */
    public function setIsFreeEvent($is_free_event)
    {
        $this->container['is_free_event'] = $is_free_event;

        return $this;
    }

    /**
     * Gets is_ticketed_event
     *
     * @return bool
     */
    public function getIsTicketedEvent()
    {
        return $this->container['is_ticketed_event'];
    }

    /**
     * Sets is_ticketed_event
     *
     * @param bool $is_ticketed_event is_ticketed_event
     *
     * @return $this
     */
    public function setIsTicketedEvent($is_ticketed_event)
    {
        $this->container['is_ticketed_event'] = $is_ticketed_event;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[] $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

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
     * Gets landing_page_url
     *
     * @return string
     */
    public function getLandingPageUrl()
    {
        return $this->container['landing_page_url'];
    }

    /**
     * Sets landing_page_url
     *
     * @param string $landing_page_url landing_page_url
     *
     * @return $this
     */
    public function setLandingPageUrl($landing_page_url)
    {
        $this->container['landing_page_url'] = $landing_page_url;

        return $this;
    }

    /**
     * Gets organizer_email
     *
     * @return string
     */
    public function getOrganizerEmail()
    {
        return $this->container['organizer_email'];
    }

    /**
     * Sets organizer_email
     *
     * @param string $organizer_email organizer_email
     *
     * @return $this
     */
    public function setOrganizerEmail($organizer_email)
    {
        $this->container['organizer_email'] = $organizer_email;

        return $this;
    }

    /**
     * Gets organizer_name
     *
     * @return string
     */
    public function getOrganizerName()
    {
        return $this->container['organizer_name'];
    }

    /**
     * Sets organizer_name
     *
     * @param string $organizer_name organizer_name
     *
     * @return $this
     */
    public function setOrganizerName($organizer_name)
    {
        $this->container['organizer_name'] = $organizer_name;

        return $this;
    }

    /**
     * Gets organizer_phone
     *
     * @return string
     */
    public function getOrganizerPhone()
    {
        return $this->container['organizer_phone'];
    }

    /**
     * Sets organizer_phone
     *
     * @param string $organizer_phone organizer_phone
     *
     * @return $this
     */
    public function setOrganizerPhone($organizer_phone)
    {
        $this->container['organizer_phone'] = $organizer_phone;

        return $this;
    }

    /**
     * Gets performers
     *
     * @return string[]
     */
    public function getPerformers()
    {
        return $this->container['performers'];
    }

    /**
     * Sets performers
     *
     * @param string[] $performers performers
     *
     * @return $this
     */
    public function setPerformers($performers)
    {
        $this->container['performers'] = $performers;

        return $this;
    }

    /**
     * Gets photo_gallery
     *
     * @return \Swagger\Client\Model\PhotoGallery[]
     */
    public function getPhotoGallery()
    {
        return $this->container['photo_gallery'];
    }

    /**
     * Sets photo_gallery
     *
     * @param \Swagger\Client\Model\PhotoGallery[] $photo_gallery photo_gallery
     *
     * @return $this
     */
    public function setPhotoGallery($photo_gallery)
    {
        $this->container['photo_gallery'] = $photo_gallery;

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
     * Gets ticket_availability
     *
     * @return string
     */
    public function getTicketAvailability()
    {
        return $this->container['ticket_availability'];
    }

    /**
     * Sets ticket_availability
     *
     * @param string $ticket_availability ticket_availability
     *
     * @return $this
     */
    public function setTicketAvailability($ticket_availability)
    {
        $this->container['ticket_availability'] = $ticket_availability;

        return $this;
    }

    /**
     * Gets ticket_price_range
     *
     * @return \Swagger\Client\Model\TicketPriceRange
     */
    public function getTicketPriceRange()
    {
        return $this->container['ticket_price_range'];
    }

    /**
     * Sets ticket_price_range
     *
     * @param \Swagger\Client\Model\TicketPriceRange $ticket_price_range ticket_price_range
     *
     * @return $this
     */
    public function setTicketPriceRange($ticket_price_range)
    {
        $this->container['ticket_price_range'] = $ticket_price_range;

        return $this;
    }

    /**
     * Gets ticket_sale_date_time
     *
     * @return string
     */
    public function getTicketSaleDateTime()
    {
        return $this->container['ticket_sale_date_time'];
    }

    /**
     * Sets ticket_sale_date_time
     *
     * @param string $ticket_sale_date_time ticket_sale_date_time
     *
     * @return $this
     */
    public function setTicketSaleDateTime($ticket_sale_date_time)
    {
        $this->container['ticket_sale_date_time'] = $ticket_sale_date_time;

        return $this;
    }

    /**
     * Gets ticket_url
     *
     * @return string
     */
    public function getTicketUrl()
    {
        return $this->container['ticket_url'];
    }

    /**
     * Sets ticket_url
     *
     * @param string $ticket_url ticket_url
     *
     * @return $this
     */
    public function setTicketUrl($ticket_url)
    {
        $this->container['ticket_url'] = $ticket_url;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \Swagger\Client\Model\Time
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \Swagger\Client\Model\Time $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

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
     * Gets venue_name
     *
     * @return string
     */
    public function getVenueName()
    {
        return $this->container['venue_name'];
    }

    /**
     * Sets venue_name
     *
     * @param string $venue_name venue_name
     *
     * @return $this
     */
    public function setVenueName($venue_name)
    {
        $this->container['venue_name'] = $venue_name;

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


