# StejskyTom\Ecomail\TransactionsApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createANewTransaction()**](TransactionsApi.md#createANewTransaction) | **POST** /tracker/transaction | Create a new transaction |
| [**createBulkTransactions()**](TransactionsApi.md#createBulkTransactions) | **POST** /tracker/transaction-bulk | Create bulk transactions |
| [**removeTransactionFromDb()**](TransactionsApi.md#removeTransactionFromDb) | **DELETE** /tracker/transaction/{order_id}/delete | Remove transaction from db |
| [**updateTransaction()**](TransactionsApi.md#updateTransaction) | **PUT** /tracker/transaction/{id} | Update transaction |


## `createANewTransaction()`

```php
createANewTransaction($key, $create_a_new_transaction_request): \StejskyTom\Ecomail\Model\CreateANewTransaction200Response
```

Create a new transaction



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$create_a_new_transaction_request = new \StejskyTom\Ecomail\Model\CreateANewTransactionRequest(); // \StejskyTom\Ecomail\Model\CreateANewTransactionRequest

try {
    $result = $apiInstance->createANewTransaction($key, $create_a_new_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createANewTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **create_a_new_transaction_request** | [**\StejskyTom\Ecomail\Model\CreateANewTransactionRequest**](../Model/CreateANewTransactionRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\CreateANewTransaction200Response**](../Model/CreateANewTransaction200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBulkTransactions()`

```php
createBulkTransactions($key, $create_bulk_transactions_request): \StejskyTom\Ecomail\Model\AddBulkSubscribersToList200Response
```

Create bulk transactions



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$create_bulk_transactions_request = new \StejskyTom\Ecomail\Model\CreateBulkTransactionsRequest(); // \StejskyTom\Ecomail\Model\CreateBulkTransactionsRequest

try {
    $result = $apiInstance->createBulkTransactions($key, $create_bulk_transactions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createBulkTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **create_bulk_transactions_request** | [**\StejskyTom\Ecomail\Model\CreateBulkTransactionsRequest**](../Model/CreateBulkTransactionsRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\AddBulkSubscribersToList200Response**](../Model/AddBulkSubscribersToList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeTransactionFromDb()`

```php
removeTransactionFromDb($order_id, $key): \StejskyTom\Ecomail\Model\RemoveSubscriberFromDb200Response
```

Remove transaction from db



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 56; // int | order id from your shop
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->removeTransactionFromDb($order_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->removeTransactionFromDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **int**| order id from your shop | |
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

## `updateTransaction()`

```php
updateTransaction($id, $key, $update_transaction_request)
```

Update transaction



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id of order
$key = API_KEY; // string | e.g. API_KEY
$update_transaction_request = new \StejskyTom\Ecomail\Model\UpdateTransactionRequest(); // \StejskyTom\Ecomail\Model\UpdateTransactionRequest

try {
    $apiInstance->updateTransaction($id, $key, $update_transaction_request);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| id of order | |
| **key** | **string**| e.g. API_KEY | [optional] |
| **update_transaction_request** | [**\StejskyTom\Ecomail\Model\UpdateTransactionRequest**](../Model/UpdateTransactionRequest.md)|  | [optional] |

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
