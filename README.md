# stejskytom/ecomail-php-sdk

Welcome to the **Ecomail.cz v2.0 API**! Our API provides a powerful and flexible way to integrate your applications with our email marketing and automation platform. This API allows you to manage email campaigns, subscribers, lists, and much more, through our RESTful endpoints.

## Key Features

+ **Subscriber Management**: Create, update, and manage subscribers.

+ **List Management**: Organize contacts into lists for targeted campaigns.

+ **Campaign Management**: Automate and send campaigns.

+ **Transactional Emails**: Send and track transactional emails.

+ **Analytics and Reporting**: Access insights into campaign performance.

+ **Automation and Workflow**: Establish automated email sequences.

## Getting Started

All endpoints use base url `https://api2.ecomailapp.cz/`

Before using the API, an **API key is required for authentication**. Obtain your API key from your Ecomail account settings _(Manage your account → Integrations → For developers → Copy API Key)_:
![How to find API Key](https://i.imgur.com/ZAJoFcN.png)
![How to find API Key](https://i.imgur.com/36U4Ted.png)
![How to find API Key](https://i.imgur.com/5JRbJrJ.png)
![How to find API Key](https://i.imgur.com/WHCWLMe.png)

**All API calls to the Ecomail.cz v2.0 API require authorization**. To authenticate requests, use a header with your API key.

### Authentication Header

Every request must include a header named `key` that contains your API key.

`key: API_KEY`

### Rate Limiting

The API allows up to **1000 calls per minute** per API key. Exceeding this limit will throttle the requests, returning a **429 status code** with a `Retry-After` header.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/stejskytom/ecomail-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api2.ecomailapp.cz*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AutomationsApi* | [**getAutomationStats**](docs/Api/AutomationsApi.md#getautomationstats) | **GET** /pipelines/{pipeline_id}/stats | Get automation stats
*AutomationsApi* | [**getAutomationStatsDetail**](docs/Api/AutomationsApi.md#getautomationstatsdetail) | **GET** /pipelines/{pipeline_id}/stats-detail | Get automation stats-detail
*AutomationsApi* | [**listAllAutomations**](docs/Api/AutomationsApi.md#listallautomations) | **GET** /pipelines | List All Automations
*AutomationsApi* | [**triggerAutomation**](docs/Api/AutomationsApi.md#triggerautomation) | **POST** /pipelines/{pipeline_id}/trigger/ | Trigger automation
*CampaignsApi* | [**addNewCampaign**](docs/Api/CampaignsApi.md#addnewcampaign) | **POST** /campaigns | Add new campaign
*CampaignsApi* | [**getCampaignStats**](docs/Api/CampaignsApi.md#getcampaignstats) | **GET** /campaigns/{campaign_id}/stats | Get campaign stats
*CampaignsApi* | [**getCampaignStatsDetail**](docs/Api/CampaignsApi.md#getcampaignstatsdetail) | **GET** /campaigns/{id}/stats-detail | Get campaign stats-detail
*CampaignsApi* | [**listAllCampaigns**](docs/Api/CampaignsApi.md#listallcampaigns) | **GET** /campaigns | List All Campaigns
*CampaignsApi* | [**sendCampaign**](docs/Api/CampaignsApi.md#sendcampaign) | **GET** /campaign/{campaign_id}/send | Send campaign
*CampaignsApi* | [**updateCampaign**](docs/Api/CampaignsApi.md#updatecampaign) | **PUT** /campaigns/{campaign_id} | Update campaign
*DiscountCouponsApi* | [**deleteDiscountCoupons**](docs/Api/DiscountCouponsApi.md#deletediscountcoupons) | **DELETE** /coupons/delete | Delete discount coupons
*DiscountCouponsApi* | [**importDiscountCoupons**](docs/Api/DiscountCouponsApi.md#importdiscountcoupons) | **POST** /coupons/import | Import discount coupons
*DomainsApi* | [**createANewDomain**](docs/Api/DomainsApi.md#createanewdomain) | **POST** /domains | Create a new domain
*DomainsApi* | [**deleteADomain**](docs/Api/DomainsApi.md#deleteadomain) | **DELETE** /domains/{domain_id} | Delete a domain
*DomainsApi* | [**listAllDomains**](docs/Api/DomainsApi.md#listalldomains) | **GET** /domains | List All Domains
*FeedsApi* | [**updateADataFeed**](docs/Api/FeedsApi.md#updateadatafeed) | **GET** /data-feeds/{feed_id}/refresh | Update a data feed
*FeedsApi* | [**updateAProductFeed**](docs/Api/FeedsApi.md#updateaproductfeed) | **GET** /feeds/{feed_id}/refresh | Update a product feed
*ListsApi* | [**addBulkSubscribersToList**](docs/Api/ListsApi.md#addbulksubscriberstolist) | **POST** /lists/{list_id}/subscribe-bulk | Add bulk subscribers to list
*ListsApi* | [**addNewList**](docs/Api/ListsApi.md#addnewlist) | **POST** /lists | Add new list
*ListsApi* | [**addNewSubscriberToList**](docs/Api/ListsApi.md#addnewsubscribertolist) | **POST** /lists/{list_id}/subscribe | Add new subscriber to list
*ListsApi* | [**getSubscriber**](docs/Api/ListsApi.md#getsubscriber) | **GET** /lists/{list_id}/subscriber/{email} | Get subscriber
*ListsApi* | [**getSubscriberByPhone**](docs/Api/ListsApi.md#getsubscriberbyphone) | **GET** /lists/{list_id}/subscriber-by-phone/{phone} | Get subscriber by phone
*ListsApi* | [**getSubscribers**](docs/Api/ListsApi.md#getsubscribers) | **GET** /lists/{list_id}/subscribers | Get subscribers
*ListsApi* | [**removeSubscriberFromList**](docs/Api/ListsApi.md#removesubscriberfromlist) | **DELETE** /lists/{list_id}/unsubscribe | Remove subscriber from list
*ListsApi* | [**showList**](docs/Api/ListsApi.md#showlist) | **GET** /lists/{list_id} | Show list
*ListsApi* | [**updateList**](docs/Api/ListsApi.md#updatelist) | **PUT** /lists/{list_id} | Update list
*ListsApi* | [**updateSubscriber**](docs/Api/ListsApi.md#updatesubscriber) | **PUT** /lists/{list_id}/update-subscriber | Update subscriber
*ListsApi* | [**viewAllLists**](docs/Api/ListsApi.md#viewalllists) | **GET** /lists | View all lists
*SearchApi* | [**findContact**](docs/Api/SearchApi.md#findcontact) | **POST** /search | Find contact
*SubscribersApi* | [**getSubscriberDetails**](docs/Api/SubscribersApi.md#getsubscriberdetails) | **GET** /subscribers/{email} | Get subscriber details
*SubscribersApi* | [**removeSubscriberFromDb**](docs/Api/SubscribersApi.md#removesubscriberfromdb) | **DELETE** /subscribers/{email}/delete | Remove subscriber from db
*TemplatesApi* | [**createANewTemplate**](docs/Api/TemplatesApi.md#createanewtemplate) | **POST** /template | Create a new template
*TemplatesApi* | [**getTemplate**](docs/Api/TemplatesApi.md#gettemplate) | **GET** /template/{id} | Get template
*TrackerApi* | [**createANewEvent**](docs/Api/TrackerApi.md#createanewevent) | **POST** /tracker/events | Create a new event
*TransactionalEmailsApi* | [**doubleOptInStats**](docs/Api/TransactionalEmailsApi.md#doubleoptinstats) | **GET** /transactional/stats/doi | Double opt-in stats
*TransactionalEmailsApi* | [**sendTransactionalEmail**](docs/Api/TransactionalEmailsApi.md#sendtransactionalemail) | **POST** /transactional/send-message | Send transactional email
*TransactionalEmailsApi* | [**sendTransactionalTemplate**](docs/Api/TransactionalEmailsApi.md#sendtransactionaltemplate) | **POST** /transactional/send-template | Send transactional template
*TransactionalEmailsApi* | [**transactionalEmailsStats**](docs/Api/TransactionalEmailsApi.md#transactionalemailsstats) | **GET** /transactional/stats | Transactional emails stats
*TransactionsApi* | [**createANewTransaction**](docs/Api/TransactionsApi.md#createanewtransaction) | **POST** /tracker/transaction | Create a new transaction
*TransactionsApi* | [**createBulkTransactions**](docs/Api/TransactionsApi.md#createbulktransactions) | **POST** /tracker/transaction-bulk | Create bulk transactions
*TransactionsApi* | [**removeTransactionFromDb**](docs/Api/TransactionsApi.md#removetransactionfromdb) | **DELETE** /tracker/transaction/{order_id}/delete | Remove transaction from db
*TransactionsApi* | [**updateTransaction**](docs/Api/TransactionsApi.md#updatetransaction) | **PUT** /tracker/transaction/{id} | Update transaction
*WebhookApi* | [**deleteWebhookUrl**](docs/Api/WebhookApi.md#deletewebhookurl) | **DELETE** /account/settings/webhook | Delete webhook url
*WebhookApi* | [**getWebhookUrl**](docs/Api/WebhookApi.md#getwebhookurl) | **GET** /account/settings/webhook | Get webhook url
*WebhookApi* | [**setWebhookUrl**](docs/Api/WebhookApi.md#setwebhookurl) | **POST** /account/settings/webhook | Set webhook url

## Models

- [AddBulkSubscribersToList200Response](docs/Model/AddBulkSubscribersToList200Response.md)
- [AddBulkSubscribersToList422Response](docs/Model/AddBulkSubscribersToList422Response.md)
- [AddBulkSubscribersToList422ResponseData](docs/Model/AddBulkSubscribersToList422ResponseData.md)
- [AddBulkSubscribersToList422ResponseErrors](docs/Model/AddBulkSubscribersToList422ResponseErrors.md)
- [AddBulkSubscribersToListRequest](docs/Model/AddBulkSubscribersToListRequest.md)
- [AddBulkSubscribersToListRequestSubscriberDataInner](docs/Model/AddBulkSubscribersToListRequestSubscriberDataInner.md)
- [AddBulkSubscribersToListRequestSubscriberDataInnerCustomFields](docs/Model/AddBulkSubscribersToListRequestSubscriberDataInnerCustomFields.md)
- [AddNewCampaign200Response](docs/Model/AddNewCampaign200Response.md)
- [AddNewCampaign200ResponseRecepientLists](docs/Model/AddNewCampaign200ResponseRecepientLists.md)
- [AddNewCampaign200ResponseRecepientListsSegmentsInner](docs/Model/AddNewCampaign200ResponseRecepientListsSegmentsInner.md)
- [AddNewCampaignRequest](docs/Model/AddNewCampaignRequest.md)
- [AddNewList200Response](docs/Model/AddNewList200Response.md)
- [AddNewListRequest](docs/Model/AddNewListRequest.md)
- [AddNewSubscriberToList200Response](docs/Model/AddNewSubscriberToList200Response.md)
- [AddNewSubscriberToListRequest](docs/Model/AddNewSubscriberToListRequest.md)
- [AddNewSubscriberToListRequestGroups](docs/Model/AddNewSubscriberToListRequestGroups.md)
- [AddNewSubscriberToListRequestSubscriberData](docs/Model/AddNewSubscriberToListRequestSubscriberData.md)
- [AddNewSubscriberToListRequestSubscriberDataCustomFields](docs/Model/AddNewSubscriberToListRequestSubscriberDataCustomFields.md)
- [AddNewSubscriberToListRequestSubscriberDataCustomFieldsNAME](docs/Model/AddNewSubscriberToListRequestSubscriberDataCustomFieldsNAME.md)
- [AddNewSubscriberToListRequestSubscriberDataCustomFieldsNUMBER](docs/Model/AddNewSubscriberToListRequestSubscriberDataCustomFieldsNUMBER.md)
- [CreateANewDomain201Response](docs/Model/CreateANewDomain201Response.md)
- [CreateANewDomainRequest](docs/Model/CreateANewDomainRequest.md)
- [CreateANewEvent200Response](docs/Model/CreateANewEvent200Response.md)
- [CreateANewEventRequest](docs/Model/CreateANewEventRequest.md)
- [CreateANewEventRequestEvent](docs/Model/CreateANewEventRequestEvent.md)
- [CreateANewTemplate200Response](docs/Model/CreateANewTemplate200Response.md)
- [CreateANewTemplateRequest](docs/Model/CreateANewTemplateRequest.md)
- [CreateANewTransaction200Response](docs/Model/CreateANewTransaction200Response.md)
- [CreateANewTransaction422Response](docs/Model/CreateANewTransaction422Response.md)
- [CreateANewTransaction422ResponseErrors](docs/Model/CreateANewTransaction422ResponseErrors.md)
- [CreateANewTransactionRequest](docs/Model/CreateANewTransactionRequest.md)
- [CreateANewTransactionRequestTransaction](docs/Model/CreateANewTransactionRequestTransaction.md)
- [CreateANewTransactionRequestTransactionItemsInner](docs/Model/CreateANewTransactionRequestTransactionItemsInner.md)
- [CreateANewTransactionRequestTransactionProps](docs/Model/CreateANewTransactionRequestTransactionProps.md)
- [CreateBulkTransactionsRequest](docs/Model/CreateBulkTransactionsRequest.md)
- [CreateBulkTransactionsRequestTransactionDataInner](docs/Model/CreateBulkTransactionsRequestTransactionDataInner.md)
- [CreateBulkTransactionsRequestTransactionDataInnerTransaction](docs/Model/CreateBulkTransactionsRequestTransactionDataInnerTransaction.md)
- [CreateBulkTransactionsRequestTransactionDataInnerTransactionItemsInner](docs/Model/CreateBulkTransactionsRequestTransactionDataInnerTransactionItemsInner.md)
- [CreateBulkTransactionsRequestTransactionDataInnerTransactionProps](docs/Model/CreateBulkTransactionsRequestTransactionDataInnerTransactionProps.md)
- [DeleteDiscountCoupons200Response](docs/Model/DeleteDiscountCoupons200Response.md)
- [DeleteDiscountCouponsRequest](docs/Model/DeleteDiscountCouponsRequest.md)
- [DoubleOptInStats200Response](docs/Model/DoubleOptInStats200Response.md)
- [FindContactRequest](docs/Model/FindContactRequest.md)
- [GetAutomationStats200Response](docs/Model/GetAutomationStats200Response.md)
- [GetAutomationStats200ResponseStats](docs/Model/GetAutomationStats200ResponseStats.md)
- [GetAutomationStatsDetail200Response](docs/Model/GetAutomationStatsDetail200Response.md)
- [GetCampaignStats200Response](docs/Model/GetCampaignStats200Response.md)
- [GetCampaignStats200ResponseStats](docs/Model/GetCampaignStats200ResponseStats.md)
- [GetCampaignStatsDetail200Response](docs/Model/GetCampaignStatsDetail200Response.md)
- [GetCampaignStatsDetail200ResponseSubscribers](docs/Model/GetCampaignStatsDetail200ResponseSubscribers.md)
- [GetCampaignStatsDetail200ResponseSubscribersFooBarCom](docs/Model/GetCampaignStatsDetail200ResponseSubscribersFooBarCom.md)
- [GetSubscriber200Response](docs/Model/GetSubscriber200Response.md)
- [GetSubscriber200ResponseSubscriber](docs/Model/GetSubscriber200ResponseSubscriber.md)
- [GetSubscriber200ResponseSubscriberCustomFields](docs/Model/GetSubscriber200ResponseSubscriberCustomFields.md)
- [GetSubscriber200ResponseSubscriberGroups](docs/Model/GetSubscriber200ResponseSubscriberGroups.md)
- [GetSubscriber404Response](docs/Model/GetSubscriber404Response.md)
- [GetSubscriberByPhone200Response](docs/Model/GetSubscriberByPhone200Response.md)
- [GetSubscriberByPhone200ResponseSubscriber](docs/Model/GetSubscriberByPhone200ResponseSubscriber.md)
- [GetSubscriberByPhone200ResponseSubscriberCustomFields](docs/Model/GetSubscriberByPhone200ResponseSubscriberCustomFields.md)
- [GetSubscriberByPhone200ResponseSubscriberStatusHistoryInner](docs/Model/GetSubscriberByPhone200ResponseSubscriberStatusHistoryInner.md)
- [GetSubscriberDetails200Response](docs/Model/GetSubscriberDetails200Response.md)
- [GetSubscriberDetails200ResponseSubscriber](docs/Model/GetSubscriberDetails200ResponseSubscriber.md)
- [GetSubscriberDetails200ResponseSubscriberLists](docs/Model/GetSubscriberDetails200ResponseSubscriberLists.md)
- [GetSubscriberDetails200ResponseSubscriberLists1](docs/Model/GetSubscriberDetails200ResponseSubscriberLists1.md)
- [GetSubscriberDetails200ResponseSubscriberLists1CustomFields](docs/Model/GetSubscriberDetails200ResponseSubscriberLists1CustomFields.md)
- [GetSubscriberDetails200ResponseSubscriberLists1Owner](docs/Model/GetSubscriberDetails200ResponseSubscriberLists1Owner.md)
- [GetSubscriberDetails200ResponseSubscriberLists1OwnerGroups](docs/Model/GetSubscriberDetails200ResponseSubscriberLists1OwnerGroups.md)
- [GetTemplate200Response](docs/Model/GetTemplate200Response.md)
- [GetWebhookUrl200Response](docs/Model/GetWebhookUrl200Response.md)
- [ImportDiscountCoupons200Response](docs/Model/ImportDiscountCoupons200Response.md)
- [ImportDiscountCouponsRequest](docs/Model/ImportDiscountCouponsRequest.md)
- [ListAllAutomations200ResponseInner](docs/Model/ListAllAutomations200ResponseInner.md)
- [ListAllDomains200ResponseInner](docs/Model/ListAllDomains200ResponseInner.md)
- [RemoveSubscriberFromDb200Response](docs/Model/RemoveSubscriberFromDb200Response.md)
- [RemoveSubscriberFromList200Response](docs/Model/RemoveSubscriberFromList200Response.md)
- [RemoveSubscriberFromList200ResponseCustomFields](docs/Model/RemoveSubscriberFromList200ResponseCustomFields.md)
- [RemoveSubscriberFromListRequest](docs/Model/RemoveSubscriberFromListRequest.md)
- [SendCampaign200ResponseInner](docs/Model/SendCampaign200ResponseInner.md)
- [SendTransactionalEmail200Response](docs/Model/SendTransactionalEmail200Response.md)
- [SendTransactionalEmail200ResponseResults](docs/Model/SendTransactionalEmail200ResponseResults.md)
- [SendTransactionalEmailRequest](docs/Model/SendTransactionalEmailRequest.md)
- [SendTransactionalEmailRequestMessage](docs/Model/SendTransactionalEmailRequestMessage.md)
- [SendTransactionalEmailRequestMessageAttachmentsInner](docs/Model/SendTransactionalEmailRequestMessageAttachmentsInner.md)
- [SendTransactionalEmailRequestMessageGlobalMergeVarsInner](docs/Model/SendTransactionalEmailRequestMessageGlobalMergeVarsInner.md)
- [SendTransactionalEmailRequestMessageOptions](docs/Model/SendTransactionalEmailRequestMessageOptions.md)
- [SendTransactionalEmailRequestMessageToInner](docs/Model/SendTransactionalEmailRequestMessageToInner.md)
- [SendTransactionalTemplateRequest](docs/Model/SendTransactionalTemplateRequest.md)
- [SendTransactionalTemplateRequestMessage](docs/Model/SendTransactionalTemplateRequestMessage.md)
- [SetWebhookUrl200Response](docs/Model/SetWebhookUrl200Response.md)
- [SetWebhookUrlRequest](docs/Model/SetWebhookUrlRequest.md)
- [ShowList200Response](docs/Model/ShowList200Response.md)
- [ShowList200ResponseList](docs/Model/ShowList200ResponseList.md)
- [ShowList200ResponseListCustomFields](docs/Model/ShowList200ResponseListCustomFields.md)
- [ShowList200ResponseListCustomFieldsDate1](docs/Model/ShowList200ResponseListCustomFieldsDate1.md)
- [ShowList200ResponseListFormSettings](docs/Model/ShowList200ResponseListFormSettings.md)
- [ShowList200ResponseListFormSettingsColors](docs/Model/ShowList200ResponseListFormSettingsColors.md)
- [ShowList200ResponseListFormSettingsFieldsInner](docs/Model/ShowList200ResponseListFormSettingsFieldsInner.md)
- [ShowList200ResponseListFormSettingsSettings](docs/Model/ShowList200ResponseListFormSettingsSettings.md)
- [ShowList200ResponseListGroups](docs/Model/ShowList200ResponseListGroups.md)
- [ShowList200ResponseListGroupsGrp5e83080ebb988](docs/Model/ShowList200ResponseListGroupsGrp5e83080ebb988.md)
- [ShowList200ResponseListGroupsGrp5e83080ebb988CategoryInner](docs/Model/ShowList200ResponseListGroupsGrp5e83080ebb988CategoryInner.md)
- [ShowList200ResponseListSegments](docs/Model/ShowList200ResponseListSegments.md)
- [ShowList200ResponseListSegments5c36008811e45](docs/Model/ShowList200ResponseListSegments5c36008811e45.md)
- [ShowList200ResponseListSettings](docs/Model/ShowList200ResponseListSettings.md)
- [ShowList200ResponseListSettingsWebhook](docs/Model/ShowList200ResponseListSettingsWebhook.md)
- [ShowList200ResponseSubscribers](docs/Model/ShowList200ResponseSubscribers.md)
- [TransactionalEmailsStats200Response](docs/Model/TransactionalEmailsStats200Response.md)
- [TransactionalEmailsStats200ResponseStats](docs/Model/TransactionalEmailsStats200ResponseStats.md)
- [UpdateADataFeed422Response](docs/Model/UpdateADataFeed422Response.md)
- [UpdateAProductFeed200Response](docs/Model/UpdateAProductFeed200Response.md)
- [UpdateAProductFeed403Response](docs/Model/UpdateAProductFeed403Response.md)
- [UpdateCampaign200Response](docs/Model/UpdateCampaign200Response.md)
- [UpdateCampaignRequest](docs/Model/UpdateCampaignRequest.md)
- [UpdateList200Response](docs/Model/UpdateList200Response.md)
- [UpdateListRequest](docs/Model/UpdateListRequest.md)
- [UpdateSubscriber200Response](docs/Model/UpdateSubscriber200Response.md)
- [UpdateSubscriberRequest](docs/Model/UpdateSubscriberRequest.md)
- [UpdateSubscriberRequestSubscriberData](docs/Model/UpdateSubscriberRequestSubscriberData.md)
- [UpdateSubscriberRequestSubscriberDataCustomFields](docs/Model/UpdateSubscriberRequestSubscriberDataCustomFields.md)
- [UpdateTransactionRequest](docs/Model/UpdateTransactionRequest.md)
- [UpdateTransactionRequestTransaction](docs/Model/UpdateTransactionRequestTransaction.md)
- [ViewAllLists200Response](docs/Model/ViewAllLists200Response.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: ``
    - Generator version: `7.5.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
