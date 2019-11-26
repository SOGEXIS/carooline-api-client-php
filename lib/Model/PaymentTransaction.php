<?php
/**
 * PaymentTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sale REST services
 *
 * Get or Update Sales
 *
 * OpenAPI spec version: 0.1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Carooline\Model;

use \ArrayAccess;
use \Carooline\ObjectSerializer;

/**
 * PaymentTransaction Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'state_message' => 'string',
'reference' => 'string',
'order_id' => 'int',
'date_create' => 'string',
'currency' => 'string',
'partner_id' => 'int',
'id' => 'int',
'acquirer' => 'string',
'date_validate' => 'string',
'state' => 'string',
'amount' => 'float',
'acquirer_reference' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'state_message' => null,
'reference' => null,
'order_id' => null,
'date_create' => null,
'currency' => null,
'partner_id' => null,
'id' => null,
'acquirer' => null,
'date_validate' => null,
'state' => null,
'amount' => 'float',
'acquirer_reference' => null    ];

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
        'state_message' => 'state_message',
'reference' => 'reference',
'order_id' => 'order_id',
'date_create' => 'date_create',
'currency' => 'currency',
'partner_id' => 'partner_id',
'id' => 'id',
'acquirer' => 'acquirer',
'date_validate' => 'date_validate',
'state' => 'state',
'amount' => 'amount',
'acquirer_reference' => 'acquirer_reference'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state_message' => 'setStateMessage',
'reference' => 'setReference',
'order_id' => 'setOrderId',
'date_create' => 'setDateCreate',
'currency' => 'setCurrency',
'partner_id' => 'setPartnerId',
'id' => 'setId',
'acquirer' => 'setAcquirer',
'date_validate' => 'setDateValidate',
'state' => 'setState',
'amount' => 'setAmount',
'acquirer_reference' => 'setAcquirerReference'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state_message' => 'getStateMessage',
'reference' => 'getReference',
'order_id' => 'getOrderId',
'date_create' => 'getDateCreate',
'currency' => 'getCurrency',
'partner_id' => 'getPartnerId',
'id' => 'getId',
'acquirer' => 'getAcquirer',
'date_validate' => 'getDateValidate',
'state' => 'getState',
'amount' => 'getAmount',
'acquirer_reference' => 'getAcquirerReference'    ];

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

    const CURRENCY_EUR = 'EUR';
const CURRENCY_USD = 'USD';
const ACQUIRER_TRANSFER = 'Virement bancaire';
const ACQUIRER_PAYBOX = 'Paybox';
const ACQUIRER_PAYPAL = 'Paypal';
const ACQUIRER_PAYBOX_TEST = 'Paybox Test';
const ACQUIRER_PAYPAL_TEST = 'Paypal Test';
const STATE_DRAFT = 'draft';
const STATE_PENDING = 'pending';
const STATE_DONE = 'done';
const STATE_ERROR = 'error';
const STATE_CANCEL = 'cancel';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_EUR,
self::CURRENCY_USD,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcquirerAllowableValues()
    {
        return [
            self::ACQUIRER_TRANSFER,
            self::ACQUIRER_PAYBOX,
            self::ACQUIRER_PAYPAL,
            self::ACQUIRER_PAYBOX_TEST,
            self::ACQUIRER_PAYPAL_TEST
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
self::STATE_PENDING,
self::STATE_DONE,
self::STATE_ERROR,
self::STATE_CANCEL,        ];
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
        $this->container['state_message'] = isset($data['state_message']) ? $data['state_message'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['date_create'] = isset($data['date_create']) ? $data['date_create'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : 'EUR';
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['acquirer'] = isset($data['acquirer']) ? $data['acquirer'] : null;
        $this->container['date_validate'] = isset($data['date_validate']) ? $data['date_validate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['acquirer_reference'] = isset($data['acquirer_reference']) ? $data['acquirer_reference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getAcquirerAllowableValues();
        if (!is_null($this->container['acquirer']) && !in_array($this->container['acquirer'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'acquirer', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets state_message
     *
     * @return string
     */
    public function getStateMessage()
    {
        return $this->container['state_message'];
    }

    /**
     * Sets state_message
     *
     * @param string $state_message state_message
     *
     * @return $this
     */
    public function setStateMessage($state_message)
    {
        $this->container['state_message'] = $state_message;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets date_create
     *
     * @return string
     */
    public function getDateCreate()
    {
        return $this->container['date_create'];
    }

    /**
     * Sets date_create
     *
     * @param string $date_create date_create
     *
     * @return $this
     */
    public function setDateCreate($date_create)
    {
        $this->container['date_create'] = $date_create;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($currency) && !in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int $partner_id partner_id
     *
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets acquirer
     *
     * @return string
     */
    public function getAcquirer()
    {
        return $this->container['acquirer'];
    }

    /**
     * Sets acquirer
     *
     * @param string $acquirer acquirer
     *
     * @return $this
     */
    public function setAcquirer($acquirer)
    {
        $allowedValues = $this->getAcquirerAllowableValues();
        if (!is_null($acquirer) && !in_array($acquirer, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'acquirer', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['acquirer'] = $acquirer;

        return $this;
    }

    /**
     * Gets date_validate
     *
     * @return string
     */
    public function getDateValidate()
    {
        return $this->container['date_validate'];
    }

    /**
     * Sets date_validate
     *
     * @param string $date_validate date_validate
     *
     * @return $this
     */
    public function setDateValidate($date_validate)
    {
        $this->container['date_validate'] = $date_validate;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets acquirer_reference
     *
     * @return string
     */
    public function getAcquirerReference()
    {
        return $this->container['acquirer_reference'];
    }

    /**
     * Sets acquirer_reference
     *
     * @param string $acquirer_reference acquirer_reference
     *
     * @return $this
     */
    public function setAcquirerReference($acquirer_reference)
    {
        $this->container['acquirer_reference'] = $acquirer_reference;

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
