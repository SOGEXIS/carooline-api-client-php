<?php
/**
 * Invoice
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'print_href' => 'string',
'number' => 'string',
'date_invoice' => 'string',
'client_order_ref' => 'string',
'partner' => '\Carooline\Model\Partner',
'id' => 'int',
'amount_total' => 'float',
'amount_untaxed' => 'float',
'amount_tax' => 'float',
'state' => 'string',
'type' => 'string',
'invoice_line' => '\Carooline\Model\InvoiceLine[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'print_href' => null,
'number' => null,
'date_invoice' => null,
'client_order_ref' => null,
'partner' => null,
'id' => null,
'amount_total' => 'float',
'amount_untaxed' => 'float',
'amount_tax' => 'float',
'state' => null,
'type' => null,
'invoice_line' => null    ];

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
        'print_href' => 'print_href',
'number' => 'number',
'date_invoice' => 'date_invoice',
'client_order_ref' => 'client_order_ref',
'partner' => 'partner',
'id' => 'id',
'amount_total' => 'amount_total',
'amount_untaxed' => 'amount_untaxed',
'amount_tax' => 'amount_tax',
'state' => 'state',
'type' => 'type',
'invoice_line' => 'invoice_line'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'print_href' => 'setPrintHref',
'number' => 'setNumber',
'date_invoice' => 'setDateInvoice',
'client_order_ref' => 'setClientOrderRef',
'partner' => 'setPartner',
'id' => 'setId',
'amount_total' => 'setAmountTotal',
'amount_untaxed' => 'setAmountUntaxed',
'amount_tax' => 'setAmountTax',
'state' => 'setState',
'type' => 'setType',
'invoice_line' => 'setInvoiceLine'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'print_href' => 'getPrintHref',
'number' => 'getNumber',
'date_invoice' => 'getDateInvoice',
'client_order_ref' => 'getClientOrderRef',
'partner' => 'getPartner',
'id' => 'getId',
'amount_total' => 'getAmountTotal',
'amount_untaxed' => 'getAmountUntaxed',
'amount_tax' => 'getAmountTax',
'state' => 'getState',
'type' => 'getType',
'invoice_line' => 'getInvoiceLine'    ];

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
        $this->container['print_href'] = isset($data['print_href']) ? $data['print_href'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['date_invoice'] = isset($data['date_invoice']) ? $data['date_invoice'] : null;
        $this->container['client_order_ref'] = isset($data['client_order_ref']) ? $data['client_order_ref'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['amount_total'] = isset($data['amount_total']) ? $data['amount_total'] : null;
        $this->container['amount_untaxed'] = isset($data['amount_untaxed']) ? $data['amount_untaxed'] : null;
        $this->container['amount_tax'] = isset($data['amount_tax']) ? $data['amount_tax'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['invoice_line'] = isset($data['invoice_line']) ? $data['invoice_line'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['partner'] === null) {
            $invalidProperties[] = "'partner' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets print_href
     *
     * @return string
     */
    public function getPrintHref()
    {
        return $this->container['print_href'];
    }

    /**
     * Sets print_href
     *
     * @param string $print_href print_href
     *
     * @return $this
     */
    public function setPrintHref($print_href)
    {
        $this->container['print_href'] = $print_href;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets date_invoice
     *
     * @return string
     */
    public function getDateInvoice()
    {
        return $this->container['date_invoice'];
    }

    /**
     * Sets date_invoice
     *
     * @param string $date_invoice date_invoice
     *
     * @return $this
     */
    public function setDateInvoice($date_invoice)
    {
        $this->container['date_invoice'] = $date_invoice;

        return $this;
    }

    /**
     * Gets client_order_ref
     *
     * @return string
     */
    public function getClientOrderRef()
    {
        return $this->container['client_order_ref'];
    }

    /**
     * Sets client_order_ref
     *
     * @param string $client_order_ref client_order_ref
     *
     * @return $this
     */
    public function setClientOrderRef($client_order_ref)
    {
        $this->container['client_order_ref'] = $client_order_ref;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return \Carooline\Model\Partner
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \Carooline\Model\Partner $partner partner
     *
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

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
     * Gets amount_total
     *
     * @return float
     */
    public function getAmountTotal()
    {
        return $this->container['amount_total'];
    }

    /**
     * Sets amount_total
     *
     * @param float $amount_total amount_total
     *
     * @return $this
     */
    public function setAmountTotal($amount_total)
    {
        $this->container['amount_total'] = $amount_total;

        return $this;
    }

    /**
     * Gets amount_untaxed
     *
     * @return float
     */
    public function getAmountUntaxed()
    {
        return $this->container['amount_untaxed'];
    }

    /**
     * Sets amount_untaxed
     *
     * @param float $amount_untaxed amount_untaxed
     *
     * @return $this
     */
    public function setAmountUntaxed($amount_untaxed)
    {
        $this->container['amount_untaxed'] = $amount_untaxed;

        return $this;
    }

    /**
     * Gets amount_tax
     *
     * @return float
     */
    public function getAmountTax()
    {
        return $this->container['amount_tax'];
    }

    /**
     * Sets amount_tax
     *
     * @param float $amount_tax amount_tax
     *
     * @return $this
     */
    public function setAmountTax($amount_tax)
    {
        $this->container['amount_tax'] = $amount_tax;

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
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets invoice_line
     *
     * @return \Carooline\Model\InvoiceLine[]
     */
    public function getInvoiceLine()
    {
        return $this->container['invoice_line'];
    }

    /**
     * Sets invoice_line
     *
     * @param \Carooline\Model\InvoiceLine[] $invoice_line invoice_line
     *
     * @return $this
     */
    public function setInvoiceLine($invoice_line)
    {
        $this->container['invoice_line'] = $invoice_line;

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