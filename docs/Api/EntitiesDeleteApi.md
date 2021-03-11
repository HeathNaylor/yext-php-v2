# Swagger\Client\EntitiesDeleteApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**entitiesDelete**](EntitiesDeleteApi.md#entitiesDelete) | **DELETE** /accounts/{accountId}/entities/{entityId} | Entities: Delete


# **entitiesDelete**
> entitiesDelete($api_key, $v, $account_id, $entity_id)

Entities: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesDeleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$entity_id = "entity_id_example"; // string | 

try {
    $apiInstance->entitiesDelete($api_key, $v, $account_id, $entity_id);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesDeleteApi->entitiesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
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

