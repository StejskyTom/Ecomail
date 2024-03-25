# StejskyTom\Ecomail\DomainsApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewDomain()**](DomainsApi.md#createANewDomain) | **POST** /domains | Create a new domain |
| [**deleteADomain()**](DomainsApi.md#deleteADomain) | **DELETE** /domains/{domain_id} | Delete a domain |
| [**listAllDomains()**](DomainsApi.md#listAllDomains) | **GET** /domains | List All Domains |


## `createANewDomain()`

```php
createANewDomain($key, $create_a_new_domain_request): \StejskyTom\Ecomail\Model\CreateANewDomain201Response
```

Create a new domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$create_a_new_domain_request = new \StejskyTom\Ecomail\Model\CreateANewDomainRequest(); // \StejskyTom\Ecomail\Model\CreateANewDomainRequest

try {
    $result = $apiInstance->createANewDomain($key, $create_a_new_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createANewDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **create_a_new_domain_request** | [**\StejskyTom\Ecomail\Model\CreateANewDomainRequest**](../Model/CreateANewDomainRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\CreateANewDomain201Response**](../Model/CreateANewDomain201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteADomain()`

```php
deleteADomain($key, $create_a_new_domain_request): \StejskyTom\Ecomail\Model\CreateANewDomain201Response
```

Delete a domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$create_a_new_domain_request = new \StejskyTom\Ecomail\Model\CreateANewDomainRequest(); // \StejskyTom\Ecomail\Model\CreateANewDomainRequest

try {
    $result = $apiInstance->deleteADomain($key, $create_a_new_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteADomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **create_a_new_domain_request** | [**\StejskyTom\Ecomail\Model\CreateANewDomainRequest**](../Model/CreateANewDomainRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\CreateANewDomain201Response**](../Model/CreateANewDomain201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllDomains()`

```php
listAllDomains($key): \StejskyTom\Ecomail\Model\ListAllDomains200ResponseInner[]
```

List All Domains



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->listAllDomains($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->listAllDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\ListAllDomains200ResponseInner[]**](../Model/ListAllDomains200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
