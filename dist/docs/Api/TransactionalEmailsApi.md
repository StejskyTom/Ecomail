# StejskyTom\Ecomail\TransactionalEmailsApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**doubleOptInStats()**](TransactionalEmailsApi.md#doubleOptInStats) | **GET** /transactional/stats/doi | Double opt-in stats |
| [**sendTransactionalEmail()**](TransactionalEmailsApi.md#sendTransactionalEmail) | **POST** /transactional/send-message | Send transactional email |
| [**sendTransactionalTemplate()**](TransactionalEmailsApi.md#sendTransactionalTemplate) | **POST** /transactional/send-template | Send transactional template |
| [**transactionalEmailsStats()**](TransactionalEmailsApi.md#transactionalEmailsStats) | **GET** /transactional/stats | Transactional emails stats |


## `doubleOptInStats()`

```php
doubleOptInStats($key): \StejskyTom\Ecomail\Model\DoubleOptInStats200Response
```

Double opt-in stats

Statistics for double opt-in emails for the past 6 months.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->doubleOptInStats($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->doubleOptInStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\DoubleOptInStats200Response**](../Model/DoubleOptInStats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTransactionalEmail()`

```php
sendTransactionalEmail($key, $send_transactional_email_request): \StejskyTom\Ecomail\Model\SendTransactionalEmail200Response
```

Send transactional email



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$send_transactional_email_request = new \StejskyTom\Ecomail\Model\SendTransactionalEmailRequest(); // \StejskyTom\Ecomail\Model\SendTransactionalEmailRequest

try {
    $result = $apiInstance->sendTransactionalEmail($key, $send_transactional_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransactionalEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **send_transactional_email_request** | [**\StejskyTom\Ecomail\Model\SendTransactionalEmailRequest**](../Model/SendTransactionalEmailRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\SendTransactionalEmail200Response**](../Model/SendTransactionalEmail200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendTransactionalTemplate()`

```php
sendTransactionalTemplate($key, $send_transactional_template_request): \StejskyTom\Ecomail\Model\SendTransactionalEmail200Response
```

Send transactional template



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$send_transactional_template_request = new \StejskyTom\Ecomail\Model\SendTransactionalTemplateRequest(); // \StejskyTom\Ecomail\Model\SendTransactionalTemplateRequest

try {
    $result = $apiInstance->sendTransactionalTemplate($key, $send_transactional_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransactionalTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **send_transactional_template_request** | [**\StejskyTom\Ecomail\Model\SendTransactionalTemplateRequest**](../Model/SendTransactionalTemplateRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\SendTransactionalEmail200Response**](../Model/SendTransactionalEmail200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionalEmailsStats()`

```php
transactionalEmailsStats($key): \StejskyTom\Ecomail\Model\TransactionalEmailsStats200Response
```

Transactional emails stats

Statistics for transactional emails for the past 6 months.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->transactionalEmailsStats($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->transactionalEmailsStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\TransactionalEmailsStats200Response**](../Model/TransactionalEmailsStats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
