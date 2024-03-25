# StejskyTom\Ecomail\DiscountCouponsApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDiscountCoupons()**](DiscountCouponsApi.md#deleteDiscountCoupons) | **DELETE** /coupons/delete | Delete discount coupons |
| [**importDiscountCoupons()**](DiscountCouponsApi.md#importDiscountCoupons) | **POST** /coupons/import | Import discount coupons |


## `deleteDiscountCoupons()`

```php
deleteDiscountCoupons($key, $delete_discount_coupons_request): \StejskyTom\Ecomail\Model\DeleteDiscountCoupons200Response
```

Delete discount coupons

Delete discount coupons in default or specific folder.  - folderId - optional, if not present deletes from default folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\DiscountCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$delete_discount_coupons_request = new \StejskyTom\Ecomail\Model\DeleteDiscountCouponsRequest(); // \StejskyTom\Ecomail\Model\DeleteDiscountCouponsRequest

try {
    $result = $apiInstance->deleteDiscountCoupons($key, $delete_discount_coupons_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountCouponsApi->deleteDiscountCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **delete_discount_coupons_request** | [**\StejskyTom\Ecomail\Model\DeleteDiscountCouponsRequest**](../Model/DeleteDiscountCouponsRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\DeleteDiscountCoupons200Response**](../Model/DeleteDiscountCoupons200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importDiscountCoupons()`

```php
importDiscountCoupons($key, $import_discount_coupons_request): \StejskyTom\Ecomail\Model\ImportDiscountCoupons200Response
```

Import discount coupons

Import discount coupons into a default or specific folder.  - folderId - optional, if not present imports into default folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\DiscountCouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$import_discount_coupons_request = new \StejskyTom\Ecomail\Model\ImportDiscountCouponsRequest(); // \StejskyTom\Ecomail\Model\ImportDiscountCouponsRequest

try {
    $result = $apiInstance->importDiscountCoupons($key, $import_discount_coupons_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscountCouponsApi->importDiscountCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **import_discount_coupons_request** | [**\StejskyTom\Ecomail\Model\ImportDiscountCouponsRequest**](../Model/ImportDiscountCouponsRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\ImportDiscountCoupons200Response**](../Model/ImportDiscountCoupons200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
