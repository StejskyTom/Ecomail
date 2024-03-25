# StejskyTom\Ecomail\TrackerApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewEvent()**](TrackerApi.md#createANewEvent) | **POST** /tracker/events | Create a new event |


## `createANewEvent()`

```php
createANewEvent($key, $create_a_new_event_request): \StejskyTom\Ecomail\Model\CreateANewEvent200Response
```

Create a new event



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$create_a_new_event_request = new \StejskyTom\Ecomail\Model\CreateANewEventRequest(); // \StejskyTom\Ecomail\Model\CreateANewEventRequest

try {
    $result = $apiInstance->createANewEvent($key, $create_a_new_event_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackerApi->createANewEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **create_a_new_event_request** | [**\StejskyTom\Ecomail\Model\CreateANewEventRequest**](../Model/CreateANewEventRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\CreateANewEvent200Response**](../Model/CreateANewEvent200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
