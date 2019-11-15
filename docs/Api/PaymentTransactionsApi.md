# Carooline\PaymentTransactionsApi

All URIs are relative to *http://sfpr-pre-prod.carooline.com/api/sale*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentTransactionsCreatePost**](PaymentTransactionsApi.md#paymenttransactionscreatepost) | **POST** /payment_transactions/create | Create a new PaymentTransaction.
[**paymentTransactionsGet**](PaymentTransactionsApi.md#paymenttransactionsget) | **GET** /payment_transactions | Search PaymentTransaction by reference, partner_id or order_id
[**paymentTransactionsIdDelete**](PaymentTransactionsApi.md#paymenttransactionsiddelete) | **DELETE** /payment_transactions/{id} | Delete Payment Transaction
[**paymentTransactionsIdGet**](PaymentTransactionsApi.md#paymenttransactionsidget) | **GET** /payment_transactions/{id} | Get Payment Transactions
[**paymentTransactionsIdPut**](PaymentTransactionsApi.md#paymenttransactionsidput) | **PUT** /payment_transactions/{id} | Update PaymentTransaction informations

# **paymentTransactionsCreatePost**
> \Carooline\Model\PaymentTransaction paymentTransactionsCreatePost($body)

Create a new PaymentTransaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PaymentTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Carooline\Model\PaymentTransactionCreateRequest(); // \Carooline\Model\PaymentTransactionCreateRequest | 

try {
    $result = $apiInstance->paymentTransactionsCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Carooline\Model\PaymentTransactionCreateRequest**](../Model/PaymentTransactionCreateRequest.md)|  | [optional]

### Return type

[**\Carooline\Model\PaymentTransaction**](../Model/PaymentTransaction.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentTransactionsGet**
> \Carooline\Model\PaymentTransactionSearchResponse paymentTransactionsGet($order_id, $partner_id, $reference)

Search PaymentTransaction by reference, partner_id or order_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PaymentTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | 
$partner_id = 56; // int | 
$reference = "reference_example"; // string | 

try {
    $result = $apiInstance->paymentTransactionsGet($order_id, $partner_id, $reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  | [optional]
 **partner_id** | **int**|  | [optional]
 **reference** | **string**|  | [optional]

### Return type

[**\Carooline\Model\PaymentTransactionSearchResponse**](../Model/PaymentTransactionSearchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentTransactionsIdDelete**
> paymentTransactionsIdDelete($id)

Delete Payment Transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PaymentTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $apiInstance->paymentTransactionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentTransactionsIdGet**
> \Carooline\Model\PaymentTransaction paymentTransactionsIdGet($id)

Get Payment Transactions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PaymentTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->paymentTransactionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |

### Return type

[**\Carooline\Model\PaymentTransaction**](../Model/PaymentTransaction.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentTransactionsIdPut**
> \Carooline\Model\PaymentTransaction paymentTransactionsIdPut($id, $body)

Update PaymentTransaction informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PaymentTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id
$body = new \Carooline\Model\PaymentTransactionUpdateRequest(); // \Carooline\Model\PaymentTransactionUpdateRequest | 

try {
    $result = $apiInstance->paymentTransactionsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentTransactionsApi->paymentTransactionsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |
 **body** | [**\Carooline\Model\PaymentTransactionUpdateRequest**](../Model/PaymentTransactionUpdateRequest.md)|  | [optional]

### Return type

[**\Carooline\Model\PaymentTransaction**](../Model/PaymentTransaction.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

