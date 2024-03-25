# StejskyTom\Ecomail\AutomationsApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAutomationStats()**](AutomationsApi.md#getAutomationStats) | **GET** /pipelines/{pipeline_id}/stats | Get automation stats |
| [**getAutomationStatsDetail()**](AutomationsApi.md#getAutomationStatsDetail) | **GET** /pipelines/{pipeline_id}/stats-detail | Get automation stats-detail |
| [**listAllAutomations()**](AutomationsApi.md#listAllAutomations) | **GET** /pipelines | List All Automations |
| [**triggerAutomation()**](AutomationsApi.md#triggerAutomation) | **POST** /pipelines/{pipeline_id}/trigger/ | Trigger automation |


## `getAutomationStats()`

```php
getAutomationStats($key): \StejskyTom\Ecomail\Model\GetAutomationStats200Response
```

Get automation stats



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getAutomationStats($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAutomationStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetAutomationStats200Response**](../Model/GetAutomationStats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationStatsDetail()`

```php
getAutomationStatsDetail($pipeline_id, $event, $email, $from_date, $per_page, $page, $key): \StejskyTom\Ecomail\Model\GetAutomationStatsDetail200Response
```

Get automation stats-detail



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pipeline_id = 12345; // int | required, id of the automation
$event = open; // string | optional, filter by: open, send, unsub, soft_bounce, click, hard_bounce, out_of_band, spam
$email = foo@bar.com; // string | optional, filter by email
$from_date = 2023-01-20; // string | optional, filter by contacts with events from set date onwards (YYYY-MM-DD format)
$per_page = 300; // int | optional, returns x number of results per response instead of default 100, a limit of 5000 per page
$page = 2; // int | optional, returns results from page x
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getAutomationStatsDetail($pipeline_id, $event, $email, $from_date, $per_page, $page, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->getAutomationStatsDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pipeline_id** | **int**| required, id of the automation | |
| **event** | **string**| optional, filter by: open, send, unsub, soft_bounce, click, hard_bounce, out_of_band, spam | [optional] |
| **email** | **string**| optional, filter by email | [optional] |
| **from_date** | **string**| optional, filter by contacts with events from set date onwards (YYYY-MM-DD format) | [optional] |
| **per_page** | **int**| optional, returns x number of results per response instead of default 100, a limit of 5000 per page | [optional] |
| **page** | **int**| optional, returns results from page x | [optional] |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetAutomationStatsDetail200Response**](../Model/GetAutomationStatsDetail200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllAutomations()`

```php
listAllAutomations($key): \StejskyTom\Ecomail\Model\ListAllAutomations200ResponseInner[]
```

List All Automations



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->listAllAutomations($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->listAllAutomations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\ListAllAutomations200ResponseInner[]**](../Model/ListAllAutomations200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `triggerAutomation()`

```php
triggerAutomation($key, $remove_subscriber_from_list_request): \StejskyTom\Ecomail\Model\RemoveSubscriberFromListRequest
```

Trigger automation



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\AutomationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$remove_subscriber_from_list_request = new \StejskyTom\Ecomail\Model\RemoveSubscriberFromListRequest(); // \StejskyTom\Ecomail\Model\RemoveSubscriberFromListRequest

try {
    $result = $apiInstance->triggerAutomation($key, $remove_subscriber_from_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationsApi->triggerAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **remove_subscriber_from_list_request** | [**\StejskyTom\Ecomail\Model\RemoveSubscriberFromListRequest**](../Model/RemoveSubscriberFromListRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\RemoveSubscriberFromListRequest**](../Model/RemoveSubscriberFromListRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
