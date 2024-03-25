<?php
/**
 * SendCampaign200ResponseInner
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
 * SendCampaign200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  StejskyTom\Ecomail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SendCampaign200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Send_campaign_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'title' => 'string',
        'from_name' => 'string',
        'from_email' => 'string',
        'reply_to' => 'string',
        'subject' => 'string',
        'recepient_lists' => 'float[]',
        'template_type' => 'string',
        'campaign_type' => 'string',
        'updated_at' => 'string',
        'created_at' => 'string',
        'archive_url' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'from_name' => null,
        'from_email' => null,
        'reply_to' => null,
        'subject' => null,
        'recepient_lists' => null,
        'template_type' => null,
        'campaign_type' => null,
        'updated_at' => null,
        'created_at' => null,
        'archive_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'title' => false,
        'from_name' => false,
        'from_email' => false,
        'reply_to' => false,
        'subject' => false,
        'recepient_lists' => false,
        'template_type' => false,
        'campaign_type' => false,
        'updated_at' => false,
        'created_at' => false,
        'archive_url' => true
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
        'id' => 'id',
        'title' => 'title',
        'from_name' => 'from_name',
        'from_email' => 'from_email',
        'reply_to' => 'reply_to',
        'subject' => 'subject',
        'recepient_lists' => 'recepient_lists',
        'template_type' => 'template_type',
        'campaign_type' => 'campaign_type',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'archive_url' => 'archive_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'from_name' => 'setFromName',
        'from_email' => 'setFromEmail',
        'reply_to' => 'setReplyTo',
        'subject' => 'setSubject',
        'recepient_lists' => 'setRecepientLists',
        'template_type' => 'setTemplateType',
        'campaign_type' => 'setCampaignType',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'archive_url' => 'setArchiveUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'from_name' => 'getFromName',
        'from_email' => 'getFromEmail',
        'reply_to' => 'getReplyTo',
        'subject' => 'getSubject',
        'recepient_lists' => 'getRecepientLists',
        'template_type' => 'getTemplateType',
        'campaign_type' => 'getCampaignType',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'archive_url' => 'getArchiveUrl'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('from_name', $data ?? [], null);
        $this->setIfExists('from_email', $data ?? [], null);
        $this->setIfExists('reply_to', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('recepient_lists', $data ?? [], null);
        $this->setIfExists('template_type', $data ?? [], null);
        $this->setIfExists('campaign_type', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('archive_url', $data ?? [], null);
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
     * Gets id
     *
     * @return float|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string|null
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string|null $from_name from_name
     *
     * @return self
     */
    public function setFromName($from_name)
    {
        if (is_null($from_name)) {
            throw new \InvalidArgumentException('non-nullable from_name cannot be null');
        }
        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string|null $from_email from_email
     *
     * @return self
     */
    public function setFromEmail($from_email)
    {
        if (is_null($from_email)) {
            throw new \InvalidArgumentException('non-nullable from_email cannot be null');
        }
        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets reply_to
     *
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param string|null $reply_to reply_to
     *
     * @return self
     */
    public function setReplyTo($reply_to)
    {
        if (is_null($reply_to)) {
            throw new \InvalidArgumentException('non-nullable reply_to cannot be null');
        }
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets recepient_lists
     *
     * @return float[]|null
     */
    public function getRecepientLists()
    {
        return $this->container['recepient_lists'];
    }

    /**
     * Sets recepient_lists
     *
     * @param float[]|null $recepient_lists recepient_lists
     *
     * @return self
     */
    public function setRecepientLists($recepient_lists)
    {
        if (is_null($recepient_lists)) {
            throw new \InvalidArgumentException('non-nullable recepient_lists cannot be null');
        }
        $this->container['recepient_lists'] = $recepient_lists;

        return $this;
    }

    /**
     * Gets template_type
     *
     * @return string|null
     */
    public function getTemplateType()
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     *
     * @param string|null $template_type template_type
     *
     * @return self
     */
    public function setTemplateType($template_type)
    {
        if (is_null($template_type)) {
            throw new \InvalidArgumentException('non-nullable template_type cannot be null');
        }
        $this->container['template_type'] = $template_type;

        return $this;
    }

    /**
     * Gets campaign_type
     *
     * @return string|null
     */
    public function getCampaignType()
    {
        return $this->container['campaign_type'];
    }

    /**
     * Sets campaign_type
     *
     * @param string|null $campaign_type campaign_type
     *
     * @return self
     */
    public function setCampaignType($campaign_type)
    {
        if (is_null($campaign_type)) {
            throw new \InvalidArgumentException('non-nullable campaign_type cannot be null');
        }
        $this->container['campaign_type'] = $campaign_type;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets archive_url
     *
     * @return mixed|null
     */
    public function getArchiveUrl()
    {
        return $this->container['archive_url'];
    }

    /**
     * Sets archive_url
     *
     * @param mixed|null $archive_url archive_url
     *
     * @return self
     */
    public function setArchiveUrl($archive_url)
    {
        if (is_null($archive_url)) {
            array_push($this->openAPINullablesSetToNull, 'archive_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('archive_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['archive_url'] = $archive_url;

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


