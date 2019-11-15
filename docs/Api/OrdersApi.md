# Carooline\OrdersApi

All URIs are relative to *http://sfpr-pre-prod.carooline.com/api/sale*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersCreatePost**](OrdersApi.md#orderscreatepost) | **POST** /orders/create | Create a new Order.  The partner is a mandatory information, it can either:     - Be referenced by giving a correct partner&#x27;s id     - Be created by giving at least a name
[**ordersGet**](OrdersApi.md#ordersget) | **GET** /orders | Search Order by name/ref or partner&#x27;s id
[**ordersIdConfirmPost**](OrdersApi.md#ordersidconfirmpost) | **POST** /orders/{id}/confirm | Confirm the Order. The state will be updated and the Order line are then frozen.
[**ordersIdDelete**](OrdersApi.md#ordersiddelete) | **DELETE** /orders/{id} | Delete an Order and it&#x27;s lines. If a Payment Transaction is associated it will not be deleted.
[**ordersIdGet**](OrdersApi.md#ordersidget) | **GET** /orders/{id} | Get Orders&#x27;s informations
[**ordersIdPut**](OrdersApi.md#ordersidput) | **PUT** /orders/{id} | Update Order informations, lines, Payment Transaction, Partner.

# **ordersCreatePost**
> ordersCreatePost($body)

Create a new Order.  The partner is a mandatory information, it can either:     - Be referenced by giving a correct partner's id     - Be created by giving at least a name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Carooline\Model\OrderCreateRequest(); // \Carooline\Model\OrderCreateRequest | 

try {
    $apiInstance->ordersCreatePost($body);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Carooline\Model\OrderCreateRequest**](../Model/OrderCreateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersGet**
> \Carooline\Model\OrderSearchResponse ordersGet($name, $partner_id)

Search Order by name/ref or partner's id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$partner_id = 56; // int | 

try {
    $result = $apiInstance->ordersGet($name, $partner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **partner_id** | **int**|  | [optional]

### Return type

[**\Carooline\Model\OrderSearchResponse**](../Model/OrderSearchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersIdConfirmPost**
> \Carooline\Model\Order ordersIdConfirmPost($id, $body)

Confirm the Order. The state will be updated and the Order line are then frozen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->ordersIdConfirmPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersIdConfirmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

[**\Carooline\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersIdDelete**
> ordersIdDelete($id)

Delete an Order and it's lines. If a Payment Transaction is associated it will not be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $apiInstance->ordersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **ordersIdGet**
> \Carooline\Model\Order ordersIdGet($id)

Get Orders's informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->ordersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |

### Return type

[**\Carooline\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersIdPut**
> \Carooline\Model\Order ordersIdPut($id, $body)

Update Order informations, lines, Payment Transaction, Partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id
$body = new \Carooline\Model\OrderUpdateRequest(); // \Carooline\Model\OrderUpdateRequest | 

try {
    $result = $apiInstance->ordersIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |
 **body** | [**\Carooline\Model\OrderUpdateRequest**](../Model/OrderUpdateRequest.md)|  | [optional]

### Return type

[**\Carooline\Model\Order**](../Model/Order.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

