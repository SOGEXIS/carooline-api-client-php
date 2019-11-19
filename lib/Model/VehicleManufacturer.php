<?php
/**
 * VehicleManufacturer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Vehicles REST services
 *
 * Get vehicle infos by Manufacturer/Model/Type
 *
 * OpenAPI spec version: 0.0.0.1
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
 * VehicleManufacturer Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VehicleManufacturer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VehicleManufacturer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_vgl' => 'bool',
'sequence' => 'int',
'tecdoc_supplier_ref' => 'string',
'full_picture_url' => 'string',
'active' => 'bool',
'id' => 'int',
'name' => 'string',
'note' => 'string',
'tecdoc_ref' => 'string',
'is_favorite' => 'bool',
'is_pkw' => 'bool',
'is_nkw' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_vgl' => null,
'sequence' => null,
'tecdoc_supplier_ref' => null,
'full_picture_url' => null,
'active' => null,
'id' => null,
'name' => null,
'note' => null,
'tecdoc_ref' => null,
'is_favorite' => null,
'is_pkw' => null,
'is_nkw' => null    ];

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
        'is_vgl' => 'is_vgl',
'sequence' => 'sequence',
'tecdoc_supplier_ref' => 'tecdoc_supplier_ref',
'full_picture_url' => 'full_picture_url',
'active' => 'active',
'id' => 'id',
'name' => 'name',
'note' => 'note',
'tecdoc_ref' => 'tecdoc_ref',
'is_favorite' => 'is_favorite',
'is_pkw' => 'is_pkw',
'is_nkw' => 'is_nkw'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_vgl' => 'setIsVgl',
'sequence' => 'setSequence',
'tecdoc_supplier_ref' => 'setTecdocSupplierRef',
'full_picture_url' => 'setFullPictureUrl',
'active' => 'setActive',
'id' => 'setId',
'name' => 'setName',
'note' => 'setNote',
'tecdoc_ref' => 'setTecdocRef',
'is_favorite' => 'setIsFavorite',
'is_pkw' => 'setIsPkw',
'is_nkw' => 'setIsNkw'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_vgl' => 'getIsVgl',
'sequence' => 'getSequence',
'tecdoc_supplier_ref' => 'getTecdocSupplierRef',
'full_picture_url' => 'getFullPictureUrl',
'active' => 'getActive',
'id' => 'getId',
'name' => 'getName',
'note' => 'getNote',
'tecdoc_ref' => 'getTecdocRef',
'is_favorite' => 'getIsFavorite',
'is_pkw' => 'getIsPkw',
'is_nkw' => 'getIsNkw'    ];

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
        $this->container['is_vgl'] = isset($data['is_vgl']) ? $data['is_vgl'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['tecdoc_supplier_ref'] = isset($data['tecdoc_supplier_ref']) ? $data['tecdoc_supplier_ref'] : null;
        $this->container['full_picture_url'] = isset($data['full_picture_url']) ? $data['full_picture_url'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['tecdoc_ref'] = isset($data['tecdoc_ref']) ? $data['tecdoc_ref'] : null;
        $this->container['is_favorite'] = isset($data['is_favorite']) ? $data['is_favorite'] : null;
        $this->container['is_pkw'] = isset($data['is_pkw']) ? $data['is_pkw'] : null;
        $this->container['is_nkw'] = isset($data['is_nkw']) ? $data['is_nkw'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_vgl'] === null) {
            $invalidProperties[] = "'is_vgl' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['is_pkw'] === null) {
            $invalidProperties[] = "'is_pkw' can't be null";
        }
        if ($this->container['is_nkw'] === null) {
            $invalidProperties[] = "'is_nkw' can't be null";
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
     * Gets is_vgl
     *
     * @return bool
     */
    public function getIsVgl()
    {
        return $this->container['is_vgl'];
    }

    /**
     * Sets is_vgl
     *
     * @param bool $is_vgl is_vgl
     *
     * @return $this
     */
    public function setIsVgl($is_vgl)
    {
        $this->container['is_vgl'] = $is_vgl;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets tecdoc_supplier_ref
     *
     * @return string
     */
    public function getTecdocSupplierRef()
    {
        return $this->container['tecdoc_supplier_ref'];
    }

    /**
     * Sets tecdoc_supplier_ref
     *
     * @param string $tecdoc_supplier_ref tecdoc_supplier_ref
     *
     * @return $this
     */
    public function setTecdocSupplierRef($tecdoc_supplier_ref)
    {
        $this->container['tecdoc_supplier_ref'] = $tecdoc_supplier_ref;

        return $this;
    }

    /**
     * Gets full_picture_url
     *
     * @return string
     */
    public function getFullPictureUrl()
    {
        return $this->container['full_picture_url'];
    }

    /**
     * Sets full_picture_url
     *
     * @param string $full_picture_url full_picture_url
     *
     * @return $this
     */
    public function setFullPictureUrl($full_picture_url)
    {
        $this->container['full_picture_url'] = $full_picture_url;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets tecdoc_ref
     *
     * @return string
     */
    public function getTecdocRef()
    {
        return $this->container['tecdoc_ref'];
    }

    /**
     * Sets tecdoc_ref
     *
     * @param string $tecdoc_ref tecdoc_ref
     *
     * @return $this
     */
    public function setTecdocRef($tecdoc_ref)
    {
        $this->container['tecdoc_ref'] = $tecdoc_ref;

        return $this;
    }

    /**
     * Gets is_favorite
     *
     * @return bool
     */
    public function getIsFavorite()
    {
        return $this->container['is_favorite'];
    }

    /**
     * Sets is_favorite
     *
     * @param bool $is_favorite is_favorite
     *
     * @return $this
     */
    public function setIsFavorite($is_favorite)
    {
        $this->container['is_favorite'] = $is_favorite;

        return $this;
    }

    /**
     * Gets is_pkw
     *
     * @return bool
     */
    public function getIsPkw()
    {
        return $this->container['is_pkw'];
    }

    /**
     * Sets is_pkw
     *
     * @param bool $is_pkw is_pkw
     *
     * @return $this
     */
    public function setIsPkw($is_pkw)
    {
        $this->container['is_pkw'] = $is_pkw;

        return $this;
    }

    /**
     * Gets is_nkw
     *
     * @return bool
     */
    public function getIsNkw()
    {
        return $this->container['is_nkw'];
    }

    /**
     * Sets is_nkw
     *
     * @param bool $is_nkw is_nkw
     *
     * @return $this
     */
    public function setIsNkw($is_nkw)
    {
        $this->container['is_nkw'] = $is_nkw;

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
