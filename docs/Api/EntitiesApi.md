# Swagger\Client\EntitiesApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**entitiesGeosearch**](EntitiesApi.md#entitiesGeosearch) | **GET** /entities/geosearch | Entities: Geosearch
[**entityLanguageProfilesGet**](EntitiesApi.md#entityLanguageProfilesGet) | **GET** /entityprofiles/{entityId}/{languageCode} | Entity Language Profiles: Get
[**entityLanguageProfilesList**](EntitiesApi.md#entityLanguageProfilesList) | **GET** /entityprofiles/{entityId} | Entity Language Profiles: List
[**entityLanguageProfilesListAll**](EntitiesApi.md#entityLanguageProfilesListAll) | **GET** /entityprofiles | Entity Language Profiles: List All
[**getEntitiesGet**](EntitiesApi.md#getEntitiesGet) | **GET** /entities/{entityId} | Entities: Get
[**getEntitiesList**](EntitiesApi.md#getEntitiesList) | **GET** /entities | Entities: List


# **entitiesGeosearch**
> entitiesGeosearch($api_key, $v, $location, $radius, $geocoder_bias, $country_bias, $entity_types, $languages, $filter, $limit, $offset, $fields, $resolve_placeholders, $randomization, $randomization_token)

Entities: Geosearch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$location = "location_example"; // string | 
$radius = "radius_example"; // string | 
$geocoder_bias = "geocoder_bias_example"; // string | 
$country_bias = "country_bias_example"; // string | 
$entity_types = "entity_types_example"; // string | 
$languages = "languages_example"; // string | 
$filter = "filter_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$randomization = "randomization_example"; // string | 
$randomization_token = "randomization_token_example"; // string | 

try {
    $apiInstance->entitiesGeosearch($api_key, $v, $location, $radius, $geocoder_bias, $country_bias, $entity_types, $languages, $filter, $limit, $offset, $fields, $resolve_placeholders, $randomization, $randomization_token);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->entitiesGeosearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **location** | **string**|  |
 **radius** | **string**|  |
 **geocoder_bias** | **string**|  |
 **country_bias** | **string**|  |
 **entity_types** | **string**|  |
 **languages** | **string**|  |
 **filter** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |
 **fields** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **randomization** | **string**|  |
 **randomization_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **entityLanguageProfilesGet**
> entityLanguageProfilesGet($api_key, $v, $fields, $rendered, $entity_id, $language_code)

Entity Language Profiles: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$fields = "fields_example"; // string | 
$rendered = "rendered_example"; // string | 
$entity_id = "entity_id_example"; // string | 
$language_code = "language_code_example"; // string | 

try {
    $apiInstance->entityLanguageProfilesGet($api_key, $v, $fields, $rendered, $entity_id, $language_code);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->entityLanguageProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **fields** | **string**|  |
 **rendered** | **string**|  |
 **entity_id** | **string**|  |
 **language_code** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **entityLanguageProfilesList**
> entityLanguageProfilesList($api_key, $v, $fields, $rendered, $language_codes, $entity_types, $entity_id)

Entity Language Profiles: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$fields = "fields_example"; // string | 
$rendered = "rendered_example"; // string | 
$language_codes = "language_codes_example"; // string | 
$entity_types = "entity_types_example"; // string | 
$entity_id = "entity_id_example"; // string | 

try {
    $apiInstance->entityLanguageProfilesList($api_key, $v, $fields, $rendered, $language_codes, $entity_types, $entity_id);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->entityLanguageProfilesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **fields** | **string**|  |
 **rendered** | **string**|  |
 **language_codes** | **string**|  |
 **entity_types** | **string**|  |
 **entity_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **entityLanguageProfilesListAll**
> entityLanguageProfilesListAll($api_key, $v, $fields, $rendered, $language_codes, $entity_types, $filter, $limit, $offset, $page_token)

Entity Language Profiles: List All

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$fields = "fields_example"; // string | 
$rendered = "rendered_example"; // string | 
$language_codes = "language_codes_example"; // string | 
$entity_types = "entity_types_example"; // string | 
$filter = "filter_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$page_token = "page_token_example"; // string | 

try {
    $apiInstance->entityLanguageProfilesListAll($api_key, $v, $fields, $rendered, $language_codes, $entity_types, $filter, $limit, $offset, $page_token);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->entityLanguageProfilesListAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **fields** | **string**|  |
 **rendered** | **string**|  |
 **language_codes** | **string**|  |
 **entity_types** | **string**|  |
 **filter** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |
 **page_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitiesGet**
> getEntitiesGet($api_key, $v, $resolve_placeholders, $fields, $entity_id)

Entities: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$fields = "fields_example"; // string | 
$entity_id = "entity_id_example"; // string | 

try {
    $apiInstance->getEntitiesGet($api_key, $v, $resolve_placeholders, $fields, $entity_id);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->getEntitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **fields** | **string**|  |
 **entity_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitiesList**
> getEntitiesList($api_key, $v, $entity_types, $limit, $offset, $languages, $fields, $filter, $resolve_placeholders, $sort_by, $randomization, $randomization_token, $page_token)

Entities: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$entity_types = "entity_types_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$languages = "languages_example"; // string | 
$fields = "fields_example"; // string | 
$filter = "filter_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$sort_by = "sort_by_example"; // string | 
$randomization = "randomization_example"; // string | 
$randomization_token = "randomization_token_example"; // string | 
$page_token = "page_token_example"; // string | 

try {
    $apiInstance->getEntitiesList($api_key, $v, $entity_types, $limit, $offset, $languages, $fields, $filter, $resolve_placeholders, $sort_by, $randomization, $randomization_token, $page_token);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesApi->getEntitiesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **entity_types** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |
 **languages** | **string**|  |
 **fields** | **string**|  |
 **filter** | **string**|  |
 **resolve_placeholders** | **string**|  |
 **sort_by** | **string**|  |
 **randomization** | **string**|  |
 **randomization_token** | **string**|  |
 **page_token** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

