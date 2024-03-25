# StejskyTom\Ecomail\SubscribersApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSubscriberDetails()**](SubscribersApi.md#getSubscriberDetails) | **GET** /subscribers/{email} | Get subscriber details |
| [**removeSubscriberFromDb()**](SubscribersApi.md#removeSubscriberFromDb) | **DELETE** /subscribers/{email}/delete | Remove subscriber from db |


## `getSubscriberDetails()`

```php
getSubscriberDetails($email, $key): \StejskyTom\Ecomail\Model\GetSubscriberDetails200Response
```

Get subscriber details



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = foo@bar.cz; // string | email of a subscriber
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getSubscriberDetails($email, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getSubscriberDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| email of a subscriber | |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetSubscriberDetails200Response**](../Model/GetSubscriberDetails200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeSubscriberFromDb()`

```php
removeSubscriberFromDb($email, $key): \StejskyTom\Ecomail\Model\RemoveSubscriberFromDb200Response
```

Remove subscriber from db



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = foo@bar.cz; // string | email of subscriber
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->removeSubscriberFromDb($email, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->removeSubscriberFromDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| email of subscriber | |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\RemoveSubscriberFromDb200Response**](../Model/RemoveSubscriberFromDb200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
