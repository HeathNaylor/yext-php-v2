# Swagger\Client\EntitiesUpdateApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**entitiesUpdateLocation**](EntitiesUpdateApi.md#entitiesUpdateLocation) | **PUT** /accounts/{accountId}/entities/{entityId} | Entities: Update (Location)


# **entitiesUpdateLocation**
> entitiesUpdateLocation($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id)

Entities: Update (Location)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EntitiesUpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$template_id = "template_id_example"; // string | 
$template_fields = "template_fields_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\EntitiesUpdateLocationRequest(); // \Swagger\Client\Model\EntitiesUpdateLocationRequest | 
$account_id = "account_id_example"; // string | 
$entity_id = "entity_id_example"; // string | 

try {
    $apiInstance->entitiesUpdateLocation($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id);
} catch (Exception $e) {
    echo 'Exception when calling EntitiesUpdateApi->entitiesUpdateLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **template_id** | **string**|  |
 **template_fields** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\EntitiesUpdateLocationRequest**](../Model/EntitiesUpdateLocationRequest.md)|  |
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

