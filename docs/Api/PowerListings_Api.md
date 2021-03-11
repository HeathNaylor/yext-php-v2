# Swagger\Client\PowerListings_Api

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**duplicatesCreate**](PowerListings_Api.md#duplicatesCreate) | **POST** /accounts/{accountId}/powerlistings/duplicates | Duplicates: Create
[**duplicatesDelete**](PowerListings_Api.md#duplicatesDelete) | **DELETE** /accounts/{accountId}/powerlistings/duplicates/{duplicateId} | Duplicates: Delete
[**duplicatesList**](PowerListings_Api.md#duplicatesList) | **GET** /accounts/{accountId}/powerlistings/duplicates | Duplicates: List
[**duplicatesSuppress**](PowerListings_Api.md#duplicatesSuppress) | **PUT** /accounts/{accountId}/powerlistings/duplicates/{duplicateId} | Duplicates: Suppress
[**listingsList**](PowerListings_Api.md#listingsList) | **GET** /accounts/{accountId}/powerlistings/listings | Listings: List
[**listingsOptIn**](PowerListings_Api.md#listingsOptIn) | **PUT** /accounts/{accountId}/powerlistings/listings/optin | Listings: Opt In
[**listingsOptOut**](PowerListings_Api.md#listingsOptOut) | **PUT** /accounts/{accountId}/powerlistings/listings/optout | Listings: Opt Out
[**publisherSuggestionsGet**](PowerListings_Api.md#publisherSuggestionsGet) | **GET** /accounts/{accountId}/powerlistings/publishersuggestions/{suggestionId} | Publisher Suggestions: Get
[**publisherSuggestionsList**](PowerListings_Api.md#publisherSuggestionsList) | **GET** /accounts/{accountId}/powerlistings/publishersuggestions | Publisher Suggestions: List
[**publisherSuggestionsUpdate**](PowerListings_Api.md#publisherSuggestionsUpdate) | **PUT** /accounts/{accountId}/powerlistings/publishersuggestions/{suggestionId} | Publisher Suggestions: Update
[**publishersList**](PowerListings_Api.md#publishersList) | **GET** /accounts/{accountId}/powerlistings/publishers | Publishers: List
[**verificationComplete**](PowerListings_Api.md#verificationComplete) | **POST** /{accountId}/listings/verifications/{publisherId}/complete | Verification Complete
[**verificationInitiate**](PowerListings_Api.md#verificationInitiate) | **POST** /{accountId}/listings/verifications/{publisherId}/{locale}/initiate | Verification Initiate
[**verificationMethodsList**](PowerListings_Api.md#verificationMethodsList) | **GET** /accounts/{accountId}/listings/verifications/{publisherId}/{locale}/methods | Verification Methods List
[**verificationStatusesList**](PowerListings_Api.md#verificationStatusesList) | **GET** /accounts/{accountId}/listings/verifications/{publisherId}/statuses | Verification Statuses List


# **duplicatesCreate**
> duplicatesCreate($api_key, $v, $location_ids, $publisher_ids, $url, $account_id)

Duplicates: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$publisher_ids = "publisher_ids_example"; // string | 
$url = "url_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->duplicatesCreate($api_key, $v, $location_ids, $publisher_ids, $url, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->duplicatesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **location_ids** | **string**|  |
 **publisher_ids** | **string**|  |
 **url** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicatesDelete**
> duplicatesDelete($api_key, $v, $account_id, $duplicate_id)

Duplicates: Delete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$duplicate_id = "duplicate_id_example"; // string | 

try {
    $apiInstance->duplicatesDelete($api_key, $v, $account_id, $duplicate_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->duplicatesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **duplicate_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicatesList**
> duplicatesList($api_key, $v, $limit, $offset, $location_ids, $publisher_ids, $statuses, $account_id)

Duplicates: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$publisher_ids = "publisher_ids_example"; // string | 
$statuses = "statuses_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->duplicatesList($api_key, $v, $limit, $offset, $location_ids, $publisher_ids, $statuses, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->duplicatesList: ', $e->getMessage(), PHP_EOL;
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
 **location_ids** | **string**|  |
 **publisher_ids** | **string**|  |
 **statuses** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicatesSuppress**
> duplicatesSuppress($api_key, $v, $account_id, $duplicate_id)

Duplicates: Suppress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$duplicate_id = "duplicate_id_example"; // string | 

try {
    $apiInstance->duplicatesSuppress($api_key, $v, $account_id, $duplicate_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->duplicatesSuppress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **duplicate_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsList**
> listingsList($api_key, $v, $limit, $offset, $location_ids, $publisher_ids, $statuses, $language, $account_id)

Listings: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$publisher_ids = "publisher_ids_example"; // string | 
$statuses = "statuses_example"; // string | 
$language = "language_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->listingsList($api_key, $v, $limit, $offset, $location_ids, $publisher_ids, $statuses, $language, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->listingsList: ', $e->getMessage(), PHP_EOL;
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
 **location_ids** | **string**|  |
 **publisher_ids** | **string**|  |
 **statuses** | **string**|  |
 **language** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsOptIn**
> listingsOptIn($api_key, $v, $location_ids, $publisher_ids, $account_id)

Listings: Opt In

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$publisher_ids = "publisher_ids_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->listingsOptIn($api_key, $v, $location_ids, $publisher_ids, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->listingsOptIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **location_ids** | **string**|  |
 **publisher_ids** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsOptOut**
> listingsOptOut($api_key, $v, $location_ids, $publisher_ids, $account_id)

Listings: Opt Out

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$publisher_ids = "publisher_ids_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->listingsOptOut($api_key, $v, $location_ids, $publisher_ids, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->listingsOptOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **location_ids** | **string**|  |
 **publisher_ids** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publisherSuggestionsGet**
> publisherSuggestionsGet($api_key, $v, $account_id, $suggestion_id)

Publisher Suggestions: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$suggestion_id = "suggestion_id_example"; // string | 

try {
    $apiInstance->publisherSuggestionsGet($api_key, $v, $account_id, $suggestion_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->publisherSuggestionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **suggestion_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publisherSuggestionsList**
> publisherSuggestionsList($api_key, $v, $limit, $offset, $location_ids, $publisher_ids, $statuses, $account_id)

Publisher Suggestions: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$publisher_ids = "publisher_ids_example"; // string | 
$statuses = "statuses_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->publisherSuggestionsList($api_key, $v, $limit, $offset, $location_ids, $publisher_ids, $statuses, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->publisherSuggestionsList: ', $e->getMessage(), PHP_EOL;
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
 **location_ids** | **string**|  |
 **publisher_ids** | **string**|  |
 **statuses** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publisherSuggestionsUpdate**
> publisherSuggestionsUpdate($api_key, $v, $status, $account_id, $suggestion_id)

Publisher Suggestions: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$status = "status_example"; // string | 
$account_id = "account_id_example"; // string | 
$suggestion_id = "suggestion_id_example"; // string | 

try {
    $apiInstance->publisherSuggestionsUpdate($api_key, $v, $status, $account_id, $suggestion_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->publisherSuggestionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **status** | **string**|  |
 **account_id** | **string**|  |
 **suggestion_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishersList**
> publishersList($api_key, $v, $subset, $account_id)

Publishers: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$subset = "subset_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->publishersList($api_key, $v, $subset, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->publishersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **subset** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verificationComplete**
> verificationComplete($api_key, $v, $content_type, $body, $account_id, $publisher_id)

Verification Complete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = array(new \Swagger\Client\Model\VerificationCompleteRequest()); // \Swagger\Client\Model\VerificationCompleteRequest[] | 
$account_id = "account_id_example"; // string | 
$publisher_id = "publisher_id_example"; // string | 

try {
    $apiInstance->verificationComplete($api_key, $v, $content_type, $body, $account_id, $publisher_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->verificationComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\VerificationCompleteRequest[]**](../Model/VerificationCompleteRequest.md)|  |
 **account_id** | **string**|  |
 **publisher_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verificationInitiate**
> verificationInitiate($api_key, $v, $content_type, $body, $account_id, $publisher_id, $locale)

Verification Initiate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = array(new \Swagger\Client\Model\VerificationInitiateRequest()); // \Swagger\Client\Model\VerificationInitiateRequest[] | 
$account_id = "account_id_example"; // string | 
$publisher_id = "publisher_id_example"; // string | 
$locale = "locale_example"; // string | 

try {
    $apiInstance->verificationInitiate($api_key, $v, $content_type, $body, $account_id, $publisher_id, $locale);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->verificationInitiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\VerificationInitiateRequest[]**](../Model/VerificationInitiateRequest.md)|  |
 **account_id** | **string**|  |
 **publisher_id** | **string**|  |
 **locale** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verificationMethodsList**
> verificationMethodsList($api_key, $v, $account_id, $publisher_id, $locale)

Verification Methods List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$publisher_id = "publisher_id_example"; // string | 
$locale = "locale_example"; // string | 

try {
    $apiInstance->verificationMethodsList($api_key, $v, $account_id, $publisher_id, $locale);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->verificationMethodsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **publisher_id** | **string**|  |
 **locale** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verificationStatusesList**
> verificationStatusesList($api_key, $v, $account_id, $publisher_id)

Verification Statuses List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PowerListings_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$publisher_id = "publisher_id_example"; // string | 

try {
    $apiInstance->verificationStatusesList($api_key, $v, $account_id, $publisher_id);
} catch (Exception $e) {
    echo 'Exception when calling PowerListings_Api->verificationStatusesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **publisher_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

