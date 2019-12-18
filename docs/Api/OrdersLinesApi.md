# Carooline\OrdersLinesApi

All URIs are relative to *http://dev1.carooline.com/api/sale*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ordersLinesCreatePost**](OrdersLinesApi.md#orderslinescreatepost) | **POST** /orders_lines/create | Create a new Order Line.
[**ordersLinesGet**](OrdersLinesApi.md#orderslinesget) | **GET** /orders_lines | Search Order Lines by Order&#x27;s Id (Required)
[**ordersLinesIdDelete**](OrdersLinesApi.md#orderslinesiddelete) | **DELETE** /orders_lines/{id} | Delete an Order line
[**ordersLinesIdGet**](OrdersLinesApi.md#orderslinesidget) | **GET** /orders_lines/{id} | Get Orders&#x27;s informations
[**ordersLinesIdPut**](OrdersLinesApi.md#orderslinesidput) | **PUT** /orders_lines/{id} | Update an Order Line

# **ordersLinesCreatePost**
> \Carooline\Model\OrderLine ordersLinesCreatePost($body)

Create a new Order Line.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Carooline\Model\OrderLineCreateRequest(); // \Carooline\Model\OrderLineCreateRequest | 

try {
    $result = $apiInstance->ordersLinesCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersLinesApi->ordersLinesCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Carooline\Model\OrderLineCreateRequest**](../Model/OrderLineCreateRequest.md)|  | [optional]

### Return type

[**\Carooline\Model\OrderLine**](../Model/OrderLine.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersLinesGet**
> \Carooline\Model\OrderLineSearchResponse ordersLinesGet($order_id)

Search Order Lines by Order's Id (Required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | 

try {
    $result = $apiInstance->ordersLinesGet($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersLinesApi->ordersLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |

### Return type

[**\Carooline\Model\OrderLineSearchResponse**](../Model/OrderLineSearchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersLinesIdDelete**
> ordersLinesIdDelete($id)

Delete an Order line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $apiInstance->ordersLinesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersLinesApi->ordersLinesIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **ordersLinesIdGet**
> \Carooline\Model\OrderLine ordersLinesIdGet($id)

Get Orders's informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->ordersLinesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersLinesApi->ordersLinesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |

### Return type

[**\Carooline\Model\OrderLine**](../Model/OrderLine.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ordersLinesIdPut**
> \Carooline\Model\OrderLine ordersLinesIdPut($id, $body)

Update an Order Line

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\OrdersLinesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id
$body = new \Carooline\Model\OrderLineUpdateRequest(); // \Carooline\Model\OrderLineUpdateRequest | 

try {
    $result = $apiInstance->ordersLinesIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersLinesApi->ordersLinesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |
 **body** | [**\Carooline\Model\OrderLineUpdateRequest**](../Model/OrderLineUpdateRequest.md)|  | [optional]

### Return type

[**\Carooline\Model\OrderLine**](../Model/OrderLine.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

