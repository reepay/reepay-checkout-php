# Swagger\Client\ConfigurationApi

All URIs are relative to *https://checkout-api.reepay.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConfiguration**](ConfigurationApi.md#createConfiguration) | **POST** /v1/configuration | Create configuration
[**deleteConfiguration**](ConfigurationApi.md#deleteConfiguration) | **DELETE** /v1/configuration/{handle} | Delete configuration
[**getConfiguration**](ConfigurationApi.md#getConfiguration) | **GET** /v1/configuration/{handle} | Get configuration
[**getConfigurations**](ConfigurationApi.md#getConfigurations) | **GET** /v1/configuration | Get configurations
[**updateConfiguration**](ConfigurationApi.md#updateConfiguration) | **PUT** /v1/configuration/{handle} | Update configuration


# **createConfiguration**
> \Swagger\Client\Model\Configuration createConfiguration($body)

Create configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateConfiguration(); // \Swagger\Client\Model\CreateConfiguration | 

try {
    $result = $apiInstance->createConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->createConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateConfiguration**](../Model/CreateConfiguration.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Configuration**](../Model/Configuration.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConfiguration**
> deleteConfiguration($handle)

Delete configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Configuration handle

try {
    $apiInstance->deleteConfiguration($handle);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->deleteConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Configuration handle |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfiguration**
> \Swagger\Client\Model\Configuration getConfiguration($handle)

Get configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Configuration handle

try {
    $result = $apiInstance->getConfiguration($handle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Configuration handle |

### Return type

[**\Swagger\Client\Model\Configuration**](../Model/Configuration.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigurations**
> \Swagger\Client\Model\Configuration[] getConfigurations()

Get configurations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfigurations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Configuration[]**](../Model/Configuration.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateConfiguration**
> \Swagger\Client\Model\Configuration updateConfiguration($handle, $body)

Update configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$handle = "handle_example"; // string | Configuration handle
$body = new \Swagger\Client\Model\UpdateConfiguration(); // \Swagger\Client\Model\UpdateConfiguration | 

try {
    $result = $apiInstance->updateConfiguration($handle, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->updateConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **handle** | **string**| Configuration handle |
 **body** | [**\Swagger\Client\Model\UpdateConfiguration**](../Model/UpdateConfiguration.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Configuration**](../Model/Configuration.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

