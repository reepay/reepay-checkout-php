# Swagger\Client\CheckoutApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chargeCheckoutSession**](CheckoutApi.md#chargeCheckoutSession) | **POST** /v1/checkout/{id}/charge | Finish charge using source
[**createApplepaySession**](CheckoutApi.md#createApplepaySession) | **POST** /v1/checkout/{id}/applepay | Create Apple Pay session
[**createGooglepaySession**](CheckoutApi.md#createGooglepaySession) | **POST** /v1/checkout/{id}/googlepay | Create Google Pay session
[**createMpoSession**](CheckoutApi.md#createMpoSession) | **POST** /v1/checkout/{id}/mpo | Create MobilePay Online session
[**createPaypalSession**](CheckoutApi.md#createPaypalSession) | **POST** /v1/checkout/{id}/paypal | Create PayPal session
[**createPgwSession**](CheckoutApi.md#createPgwSession) | **POST** /v1/checkout/{id}/pgw | Create pgw session
[**createResursSession**](CheckoutApi.md#createResursSession) | **POST** /v1/checkout/{id}/resurs | Create Resurs session
[**createViabillSession**](CheckoutApi.md#createViabillSession) | **POST** /v1/checkout/{id}/viabill | Create ViaBill session
[**getCheckoutSession**](CheckoutApi.md#getCheckoutSession) | **GET** /v1/checkout/{id} | Get checkout session data
[**getResursPaymentMethodCost**](CheckoutApi.md#getResursPaymentMethodCost) | **POST** /v1/checkout/{id}/resurs/payment_method_cost | Get HTML with cost of Resurs payment method
[**getResursPaymentMethods**](CheckoutApi.md#getResursPaymentMethods) | **GET** /v1/checkout/{id}/resurs/payment_methods | Get Resurs payment methods
[**getTerms**](CheckoutApi.md#getTerms) | **GET** /v1/checkout/{id}/terms | Get account terms template
[**recurringCheckoutSession**](CheckoutApi.md#recurringCheckoutSession) | **POST** /v1/checkout/{id}/recurring | Save recurring customer payment method
[**subscriptionCheckoutSession**](CheckoutApi.md#subscriptionCheckoutSession) | **POST** /v1/checkout/{id}/subscription | Set payment method on subscription


# **chargeCheckoutSession**
> \Swagger\Client\Model\CheckoutSession chargeCheckoutSession($id, $body)

Finish charge using source



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Swagger\Client\Model\SessionChargeDto(); // \Swagger\Client\Model\SessionChargeDto | 

try {
    $result = $apiInstance->chargeCheckoutSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->chargeCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Swagger\Client\Model\SessionChargeDto**](../Model/SessionChargeDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createApplepaySession**
> \Swagger\Client\Model\CheckoutSession createApplepaySession($id)

Create Apple Pay session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createApplepaySession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createApplepaySession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGooglepaySession**
> \Swagger\Client\Model\CheckoutSession createGooglepaySession($id)

Create Google Pay session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createGooglepaySession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createGooglepaySession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMpoSession**
> \Swagger\Client\Model\CheckoutSession createMpoSession($id, $body)

Create MobilePay Online session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Swagger\Client\Model\CreateMpoSession(); // \Swagger\Client\Model\CreateMpoSession | 

try {
    $result = $apiInstance->createMpoSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createMpoSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Swagger\Client\Model\CreateMpoSession**](../Model/CreateMpoSession.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaypalSession**
> \Swagger\Client\Model\CheckoutSession createPaypalSession($id)

Create PayPal session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->createPaypalSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createPaypalSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPgwSession**
> \Swagger\Client\Model\CheckoutSession createPgwSession($id, $body)

Create pgw session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Swagger\Client\Model\CreatePGWSession(); // \Swagger\Client\Model\CreatePGWSession | 

try {
    $result = $apiInstance->createPgwSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createPgwSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Swagger\Client\Model\CreatePGWSession**](../Model/CreatePGWSession.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createResursSession**
> \Swagger\Client\Model\CheckoutSession createResursSession($id, $body)

Create Resurs session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Swagger\Client\Model\CreateResursSession(); // \Swagger\Client\Model\CreateResursSession | 

try {
    $result = $apiInstance->createResursSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createResursSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Swagger\Client\Model\CreateResursSession**](../Model/CreateResursSession.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createViabillSession**
> \Swagger\Client\Model\CheckoutSession createViabillSession($id, $body)

Create ViaBill session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Swagger\Client\Model\CreateViabillSession(); // \Swagger\Client\Model\CreateViabillSession | 

try {
    $result = $apiInstance->createViabillSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createViabillSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Swagger\Client\Model\CreateViabillSession**](../Model/CreateViabillSession.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutSession**
> \Swagger\Client\Model\CheckoutSession getCheckoutSession($id)

Get checkout session data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->getCheckoutSession($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResursPaymentMethodCost**
> string getResursPaymentMethodCost($id, $body)

Get HTML with cost of Resurs payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Swagger\Client\Model\ResursPaymentMethodDto(); // \Swagger\Client\Model\ResursPaymentMethodDto | 

try {
    $result = $apiInstance->getResursPaymentMethodCost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getResursPaymentMethodCost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Swagger\Client\Model\ResursPaymentMethodDto**](../Model/ResursPaymentMethodDto.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResursPaymentMethods**
> \Swagger\Client\Model\ResursPaymentMethodDto[] getResursPaymentMethods($id)

Get Resurs payment methods



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->getResursPaymentMethods($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getResursPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

[**\Swagger\Client\Model\ResursPaymentMethodDto[]**](../Model/ResursPaymentMethodDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTerms**
> string getTerms($id)

Get account terms template



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id

try {
    $result = $apiInstance->getTerms($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recurringCheckoutSession**
> \Swagger\Client\Model\CheckoutSession recurringCheckoutSession($id, $body)

Save recurring customer payment method



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Swagger\Client\Model\SessionRecurring(); // \Swagger\Client\Model\SessionRecurring | 

try {
    $result = $apiInstance->recurringCheckoutSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->recurringCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Swagger\Client\Model\SessionRecurring**](../Model/SessionRecurring.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionCheckoutSession**
> \Swagger\Client\Model\CheckoutSession subscriptionCheckoutSession($id, $body)

Set payment method on subscription



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Session id
$body = new \Swagger\Client\Model\SessionRecurring(); // \Swagger\Client\Model\SessionRecurring | 

try {
    $result = $apiInstance->subscriptionCheckoutSession($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->subscriptionCheckoutSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Session id |
 **body** | [**\Swagger\Client\Model\SessionRecurring**](../Model/SessionRecurring.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutSession**](../Model/CheckoutSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

