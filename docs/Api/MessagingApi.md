# Telstra_Messaging\MessagingApi

All URIs are relative to *https://tapi.telstra.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMMSStatus**](MessagingApi.md#getMMSStatus) | **GET** /messages/mms/{messageid}/status | Get MMS Status
[**getSMSStatus**](MessagingApi.md#getSMSStatus) | **GET** /messages/sms/{messageId}/status | Get SMS Status
[**mMSHealthCheck**](MessagingApi.md#mMSHealthCheck) | **GET** /messages/mms/heathcheck | MMS Health Check
[**retrieveMMSReplies**](MessagingApi.md#retrieveMMSReplies) | **GET** /messages/mms | Retrieve MMS Replies
[**retrieveSMSReplies**](MessagingApi.md#retrieveSMSReplies) | **GET** /messages/sms | Retrieve SMS Replies
[**sMSHealthCheck**](MessagingApi.md#sMSHealthCheck) | **GET** /messages/sms/heathcheck | SMS Health Check
[**sMSMulti**](MessagingApi.md#sMSMulti) | **POST** /messages/sms/multi | Send Multiple SMS
[**sendMMS**](MessagingApi.md#sendMMS) | **POST** /messages/mms | Send MMS
[**sendSMS**](MessagingApi.md#sendSMS) | **POST** /messages/sms | Send SMS



## getMMSStatus

> \Telstra_Messaging\Model\OutboundPollResponse[] getMMSStatus($messageid)

Get MMS Status

Get MMS Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messageid = 'messageid_example'; // string | Unique identifier of a message - it is the value returned from a previous POST call to https://tapi.telstra.com/v2/messages/mms

try {
    $result = $apiInstance->getMMSStatus($messageid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMMSStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messageid** | **string**| Unique identifier of a message - it is the value returned from a previous POST call to https://tapi.telstra.com/v2/messages/mms |

### Return type

[**\Telstra_Messaging\Model\OutboundPollResponse[]**](../Model/OutboundPollResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSMSStatus

> \Telstra_Messaging\Model\OutboundPollResponse[] getSMSStatus($message_id)

Get SMS Status

If no notification URL has been specified, it is possible to poll for the message status.  Note that the `MessageId` that appears in the URL must be URL encoded. Just copying the `MessageId` as it was supplied when submitting the message may not work.  # SMS Status with Notification URL  When a message has reached its final state, the API will send a POST to the URL that has been previously specified.  <pre><code class=\"language-sh\">{     \"to\": \"+61418123456\",     \"sentTimestamp\": \"2017-03-17T10:05:22+10:00\",     \"receivedTimestamp\": \"2017-03-17T10:05:23+10:00\",     \"messageId\": \"1234567890ABCDEFGHIJKLNOPQRSTUVW\",     \"deliveryStatus\": \"DELIVRD\"   } </code></pre>  The fields are:  | Field | Description | | --- | ---| | `to` |  The number the message was sent to. | | `receivedTimestamp` | Time the message was sent to the API. | | `sentTimestamp` | Time handling of the message ended. | | `deliveryStatus` | The final state of the message. | | `messageId` | The same reference that was returned when the original message was sent.| | `receivedTimestamp` | Time the message was sent to the API.|  Upon receiving this call it is expected that your servers will give a 204 (No Content) response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = 'message_id_example'; // string | Unique identifier of a message - it is the value returned from a previous POST call to https://tapi.telstra.com/v2/messages/sms.

try {
    $result = $apiInstance->getSMSStatus($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getSMSStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Unique identifier of a message - it is the value returned from a previous POST call to https://tapi.telstra.com/v2/messages/sms. |

### Return type

[**\Telstra_Messaging\Model\OutboundPollResponse[]**](../Model/OutboundPollResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mMSHealthCheck

> \Telstra_Messaging\Model\HealthCheckResponse mMSHealthCheck()

MMS Health Check

Determine whether the MMS service is up or down.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->mMSHealthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->mMSHealthCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Telstra_Messaging\Model\HealthCheckResponse**](../Model/HealthCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveMMSReplies

> \Telstra_Messaging\Model\GetMmsResponse retrieveMMSReplies()

Retrieve MMS Replies

Messages are retrieved one at a time, starting with the earliest reply.  If the subscription has a `notifyURL`, reply messages will be logged there instead, i.e. `GET` and reply `notifyURL` are exclusive.  # MMS Reply with Notification URL  When a reply is received, the API will send a POST to the subscription URL that has been previously specified.  <pre><code class=\"language-sh\">{   \"to\": \"+61418123456\",   \"from\": \"+61421987654\",   \"sentTimestamp\": \"2018-03-23T12:15:45+10:00\",   \"messageId\": \"XFRO1ApiA0000000111\",   \"subject\": \"Foo\",   \"envelope\": \"string\",   \"MMSContent\":     [       {         \"type\": \"text/plain\",         \"filename\": \"text_1.txt\",         \"payload\": \"string\"       },       {         \"type\": \"image/jpeg\",         \"filename\": \"sample.jpeg\",         \"payload\": \"string\"       }     ] }</code></pre>  The fields are:  | Field | Description | | --- | --- | | `to` |The number the message was sent to. | | `from` | The number the message was sent from. | | `sentTimestamp` | Time handling of the message ended. | | `messageId` | Message Id assigned by the MMSC | | `subject` | The subject assigned to the message. | | `envelope` | Information about about terminal type and originating operator. | | `MMSContent` | An array of the actual content of the reply message. | | `type` | The content type of the message. | | `filename` | The filename for the message content. | | `payload` | The content of the message. |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveMMSReplies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->retrieveMMSReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Telstra_Messaging\Model\GetMmsResponse**](../Model/GetMmsResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retrieveSMSReplies

> \Telstra_Messaging\Model\InboundPollResponse retrieveSMSReplies()

Retrieve SMS Replies

Messages are retrieved one at a time, starting with the earliest reply.  The API supports the encoding of emojis in the reply message. The emojis will be in their UTF-8 format.  If the subscription has a `notifyURL`, reply messages will be logged there instead.  # SMS Reply with Notification URL  When a reply is received, the API will send a POST to the subscription URL that has been previously specified.  <pre><code class=\"language-sh\">{   \"to\":\"+61472880123\",   \"from\":\"+61412345678\",   \"body\":\"Foo4\",   \"sentTimestamp\":\"2018-04-20T14:24:35\",   \"messageId\":\"DMASApiA0000000146\" }</code></pre>  The fields are:  | Field | Description | | --- |--- | | `to` | The number the message was sent to. | | `from` | The number the message was sent from. | | `body` | The content of the SMS response. | | `sentTimestamp` | Time handling of the message ended. | | `messageId` | The ID assigned to the message. |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->retrieveSMSReplies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->retrieveSMSReplies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Telstra_Messaging\Model\InboundPollResponse**](../Model/InboundPollResponse.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sMSHealthCheck

> \Telstra_Messaging\Model\HealthCheckResponse sMSHealthCheck()

SMS Health Check

Determine whether the SMS service is up or down.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->sMSHealthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sMSHealthCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Telstra_Messaging\Model\HealthCheckResponse**](../Model/HealthCheckResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sMSMulti

> \Telstra_Messaging\Model\MessageSentResponseSms sMSMulti($payload)

Send Multiple SMS

Send multiple SMS in one API call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \Telstra_Messaging\Model\SendSmsMultiRequest(); // \Telstra_Messaging\Model\SendSmsMultiRequest | A JSON payload containing the recipient's phone number and text message. This number can be in international format if preceeded by a '+' or in national format ('04xxxxxxxx') where x is a digit.

try {
    $result = $apiInstance->sMSMulti($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sMSMulti: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\Telstra_Messaging\Model\SendSmsMultiRequest**](../Model/SendSmsMultiRequest.md)| A JSON payload containing the recipient&#39;s phone number and text message. This number can be in international format if preceeded by a &#39;+&#39; or in national format (&#39;04xxxxxxxx&#39;) where x is a digit. |

### Return type

[**\Telstra_Messaging\Model\MessageSentResponseSms**](../Model/MessageSentResponseSms.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendMMS

> \Telstra_Messaging\Model\MessageSentResponseMms sendMMS($body)

Send MMS

Send MMS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Telstra_Messaging\Model\SendMmsRequest(); // \Telstra_Messaging\Model\SendMmsRequest | A JSON or XML payload containing the recipient's phone number and MMS message. The recipient number should be in the format '04xxxxxxxx' where x is a digit.

try {
    $result = $apiInstance->sendMMS($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendMMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Telstra_Messaging\Model\SendMmsRequest**](../Model/SendMmsRequest.md)| A JSON or XML payload containing the recipient&#39;s phone number and MMS message. The recipient number should be in the format &#39;04xxxxxxxx&#39; where x is a digit. |

### Return type

[**\Telstra_Messaging\Model\MessageSentResponseMms**](../Model/MessageSentResponseMms.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sendSMS

> \Telstra_Messaging\Model\MessageSentResponseSms sendSMS($payload)

Send SMS

Send an SMS Message to a single or multiple mobile number/s.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Telstra_Messaging\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Telstra_Messaging\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payload = new \Telstra_Messaging\Model\SendSMSRequest(); // \Telstra_Messaging\Model\SendSMSRequest | A JSON or XML payload containing the recipient's phone number and text message. This number can be in international format if preceeded by a '+' or in national format ('04xxxxxxxx') where x is a digit.

try {
    $result = $apiInstance->sendSMS($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->sendSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payload** | [**\Telstra_Messaging\Model\SendSMSRequest**](../Model/SendSMSRequest.md)| A JSON or XML payload containing the recipient&#39;s phone number and text message. This number can be in international format if preceeded by a &#39;+&#39; or in national format (&#39;04xxxxxxxx&#39;) where x is a digit. |

### Return type

[**\Telstra_Messaging\Model\MessageSentResponseSms**](../Model/MessageSentResponseSms.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

