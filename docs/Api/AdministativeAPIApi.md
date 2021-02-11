# Swagger\Client\AdministativeAPIApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsUpdate**](AdministativeAPIApi.md#accountsUpdate) | **PUT** /accounts/me | Accounts: Update
[**addRequestsCreateExistingLocation**](AdministativeAPIApi.md#addRequestsCreateExistingLocation) | **POST** /accounts/me/existinglocationaddrequests | Add Requests: Create (Existing Location)
[**addRequestsCreateNewLocation**](AdministativeAPIApi.md#addRequestsCreateNewLocation) | **POST** /accounts/me/newlocationaddrequests | Add Requests: Create (New Location)
[**addRequestsGet**](AdministativeAPIApi.md#addRequestsGet) | **GET** /accounts/me/addrequests/{addRequestId} | Add Requests: Get
[**addRequestsList**](AdministativeAPIApi.md#addRequestsList) | **GET** /accounts/me/addrequests | Add Requests: List
[**addRequestsProcessSandboxAPIOnly**](AdministativeAPIApi.md#addRequestsProcessSandboxAPIOnly) | **POST** /accounts/me/processaddrequest | Add Requests: Process (Sandbox API Only)
[**availableServicesList**](AdministativeAPIApi.md#availableServicesList) | **GET** /accounts/me/availableservices | Available Services: List
[**getAccountsGet**](AdministativeAPIApi.md#getAccountsGet) | **GET** /accounts/me | Accounts: Get
[**servicesCancel**](AdministativeAPIApi.md#servicesCancel) | **POST** /accounts/me/cancelservices | Services: Cancel
[**servicesList**](AdministativeAPIApi.md#servicesList) | **GET** /accounts/me/services | Services: List


# **accountsUpdate**
> accountsUpdate($api_key, $v, $content_type, $body)

Accounts: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\AccountsUpdateRequest(); // \Swagger\Client\Model\AccountsUpdateRequest | 

try {
    $apiInstance->accountsUpdate($api_key, $v, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->accountsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\AccountsUpdateRequest**](../Model/AccountsUpdateRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRequestsCreateExistingLocation**
> addRequestsCreateExistingLocation($api_key, $v, $content_type, $body)

Add Requests: Create (Existing Location)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\AddRequestsCreateExistingLocationRequest(); // \Swagger\Client\Model\AddRequestsCreateExistingLocationRequest | 

try {
    $apiInstance->addRequestsCreateExistingLocation($api_key, $v, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->addRequestsCreateExistingLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\AddRequestsCreateExistingLocationRequest**](../Model/AddRequestsCreateExistingLocationRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRequestsCreateNewLocation**
> addRequestsCreateNewLocation($api_key, $v, $content_type, $body)

Add Requests: Create (New Location)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\AddRequestsCreateNewLocationRequest(); // \Swagger\Client\Model\AddRequestsCreateNewLocationRequest | 

try {
    $apiInstance->addRequestsCreateNewLocation($api_key, $v, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->addRequestsCreateNewLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\AddRequestsCreateNewLocationRequest**](../Model/AddRequestsCreateNewLocationRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRequestsGet**
> addRequestsGet($api_key, $v, $add_request_id)

Add Requests: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$add_request_id = "add_request_id_example"; // string | 

try {
    $apiInstance->addRequestsGet($api_key, $v, $add_request_id);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->addRequestsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **add_request_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRequestsList**
> addRequestsList($api_key, $v, $status, $submitted_after, $submitted_before, $updated_after, $updated_before, $sku, $agreement_id, $location_id, $limit, $offset)

Add Requests: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$status = "status_example"; // string | 
$submitted_after = "submitted_after_example"; // string | 
$submitted_before = "submitted_before_example"; // string | 
$updated_after = "updated_after_example"; // string | 
$updated_before = "updated_before_example"; // string | 
$sku = "sku_example"; // string | 
$agreement_id = "agreement_id_example"; // string | 
$location_id = "location_id_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 

try {
    $apiInstance->addRequestsList($api_key, $v, $status, $submitted_after, $submitted_before, $updated_after, $updated_before, $sku, $agreement_id, $location_id, $limit, $offset);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->addRequestsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **status** | **string**|  |
 **submitted_after** | **string**|  |
 **submitted_before** | **string**|  |
 **updated_after** | **string**|  |
 **updated_before** | **string**|  |
 **sku** | **string**|  |
 **agreement_id** | **string**|  |
 **location_id** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRequestsProcessSandboxAPIOnly**
> addRequestsProcessSandboxAPIOnly($api_key, $v, $content_type, $body)

Add Requests: Process (Sandbox API Only)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\AddRequestsProcessSandboxAPIOnlyRequest(); // \Swagger\Client\Model\AddRequestsProcessSandboxAPIOnlyRequest | 

try {
    $apiInstance->addRequestsProcessSandboxAPIOnly($api_key, $v, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->addRequestsProcessSandboxAPIOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\AddRequestsProcessSandboxAPIOnlyRequest**](../Model/AddRequestsProcessSandboxAPIOnlyRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **availableServicesList**
> availableServicesList($api_key, $v)

Available Services: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 

try {
    $apiInstance->availableServicesList($api_key, $v);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->availableServicesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountsGet**
> getAccountsGet($api_key, $v)

Accounts: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 

try {
    $apiInstance->getAccountsGet($api_key, $v);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->getAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesCancel**
> servicesCancel($api_key, $v, $content_type, $body)

Services: Cancel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\ServicesCancelRequest(); // \Swagger\Client\Model\ServicesCancelRequest | 

try {
    $apiInstance->servicesCancel($api_key, $v, $content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->servicesCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ServicesCancelRequest**](../Model/ServicesCancelRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servicesList**
> servicesList($api_key, $v, $sku, $location_id, $location_account_id, $status, $agreement_id, $limit, $offset)

Services: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AdministativeAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$sku = "sku_example"; // string | 
$location_id = "location_id_example"; // string | 
$location_account_id = "location_account_id_example"; // string | 
$status = "status_example"; // string | 
$agreement_id = "agreement_id_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 

try {
    $apiInstance->servicesList($api_key, $v, $sku, $location_id, $location_account_id, $status, $agreement_id, $limit, $offset);
} catch (Exception $e) {
    echo 'Exception when calling AdministativeAPIApi->servicesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **sku** | **string**|  |
 **location_id** | **string**|  |
 **location_account_id** | **string**|  |
 **status** | **string**|  |
 **agreement_id** | **string**|  |
 **limit** | **string**|  |
 **offset** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

