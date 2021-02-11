# Swagger\Client\KnowledgeManagerApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assetsCreate**](KnowledgeManagerApi.md#assetsCreate) | **POST** /accounts/{accountId}/assets | Assets: Create
[**assetsDelete**](KnowledgeManagerApi.md#assetsDelete) | **DELETE** /accounts/{accountId}/assets/{assetId} | Assets: Delete
[**assetsGet**](KnowledgeManagerApi.md#assetsGet) | **GET** /accounts/{accountId}/assets/{assetId} | Assets: Get
[**assetsList**](KnowledgeManagerApi.md#assetsList) | **GET** /accounts/{accountId}/assets | Assets: List
[**assetsUpdate**](KnowledgeManagerApi.md#assetsUpdate) | **PUT** /accounts/{accountId}/assets/{assetId} | Assets: Update
[**biosCreate**](KnowledgeManagerApi.md#biosCreate) | **POST** /accounts/{accountId}/bios | Bios: Create
[**biosDelete**](KnowledgeManagerApi.md#biosDelete) | **DELETE** /accounts/{accountId}/bios/{listId} | Bios: Delete
[**biosGet**](KnowledgeManagerApi.md#biosGet) | **GET** /accounts/{accountId}/bios/{listId} | Bios: Get
[**biosList**](KnowledgeManagerApi.md#biosList) | **GET** /accounts/{accountId}/bios | Bios: List
[**biosUpdate**](KnowledgeManagerApi.md#biosUpdate) | **PUT** /accounts/{accountId}/bios/{listId} | Bios: Update
[**categoriesList**](KnowledgeManagerApi.md#categoriesList) | **GET** /categories | Categories: List
[**customFieldsCreate**](KnowledgeManagerApi.md#customFieldsCreate) | **POST** /accounts/{accountId}/customfields | Custom Fields: Create
[**customFieldsDelete**](KnowledgeManagerApi.md#customFieldsDelete) | **DELETE** /accounts/{accountId}/customfields/{customFieldId} | Custom Fields: Delete
[**customFieldsGet**](KnowledgeManagerApi.md#customFieldsGet) | **GET** /accounts/{accountId}/customfields/{customFieldId} | Custom Fields: Get
[**customFieldsList**](KnowledgeManagerApi.md#customFieldsList) | **GET** /accounts/{accountId}/customfields | Custom Fields: List
[**customFieldsUpdate**](KnowledgeManagerApi.md#customFieldsUpdate) | **PUT** /accounts/{accountId}/customfields/{customFieldId} | Custom Fields: Update
[**eventsCreate**](KnowledgeManagerApi.md#eventsCreate) | **POST** /accounts/{accountId}/events | Events: Create
[**eventsDelete**](KnowledgeManagerApi.md#eventsDelete) | **DELETE** /accounts/{accountId}/events/{listId} | Events: Delete
[**eventsGet**](KnowledgeManagerApi.md#eventsGet) | **GET** /accounts/{accountId}/events/{listId} | Events: Get
[**eventsList**](KnowledgeManagerApi.md#eventsList) | **GET** /accounts/{accountId}/events | Events: List
[**eventsUpdate**](KnowledgeManagerApi.md#eventsUpdate) | **PUT** /accounts/{accountId}/events/{listId} | Events: Update
[**foldersList**](KnowledgeManagerApi.md#foldersList) | **GET** /accounts/{accountId}/folders | Folders: List
[**getLanguageProfilesGet**](KnowledgeManagerApi.md#getLanguageProfilesGet) | **GET** /accounts/{accountId}/locations/{locationId}/profiles/{language_code} | Language Profiles: Get
[**getLanguageProfilesList**](KnowledgeManagerApi.md#getLanguageProfilesList) | **GET** /accounts/{accountId}/locations/{locationId}/profiles | Language Profiles: List
[**googleFieldsList**](KnowledgeManagerApi.md#googleFieldsList) | **GET** /googlefields | Google Fields: List
[**languageProfilesDelete**](KnowledgeManagerApi.md#languageProfilesDelete) | **DELETE** /accounts/{accountId}/locations/{locationId}/profiles/{language_code} | Language Profiles: Delete
[**languageProfilesUpsert**](KnowledgeManagerApi.md#languageProfilesUpsert) | **PUT** /accounts/{accountId}/locations/{locationId}/profiles/{language_code} | Language Profiles: Upsert
[**menusCreate**](KnowledgeManagerApi.md#menusCreate) | **POST** /accounts/{accountId}/menus | Menus: Create
[**menusDelete**](KnowledgeManagerApi.md#menusDelete) | **DELETE** /accounts/{accountId}/menus/{listId} | Menus: Delete
[**menusGet**](KnowledgeManagerApi.md#menusGet) | **GET** /accounts/{accountId}/menus/{listId} | Menus: Get
[**menusList**](KnowledgeManagerApi.md#menusList) | **GET** /accounts/{accountId}/menus | Menus: List
[**menusUpdate**](KnowledgeManagerApi.md#menusUpdate) | **PUT** /accounts/{accountId}/menus/{listId} | Menus: Update
[**productsCreate**](KnowledgeManagerApi.md#productsCreate) | **POST** /accounts/{accountId}/products | Products: Create
[**productsDelete**](KnowledgeManagerApi.md#productsDelete) | **DELETE** /accounts/{accountId}/products/{listId} | Products: Delete
[**productsGet**](KnowledgeManagerApi.md#productsGet) | **GET** /accounts/{accountId}/products/{listId} | Products: Get
[**productsList**](KnowledgeManagerApi.md#productsList) | **GET** /accounts/{accountId}/products | Products: List
[**productsUpdate**](KnowledgeManagerApi.md#productsUpdate) | **PUT** /accounts/{accountId}/products/{listId} | Products: Update


# **assetsCreate**
> assetsCreate($api_key, $v, $content_type, $body, $account_id)

Assets: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\AssetsCreateRequest(); // \Swagger\Client\Model\AssetsCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->assetsCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->assetsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\AssetsCreateRequest**](../Model/AssetsCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsDelete**
> assetsDelete($api_key, $v, $account_id, $asset_id)

Assets: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$asset_id = "asset_id_example"; // string | 

try {
    $apiInstance->assetsDelete($api_key, $v, $account_id, $asset_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->assetsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **asset_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsGet**
> assetsGet($api_key, $v, $account_id, $asset_id)

Assets: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$asset_id = "asset_id_example"; // string | 

try {
    $apiInstance->assetsGet($api_key, $v, $account_id, $asset_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->assetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **asset_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetsList**
> assetsList($api_key, $v, $limit, $offset, $account_id)

Assets: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
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
    $apiInstance->assetsList($api_key, $v, $limit, $offset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->assetsList: ', $e->getMessage(), PHP_EOL;
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

# **assetsUpdate**
> assetsUpdate($api_key, $v, $content_type, $body, $account_id, $asset_id)

Assets: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\AssetsUpdateRequest(); // \Swagger\Client\Model\AssetsUpdateRequest | 
$account_id = "account_id_example"; // string | 
$asset_id = "asset_id_example"; // string | 

try {
    $apiInstance->assetsUpdate($api_key, $v, $content_type, $body, $account_id, $asset_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->assetsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\AssetsUpdateRequest**](../Model/AssetsUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **asset_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **biosCreate**
> biosCreate($api_key, $v, $content_type, $body, $account_id)

Bios: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\BiosCreateRequest(); // \Swagger\Client\Model\BiosCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->biosCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->biosCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\BiosCreateRequest**](../Model/BiosCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **biosDelete**
> biosDelete($api_key, $v, $account_id, $list_id)

Bios: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->biosDelete($api_key, $v, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->biosDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **biosGet**
> biosGet($api_key, $v, $account_id, $list_id)

Bios: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->biosGet($api_key, $v, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->biosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **biosList**
> biosList($api_key, $v, $limit, $offset, $account_id)

Bios: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
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
    $apiInstance->biosList($api_key, $v, $limit, $offset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->biosList: ', $e->getMessage(), PHP_EOL;
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

# **biosUpdate**
> biosUpdate($content_type, $body, $account_id, $list_id)

Bios: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\BiosUpdateRequest(); // \Swagger\Client\Model\BiosUpdateRequest | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->biosUpdate($content_type, $body, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->biosUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\BiosUpdateRequest**](../Model/BiosUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoriesList**
> categoriesList($api_key, $v, $language, $country)

Categories: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$language = "language_example"; // string | 
$country = "country_example"; // string | 

try {
    $apiInstance->categoriesList($api_key, $v, $language, $country);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->categoriesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **language** | **string**|  |
 **country** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldsCreate**
> customFieldsCreate($api_key, $v, $content_type, $body, $account_id)

Custom Fields: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\CustomFieldsCreateRequest(); // \Swagger\Client\Model\CustomFieldsCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->customFieldsCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->customFieldsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\CustomFieldsCreateRequest**](../Model/CustomFieldsCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldsDelete**
> customFieldsDelete($api_key, $v, $account_id, $custom_field_id)

Custom Fields: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$custom_field_id = "custom_field_id_example"; // string | 

try {
    $apiInstance->customFieldsDelete($api_key, $v, $account_id, $custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->customFieldsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **custom_field_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldsGet**
> customFieldsGet($api_key, $v, $account_id, $custom_field_id)

Custom Fields: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$custom_field_id = "custom_field_id_example"; // string | 

try {
    $apiInstance->customFieldsGet($api_key, $v, $account_id, $custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->customFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **custom_field_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldsList**
> customFieldsList($api_key, $v, $limit, $offset, $account_id)

Custom Fields: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
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
    $apiInstance->customFieldsList($api_key, $v, $limit, $offset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->customFieldsList: ', $e->getMessage(), PHP_EOL;
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

# **customFieldsUpdate**
> customFieldsUpdate($api_key, $v, $content_type, $body, $account_id, $custom_field_id)

Custom Fields: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\CustomFieldsUpdateRequest(); // \Swagger\Client\Model\CustomFieldsUpdateRequest | 
$account_id = "account_id_example"; // string | 
$custom_field_id = "custom_field_id_example"; // string | 

try {
    $apiInstance->customFieldsUpdate($api_key, $v, $content_type, $body, $account_id, $custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->customFieldsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\CustomFieldsUpdateRequest**](../Model/CustomFieldsUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **custom_field_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsCreate**
> eventsCreate($api_key, $v, $content_type, $body, $account_id)

Events: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\EventsCreateRequest(); // \Swagger\Client\Model\EventsCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->eventsCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->eventsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\EventsCreateRequest**](../Model/EventsCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsDelete**
> eventsDelete($api_key, $v, $account_id, $list_id)

Events: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->eventsDelete($api_key, $v, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->eventsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsGet**
> eventsGet($api_key, $v, $account_id, $list_id)

Events: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->eventsGet($api_key, $v, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->eventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsList**
> eventsList($api_key, $v, $limit, $offset, $account_id)

Events: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
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
    $apiInstance->eventsList($api_key, $v, $limit, $offset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->eventsList: ', $e->getMessage(), PHP_EOL;
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

# **eventsUpdate**
> eventsUpdate($api_key, $v, $content_type, $body, $account_id, $list_id)

Events: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\EventsUpdateRequest(); // \Swagger\Client\Model\EventsUpdateRequest | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->eventsUpdate($api_key, $v, $content_type, $body, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->eventsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\EventsUpdateRequest**](../Model/EventsUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersList**
> foldersList($api_key, $v, $limit, $offset, $account_id)

Folders: List

Returns a list of Location Folders in an Account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
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
    $apiInstance->foldersList($api_key, $v, $limit, $offset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->foldersList: ', $e->getMessage(), PHP_EOL;
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

# **getLanguageProfilesGet**
> getLanguageProfilesGet($api_key, $v, $account_id, $location_id, $language_code)

Language Profiles: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$location_id = "location_id_example"; // string | 
$language_code = "language_code_example"; // string | 

try {
    $apiInstance->getLanguageProfilesGet($api_key, $v, $account_id, $location_id, $language_code);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->getLanguageProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
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

# **getLanguageProfilesList**
> getLanguageProfilesList($api_key, $v, $resolve_placeholders, $account_id, $location_id)

Language Profiles: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$resolve_placeholders = "resolve_placeholders_example"; // string | 
$account_id = "account_id_example"; // string | 
$location_id = "location_id_example"; // string | 

try {
    $apiInstance->getLanguageProfilesList($api_key, $v, $resolve_placeholders, $account_id, $location_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->getLanguageProfilesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **resolve_placeholders** | **string**|  |
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

# **googleFieldsList**
> googleFieldsList($api_key, $v)

Google Fields: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 

try {
    $apiInstance->googleFieldsList($api_key, $v);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->googleFieldsList: ', $e->getMessage(), PHP_EOL;
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

# **languageProfilesDelete**
> languageProfilesDelete($api_key, $v, $account_id, $location_id, $language_code)

Language Profiles: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$location_id = "location_id_example"; // string | 
$language_code = "language_code_example"; // string | 

try {
    $apiInstance->languageProfilesDelete($api_key, $v, $account_id, $location_id, $language_code);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->languageProfilesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
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

# **languageProfilesUpsert**
> languageProfilesUpsert($api_key, $v, $primary, $content_type, $body, $account_id, $location_id, $language_code)

Language Profiles: Upsert

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$primary = "primary_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\LanguageProfilesUpsertRequest(); // \Swagger\Client\Model\LanguageProfilesUpsertRequest | 
$account_id = "account_id_example"; // string | 
$location_id = "location_id_example"; // string | 
$language_code = "language_code_example"; // string | 

try {
    $apiInstance->languageProfilesUpsert($api_key, $v, $primary, $content_type, $body, $account_id, $location_id, $language_code);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->languageProfilesUpsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **primary** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\LanguageProfilesUpsertRequest**](../Model/LanguageProfilesUpsertRequest.md)|  |
 **account_id** | **string**|  |
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

# **menusCreate**
> menusCreate($api_key, $v, $content_type, $body, $account_id)

Menus: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\MenusCreateRequest(); // \Swagger\Client\Model\MenusCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->menusCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->menusCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\MenusCreateRequest**](../Model/MenusCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusDelete**
> menusDelete($api_key, $v, $account_id, $list_id)

Menus: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->menusDelete($api_key, $v, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->menusDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusGet**
> menusGet($api_key, $v, $account_id, $list_id)

Menus: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->menusGet($api_key, $v, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->menusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **menusList**
> menusList($api_key, $v, $limit, $offset, $account_id)

Menus: List

Retrieve all Menus for an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
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
    $apiInstance->menusList($api_key, $v, $limit, $offset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->menusList: ', $e->getMessage(), PHP_EOL;
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

# **menusUpdate**
> menusUpdate($api_key, $v, $content_type, $body, $account_id, $list_id)

Menus: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\MenusUpdateRequest(); // \Swagger\Client\Model\MenusUpdateRequest | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->menusUpdate($api_key, $v, $content_type, $body, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->menusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\MenusUpdateRequest**](../Model/MenusUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsCreate**
> productsCreate($content_type, $body, $account_id)

Products: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\ProductsCreateRequest(); // \Swagger\Client\Model\ProductsCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->productsCreate($content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->productsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ProductsCreateRequest**](../Model/ProductsCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsDelete**
> productsDelete($api_key, $v, $account_id, $list_id)

Products: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->productsDelete($api_key, $v, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->productsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsGet**
> productsGet($api_key, $v, $account_id, $list_id)

Products: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->productsGet($api_key, $v, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->productsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productsList**
> productsList($api_key, $v, $limit, $offset, $account_id)

Products: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
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
    $apiInstance->productsList($api_key, $v, $limit, $offset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->productsList: ', $e->getMessage(), PHP_EOL;
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

# **productsUpdate**
> productsUpdate($api_key, $v, $content_type, $body, $account_id, $list_id)

Products: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\KnowledgeManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\ProductsUpdateRequest(); // \Swagger\Client\Model\ProductsUpdateRequest | 
$account_id = "account_id_example"; // string | 
$list_id = "list_id_example"; // string | 

try {
    $apiInstance->productsUpdate($api_key, $v, $content_type, $body, $account_id, $list_id);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeManagerApi->productsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ProductsUpdateRequest**](../Model/ProductsUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **list_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

