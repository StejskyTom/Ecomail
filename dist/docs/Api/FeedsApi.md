# StejskyTom\Ecomail\FeedsApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateADataFeed()**](FeedsApi.md#updateADataFeed) | **GET** /data-feeds/{feed_id}/refresh | Update a data feed |
| [**updateAProductFeed()**](FeedsApi.md#updateAProductFeed) | **GET** /feeds/{feed_id}/refresh | Update a product feed |


## `updateADataFeed()`

```php
updateADataFeed($key): \StejskyTom\Ecomail\Model\UpdateAProductFeed200Response
```

Update a data feed

Endpoint to refresh/update a data feed already in an account.  - Limited to 1 refresh/hour.  - Only for Marketer+ accounts.  - Only for data feeds with <50 000 items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\FeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->updateADataFeed($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->updateADataFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\UpdateAProductFeed200Response**](../Model/UpdateAProductFeed200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAProductFeed()`

```php
updateAProductFeed($key): \StejskyTom\Ecomail\Model\UpdateAProductFeed200Response
```

Update a product feed

Endpoint to refresh/update a product feed already in an account.  - Limited to 1 refresh/hour.  - Only for Marketer+ accounts.  - Only for product feeds with <50 000 products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\FeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->updateAProductFeed($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->updateAProductFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\UpdateAProductFeed200Response**](../Model/UpdateAProductFeed200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
