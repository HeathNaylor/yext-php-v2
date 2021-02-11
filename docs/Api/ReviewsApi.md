# Swagger\Client\ReviewsApi

All URIs are relative to *https://api.yext.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**commentCreate**](ReviewsApi.md#commentCreate) | **POST** /accounts/{accountId}/reviews/{reviewId}/comments | Comment: Create
[**reviewGenerationSettingsGet**](ReviewsApi.md#reviewGenerationSettingsGet) | **GET** /accounts/{accountId}/reviews/settings/generation | Review Generation Settings: Get
[**reviewGenerationSettingsUpdate**](ReviewsApi.md#reviewGenerationSettingsUpdate) | **POST** /accounts/{accountId}/reviews/settings/generation | Review Generation Settings: Update
[**reviewInvitationGet**](ReviewsApi.md#reviewInvitationGet) | **GET** /accounts/{accountId}/reviewinvites/{invitationId} | Review Invitation: Get
[**reviewInvitationUpdateMetadata**](ReviewsApi.md#reviewInvitationUpdateMetadata) | **PUT** /accounts/{accountId}/reviewinvites/{invitationId}:updatemetadata | Review Invitation: Update Metadata
[**reviewInvitationsCreate**](ReviewsApi.md#reviewInvitationsCreate) | **POST** /accounts/{accountId}/reviewinvites | Review Invitations: Create
[**reviewInvitationsList**](ReviewsApi.md#reviewInvitationsList) | **GET** /accounts/{accountId}/reviewinvites | Review Invitations: List
[**reviewsCreate**](ReviewsApi.md#reviewsCreate) | **POST** /accounts/{accountId}/reviews | Reviews: Create
[**reviewsGet**](ReviewsApi.md#reviewsGet) | **GET** /accounts/{accountId}/reviews/{reviewId} | Reviews: Get
[**reviewsList**](ReviewsApi.md#reviewsList) | **GET** /accounts/{accountId}/reviews | Reviews: List
[**reviewsUpdate**](ReviewsApi.md#reviewsUpdate) | **PUT** /accounts/{accountId}/reviews/{reviewId} | Reviews: Update


# **commentCreate**
> commentCreate($api_key, $v, $content_type, $body, $account_id, $review_id)

Comment: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\CommentCreateRequest(); // \Swagger\Client\Model\CommentCreateRequest | 
$account_id = "account_id_example"; // string | 
$review_id = "review_id_example"; // string | 

try {
    $apiInstance->commentCreate($api_key, $v, $content_type, $body, $account_id, $review_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->commentCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\CommentCreateRequest**](../Model/CommentCreateRequest.md)|  |
 **account_id** | **string**|  |
 **review_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewGenerationSettingsGet**
> reviewGenerationSettingsGet($api_key, $v, $account_id)

Review Generation Settings: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->reviewGenerationSettingsGet($api_key, $v, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewGenerationSettingsGet: ', $e->getMessage(), PHP_EOL;
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

# **reviewGenerationSettingsUpdate**
> reviewGenerationSettingsUpdate($api_key, $v, $content_type, $body, $account_id)

Review Generation Settings: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\ReviewGenerationSettingsUpdateRequest(); // \Swagger\Client\Model\ReviewGenerationSettingsUpdateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->reviewGenerationSettingsUpdate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewGenerationSettingsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ReviewGenerationSettingsUpdateRequest**](../Model/ReviewGenerationSettingsUpdateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewInvitationGet**
> reviewInvitationGet($api_key, $v, $account_id, $invitation_id)

Review Invitation: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$invitation_id = "invitation_id_example"; // string | 

try {
    $apiInstance->reviewInvitationGet($api_key, $v, $account_id, $invitation_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewInvitationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **invitation_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewInvitationUpdateMetadata**
> reviewInvitationUpdateMetadata($api_key, $v, $content_type, $body, $account_id, $invitation_id)

Review Invitation: Update Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\ReviewInvitationUpdateMetadataRequest(); // \Swagger\Client\Model\ReviewInvitationUpdateMetadataRequest | 
$account_id = "account_id_example"; // string | 
$invitation_id = "invitation_id_example"; // string | 

try {
    $apiInstance->reviewInvitationUpdateMetadata($api_key, $v, $content_type, $body, $account_id, $invitation_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewInvitationUpdateMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ReviewInvitationUpdateMetadataRequest**](../Model/ReviewInvitationUpdateMetadataRequest.md)|  |
 **account_id** | **string**|  |
 **invitation_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewInvitationsCreate**
> reviewInvitationsCreate($api_key, $v, $content_type, $body, $account_id)

Review Invitations: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = array(new \Swagger\Client\Model\ReviewInvitations3ACreateRequest()); // \Swagger\Client\Model\ReviewInvitations3ACreateRequest[] | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->reviewInvitationsCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewInvitationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ReviewInvitations3ACreateRequest[]**](../Model/ReviewInvitations3ACreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewInvitationsList**
> reviewInvitationsList($api_key, $v, $limit, $offset, $location_ids, $folder_ids, $location_labels, $template_ids, $status, $type, $account_id)

Review Invitations: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$folder_ids = "folder_ids_example"; // string | 
$location_labels = "location_labels_example"; // string | 
$template_ids = "template_ids_example"; // string | 
$status = "status_example"; // string | 
$type = "type_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->reviewInvitationsList($api_key, $v, $limit, $offset, $location_ids, $folder_ids, $location_labels, $template_ids, $status, $type, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewInvitationsList: ', $e->getMessage(), PHP_EOL;
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
 **folder_ids** | **string**|  |
 **location_labels** | **string**|  |
 **template_ids** | **string**|  |
 **status** | **string**|  |
 **type** | **string**|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsCreate**
> reviewsCreate($api_key, $v, $content_type, $body, $account_id)

Reviews: Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\ReviewsCreateRequest(); // \Swagger\Client\Model\ReviewsCreateRequest | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->reviewsCreate($api_key, $v, $content_type, $body, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ReviewsCreateRequest**](../Model/ReviewsCreateRequest.md)|  |
 **account_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsGet**
> reviewsGet($api_key, $v, $account_id, $review_id)

Reviews: Get

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$account_id = "account_id_example"; // string | 
$review_id = "review_id_example"; // string | 

try {
    $apiInstance->reviewsGet($api_key, $v, $account_id, $review_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **account_id** | **string**|  |
 **review_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reviewsList**
> reviewsList($api_key, $v, $limit, $offset, $location_ids, $folder_id, $countries, $location_labels, $publisher_ids, $review_content, $min_rating, $max_rating, $min_publisher_date, $max_publisher_date, $min_last_yext_update_date, $max_last_yext_update_date, $awaiting_response, $min_non_owner_comments, $reviewer_name, $reviewer_email, $status, $page_token, $account_id)

Reviews: List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$limit = "limit_example"; // string | 
$offset = "offset_example"; // string | 
$location_ids = "location_ids_example"; // string | 
$folder_id = "folder_id_example"; // string | 
$countries = "countries_example"; // string | 
$location_labels = "location_labels_example"; // string | 
$publisher_ids = "publisher_ids_example"; // string | 
$review_content = "review_content_example"; // string | 
$min_rating = "min_rating_example"; // string | 
$max_rating = "max_rating_example"; // string | 
$min_publisher_date = "min_publisher_date_example"; // string | 
$max_publisher_date = "max_publisher_date_example"; // string | 
$min_last_yext_update_date = "min_last_yext_update_date_example"; // string | 
$max_last_yext_update_date = "max_last_yext_update_date_example"; // string | 
$awaiting_response = "awaiting_response_example"; // string | 
$min_non_owner_comments = "min_non_owner_comments_example"; // string | 
$reviewer_name = "reviewer_name_example"; // string | 
$reviewer_email = "reviewer_email_example"; // string | 
$status = "status_example"; // string | 
$page_token = "page_token_example"; // string | 
$account_id = "account_id_example"; // string | 

try {
    $apiInstance->reviewsList($api_key, $v, $limit, $offset, $location_ids, $folder_id, $countries, $location_labels, $publisher_ids, $review_content, $min_rating, $max_rating, $min_publisher_date, $max_publisher_date, $min_last_yext_update_date, $max_last_yext_update_date, $awaiting_response, $min_non_owner_comments, $reviewer_name, $reviewer_email, $status, $page_token, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsList: ', $e->getMessage(), PHP_EOL;
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
 **folder_id** | **string**|  |
 **countries** | **string**|  |
 **location_labels** | **string**|  |
 **publisher_ids** | **string**|  |
 **review_content** | **string**|  |
 **min_rating** | **string**|  |
 **max_rating** | **string**|  |
 **min_publisher_date** | **string**|  |
 **max_publisher_date** | **string**|  |
 **min_last_yext_update_date** | **string**|  |
 **max_last_yext_update_date** | **string**|  |
 **awaiting_response** | **string**|  |
 **min_non_owner_comments** | **string**|  |
 **reviewer_name** | **string**|  |
 **reviewer_email** | **string**|  |
 **status** | **string**|  |
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

# **reviewsUpdate**
> reviewsUpdate($api_key, $v, $content_type, $body, $account_id, $review_id)

Reviews: Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_key = "api_key_example"; // string | 
$v = "v_example"; // string | 
$content_type = "content_type_example"; // string | 
$body = new \Swagger\Client\Model\ReviewsUpdateRequest(); // \Swagger\Client\Model\ReviewsUpdateRequest | 
$account_id = "account_id_example"; // string | 
$review_id = "review_id_example"; // string | 

try {
    $apiInstance->reviewsUpdate($api_key, $v, $content_type, $body, $account_id, $review_id);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->reviewsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_key** | **string**|  |
 **v** | **string**|  |
 **content_type** | **string**|  |
 **body** | [**\Swagger\Client\Model\ReviewsUpdateRequest**](../Model/ReviewsUpdateRequest.md)|  |
 **account_id** | **string**|  |
 **review_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

