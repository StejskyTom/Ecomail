# StejskyTom\Ecomail\WebhookApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWebhookUrl()**](WebhookApi.md#deleteWebhookUrl) | **DELETE** /account/settings/webhook | Delete webhook url |
| [**getWebhookUrl()**](WebhookApi.md#getWebhookUrl) | **GET** /account/settings/webhook | Get webhook url |
| [**setWebhookUrl()**](WebhookApi.md#setWebhookUrl) | **POST** /account/settings/webhook | Set webhook url |


## `deleteWebhookUrl()`

```php
deleteWebhookUrl($key): \StejskyTom\Ecomail\Model\SetWebhookUrl200Response
```

Delete webhook url



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->deleteWebhookUrl($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebhookUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\SetWebhookUrl200Response**](../Model/SetWebhookUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhookUrl()`

```php
getWebhookUrl($key): \StejskyTom\Ecomail\Model\GetWebhookUrl200Response
```

Get webhook url



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getWebhookUrl($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhookUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetWebhookUrl200Response**](../Model/GetWebhookUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWebhookUrl()`

```php
setWebhookUrl($key, $set_webhook_url_request): \StejskyTom\Ecomail\Model\SetWebhookUrl200Response
```

Set webhook url



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$set_webhook_url_request = new \StejskyTom\Ecomail\Model\SetWebhookUrlRequest(); // \StejskyTom\Ecomail\Model\SetWebhookUrlRequest

try {
    $result = $apiInstance->setWebhookUrl($key, $set_webhook_url_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->setWebhookUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **set_webhook_url_request** | [**\StejskyTom\Ecomail\Model\SetWebhookUrlRequest**](../Model/SetWebhookUrlRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\SetWebhookUrl200Response**](../Model/SetWebhookUrl200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
