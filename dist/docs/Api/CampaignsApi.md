# StejskyTom\Ecomail\CampaignsApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNewCampaign()**](CampaignsApi.md#addNewCampaign) | **POST** /campaigns | Add new campaign |
| [**getCampaignStats()**](CampaignsApi.md#getCampaignStats) | **GET** /campaigns/{campaign_id}/stats | Get campaign stats |
| [**getCampaignStatsDetail()**](CampaignsApi.md#getCampaignStatsDetail) | **GET** /campaigns/{id}/stats-detail | Get campaign stats-detail |
| [**listAllCampaigns()**](CampaignsApi.md#listAllCampaigns) | **GET** /campaigns | List All Campaigns |
| [**sendCampaign()**](CampaignsApi.md#sendCampaign) | **GET** /campaign/{campaign_id}/send | Send campaign |
| [**updateCampaign()**](CampaignsApi.md#updateCampaign) | **PUT** /campaigns/{campaign_id} | Update campaign |


## `addNewCampaign()`

```php
addNewCampaign($key, $add_new_campaign_request): \StejskyTom\Ecomail\Model\AddNewCampaign200Response
```

Add new campaign



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$add_new_campaign_request = new \StejskyTom\Ecomail\Model\AddNewCampaignRequest(); // \StejskyTom\Ecomail\Model\AddNewCampaignRequest

try {
    $result = $apiInstance->addNewCampaign($key, $add_new_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->addNewCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **add_new_campaign_request** | [**\StejskyTom\Ecomail\Model\AddNewCampaignRequest**](../Model/AddNewCampaignRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\AddNewCampaign200Response**](../Model/AddNewCampaign200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignStats()`

```php
getCampaignStats($key): \StejskyTom\Ecomail\Model\GetCampaignStats200Response
```

Get campaign stats

Returns the statistics of a campaign specified by the campaign_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getCampaignStats($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaignStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetCampaignStats200Response**](../Model/GetCampaignStats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignStatsDetail()`

```php
getCampaignStatsDetail($id, $event, $email, $from_date, $per_page, $page, $key): \StejskyTom\Ecomail\Model\GetCampaignStatsDetail200Response
```

Get campaign stats-detail



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 12345; // int | required, id of the campaign
$event = open; // string | optional, filter by: open, send, unsub, soft_bounce, click, hard_bounce, out_of_band, spam
$email = foo@bar.com; // string | optional, filter by email
$from_date = 2023-01-20; // string | optional, filter by contacts with events from set date onwards (YYYY-MM-DD format)
$per_page = 300; // int | optional, returns x number of results per response instead of default 100, a limit of 5000 per page
$page = 2; // int | optional, returns results from page x
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getCampaignStatsDetail($id, $event, $email, $from_date, $per_page, $page, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaignStatsDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| required, id of the campaign | |
| **event** | **string**| optional, filter by: open, send, unsub, soft_bounce, click, hard_bounce, out_of_band, spam | [optional] |
| **email** | **string**| optional, filter by email | [optional] |
| **from_date** | **string**| optional, filter by contacts with events from set date onwards (YYYY-MM-DD format) | [optional] |
| **per_page** | **int**| optional, returns x number of results per response instead of default 100, a limit of 5000 per page | [optional] |
| **page** | **int**| optional, returns results from page x | [optional] |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetCampaignStatsDetail200Response**](../Model/GetCampaignStatsDetail200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllCampaigns()`

```php
listAllCampaigns($page, $filters, $key)
```

List All Campaigns



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 'page_example'; // string | Page number, results are paginated by 50 records
$filters = NULL; // mixed[] | Filters to filter results.  valid filters: status     Example: `/campaigns?filters[status]=1`
$key = API_KEY; // string | e.g. API_KEY

try {
    $apiInstance->listAllCampaigns($page, $filters, $key);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->listAllCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **string**| Page number, results are paginated by 50 records | [optional] |
| **filters** | [**mixed[]**](../Model/mixed.md)| Filters to filter results.  valid filters: status     Example: &#x60;/campaigns?filters[status]&#x3D;1&#x60; | [optional] |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendCampaign()`

```php
sendCampaign($key): \StejskyTom\Ecomail\Model\SendCampaign200ResponseInner[]
```

Send campaign

This endpoint puts the campaign to the sending queue immediately.  This action is irreversible!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->sendCampaign($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->sendCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\SendCampaign200ResponseInner[]**](../Model/SendCampaign200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaign()`

```php
updateCampaign($key, $update_campaign_request): \StejskyTom\Ecomail\Model\UpdateCampaign200Response
```

Update campaign



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$update_campaign_request = new \StejskyTom\Ecomail\Model\UpdateCampaignRequest(); // \StejskyTom\Ecomail\Model\UpdateCampaignRequest

try {
    $result = $apiInstance->updateCampaign($key, $update_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **update_campaign_request** | [**\StejskyTom\Ecomail\Model\UpdateCampaignRequest**](../Model/UpdateCampaignRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\UpdateCampaign200Response**](../Model/UpdateCampaign200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
