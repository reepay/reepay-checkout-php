<?php
/**
 * GooglepayPaymentRequestDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay Checkout API
 *
 * Reepay Checkout REST API
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GooglepayPaymentRequestDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GooglepayPaymentRequestDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GooglepayPaymentRequestDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auth_url' => 'string',
        'environment' => 'string',
        'api_version' => 'int',
        'api_version_minor' => 'int',
        'merchant_info' => '\Swagger\Client\Model\MerchantInfo',
        'transaction_info' => '\Swagger\Client\Model\TransactionInfo',
        'allowed_payment_methods' => '\Swagger\Client\Model\AllowedPaymentMethod[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auth_url' => null,
        'environment' => null,
        'api_version' => 'int32',
        'api_version_minor' => 'int32',
        'merchant_info' => null,
        'transaction_info' => null,
        'allowed_payment_methods' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'auth_url' => 'authUrl',
        'environment' => 'environment',
        'api_version' => 'apiVersion',
        'api_version_minor' => 'apiVersionMinor',
        'merchant_info' => 'merchantInfo',
        'transaction_info' => 'transactionInfo',
        'allowed_payment_methods' => 'allowedPaymentMethods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auth_url' => 'setAuthUrl',
        'environment' => 'setEnvironment',
        'api_version' => 'setApiVersion',
        'api_version_minor' => 'setApiVersionMinor',
        'merchant_info' => 'setMerchantInfo',
        'transaction_info' => 'setTransactionInfo',
        'allowed_payment_methods' => 'setAllowedPaymentMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auth_url' => 'getAuthUrl',
        'environment' => 'getEnvironment',
        'api_version' => 'getApiVersion',
        'api_version_minor' => 'getApiVersionMinor',
        'merchant_info' => 'getMerchantInfo',
        'transaction_info' => 'getTransactionInfo',
        'allowed_payment_methods' => 'getAllowedPaymentMethods'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['auth_url'] = isset($data['auth_url']) ? $data['auth_url'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['api_version'] = isset($data['api_version']) ? $data['api_version'] : null;
        $this->container['api_version_minor'] = isset($data['api_version_minor']) ? $data['api_version_minor'] : null;
        $this->container['merchant_info'] = isset($data['merchant_info']) ? $data['merchant_info'] : null;
        $this->container['transaction_info'] = isset($data['transaction_info']) ? $data['transaction_info'] : null;
        $this->container['allowed_payment_methods'] = isset($data['allowed_payment_methods']) ? $data['allowed_payment_methods'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets auth_url
     *
     * @return string
     */
    public function getAuthUrl()
    {
        return $this->container['auth_url'];
    }

    /**
     * Sets auth_url
     *
     * @param string $auth_url auth_url
     *
     * @return $this
     */
    public function setAuthUrl($auth_url)
    {
        $this->container['auth_url'] = $auth_url;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param string $environment environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return int
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param int $api_version api_version
     *
     * @return $this
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets api_version_minor
     *
     * @return int
     */
    public function getApiVersionMinor()
    {
        return $this->container['api_version_minor'];
    }

    /**
     * Sets api_version_minor
     *
     * @param int $api_version_minor api_version_minor
     *
     * @return $this
     */
    public function setApiVersionMinor($api_version_minor)
    {
        $this->container['api_version_minor'] = $api_version_minor;

        return $this;
    }

    /**
     * Gets merchant_info
     *
     * @return \Swagger\Client\Model\MerchantInfo
     */
    public function getMerchantInfo()
    {
        return $this->container['merchant_info'];
    }

    /**
     * Sets merchant_info
     *
     * @param \Swagger\Client\Model\MerchantInfo $merchant_info merchant_info
     *
     * @return $this
     */
    public function setMerchantInfo($merchant_info)
    {
        $this->container['merchant_info'] = $merchant_info;

        return $this;
    }

    /**
     * Gets transaction_info
     *
     * @return \Swagger\Client\Model\TransactionInfo
     */
    public function getTransactionInfo()
    {
        return $this->container['transaction_info'];
    }

    /**
     * Sets transaction_info
     *
     * @param \Swagger\Client\Model\TransactionInfo $transaction_info transaction_info
     *
     * @return $this
     */
    public function setTransactionInfo($transaction_info)
    {
        $this->container['transaction_info'] = $transaction_info;

        return $this;
    }

    /**
     * Gets allowed_payment_methods
     *
     * @return \Swagger\Client\Model\AllowedPaymentMethod[]
     */
    public function getAllowedPaymentMethods()
    {
        return $this->container['allowed_payment_methods'];
    }

    /**
     * Sets allowed_payment_methods
     *
     * @param \Swagger\Client\Model\AllowedPaymentMethod[] $allowed_payment_methods allowed_payment_methods
     *
     * @return $this
     */
    public function setAllowedPaymentMethods($allowed_payment_methods)
    {
        $this->container['allowed_payment_methods'] = $allowed_payment_methods;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

