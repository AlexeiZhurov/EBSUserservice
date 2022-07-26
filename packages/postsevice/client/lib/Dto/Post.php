<?php
/**
 * Post
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ensi\EBSPostClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API ServicesPost
 *
 * APi Post
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: mail@greensight.ru
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ensi\EBSPostClient\Dto;

use \ArrayAccess;
use \Ensi\EBSPostClient\ObjectSerializer;

/**
 * Post Class Doc Comment
 *
 * @category Class
 * @package  Ensi\EBSPostClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Post implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Post';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'preview' => 'string',
        'text' => 'string',
        'tags' => 'string',
        'user_id' => 'int',
        'rating' => 'int',
        'created_at' => '\DateTime',
        'voices' => '\Ensi\EBSPostClient\Dto\Voices[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'preview' => null,
        'text' => null,
        'tags' => null,
        'user_id' => null,
        'rating' => null,
        'created_at' => 'date-time',
        'voices' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => false,
        'title' => false,
        'preview' => false,
        'text' => false,
        'tags' => false,
        'user_id' => false,
        'rating' => false,
        'created_at' => false,
        'voices' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of property to nullable mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPINullables()
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array
     */
    public function getOpenAPINullablesSetToNull()
    {
        return $this->openAPINullablesSetToNull;
    }

    public function setOpenAPINullablesSetToNull($nullablesSetToNull)
    {
        $this->openAPINullablesSetToNull=$nullablesSetToNull;
        return $this;
    }

    /**
     * Checks if a property is nullable
     *
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        if (isset(self::$openAPINullables[$property])) {
            return self::$openAPINullables[$property];
        }

        return false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        if (in_array($property, $this->getOpenAPINullablesSetToNull())) {
            return true;
        }
        return false;
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
        'preview' => 'preview',
        'text' => 'text',
        'tags' => 'tags',
        'user_id' => 'user_id',
        'rating' => 'rating',
        'created_at' => 'created_at',
        'voices' => 'voices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'preview' => 'setPreview',
        'text' => 'setText',
        'tags' => 'setTags',
        'user_id' => 'setUserId',
        'rating' => 'setRating',
        'created_at' => 'setCreatedAt',
        'voices' => 'setVoices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'preview' => 'getPreview',
        'text' => 'getText',
        'tags' => 'getTags',
        'user_id' => 'getUserId',
        'rating' => 'getRating',
        'created_at' => 'getCreatedAt',
        'voices' => 'getVoices'
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
        $this->setIfExists('id', $data, null);
        $this->setIfExists('title', $data, null);
        $this->setIfExists('preview', $data, null);
        $this->setIfExists('text', $data, null);
        $this->setIfExists('tags', $data, null);
        $this->setIfExists('user_id', $data, null);
        $this->setIfExists('rating', $data, null);
        $this->setIfExists('created_at', $data, null);
        $this->setIfExists('voices', $data, null);
    }

    public function setIfExists(string $variableName, $fields, $defaultValue)
    {
        if (is_array($fields) && array_key_exists($variableName, $fields) && is_null($fields[$variableName]) && self::isNullable($variableName)) {
            array_push($this->openAPINullablesSetToNull, $variableName);
        }

        $this->container[$variableName] = isset($fields[$variableName]) ? $fields[$variableName] : $defaultValue;

        return $this;
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Идентификатор поста
     *
     * @return $this
     */
    public function setId($id)
    {


        /*if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }*/
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
     * @param string|null $title Название поста
     *
     * @return $this
     */
    public function setTitle($title)
    {


        /*if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }*/
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets preview
     *
     * @return string|null
     */
    public function getPreview()
    {
        return $this->container['preview'];
    }

    /**
     * Sets preview
     *
     * @param string|null $preview Превью поста
     *
     * @return $this
     */
    public function setPreview($preview)
    {


        /*if (is_null($preview)) {
            throw new \InvalidArgumentException('non-nullable preview cannot be null');
        }*/
        $this->container['preview'] = $preview;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Текст статьи
     *
     * @return $this
     */
    public function setText($text)
    {


        /*if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }*/
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags теги с статье
     *
     * @return $this
     */
    public function setTags($tags)
    {


        /*if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }*/
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id Идентификатор пользователя
     *
     * @return $this
     */
    public function setUserId($user_id)
    {


        /*if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }*/
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return int|null
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int|null $rating сумарный рейтинг поста
     *
     * @return $this
     */
    public function setRating($rating)
    {


        /*if (is_null($rating)) {
            throw new \InvalidArgumentException('non-nullable rating cannot be null');
        }*/
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {


        /*if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }*/
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets voices
     *
     * @return \Ensi\EBSPostClient\Dto\Voices[]|null
     */
    public function getVoices()
    {
        return $this->container['voices'];
    }

    /**
     * Sets voices
     *
     * @param \Ensi\EBSPostClient\Dto\Voices[]|null $voices voices
     *
     * @return $this
     */
    public function setVoices($voices)
    {


        /*if (is_null($voices)) {
            throw new \InvalidArgumentException('non-nullable voices cannot be null');
        }*/
        $this->container['voices'] = $voices;

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


