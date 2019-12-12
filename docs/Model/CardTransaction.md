# CardTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card** | [**\Swagger\Client\Model\Card**](Card.md) | Saved card used for transaction. Only present if a saved card was used. | [optional] 
**error** | **string** | Error code if failed. See [transaction errors](https://reference.reepay.com/api/#transaction-errors). | [optional] 
**fingerprint** | **string** | Uniquely identifies this particular card number | [optional] 
**provider** | **string** | Acquirer or payment gateway used: &#x60;reepay&#x60;, &#x60;clearhaus&#x60;, &#x60;nets&#x60;, &#x60;dibs&#x60;, &#x60;stripe&#x60;, &#x60;quickpay&#x60;, &#x60;epay&#x60;, &#x60;test&#x60; | [optional] 
**ref_transaction** | **string** | Id of a possible referenced transaction | [optional] 
**gw_id** | **string** | Gateway id for card | [optional] 
**last_failed** | [**\DateTime**](\DateTime.md) | When the card transaction last failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**first_failed** | [**\DateTime**](\DateTime.md) | When the card transaction first failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format. | [optional] 
**error_state** | **string** | Error state if failed: &#x60;pending&#x60;, &#x60;soft_declined&#x60;, &#x60;hard_declined&#x60; or &#x60;processing_error&#x60; | [optional] 
**card_type** | **string** | Card type: &#x60;unknown&#x60;, &#x60;visa&#x60;, &#x60;mc&#x60;, &#x60;dankort&#x60;, &#x60;visa_dk&#x60;, &#x60;ffk&#x60;, &#x60;visa_elec&#x60;, &#x60;maestro&#x60;, &#x60;laser&#x60;, &#x60;amex&#x60;, &#x60;diners&#x60;, &#x60;discover&#x60; or &#x60;jcb&#x60; | 
**exp_date** | **string** | Card expire date on form MM-YY | [optional] 
**masked_card** | **string** | Masked card number | [optional] 
**strong_authentication_status** | **string** | Status for strong customer authentication | [optional] 
**acquirer_code** | **string** | Acquirer error code in case of error | [optional] 
**acquirer_message** | **string** | Acquirer message in case of error | [optional] 
**acquirer_reference** | **string** | Acquirer reference to transaction. E.g. Nets order id or Clearhaus reference. | [optional] 
**text_on_statement** | **string** | Resulting text on bank statement if known | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


