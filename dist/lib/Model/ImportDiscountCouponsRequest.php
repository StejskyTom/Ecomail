<?php
/**
 * ImportDiscountCouponsRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  StejskyTom\Ecomail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ecomail.cz v2.0 API
 *
 * Welcome to the **Ecomail.cz v2.0 API**! Our API provides a powerful and flexible way to integrate your applications with our email marketing and automation platform. This API allows you to manage email campaigns, subscribers, lists, and much more, through our RESTful endpoints.  ## Key Features  + **Subscriber Management**: Create, update, and manage subscribers.  + **List Management**: Organize contacts into lists for targeted campaigns.  + **Campaign Management**: Automate and send campaigns.  + **Transactional Emails**: Send and track transactional emails.  + **Analytics and Reporting**: Access insights into campaign performance.  + **Automation and Workflow**: Establish automated email sequences.  ## Getting Started  All endpoints use base url `https://api2.ecomailapp.cz/`  Before using the API, an **API key is required for authentication**. Obtain your API key from your Ecomail account settings _(Manage your account → Integrations → For developers → Copy API Key)_: ![How to find API Key](https://i.imgur.com/ZAJoFcN.png) ![How to find API Key](https://i.imgur.com/36U4Ted.png) ![How to find API Key](https://i.imgur.com/5JRbJrJ.png) ![How to find API Key](https://i.imgur.com/WHCWLMe.png)  **All API calls to the Ecomail.cz v2.0 API require authorization**. To authenticate requests, use a header with your API key.  ### Authentication Header  Every request must include a header named `key` that contains your API key.  `key: API_KEY`  ### Rate Limiting  The API allows up to **1000 calls per minute** per API key. Exceeding this limit will throttle the requests, returning a **429 status code** with a `Retry-After` header.
 *
 * The version of the OpenAPI document: 
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace StejskyTom\Ecomail\Model;

use \ArrayAccess;
use \StejskyTom\Ecomail\ObjectSerializer;

/**
 * ImportDiscountCouponsRequest Class Doc Comment
 *
 * @category Class
 * @package  StejskyTom\Ecomail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ImportDiscountCouponsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Import_discount_coupons_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'folder_id' => 'float',
        'codes' => 'string[]',
        'valid_until' => 'string',
        'update_existing' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'folder_id' => null,
        'codes' => null,
        'valid_until' => null,
        'update_existing' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'folder_id' => false,
        'codes' => false,
        'valid_until' => false,
        'update_existing' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'folder_id' => 'folderId',
        'codes' => 'codes',
        'valid_until' => 'valid_until',
        'update_existing' => 'update_existing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'folder_id' => 'setFolderId',
        'codes' => 'setCodes',
        'valid_until' => 'setValidUntil',
        'update_existing' => 'setUpdateExisting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'folder_id' => 'getFolderId',
        'codes' => 'getCodes',
        'valid_until' => 'getValidUntil',
        'update_existing' => 'getUpdateExisting'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('folder_id', $data ?? [], null);
        $this->setIfExists('codes', $data ?? [], null);
        $this->setIfExists('valid_until', $data ?? [], null);
        $this->setIfExists('update_existing', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets folder_id
     *
     * @return float|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param float|null $folder_id folder_id
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        if (is_null($folder_id)) {
            throw new \InvalidArgumentException('non-nullable folder_id cannot be null');
        }
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets codes
     *
     * @return string[]|null
     */
    public function getCodes()
    {
        return $this->container['codes'];
    }

    /**
     * Sets codes
     *
     * @param string[]|null $codes codes
     *
     * @return self
     */
    public function setCodes($codes)
    {
        if (is_null($codes)) {
            throw new \InvalidArgumentException('non-nullable codes cannot be null');
        }
        $this->container['codes'] = $codes;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return string|null
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param string|null $valid_until valid_until
     *
     * @return self
     */
    public function setValidUntil($valid_until)
    {
        if (is_null($valid_until)) {
            throw new \InvalidArgumentException('non-nullable valid_until cannot be null');
        }
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets update_existing
     *
     * @return bool|null
     */
    public function getUpdateExisting()
    {
        return $this->container['update_existing'];
    }

    /**
     * Sets update_existing
     *
     * @param bool|null $update_existing update_existing
     *
     * @return self
     */
    public function setUpdateExisting($update_existing)
    {
        if (is_null($update_existing)) {
            throw new \InvalidArgumentException('non-nullable update_existing cannot be null');
        }
        $this->container['update_existing'] = $update_existing;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


