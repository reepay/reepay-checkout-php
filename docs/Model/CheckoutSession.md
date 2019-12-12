# CheckoutSession

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Session id | 
**type** | **string** | Session type | 
**result** | **string** |  | [optional] 
**error_code** | **int** |  | [optional] 
**error_message** | **string** |  | [optional] 
**logo** | **string** |  | [optional] 
**configuration** | **string** |  | [optional] 
**locale** | **string** | Session locale | 
**cancel_url** | **string** |  | [optional] 
**accept_url** | **string** |  | [optional] 
**payment_methods** | [**\Swagger\Client\Model\SessionPaymentMethods**](SessionPaymentMethods.md) |  | [optional] 
**subscription_invoice** | [**\Swagger\Client\Model\Invoice**](Invoice.md) |  | [optional] 
**account** | [**\Swagger\Client\Model\Account**](Account.md) |  | [optional] 
**charge** | [**\Swagger\Client\Model\Charge**](Charge.md) |  | [optional] 
**customer** | [**\Swagger\Client\Model\Customer**](Customer.md) |  | [optional] 
**subscription** | [**\Swagger\Client\Model\Subscription**](Subscription.md) |  | [optional] 
**plan** | [**\Swagger\Client\Model\Plan**](Plan.md) |  | [optional] 
**add_ons** | [**\Swagger\Client\Model\SubscriptionAddOn[]**](SubscriptionAddOn.md) |  | [optional] 
**discounts** | [**\Swagger\Client\Model\SubscriptionDiscount[]**](SubscriptionDiscount.md) |  | [optional] 
**subscription_payment_methods** | [**\Swagger\Client\Model\PaymentMethods**](PaymentMethods.md) |  | [optional] 
**recurring** | **bool** |  | [optional] 
**settle** | **bool** |  | [optional] 
**pkey** | **string** |  | [optional] 
**strong_auth** | [**\Swagger\Client\Model\StrongAuth**](StrongAuth.md) |  | [optional] 
**payment_method** | **string** |  | [optional] 
**pgw_url** | **string** |  | [optional] 
**mpo_url** | **string** |  | [optional] 
**mpo_session_token** | **string** |  | [optional] 
**mpo_version** | **string** |  | [optional] 
**viabill_url** | **string** |  | [optional] 
**resurs_url** | **string** |  | [optional] 
**applepay_payment_request** | [**\Swagger\Client\Model\ApplepayPaymentRequestDto**](ApplepayPaymentRequestDto.md) |  | [optional] 
**googlepay_payment_request** | [**\Swagger\Client\Model\GooglepayPaymentRequestDto**](GooglepayPaymentRequestDto.md) |  | [optional] 
**paypal_client_id** | **string** |  | [optional] 
**paypal_payment_request** | **map[string,object]** |  | [optional] 
**paypal_auth_url** | **string** |  | [optional] 
**button_text** | **string** |  | [optional] 
**show_subscription_details** | **bool** |  | [optional] 
**show_terms** | **bool** |  | [optional] 
**card_on_file** | [**\Swagger\Client\Model\CardOnFile**](CardOnFile.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


