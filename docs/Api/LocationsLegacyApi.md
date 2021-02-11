# Swagger\Client\LocationsLegacyApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLocationsGet**](LocationsLegacyApi.md#getLocationsGet) | **GET** /locations/{locationId} | Locations: Get
[**getLocationsList**](LocationsLegacyApi.md#getLocationsList) | **GET** /locations | Locations: List
[**languageProfilesGet**](LocationsLegacyApi.md#languageProfilesGet) | **GET** /locations/{locationId}/profiles/{languageCode} | Language Profiles: Get
[**languageProfilesList**](LocationsLegacyApi.md#languageProfilesList) | **GET** /locations/{locationId}/profiles | Language Profiles: List
[**languageProfilesSchemaGet**](LocationsLegacyApi.md#languageProfilesSchemaGet) | **GET** /locations/{locationId}/profiles/{languageCode}/schema | Language Profiles Schema: Get
[**locationsCreate**](LocationsLegacyApi.md#locationsCreate) | **POST** /accounts/{accountId}/locations | Locations Create
[**locationsGeoSearch**](LocationsLegacyApi.md#locationsGeoSearch) | **GET** /locations/geosearch | Locations: GeoSearch
[**locationsGet**](LocationsLegacyApi.md#locationsGet) | **GET** /accounts/{accountId}/locations/{locationId} | Locations: Get
[**locationsList**](LocationsLegacyApi.md#locationsList) | **GET** /accounts/{accountId}/locations | Locations: List
[**locationsSchemaGet**](LocationsLegacyApi.md#locationsSchemaGet) | **GET** /locations/{locationId}/schema | Locations Schema: Get
[**locationsSearch**](LocationsLegacyApi.md#locationsSearch) | **GET** /accounts/{accountId}/locationsearch | Locations: Search
[**locationsUpdate**](LocationsLegacyApi.md#locationsUpdate) | **PUT** /accounts/{accountId}/locations/{locationId} | Locations: Update


# **getLocationsGet**
> getLocationsGet($api_key, $v, $fields, $resolve_placeholders, $rendered, $location_id)

Locations: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$rendered = "rendered_example"; // string | 
$location_id = "location_id_example"; // string | 

try {
    $apiInstance->getLocationsGet($api_key, $v, $fields, $resolve_placeholders, $rendered, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->getLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **fields** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **rendered** | **string**|  |
 **location_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationsList**
> getLocationsList($api_key, $v, $limit, $offset, $languages, $fields, $filters, $resolve_placeholders, $sort_by)

Locations: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$languages = "languages_example"; // string | 
$fields = "fields_example"; // string | 
$filters = "filters_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$sort_by = "sort_by_example"; // string | 

try {
    $apiInstance->getLocationsList($api_key, $v, $limit, $offset, $languages, $fields, $filters, $resolve_placeholders, $sort_by);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->getLocationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |
 **languages** | **string**|  |
 **fields** | **string**|  |
 **filters** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **sort_by** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **languageProfilesGet**
> languageProfilesGet($api_key, $v, $fields, $resolve_placeholders, $rendered, $location_id, $language_code)

Language Profiles: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$rendered = "rendered_example"; // string | 
$location_id = "location_id_example"; // string | 
$language_code = "language_code_example"; // string | 

try {
    $apiInstance->languageProfilesGet($api_key, $v, $fields, $resolve_placeholders, $rendered, $location_id, $language_code);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->languageProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **fields** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **rendered** | **string**|  |
 **location_id** | **string**|  |
 **language_code** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **languageProfilesList**
> languageProfilesList($api_key, $v, $fields, $resolve_placeholders, $rendered, $location_id)

Language Profiles: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$rendered = "rendered_example"; // string | 
$location_id = "location_id_example"; // string | 

try {
    $apiInstance->languageProfilesList($api_key, $v, $fields, $resolve_placeholders, $rendered, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->languageProfilesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **fields** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **rendered** | **string**|  |
 **location_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **languageProfilesSchemaGet**
> languageProfilesSchemaGet($api_key, $v, $location_id, $language_code)

Language Profiles Schema: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$location_id = "location_id_example"; // string | 
$language_code = "language_code_example"; // string | 

try {
    $apiInstance->languageProfilesSchemaGet($api_key, $v, $location_id, $language_code);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->languageProfilesSchemaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **location_id** | **string**|  |
 **language_code** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsCreate**
> locationsCreate($api_key, $v, $content_type, $body, $account_id)

Locations Create

Create a new Location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\LocationsCreateRequest(); // \Swagger\Client\Model\LocationsCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->locationsCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->locationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\LocationsCreateRequest**](../Model/LocationsCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsGeoSearch**
> locationsGeoSearch($api_key, $v, $limit, $offset, $location, $radius, $geocoder_bias, $languages, $fields, $filters, $resolve_placeholders, $sort_by)

Locations: GeoSearch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$location = "location_example"; // string | 
$radius = "radius_example"; // string | 
$geocoder_bias = "geocoder_bias_example"; // string | 
$languages = "languages_example"; // string | 
$fields = "fields_example"; // string | 
$filters = "filters_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$sort_by = "sort_by_example"; // string | 

try {
    $apiInstance->locationsGeoSearch($api_key, $v, $limit, $offset, $location, $radius, $geocoder_bias, $languages, $fields, $filters, $resolve_placeholders, $sort_by);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->locationsGeoSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |
 **location** | **string**|  |
 **radius** | **string**|  |
 **geocoder_bias** | **string**|  |
 **languages** | **string**|  |
 **fields** | **string**|  |
 **filters** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **sort_by** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsGet**
> locationsGet($api_key, $v, $resolve_place_holders, $account_id, $location_id)

Locations: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$resolve_place_holders = "resolve_place_holders_example"; // string | 
$account_id = "account_id_example"; // string | 
$location_id = "location_id_example"; // string | 

try {
    $apiInstance->locationsGet($api_key, $v, $resolve_place_holders, $account_id, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->locationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **resolve_place_holders** | **string**|  |
 **account_id** | **string**|  |
 **location_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsList**
> locationsList($api_key, $v, $limit, $offset, $resolve_placeholders, $page_token, $account_id)

Locations: List

Get multiple Locations (primary profiles only).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$page_token = "page_token_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->locationsList($api_key, $v, $limit, $offset, $resolve_placeholders, $page_token, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->locationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **page_token** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsSchemaGet**
> locationsSchemaGet($api_key, $v, $location_id)

Locations Schema: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$location_id = "location_id_example"; // string | 

try {
    $apiInstance->locationsSchemaGet($api_key, $v, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->locationsSchemaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **location_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsSearch**
> locationsSearch($api_key, $v, $limit, $offset, $filters, $account_id)

Locations: Search

Get multiple Locations (primary profiles only) that match provided filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$filters = "filters_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->locationsSearch($api_key, $v, $limit, $offset, $filters, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->locationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |
 **filters** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **locationsUpdate**
> locationsUpdate($api_key, $v, $content_type, $body, $account_id, $location_id)

Locations: Update

Updates the primary profile for a Location.  NOTE: Despite using the PUT method, Locations: Update only updates supplied fields. Omitted fields are not modified.  NOTE: The Location's primary profile language can be changed by calling this endpoint with a different, but unused, language code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LocationsLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\LocationsUpdateRequest(); // \Swagger\Client\Model\LocationsUpdateRequest | 
$account_id = "account_id_example"; // string | 
$location_id = "location_id_example"; // string | 

try {
    $apiInstance->locationsUpdate($api_key, $v, $content_type, $body, $account_id, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsLegacyApi->locationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\LocationsUpdateRequest**](../Model/LocationsUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **location_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

