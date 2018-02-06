<?php
/**
 * MessageSentResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Telstra_Messaging
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Telstra Messaging API
 *
 * The Telstra SMS Messaging API allows your applications to send and receive SMS text messages from Australia's leading network operator.  It also allows your application to track the delivery status of both sent and received SMS messages.
 *
 * OpenAPI spec version: 2.2.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Telstra_Messaging\Model;

use \ArrayAccess;
use \Telstra_Messaging\ObjectSerializer;

/**
 * MessageSentResponse Class Doc Comment
 *
 * @category Class
 * @package  Telstra_Messaging
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessageSentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MessageSentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'messages' => '\Telstra_Messaging\Model\Message[]',
        'message_type' => 'string',
        'number_segments' => 'int',
        'number_national_destinations' => 'int',
        'number_international_destinations' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'messages' => null,
        'message_type' => null,
        'number_segments' => 'int32',
        'number_national_destinations' => 'int32',
        'number_international_destinations' => 'int32'
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
        'messages' => 'messages',
        'message_type' => 'messageType',
        'number_segments' => 'numberSegments',
        'number_national_destinations' => 'NumberNationalDestinations',
        'number_international_destinations' => 'NumberInternationalDestinations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'messages' => 'setMessages',
        'message_type' => 'setMessageType',
        'number_segments' => 'setNumberSegments',
        'number_national_destinations' => 'setNumberNationalDestinations',
        'number_international_destinations' => 'setNumberInternationalDestinations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'messages' => 'getMessages',
        'message_type' => 'getMessageType',
        'number_segments' => 'getNumberSegments',
        'number_national_destinations' => 'getNumberNationalDestinations',
        'number_international_destinations' => 'getNumberInternationalDestinations'
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
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['message_type'] = isset($data['message_type']) ? $data['message_type'] : null;
        $this->container['number_segments'] = isset($data['number_segments']) ? $data['number_segments'] : null;
        $this->container['number_national_destinations'] = isset($data['number_national_destinations']) ? $data['number_national_destinations'] : null;
        $this->container['number_international_destinations'] = isset($data['number_international_destinations']) ? $data['number_international_destinations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['messages'] === null) {
            $invalidProperties[] = "'messages' can't be null";
        }
        if ($this->container['message_type'] === null) {
            $invalidProperties[] = "'message_type' can't be null";
        }
        if ($this->container['number_segments'] === null) {
            $invalidProperties[] = "'number_segments' can't be null";
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

        if ($this->container['messages'] === null) {
            return false;
        }
        if ($this->container['message_type'] === null) {
            return false;
        }
        if ($this->container['number_segments'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets messages
     *
     * @return \Telstra_Messaging\Model\Message[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Telstra_Messaging\Model\Message[] $messages 
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param string $message_type 
     *
     * @return $this
     */
    public function setMessageType($message_type)
    {
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets number_segments
     *
     * @return int
     */
    public function getNumberSegments()
    {
        return $this->container['number_segments'];
    }

    /**
     * Sets number_segments
     *
     * @param int $number_segments 
     *
     * @return $this
     */
    public function setNumberSegments($number_segments)
    {
        $this->container['number_segments'] = $number_segments;

        return $this;
    }

    /**
     * Gets number_national_destinations
     *
     * @return int
     */
    public function getNumberNationalDestinations()
    {
        return $this->container['number_national_destinations'];
    }

    /**
     * Sets number_national_destinations
     *
     * @param int $number_national_destinations 
     *
     * @return $this
     */
    public function setNumberNationalDestinations($number_national_destinations)
    {
        $this->container['number_national_destinations'] = $number_national_destinations;

        return $this;
    }

    /**
     * Gets number_international_destinations
     *
     * @return int
     */
    public function getNumberInternationalDestinations()
    {
        return $this->container['number_international_destinations'];
    }

    /**
     * Sets number_international_destinations
     *
     * @param int $number_international_destinations 
     *
     * @return $this
     */
    public function setNumberInternationalDestinations($number_international_destinations)
    {
        $this->container['number_international_destinations'] = $number_international_destinations;

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

