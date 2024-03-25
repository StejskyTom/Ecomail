# StejskyTom\Ecomail\SearchApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findContact()**](SearchApi.md#findContact) | **POST** /search | Find contact |


## `findContact()`

```php
findContact($key, $find_contact_request)
```

Find contact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$find_contact_request = new \StejskyTom\Ecomail\Model\FindContactRequest(); // \StejskyTom\Ecomail\Model\FindContactRequest

try {
    $apiInstance->findContact($key, $find_contact_request);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->findContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **find_contact_request** | [**\StejskyTom\Ecomail\Model\FindContactRequest**](../Model/FindContactRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
