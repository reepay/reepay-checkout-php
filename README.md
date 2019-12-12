# SwaggerClient-php
Reepay Checkout REST API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://checkout-api.reepay.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CheckoutApi* | [**chargeCheckoutSession**](docs/Api/CheckoutApi.md#chargecheckoutsession) | **POST** /v1/checkout/{id}/charge | Finish charge using source
*CheckoutApi* | [**createApplepaySession**](docs/Api/CheckoutApi.md#createapplepaysession) | **POST** /v1/checkout/{id}/applepay | Create Apple Pay session
*CheckoutApi* | [**createGooglepaySession**](docs/Api/CheckoutApi.md#creategooglepaysession) | **POST** /v1/checkout/{id}/googlepay | Create Google Pay session
*CheckoutApi* | [**createMpoSession**](docs/Api/CheckoutApi.md#createmposession) | **POST** /v1/checkout/{id}/mpo | Create MobilePay Online session
*CheckoutApi* | [**createPaypalSession**](docs/Api/CheckoutApi.md#createpaypalsession) | **POST** /v1/checkout/{id}/paypal | Create PayPal session
*CheckoutApi* | [**createPgwSession**](docs/Api/CheckoutApi.md#createpgwsession) | **POST** /v1/checkout/{id}/pgw | Create pgw session
*CheckoutApi* | [**createResursSession**](docs/Api/CheckoutApi.md#createresurssession) | **POST** /v1/checkout/{id}/resurs | Create Resurs session
*CheckoutApi* | [**createViabillSession**](docs/Api/CheckoutApi.md#createviabillsession) | **POST** /v1/checkout/{id}/viabill | Create ViaBill session
*CheckoutApi* | [**getCheckoutSession**](docs/Api/CheckoutApi.md#getcheckoutsession) | **GET** /v1/checkout/{id} | Get checkout session data
*CheckoutApi* | [**getResursPaymentMethodCost**](docs/Api/CheckoutApi.md#getresurspaymentmethodcost) | **POST** /v1/checkout/{id}/resurs/payment_method_cost | Get HTML with cost of Resurs payment method
*CheckoutApi* | [**getResursPaymentMethods**](docs/Api/CheckoutApi.md#getresurspaymentmethods) | **GET** /v1/checkout/{id}/resurs/payment_methods | Get Resurs payment methods
*CheckoutApi* | [**getTerms**](docs/Api/CheckoutApi.md#getterms) | **GET** /v1/checkout/{id}/terms | Get account terms template
*CheckoutApi* | [**recurringCheckoutSession**](docs/Api/CheckoutApi.md#recurringcheckoutsession) | **POST** /v1/checkout/{id}/recurring | Save recurring customer payment method
*CheckoutApi* | [**subscriptionCheckoutSession**](docs/Api/CheckoutApi.md#subscriptioncheckoutsession) | **POST** /v1/checkout/{id}/subscription | Set payment method on subscription
*ConfigurationApi* | [**createConfiguration**](docs/Api/ConfigurationApi.md#createconfiguration) | **POST** /v1/configuration | Create configuration
*ConfigurationApi* | [**deleteConfiguration**](docs/Api/ConfigurationApi.md#deleteconfiguration) | **DELETE** /v1/configuration/{handle} | Delete configuration
*ConfigurationApi* | [**getConfiguration**](docs/Api/ConfigurationApi.md#getconfiguration) | **GET** /v1/configuration/{handle} | Get configuration
*ConfigurationApi* | [**getConfigurations**](docs/Api/ConfigurationApi.md#getconfigurations) | **GET** /v1/configuration | Get configurations
*ConfigurationApi* | [**updateConfiguration**](docs/Api/ConfigurationApi.md#updateconfiguration) | **PUT** /v1/configuration/{handle} | Update configuration
*SessionApi* | [**createChargeSession**](docs/Api/SessionApi.md#createchargesession) | **POST** /v1/session/charge | Create charge session
*SessionApi* | [**createRecurringSession**](docs/Api/SessionApi.md#createrecurringsession) | **POST** /v1/session/recurring | Create recurring session
*SessionApi* | [**createSubscriptionSession**](docs/Api/SessionApi.md#createsubscriptionsession) | **POST** /v1/session/subscription | Create subscription session
*SessionApi* | [**deleteSession**](docs/Api/SessionApi.md#deletesession) | **DELETE** /v1/session/{id} | Delete session
*SessionInfoApi* | [**getSession**](docs/Api/SessionInfoApi.md#getsession) | **GET** /v1/session_info/{id} | Get session info
*SessionInfoApi* | [**getSessions**](docs/Api/SessionInfoApi.md#getsessions) | **GET** /v1/session_info/{relation_type}/{handle} | Get sessions by relation type and handle
*SignupApi* | [**createSignupPage**](docs/Api/SignupApi.md#createsignuppage) | **POST** /v1/signup_page | Create signup page
*SignupApi* | [**deleteSignupPage**](docs/Api/SignupApi.md#deletesignuppage) | **DELETE** /v1/signup_page/{id} | Delete signup page
*SignupApi* | [**getSignupPage**](docs/Api/SignupApi.md#getsignuppage) | **GET** /v1/signup_page/{id} | Get signup page
*SignupApi* | [**getSignupPageSignup**](docs/Api/SignupApi.md#getsignuppagesignup) | **GET** /v1/signup_page/{id}/signup | Get signup page signup data
*SignupApi* | [**getSignupPages**](docs/Api/SignupApi.md#getsignuppages) | **GET** /v1/signup_page | Get signup pages
*SignupApi* | [**updateSignupPage**](docs/Api/SignupApi.md#updatesignuppage) | **PUT** /v1/signup_page/{id} | Update signup page


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [AddOn](docs/Model/AddOn.md)
 - [AllowedPaymentMethod](docs/Model/AllowedPaymentMethod.md)
 - [AllowedPaymentMethodParameters](docs/Model/AllowedPaymentMethodParameters.md)
 - [AppleLineItem](docs/Model/AppleLineItem.md)
 - [ApplepayPaymentRequestDto](docs/Model/ApplepayPaymentRequestDto.md)
 - [Card](docs/Model/Card.md)
 - [CardOnFile](docs/Model/CardOnFile.md)
 - [CardTransaction](docs/Model/CardTransaction.md)
 - [Charge](docs/Model/Charge.md)
 - [ChargeSource](docs/Model/ChargeSource.md)
 - [CheckoutSession](docs/Model/CheckoutSession.md)
 - [Configuration](docs/Model/Configuration.md)
 - [CreateChargeSession](docs/Model/CreateChargeSession.md)
 - [CreateConfiguration](docs/Model/CreateConfiguration.md)
 - [CreateCustomer](docs/Model/CreateCustomer.md)
 - [CreateMpoSession](docs/Model/CreateMpoSession.md)
 - [CreateOrderLine](docs/Model/CreateOrderLine.md)
 - [CreatePGWSession](docs/Model/CreatePGWSession.md)
 - [CreatePreparedSubscription](docs/Model/CreatePreparedSubscription.md)
 - [CreateRecurringSession](docs/Model/CreateRecurringSession.md)
 - [CreateResursSession](docs/Model/CreateResursSession.md)
 - [CreateSignupPage](docs/Model/CreateSignupPage.md)
 - [CreateSubscription](docs/Model/CreateSubscription.md)
 - [CreateSubscriptionAddOn](docs/Model/CreateSubscriptionAddOn.md)
 - [CreateSubscriptionAdditionalCost](docs/Model/CreateSubscriptionAdditionalCost.md)
 - [CreateSubscriptionDiscount](docs/Model/CreateSubscriptionDiscount.md)
 - [CreateSubscriptionSession](docs/Model/CreateSubscriptionSession.md)
 - [CreateViabillSession](docs/Model/CreateViabillSession.md)
 - [CreditInvoice](docs/Model/CreditInvoice.md)
 - [CreditNoteLine](docs/Model/CreditNoteLine.md)
 - [Customer](docs/Model/Customer.md)
 - [Discount](docs/Model/Discount.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [GooglepayPaymentRequestDto](docs/Model/GooglepayPaymentRequestDto.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceBillingAddress](docs/Model/InvoiceBillingAddress.md)
 - [InvoiceCreditNote](docs/Model/InvoiceCreditNote.md)
 - [InvoiceShippingAddress](docs/Model/InvoiceShippingAddress.md)
 - [ManualTransaction](docs/Model/ManualTransaction.md)
 - [MerchantInfo](docs/Model/MerchantInfo.md)
 - [Order](docs/Model/Order.md)
 - [OrderLine](docs/Model/OrderLine.md)
 - [PaymentMethods](docs/Model/PaymentMethods.md)
 - [PaypalTransaction](docs/Model/PaypalTransaction.md)
 - [PgwTransaction](docs/Model/PgwTransaction.md)
 - [Plan](docs/Model/Plan.md)
 - [PreparedSubscription](docs/Model/PreparedSubscription.md)
 - [ResursPaymentMethodDto](docs/Model/ResursPaymentMethodDto.md)
 - [ResursTransaction](docs/Model/ResursTransaction.md)
 - [Session](docs/Model/Session.md)
 - [SessionChargeDto](docs/Model/SessionChargeDto.md)
 - [SessionInfo](docs/Model/SessionInfo.md)
 - [SessionPaymentMethod](docs/Model/SessionPaymentMethod.md)
 - [SessionPaymentMethods](docs/Model/SessionPaymentMethods.md)
 - [SessionRecurring](docs/Model/SessionRecurring.md)
 - [SignupPage](docs/Model/SignupPage.md)
 - [SignupPageSignup](docs/Model/SignupPageSignup.md)
 - [StrongAuth](docs/Model/StrongAuth.md)
 - [Subscription](docs/Model/Subscription.md)
 - [SubscriptionAddOn](docs/Model/SubscriptionAddOn.md)
 - [SubscriptionChange](docs/Model/SubscriptionChange.md)
 - [SubscriptionDiscount](docs/Model/SubscriptionDiscount.md)
 - [SubscriptionLinks](docs/Model/SubscriptionLinks.md)
 - [TokenizationSpecification](docs/Model/TokenizationSpecification.md)
 - [TokenizationSpecificationParameters](docs/Model/TokenizationSpecificationParameters.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionInfo](docs/Model/TransactionInfo.md)
 - [UpdateConfiguration](docs/Model/UpdateConfiguration.md)
 - [ViabillTransaction](docs/Model/ViabillTransaction.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author



