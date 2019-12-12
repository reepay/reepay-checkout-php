# Swagger\Client\SignupApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSignupPage**](SignupApi.md#createSignupPage) | **POST** /v1/signup_page | Create signup page
[**deleteSignupPage**](SignupApi.md#deleteSignupPage) | **DELETE** /v1/signup_page/{id} | Delete signup page
[**getSignupPage**](SignupApi.md#getSignupPage) | **GET** /v1/signup_page/{id} | Get signup page
[**getSignupPageSignup**](SignupApi.md#getSignupPageSignup) | **GET** /v1/signup_page/{id}/signup | Get signup page signup data
[**getSignupPages**](SignupApi.md#getSignupPages) | **GET** /v1/signup_page | Get signup pages
[**updateSignupPage**](SignupApi.md#updateSignupPage) | **PUT** /v1/signup_page/{id} | Update signup page


# **createSignupPage**
> \Swagger\Client\Model\SignupPage createSignupPage($body)

Create signup page



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateSignupPage(); // \Swagger\Client\Model\CreateSignupPage | 

try {
    $result = $apiInstance->createSignupPage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->createSignupPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateSignupPage**](../Model/CreateSignupPage.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SignupPage**](../Model/SignupPage.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSignupPage**
> deleteSignupPage($id)

Delete signup page



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Signup page id

try {
    $apiInstance->deleteSignupPage($id);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->deleteSignupPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Signup page id |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignupPage**
> \Swagger\Client\Model\SignupPage getSignupPage($id)

Get signup page



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Signup page id

try {
    $result = $apiInstance->getSignupPage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->getSignupPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Signup page id |

### Return type

[**\Swagger\Client\Model\SignupPage**](../Model/SignupPage.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignupPageSignup**
> \Swagger\Client\Model\SignupPageSignup getSignupPageSignup($id, $coupon)

Get signup page signup data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Signup page id
$coupon = "coupon_example"; // string | 

try {
    $result = $apiInstance->getSignupPageSignup($id, $coupon);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->getSignupPageSignup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Signup page id |
 **coupon** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\SignupPageSignup**](../Model/SignupPageSignup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignupPages**
> \Swagger\Client\Model\SignupPage[] getSignupPages($size, $plan, $created_before)

Get signup pages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$size = 100; // int | Page size. A maximum of 100 is allowed.
$plan = "plan_example"; // string | Optional plan handle to filter on
$created_before = "created_before_example"; // string | Get signup pages created before this date, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. Use last created date as filter for next page. Default far far future.

try {
    $result = $apiInstance->getSignupPages($size, $plan, $created_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->getSignupPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **size** | **int**| Page size. A maximum of 100 is allowed. | [optional] [default to 100]
 **plan** | **string**| Optional plan handle to filter on | [optional]
 **created_before** | **string**| Get signup pages created before this date, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. Use last created date as filter for next page. Default far far future. | [optional]

### Return type

[**\Swagger\Client\Model\SignupPage[]**](../Model/SignupPage.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSignupPage**
> \Swagger\Client\Model\SignupPage updateSignupPage($id, $body)

Update signup page



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Signup page id
$body = new \Swagger\Client\Model\CreateSignupPage(); // \Swagger\Client\Model\CreateSignupPage | 

try {
    $result = $apiInstance->updateSignupPage($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->updateSignupPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Signup page id |
 **body** | [**\Swagger\Client\Model\CreateSignupPage**](../Model/CreateSignupPage.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SignupPage**](../Model/SignupPage.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

