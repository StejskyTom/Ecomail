# StejskyTom\Ecomail\ListsApi

All URIs are relative to https://api2.ecomailapp.cz, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addBulkSubscribersToList()**](ListsApi.md#addBulkSubscribersToList) | **POST** /lists/{list_id}/subscribe-bulk | Add bulk subscribers to list |
| [**addNewList()**](ListsApi.md#addNewList) | **POST** /lists | Add new list |
| [**addNewSubscriberToList()**](ListsApi.md#addNewSubscriberToList) | **POST** /lists/{list_id}/subscribe | Add new subscriber to list |
| [**getSubscriber()**](ListsApi.md#getSubscriber) | **GET** /lists/{list_id}/subscriber/{email} | Get subscriber |
| [**getSubscriberByPhone()**](ListsApi.md#getSubscriberByPhone) | **GET** /lists/{list_id}/subscriber-by-phone/{phone} | Get subscriber by phone |
| [**getSubscribers()**](ListsApi.md#getSubscribers) | **GET** /lists/{list_id}/subscribers | Get subscribers |
| [**removeSubscriberFromList()**](ListsApi.md#removeSubscriberFromList) | **DELETE** /lists/{list_id}/unsubscribe | Remove subscriber from list |
| [**showList()**](ListsApi.md#showList) | **GET** /lists/{list_id} | Show list |
| [**updateList()**](ListsApi.md#updateList) | **PUT** /lists/{list_id} | Update list |
| [**updateSubscriber()**](ListsApi.md#updateSubscriber) | **PUT** /lists/{list_id}/update-subscriber | Update subscriber |
| [**viewAllLists()**](ListsApi.md#viewAllLists) | **GET** /lists | View all lists |


## `addBulkSubscribersToList()`

```php
addBulkSubscribersToList($list_id, $key, $add_bulk_subscribers_to_list_request): \StejskyTom\Ecomail\Model\AddBulkSubscribersToList200Response
```

Add bulk subscribers to list

+ _subscriber_data_ - array of information about a subscriber  + _subscriber_data\\[\\]\\[email\\]_ **(required)** - email of a subscriber  + _update_existing_ (default: false) - update an already existing subscriber  + _resubscribe_ (default: false) - in case of unsubscribed status force resubscribe  + _trigger_autoresponders_ (default: false) - trigger automations on subscribe  + _subscriber_data\\[\\]\\[status\\]_ (default: 1, 1: subscribed, 2: unsubscribed, 4: hard bounce)  + Contacts always skip confirmation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$key = API_KEY; // string | e.g. API_KEY
$add_bulk_subscribers_to_list_request = new \StejskyTom\Ecomail\Model\AddBulkSubscribersToListRequest(); // \StejskyTom\Ecomail\Model\AddBulkSubscribersToListRequest

try {
    $result = $apiInstance->addBulkSubscribersToList($list_id, $key, $add_bulk_subscribers_to_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->addBulkSubscribersToList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
| **key** | **string**| e.g. API_KEY | [optional] |
| **add_bulk_subscribers_to_list_request** | [**\StejskyTom\Ecomail\Model\AddBulkSubscribersToListRequest**](../Model/AddBulkSubscribersToListRequest.md)|  | [optional] |

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

## `addNewList()`

```php
addNewList($key, $add_new_list_request): \StejskyTom\Ecomail\Model\AddNewList200Response
```

Add new list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY
$add_new_list_request = new \StejskyTom\Ecomail\Model\AddNewListRequest(); // \StejskyTom\Ecomail\Model\AddNewListRequest

try {
    $result = $apiInstance->addNewList($key, $add_new_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->addNewList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |
| **add_new_list_request** | [**\StejskyTom\Ecomail\Model\AddNewListRequest**](../Model/AddNewListRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\AddNewList200Response**](../Model/AddNewList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addNewSubscriberToList()`

```php
addNewSubscriberToList($list_id, $key, $add_new_subscriber_to_list_request): \StejskyTom\Ecomail\Model\AddNewSubscriberToList200Response
```

Add new subscriber to list

+ _subscriber_data_ - information about the subscriber  + _subscriber_data\\[email\\]_ **(required)** - subscriber's email  + _subscriber_data\\[gender\\]_ - must be male/female  + _trigger_autoresponders_ (default: false) - trigger automations on subscribe  + _trigger_notification_ (default: false) - send a notification about the subscriber, if set in list settings  + _update_existing_ (default: false) - update an already existing subscriber  + _skip_confirmation_ (default: false) - skip double opt-in confirmation  + _resubscribe_ (default: false) - in case of unsubscribed status force resubscribe  + _custom_fields_ - in case of non-existing field creates a new (string) field with inserted value - type can be defined, see example request (types: string, date, json, int, url)  + _groups_ - overwrites current values (contact has A, B selected in checkbox options, you send only C, contact has only C now, need to send current values + new ones to keep both)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$key = API_KEY; // string | e.g. API_KEY
$add_new_subscriber_to_list_request = new \StejskyTom\Ecomail\Model\AddNewSubscriberToListRequest(); // \StejskyTom\Ecomail\Model\AddNewSubscriberToListRequest

try {
    $result = $apiInstance->addNewSubscriberToList($list_id, $key, $add_new_subscriber_to_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->addNewSubscriberToList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
| **key** | **string**| e.g. API_KEY | [optional] |
| **add_new_subscriber_to_list_request** | [**\StejskyTom\Ecomail\Model\AddNewSubscriberToListRequest**](../Model/AddNewSubscriberToListRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\AddNewSubscriberToList200Response**](../Model/AddNewSubscriberToList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriber()`

```php
getSubscriber($list_id, $email, $key): \StejskyTom\Ecomail\Model\GetSubscriber200Response
```

Get subscriber

### Response  + _subscriber[status]_ (1: subscribed, 2: unsubscribed, 3: soft bounce, 4: hard bounce, 5: spam complaint, 6: unconfirmed)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$email = foo@bar.cz; // string | Email of the subscriber to get
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getSubscriber($list_id, $email, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
| **email** | **string**| Email of the subscriber to get | |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetSubscriber200Response**](../Model/GetSubscriber200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriberByPhone()`

```php
getSubscriberByPhone($list_id, $phone, $key): \StejskyTom\Ecomail\Model\GetSubscriberByPhone200Response
```

Get subscriber by phone



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$phone = +420111222333; // string | Phone of the subscriber to get
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->getSubscriberByPhone($list_id, $phone, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getSubscriberByPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
| **phone** | **string**| Phone of the subscriber to get | |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\GetSubscriberByPhone200Response**](../Model/GetSubscriberByPhone200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscribers()`

```php
getSubscribers($list_id, $key)
```

Get subscribers

Query parameters:  + _page_ (integer)  + _status_ (optional) (unsubscribed, not_confirmed, bounced, complained)  + _per_page_ (optional) , limit 5000 subscribers per page  ### Response  + _data[status]_ (1: subscribed, 2: unsubscribed, 3: soft bounce, 4: hard bounce, 5: spam complaint, 6: unconfirmed)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$key = API_KEY; // string | e.g. API_KEY

try {
    $apiInstance->getSubscribers($list_id, $key);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
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

## `removeSubscriberFromList()`

```php
removeSubscriberFromList($list_id, $key, $remove_subscriber_from_list_request): \StejskyTom\Ecomail\Model\RemoveSubscriberFromList200Response
```

Remove subscriber from list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$key = API_KEY; // string | e.g. API_KEY
$remove_subscriber_from_list_request = new \StejskyTom\Ecomail\Model\RemoveSubscriberFromListRequest(); // \StejskyTom\Ecomail\Model\RemoveSubscriberFromListRequest

try {
    $result = $apiInstance->removeSubscriberFromList($list_id, $key, $remove_subscriber_from_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->removeSubscriberFromList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
| **key** | **string**| e.g. API_KEY | [optional] |
| **remove_subscriber_from_list_request** | [**\StejskyTom\Ecomail\Model\RemoveSubscriberFromListRequest**](../Model/RemoveSubscriberFromListRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\RemoveSubscriberFromList200Response**](../Model/RemoveSubscriberFromList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showList()`

```php
showList($list_id, $key): \StejskyTom\Ecomail\Model\ShowList200Response
```

Show list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->showList($list_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->showList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\ShowList200Response**](../Model/ShowList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateList()`

```php
updateList($list_id, $key, $update_list_request): \StejskyTom\Ecomail\Model\UpdateList200Response
```

Update list



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$key = API_KEY; // string | e.g. API_KEY
$update_list_request = new \StejskyTom\Ecomail\Model\UpdateListRequest(); // \StejskyTom\Ecomail\Model\UpdateListRequest

try {
    $result = $apiInstance->updateList($list_id, $key, $update_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->updateList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
| **key** | **string**| e.g. API_KEY | [optional] |
| **update_list_request** | [**\StejskyTom\Ecomail\Model\UpdateListRequest**](../Model/UpdateListRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\UpdateList200Response**](../Model/UpdateList200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscriber()`

```php
updateSubscriber($list_id, $key, $update_subscriber_request): \StejskyTom\Ecomail\Model\UpdateSubscriber200Response
```

Update subscriber

+ _email_ **(required)** - subscriber to be updated  + _subscriber_data_ - subscriber's updated information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 1; // float | ID of the List in form of an integer
$key = API_KEY; // string | e.g. API_KEY
$update_subscriber_request = new \StejskyTom\Ecomail\Model\UpdateSubscriberRequest(); // \StejskyTom\Ecomail\Model\UpdateSubscriberRequest

try {
    $result = $apiInstance->updateSubscriber($list_id, $key, $update_subscriber_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->updateSubscriber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **list_id** | **float**| ID of the List in form of an integer | |
| **key** | **string**| e.g. API_KEY | [optional] |
| **update_subscriber_request** | [**\StejskyTom\Ecomail\Model\UpdateSubscriberRequest**](../Model/UpdateSubscriberRequest.md)|  | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\UpdateSubscriber200Response**](../Model/UpdateSubscriber200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `viewAllLists()`

```php
viewAllLists($key): \StejskyTom\Ecomail\Model\ViewAllLists200Response
```

View all lists



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new StejskyTom\Ecomail\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = API_KEY; // string | e.g. API_KEY

try {
    $result = $apiInstance->viewAllLists($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->viewAllLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| e.g. API_KEY | [optional] |

### Return type

[**\StejskyTom\Ecomail\Model\ViewAllLists200Response**](../Model/ViewAllLists200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
