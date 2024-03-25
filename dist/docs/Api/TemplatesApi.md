# StejskyTom\Ecomail\TemplatesApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewTemplate()**](TemplatesApi.md#createANewTemplate) | **POST** /template | Create a new template |
| [**getTemplate()**](TemplatesApi.md#getTemplate) | **GET** /template/{id} | Get template |


## `createANewTemplate()`

```php
createANewTemplate($key, $create_a_new_template_request): \StejskyTom\Ecomail\Model\CreateANewTemplate200Response
```

Create a new template



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$create_a_new_template_request = new \StejskyTom\Ecomail\Model\CreateANewTemplateRequest(); // \StejskyTom\Ecomail\Model\CreateANewTemplateRequest

try {
    $result = $apiInstance->createANewTemplate($key, $create_a_new_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createANewTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **create_a_new_template_request** | [**\StejskyTom\Ecomail\Model\CreateANewTemplateRequest**](../Model/CreateANewTemplateRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\CreateANewTemplate200Response**](../Model/CreateANewTemplate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplate()`

```php
getTemplate($key): \StejskyTom\Ecomail\Model\GetTemplate200Response
```

Get template



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getTemplate($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetTemplate200Response**](../Model/GetTemplate200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
