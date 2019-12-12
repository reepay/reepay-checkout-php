# SignupPage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plan** | **string** | Subscription plan | 
**locale** | **string** | Optional locale. E.g. &#x60;en_GB&#x60;, &#x60;da_DK&#x60;, &#x60;es_ES&#x60;. Defaults to configuration locale or account locale. | [optional] 
**email** | **string** | Field configuration | [optional] 
**phone** | **string** | Field configuration | [optional] 
**address** | **string** | Field configuration | [optional] 
**company** | **string** | Field configuration | [optional] 
**city** | **string** | Field configuration | [optional] 
**coupon** | **string** | Field configuration | [optional] 
**id** | **string** | Checkout sign-up page id | 
**url** | **string** | Checkout sign-up page url | 
**created** | [**\DateTime**](\DateTime.md) | Created date | [optional] 
**accept_url** | **string** | Redirect to this url after successful signup | [optional] 
**cancel_url** | **string** | Redirect to this url if the customer cancels sign-up | [optional] 
**payment_methods** | **string[]** | Optional list of payment methods to present to customer. Format: &lt;payment_methods&gt; &#x3D; list of &lt;payment_method&gt; &lt;payment_method&gt;  &#x3D; [sca-|nosca-]&lt;payment_name&gt; &lt;payment_name&gt;    &#x3D; The id of payment method, e.g. dankort See https://docs.reepay.com/docs/checkout-payment-methods for full documentation | [optional] 
**subscription_configuration** | [**\Swagger\Client\Model\CreateSubscription**](CreateSubscription.md) | Configuration configuration | [optional] 
**first_name** | **string** | Field configuration | [optional] 
**last_name** | **string** | Field configuration | [optional] 
**postal_code** | **string** | Field configuration | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


