# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Transaction id assigned by Reepay | 
**state** | **string** | State of the transaction, one of the following: &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;authorized&#x60;, &#x60;settled&#x60;, &#x60;refunded&#x60;, &#x60;failed&#x60;, &#x60;cancelled&#x60; | 
**invoice** | **string** | Invoice id | 
**type** | **string** | Transaction type, one of the following: &#39;settle&#39;, &#39;refund&#39;, &#x60;authorization&#x60; | 
**amount** | **int** | The transaction amount | 
**settled** | [**\DateTime**](\DateTime.md) | When the transaction was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**authorized** | [**\DateTime**](\DateTime.md) | When the transaction was authorized, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**failed** | [**\DateTime**](\DateTime.md) | When the transaction failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**refunded** | [**\DateTime**](\DateTime.md) | When the transaction was refunded, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Date when the transaction was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | 
**card_transaction** | [**\Swagger\Client\Model\CardTransaction**](CardTransaction.md) | Specifics in case of card transaction | [optional] 
**mpo_transaction** | [**\Swagger\Client\Model\CardTransaction**](CardTransaction.md) | Specifics in case of MobilePay Online transaction | [optional] 
**applepay_transaction** | [**\Swagger\Client\Model\CardTransaction**](CardTransaction.md) | Specifics in case of ApplePay transaction | [optional] 
**googlepay_transaction** | [**\Swagger\Client\Model\CardTransaction**](CardTransaction.md) | Specifics in case of GooglePay transaction | [optional] 
**manual_transaction** | [**\Swagger\Client\Model\ManualTransaction**](ManualTransaction.md) | Specifics in case of manual transaction | [optional] 
**viabill_transaction** | [**\Swagger\Client\Model\ViabillTransaction**](ViabillTransaction.md) | Specifics in case of ViaBill transaction | [optional] 
**resurs_transaction** | [**\Swagger\Client\Model\ResursTransaction**](ResursTransaction.md) | Specifics in case of Resurs Bank transaction | [optional] 
**paypal_transaction** | [**\Swagger\Client\Model\PaypalTransaction**](PaypalTransaction.md) | Specifics in case of PayPal transaction | [optional] 
**pgw_transaction** | [**\Swagger\Client\Model\PgwTransaction**](PgwTransaction.md) | Specifics in case of generic payment gateway transaction | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


