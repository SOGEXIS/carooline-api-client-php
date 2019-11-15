# Carooline\PartnersApi

All URIs are relative to *http://sfpr-pre-prod.carooline.com/api/sale*

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnersCreatePost**](PartnersApi.md#partnerscreatepost) | **POST** /partners/create | Create a new Partner.
[**partnersGet**](PartnersApi.md#partnersget) | **GET** /partners | Search Partner by Ref, Name or Email
[**partnersIdDelete**](PartnersApi.md#partnersiddelete) | **DELETE** /partners/{id} | Delete a Partner
[**partnersIdGet**](PartnersApi.md#partnersidget) | **GET** /partners/{id} | Get Partners&#x27;s informations
[**partnersIdPut**](PartnersApi.md#partnersidput) | **PUT** /partners/{id} | Update Partner informations

# **partnersCreatePost**
> \Carooline\Model\Partner partnersCreatePost($body)

Create a new Partner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Carooline\Model\PartnerCreateRequest(); // \Carooline\Model\PartnerCreateRequest | 

try {
    $result = $apiInstance->partnersCreatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Carooline\Model\PartnerCreateRequest**](../Model/PartnerCreateRequest.md)|  | [optional]

### Return type

[**\Carooline\Model\Partner**](../Model/Partner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersGet**
> \Carooline\Model\PartnerSearchResponse partnersGet($email, $name, $ref)

Search Partner by Ref, Name or Email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | 
$name = "name_example"; // string | 
$ref = "ref_example"; // string | 

try {
    $result = $apiInstance->partnersGet($email, $name, $ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **ref** | **string**|  | [optional]

### Return type

[**\Carooline\Model\PartnerSearchResponse**](../Model/PartnerSearchResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIdDelete**
> partnersIdDelete($id)

Delete a Partner

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $apiInstance->partnersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **partnersIdGet**
> \Carooline\Model\Partner partnersIdGet($id)

Get Partners's informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->partnersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |

### Return type

[**\Carooline\Model\Partner**](../Model/Partner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partnersIdPut**
> \Carooline\Model\Partner partnersIdPut($id, $body)

Update Partner informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Carooline\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Carooline\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Item id
$body = new \Carooline\Model\PartnerUpdateRequest(); // \Carooline\Model\PartnerUpdateRequest | 

try {
    $result = $apiInstance->partnersIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Item id |
 **body** | [**\Carooline\Model\PartnerUpdateRequest**](../Model/PartnerUpdateRequest.md)|  | [optional]

### Return type

[**\Carooline\Model\Partner**](../Model/Partner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

