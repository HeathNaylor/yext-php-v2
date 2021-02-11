# Swagger\Client\AnalyticsApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityLog**](AnalyticsApi.md#activityLog) | **POST** /accounts/{accountId}/analytics/activity | Activity Log
[**createReports**](AnalyticsApi.md#createReports) | **POST** /accounts/{accountId}/analytics/reports | Create Reports
[**maxDates**](AnalyticsApi.md#maxDates) | **GET** /accounts/{accountId}/analytics/maxdates | Max Dates
[**reportStatus**](AnalyticsApi.md#reportStatus) | **GET** /accounts/{accountId}/analytics/standardreports/{reportId} | Report Status


# **activityLog**
> activityLog($api_key, $v, $content_type, $body, $account_id)

Activity Log

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\ActivityLogRequest(); // \Swagger\Client\Model\ActivityLogRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->activityLog($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->activityLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ActivityLogRequest**](../Model/ActivityLogRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReports**
> createReports($api_key, $v, $async, $callback, $content_type, $body, $account_id)

Create Reports

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$async = "async_example"; // string | 
$callback = "callback_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\CreateReportsRequest(); // \Swagger\Client\Model\CreateReportsRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->createReports($api_key, $v, $async, $callback, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->createReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **async** | **string**|  |
 **callback** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\CreateReportsRequest**](../Model/CreateReportsRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **maxDates**
> maxDates($api_key, $v, $account_id)

Max Dates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->maxDates($api_key, $v, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->maxDates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportStatus**
> reportStatus($api_key, $v, $account_id, $report_id)

Report Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$report_id = "report_id_example"; // string | 

try {
    $apiInstance->reportStatus($api_key, $v, $account_id, $report_id);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->reportStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **report_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

