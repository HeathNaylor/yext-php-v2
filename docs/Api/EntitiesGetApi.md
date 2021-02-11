# Swagger\Client\EntitiesGetApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**entitiesGet**](EntitiesGetApi.md#entitiesGet) | **GET** /accounts/{accountId}/entities/{entityId} | Entities: Get
[**entitiesList**](EntitiesGetApi.md#entitiesList) | **GET** /accounts/{accountId}/entities | Entities: List


# **entitiesGet**
> entitiesGet($api_key, $v, $resolve_place_holders, $account_id, $entity_id)

Entities: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesGetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$resolve_place_holders = "resolve_place_holders_example"; // string | 
$account_id = "account_id_example"; // string | 
$entity_id = "entity_id_example"; // string | 

try {
    $apiInstance->entitiesGet($api_key, $v, $resolve_place_holders, $account_id, $entity_id);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesGetApi->entitiesGet: ', $e->getMessage(), PHP_EOL;
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
 **entity_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **entitiesList**
> entitiesList($api_key, $v, $limit, $offset, $resolve_placeholders, $page_token, $account_id)

Entities: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesGetApi(
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
    $apiInstance->entitiesList($api_key, $v, $limit, $offset, $resolve_placeholders, $page_token, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesGetApi->entitiesList: ', $e->getMessage(), PHP_EOL;
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

