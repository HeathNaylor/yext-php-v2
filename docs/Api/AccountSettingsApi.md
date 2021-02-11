# Swagger\Client\AccountSettingsApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsGet**](AccountSettingsApi.md#accountsGet) | **GET** /accounts/{accountId} | Accounts: Get
[**accountsList**](AccountSettingsApi.md#accountsList) | **GET** /accounts | Accounts: List
[**rolesGet**](AccountSettingsApi.md#rolesGet) | **GET** /accounts/{accountId}/roles | Roles: Get
[**usersCreate**](AccountSettingsApi.md#usersCreate) | **POST** /accounts/{accountId}/users | Users: Create
[**usersDelete**](AccountSettingsApi.md#usersDelete) | **DELETE** /accounts/{accountId}/users/{userId} | Users: Delete
[**usersGet**](AccountSettingsApi.md#usersGet) | **GET** /accounts/{accountId}/users/{userId} | Users: Get
[**usersList**](AccountSettingsApi.md#usersList) | **GET** /accounts/{accountId}/users | Users: List
[**usersUpdate**](AccountSettingsApi.md#usersUpdate) | **PUT** /accounts/{accountId}/users/{userId} | Users: Update
[**usersUpdatePassword**](AccountSettingsApi.md#usersUpdatePassword) | **PUT** /accounts/{accountId}/users/{userId}/password | Users: Update Password


# **accountsGet**
> accountsGet($api_key, $v, $account_id)

Accounts: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->accountsGet($api_key, $v, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountsGet: ', $e->getMessage(), PHP_EOL;
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

# **accountsList**
> accountsList($api_key, $v, $name, $limit, $offset)

Accounts: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$name = "name_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 

try {
    $apiInstance->accountsList($api_key, $v, $name, $limit, $offset);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->accountsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **name** | **string**|  |
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

# **rolesGet**
> rolesGet($api_key, $v, $account_id)

Roles: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->rolesGet($api_key, $v, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->rolesGet: ', $e->getMessage(), PHP_EOL;
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

# **usersCreate**
> usersCreate($api_key, $v, $content_type, $body, $account_id)

Users: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\UsersCreateRequest(); // \Swagger\Client\Model\UsersCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->usersCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->usersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\UsersCreateRequest**](../Model/UsersCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersDelete**
> usersDelete($api_key, $v, $account_id, $user_id)

Users: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 

try {
    $apiInstance->usersDelete($api_key, $v, $account_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->usersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGet**
> usersGet($api_key, $v, $account_id, $user_id)

Users: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 

try {
    $apiInstance->usersGet($api_key, $v, $account_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersList**
> usersList($api_key, $v, $limit, $offset, $account_id)

Users: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->usersList($api_key, $v, $limit, $offset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->usersList: ', $e->getMessage(), PHP_EOL;
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
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUpdate**
> usersUpdate($api_key, $v, $content_type, $body, $account_id, $user_id)

Users: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\UsersUpdateRequest(); // \Swagger\Client\Model\UsersUpdateRequest | 
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 

try {
    $apiInstance->usersUpdate($api_key, $v, $content_type, $body, $account_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->usersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\UsersUpdateRequest**](../Model/UsersUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersUpdatePassword**
> usersUpdatePassword($api_key, $v, $content_type, $body, $account_id, $user_id)

Users: Update Password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\UsersUpdatePasswordRequest(); // \Swagger\Client\Model\UsersUpdatePasswordRequest | 
$account_id = "account_id_example"; // string | 
$user_id = "user_id_example"; // string | 

try {
    $apiInstance->usersUpdatePassword($api_key, $v, $content_type, $body, $account_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountSettingsApi->usersUpdatePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\UsersUpdatePasswordRequest**](../Model/UsersUpdatePasswordRequest.md)|  |
 **account_id** | **string**|  |
 **user_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

