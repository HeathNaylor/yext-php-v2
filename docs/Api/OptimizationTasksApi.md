# Swagger\Client\OptimizationTasksApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**optimizationTasksGetLink**](OptimizationTasksApi.md#optimizationTasksGetLink) | **GET** /accounts/{accountId}/optimizationlink | Optimization Tasks: Get Link
[**optimizationTasksList**](OptimizationTasksApi.md#optimizationTasksList) | **GET** /accounts/{accountId}/optimizationtasks | Optimization Tasks: List


# **optimizationTasksGetLink**
> optimizationTasksGetLink($api_key, $v, $task_ids, $location_ids, $mode, $account_id)

Optimization Tasks: Get Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OptimizationTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$task_ids = "task_ids_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$mode = "mode_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->optimizationTasksGetLink($api_key, $v, $task_ids, $location_ids, $mode, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling OptimizationTasksApi->optimizationTasksGetLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **task_ids** | **string**|  |
 **location_ids** | **string**|  |
 **mode** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optimizationTasksList**
> optimizationTasksList($api_key, $v, $task_ids, $location_ids, $account_id)

Optimization Tasks: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OptimizationTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$task_ids = "task_ids_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->optimizationTasksList($api_key, $v, $task_ids, $location_ids, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling OptimizationTasksApi->optimizationTasksList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **task_ids** | **string**|  |
 **location_ids** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

