# Swagger\Client\EntitiesCreateApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**entitiesCreateLocation**](EntitiesCreateApi.md#entitiesCreateLocation) | **POST** /accounts/{accountId}/entities | Entities: Create (Location)


# **entitiesCreateLocation**
> entitiesCreateLocation($api_key, $v, $entity_type, $template_id, $template_fields, $content_type, $body, $account_id)

Entities: Create (Location)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesCreateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$entity_type = "entity_type_example"; // string | 
$template_id = "template_id_example"; // string | 
$template_fields = "template_fields_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\EntitiesCreateLocationRequest(); // \Swagger\Client\Model\EntitiesCreateLocationRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->entitiesCreateLocation($api_key, $v, $entity_type, $template_id, $template_fields, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesCreateApi->entitiesCreateLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **entity_type** | **string**|  |
 **template_id** | **string**|  |
 **template_fields** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\EntitiesCreateLocationRequest**](../Model/EntitiesCreateLocationRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

