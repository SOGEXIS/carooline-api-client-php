# CaroolineApiClient-php
Interract with a Carooline API Installed.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.0.1
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/SOGEXIS/carooline-api-client-php.git"
    }
  ],
  "require": {
    "SOGEXIS/carooline-api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/carooline-api-client-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$client = new GuzzleHttp\Client();
$config = new Carooline\Configuration();
$config->setHost('https://dev1.carooline.com/api');

// Authenticate to get new Token
$authApi = new Carooline\Api\AuthApi(
    $client,
    $config
);
$body = new Carooline\Model\LoginRequest([
    'login' => 'login',
    'password' => 'password'
]);
$result = $authApi->authLoginPost($body);
$token = $result->getToken();

// Setting token for subscequent requests
$config->setAccessToken($token);

$partnersApi = new Carooline\Api\PartnersApi(
    $client,
    $config
);
$result = $partnersApi->partnersIdGet(21285);
// Print Partner
print_r($result)
// Update Partner
$body = new Carooline\Model\PartnerUpdateRequest(['email' => 'test@test.test']);
$result = $partnersApi->partnersIdPut(
    21285,
    $body
);
print_r($result);

$apiInstance = new Carooline\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    $client,
    $config
);
$body = new \Carooline\Model\OrderCreateRequest();

try {
    $apiInstance->ordersCreatePost($body);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersCreatePost: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Carooline\Api\OrdersApi(
    $client,
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


$apiInstance = new Carooline\Api\OrdersApi(
    $client,
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


$apiInstance = new Carooline\Api\OrdersApi(
    $client,
    $config
);
$id = 56; // int | Item id

try {
    $apiInstance->ordersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersIdDelete: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Carooline\Api\OrdersApi(
    $client,
    $config
);
$id = 56; // int | Item id

try {
    $result = $apiInstance->ordersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersIdGet: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Carooline\Api\OrdersApi(
    $client,
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

## Documentation for API Endpoints

### Commons and Authentication

All URIs are relative to *https://dev1.carooline.com/api/commons*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**authLoginPost**](docs/Api/AuthApi.md#authloginpost) | **POST** /auth/login | 
*UserApi* | [**userMeGet**](docs/Api/UserApi.md#usermeget) | **GET** /user/me | Get info about your user

#### Documentation For Models

 - [LoginRequest](docs/Model/LoginRequest.md)
 - [LoginResponse](docs/Model/LoginResponse.md)
 - [MeResponse](docs/Model/MeResponse.md)


### Catalog 

All URIs are relative to *https://dev1.carooline.com/api/catalog*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CategoriesApi* | [**categoriesGet**](docs/Api/CategoriesApi.md#categoriesget) | **GET** /categories | Search Category by name
*CategoriesApi* | [**categoriesIdGet**](docs/Api/CategoriesApi.md#categoriesidget) | **GET** /categories/{id} | Get Category&#x27;s informations
*CategoriesApi* | [**categoriesSearchForVehiclePost**](docs/Api/CategoriesApi.md#categoriessearchforvehiclepost) | **POST** /categories/search_for_vehicle | Get Categories for Vehicle
*ForfaitsApi* | [**forfaitsGet**](docs/Api/ForfaitsApi.md#forfaitsget) | **GET** /forfaits | Search Forfait by name
*ForfaitsApi* | [**forfaitsIdGet**](docs/Api/ForfaitsApi.md#forfaitsidget) | **GET** /forfaits/{id} | Get Forfait&#x27;s informations
*ForfaitsCategoriesApi* | [**forfaitsCategoriesGet**](docs/Api/ForfaitsCategoriesApi.md#forfaitscategoriesget) | **GET** /forfaits_categories | Search Forfait Category by name
*ForfaitsCategoriesApi* | [**forfaitsCategoriesIdGet**](docs/Api/ForfaitsCategoriesApi.md#forfaitscategoriesidget) | **GET** /forfaits_categories/{id} | Get Forfait&#x27;s Category&#x27;s informations
*ManufacturerApi* | [**manufacturerGet**](docs/Api/ManufacturerApi.md#manufacturerget) | **GET** /manufacturer | Searh manufacturer by name
*ManufacturerApi* | [**manufacturerIdGet**](docs/Api/ManufacturerApi.md#manufactureridget) | **GET** /manufacturer/{id} | Get manufacturer&#x27;s informations
*ProductsApi* | [**productsGet**](docs/Api/ProductsApi.md#productsget) | **GET** /products | Search Product by name/ref/brand/categ_id
*ProductsApi* | [**productsGetAllAvailabilitiesPost**](docs/Api/ProductsApi.md#productsgetallavailabilitiespost) | **POST** /products/get_all_availabilities | 
*ProductsApi* | [**productsGetForVehicleAndCategoryPost**](docs/Api/ProductsApi.md#productsgetforvehicleandcategorypost) | **POST** /products/get_for_vehicle_and_category | Get Categories for Vehicle
*ProductsApi* | [**productsIdGet**](docs/Api/ProductsApi.md#productsidget) | **GET** /products/{id} | Get Products&#x27;s informations
*ProductsApi* | [**productsIdPut**](docs/Api/ProductsApi.md#productsidput) | **PUT** /products/{id} | Update product informations
*ProductsApi* | [**productsOmnisearchPost**](docs/Api/ProductsApi.md#productsomnisearchpost) | **POST** /products/omnisearch | Get Categories for Vehicle

#### Documentation For Models

 - [Forfait](docs/Model/Forfait.md)
 - [ForfaitCategory](docs/Model/ForfaitCategory.md)
 - [ForfaitCategorySearchResponse](docs/Model/ForfaitCategorySearchResponse.md)
 - [ForfaitCompanies](docs/Model/ForfaitCompanies.md)
 - [ForfaitSearchResponse](docs/Model/ForfaitSearchResponse.md)
 - [GetAllAvailabilitiesRequest](docs/Model/GetAllAvailabilitiesRequest.md)
 - [GetAllAvailabilitiesResponse](docs/Model/GetAllAvailabilitiesResponse.md)
 - [GetAllAvailabilitiesResponseAvailabilities](docs/Model/GetAllAvailabilitiesResponseAvailabilities.md)
 - [GetAllAvailabilitiesResponseStockLocations](docs/Model/GetAllAvailabilitiesResponseStockLocations.md)
 - [OmniSearchProductsRequest](docs/Model/OmniSearchProductsRequest.md)
 - [Product](docs/Model/Product.md)
 - [ProductCateg](docs/Model/ProductCateg.md)
 - [ProductCategory](docs/Model/ProductCategory.md)
 - [ProductCategorySearchResponse](docs/Model/ProductCategorySearchResponse.md)
 - [ProductCreateRequest](docs/Model/ProductCreateRequest.md)
 - [ProductCreateRequestManufacturer](docs/Model/ProductCreateRequestManufacturer.md)
 - [ProductLinkedVehicleTypes](docs/Model/ProductLinkedVehicleTypes.md)
 - [ProductManufacturer](docs/Model/ProductManufacturer.md)
 - [ProductManufacturerSearchResponse](docs/Model/ProductManufacturerSearchResponse.md)
 - [ProductOeReferencesList](docs/Model/ProductOeReferencesList.md)
 - [ProductSearchResponse](docs/Model/ProductSearchResponse.md)
 - [ProductUpdateRequest](docs/Model/ProductUpdateRequest.md)
 - [ProductVehicleSpecificities](docs/Model/ProductVehicleSpecificities.md)
 - [SearchCategoriesForVehicleRequest](docs/Model/SearchCategoriesForVehicleRequest.md)
 - [SearchProductsForVehicleAndCategoryRequest](docs/Model/SearchProductsForVehicleAndCategoryRequest.md)

### Sale Methods

All URIs are relative to *http://dev1.carooline.com/api/sale*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InvoicesApi* | [**invoicesGet**](docs/Api/InvoicesApi.md#invoicesget) | **GET** /invoices | Search Invoice by name/ref or partner&#x27;s id and state [&#x27;paid&#x27;,&#x27;open&#x27;]. Type [&#x27;out_invoice&#x27;, &#x27;in_invoice&#x27;] Invoice/Refund
*InvoicesApi* | [**invoicesIdGet**](docs/Api/InvoicesApi.md#invoicesidget) | **GET** /invoices/{id} | Get Invoice&#x27;s informations
*OrdersApi* | [**ordersCreatePost**](docs/Api/OrdersApi.md#orderscreatepost) | **POST** /orders/create | Create a new Order.  The partner is a mandatory information, it can either:     - Be referenced by giving a correct partner&#x27;s id     - Be created by giving at least a name
*OrdersApi* | [**ordersGet**](docs/Api/OrdersApi.md#ordersget) | **GET** /orders | Search Order by name/ref or partner&#x27;s id
*OrdersApi* | [**ordersIdConfirmPost**](docs/Api/OrdersApi.md#ordersidconfirmpost) | **POST** /orders/{id}/confirm | Confirm the Order. The state will be updated and the Order line are then frozen.
*OrdersApi* | [**ordersIdDelete**](docs/Api/OrdersApi.md#ordersiddelete) | **DELETE** /orders/{id} | Delete an Order and it&#x27;s lines. If a Payment Transaction is associated it will not be deleted.
*OrdersApi* | [**ordersIdGet**](docs/Api/OrdersApi.md#ordersidget) | **GET** /orders/{id} | Get Orders&#x27;s informations
*OrdersApi* | [**ordersIdPut**](docs/Api/OrdersApi.md#ordersidput) | **PUT** /orders/{id} | Update Order informations, lines, Payment Transaction, Partner.
*OrdersLinesApi* | [**ordersLinesCreatePost**](docs/Api/OrdersLinesApi.md#orderslinescreatepost) | **POST** /orders_lines/create | Create a new Order Line.
*OrdersLinesApi* | [**ordersLinesGet**](docs/Api/OrdersLinesApi.md#orderslinesget) | **GET** /orders_lines | Search Order Lines by Order&#x27;s Id (Required)
*OrdersLinesApi* | [**ordersLinesIdDelete**](docs/Api/OrdersLinesApi.md#orderslinesiddelete) | **DELETE** /orders_lines/{id} | Delete an Order line
*OrdersLinesApi* | [**ordersLinesIdGet**](docs/Api/OrdersLinesApi.md#orderslinesidget) | **GET** /orders_lines/{id} | Get Orders&#x27;s informations
*OrdersLinesApi* | [**ordersLinesIdPut**](docs/Api/OrdersLinesApi.md#orderslinesidput) | **PUT** /orders_lines/{id} | Update an Order Line
*PartnersApi* | [**partnersCreatePost**](docs/Api/PartnersApi.md#partnerscreatepost) | **POST** /partners/create | Create a new Partner.
*PartnersApi* | [**partnersGet**](docs/Api/PartnersApi.md#partnersget) | **GET** /partners | Search Partner by Ref, Name or Email
*PartnersApi* | [**partnersIdDelete**](docs/Api/PartnersApi.md#partnersiddelete) | **DELETE** /partners/{id} | Delete a Partner
*PartnersApi* | [**partnersIdGet**](docs/Api/PartnersApi.md#partnersidget) | **GET** /partners/{id} | Get Partners&#x27;s informations
*PartnersApi* | [**partnersIdPut**](docs/Api/PartnersApi.md#partnersidput) | **PUT** /partners/{id} | Update Partner informations
*PaymentTransactionsApi* | [**paymentTransactionsCreatePost**](docs/Api/PaymentTransactionsApi.md#paymenttransactionscreatepost) | **POST** /payment_transactions/create | Create a new PaymentTransaction.
*PaymentTransactionsApi* | [**paymentTransactionsGet**](docs/Api/PaymentTransactionsApi.md#paymenttransactionsget) | **GET** /payment_transactions | Search PaymentTransaction by reference, partner_id or order_id
*PaymentTransactionsApi* | [**paymentTransactionsIdDelete**](docs/Api/PaymentTransactionsApi.md#paymenttransactionsiddelete) | **DELETE** /payment_transactions/{id} | Delete Payment Transaction
*PaymentTransactionsApi* | [**paymentTransactionsIdGet**](docs/Api/PaymentTransactionsApi.md#paymenttransactionsidget) | **GET** /payment_transactions/{id} | Get Payment Transactions
*PaymentTransactionsApi* | [**paymentTransactionsIdPut**](docs/Api/PaymentTransactionsApi.md#paymenttransactionsidput) | **PUT** /payment_transactions/{id} | Update PaymentTransaction informations
*PricelistsApi* | [**pricelistsGet**](docs/Api/PricelistsApi.md#pricelistsget) | **GET** /pricelists | Search Pricelists by name.
*PricelistsApi* | [**pricelistsIdGet**](docs/Api/PricelistsApi.md#pricelistsidget) | **GET** /pricelists/{id} | Get Pricelists&#x27;s informations

#### Documentation For Models

- [Invoice](docs/Model/Invoice.md)
- [InvoiceLine](docs/Model/InvoiceLine.md)
- [InvoiceSearchResponse](docs/Model/InvoiceSearchResponse.md)
- [Order](docs/Model/Order.md)
- [OrderCarrier](docs/Model/OrderCarrier.md)
- [OrderCreateRequest](docs/Model/OrderCreateRequest.md)
- [OrderCreateRequestOrderLine](docs/Model/OrderCreateRequestOrderLine.md)
- [OrderLine](docs/Model/OrderLine.md)
- [OrderLineCreateRequest](docs/Model/OrderLineCreateRequest.md)
- [OrderLineSearchResponse](docs/Model/OrderLineSearchResponse.md)
- [OrderLineUpdateRequest](docs/Model/OrderLineUpdateRequest.md)
- [OrderPaymentTransaction](docs/Model/OrderPaymentTransaction.md)
- [OrderSearchResponse](docs/Model/OrderSearchResponse.md)
- [OrderUpdateRequest](docs/Model/OrderUpdateRequest.md)
- [Partner](docs/Model/Partner.md)
- [PartnerCreateRequest](docs/Model/PartnerCreateRequest.md)
- [PartnerSearchResponse](docs/Model/PartnerSearchResponse.md)
- [PartnerUpdateRequest](docs/Model/PartnerUpdateRequest.md)
- [PaymentTransaction](docs/Model/PaymentTransaction.md)
- [PaymentTransactionCreateRequest](docs/Model/PaymentTransactionCreateRequest.md)
- [PaymentTransactionSearchResponse](docs/Model/PaymentTransactionSearchResponse.md)
- [PaymentTransactionUpdateRequest](docs/Model/PaymentTransactionUpdateRequest.md)
- [Pricelist](docs/Model/Pricelist.md)
- [PricelistItem](docs/Model/PricelistItem.md)
- [PricelistSearchResponse](docs/Model/PricelistSearchResponse.md)


### CRM

All URIs are relative to *https://dev1.carooline.com/api/crm*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CrmLeadsApi* | [**crmLeadsCreatePost**](docs/Api/CrmLeadsApi.md#crmleadscreatepost) | **POST** /crm_leads/create | Create a new Crm Lead.
*CrmLeadsApi* | [**crmLeadsGet**](docs/Api/CrmLeadsApi.md#crmleadsget) | **GET** /crm_leads | Search CrmLead by Name(Subject) or Emailfrom
*CrmLeadsApi* | [**crmLeadsIdDelete**](docs/Api/CrmLeadsApi.md#crmleadsiddelete) | **DELETE** /crm_leads/{id} | Delete a Crm Lead
*CrmLeadsApi* | [**crmLeadsIdGet**](docs/Api/CrmLeadsApi.md#crmleadsidget) | **GET** /crm_leads/{id} | Get CrmLead&#x27;s informations
*CrmLeadsApi* | [**crmLeadsIdPut**](docs/Api/CrmLeadsApi.md#crmleadsidput) | **PUT** /crm_leads/{id} | Update Crm Lead informations

#### Documentation For Models

 - [CrmLead](docs/Model/CrmLead.md)
 - [CrmLeadCreateRequest](docs/Model/CrmLeadCreateRequest.md)
 - [CrmLeadSearchResponse](docs/Model/CrmLeadSearchResponse.md)
 - [CrmLeadUpdateRequest](docs/Model/CrmLeadUpdateRequest.md)


### Vehicles

 All URIs are relative to *https://dev1.carooline.com/api/vehicles*

 Class | Method | HTTP request | Description
 ------------ | ------------- | ------------- | -------------
 *VehicleFindApi* | [**vehicleFindManufacturerGet**](docs/Api/VehicleFindApi.md#vehiclefindmanufacturerget) | **GET** /vehicle_find/manufacturer | Searh manufacturer by name
 *VehicleFindApi* | [**vehicleFindManufacturerManufacturerIdModelGet**](docs/Api/VehicleFindApi.md#vehiclefindmanufacturermanufactureridmodelget) | **GET** /vehicle_find/manufacturer/{manufacturer_id}/model | Searh model by name
 *VehicleFindApi* | [**vehicleFindManufacturerManufacturerIdModelModelIdTypeGet**](docs/Api/VehicleFindApi.md#vehiclefindmanufacturermanufactureridmodelmodelidtypeget) | **GET** /vehicle_find/manufacturer/{manufacturer_id}/model/{model_id}/type | Searh Type by name
 *VehicleManufacturerApi* | [**vehicleManufacturerGet**](docs/Api/VehicleManufacturerApi.md#vehiclemanufacturerget) | **GET** /vehicle_manufacturer | Searh manufacturer by name
 *VehicleManufacturerApi* | [**vehicleManufacturerIdGet**](docs/Api/VehicleManufacturerApi.md#vehiclemanufactureridget) | **GET** /vehicle_manufacturer/{id} | Get manufacturer&#x27;s informations
 *VehicleModelApi* | [**vehicleModelGet**](docs/Api/VehicleModelApi.md#vehiclemodelget) | **GET** /vehicle_model | Searh model by name
 *VehicleModelApi* | [**vehicleModelIdGet**](docs/Api/VehicleModelApi.md#vehiclemodelidget) | **GET** /vehicle_model/{id} | Get model&#x27;s informations
 *VehicleTypeApi* | [**vehicleTypeGet**](docs/Api/VehicleTypeApi.md#vehicletypeget) | **GET** /vehicle_type | Searh type by name
 *VehicleTypeApi* | [**vehicleTypeIdGet**](docs/Api/VehicleTypeApi.md#vehicletypeidget) | **GET** /vehicle_type/{id} | Get type&#x27;s informations

 #### Documentation For Models

  - [FindVehicleManufacturerModelSearchResponse](docs/Model/FindVehicleManufacturerModelSearchResponse.md)
  - [FindVehicleManufacturerModelTypeSearchResponse](docs/Model/FindVehicleManufacturerModelTypeSearchResponse.md)
  - [FindVehicleManufacturerSearchResponse](docs/Model/FindVehicleManufacturerSearchResponse.md)
  - [VehicleManufacturer](docs/Model/VehicleManufacturer.md)
  - [VehicleManufacturerSearchResponse](docs/Model/VehicleManufacturerSearchResponse.md)
  - [VehicleModel](docs/Model/VehicleModel.md)
  - [VehicleModelSearchResponse](docs/Model/VehicleModelSearchResponse.md)
  - [VehicleType](docs/Model/VehicleType.md)
  - [VehicleTypeSearchResponse](docs/Model/VehicleTypeSearchResponse.md)

 #### Example:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$client = new GuzzleHttp\Client();
$config = new Carooline\Configuration();
$config->setHost('https://dev1.carooline.com/api');

// Authenticate to get new Token
$authApi = new Carooline\Api\AuthApi(
 $client,
 $config
);
$body = new Carooline\Model\LoginRequest([
 'login' => 'login',
 'password' => 'password'
]);
$result = $authApi->authLoginPost($body);
$token = $result->getToken();

// Setting token for subscequent requests
$config->setAccessToken($token);

// VehicleFindAPI
$vehicleFindApi = new Carooline\Api\VehicleFindApi(
  $client,
  $config
);
$manufacturer_model = "PEUGEOT"; // string | 
try {
  $result = $vehicleFindApi->vehicleFindManufacturerGet($manufacturer_model);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling VehicleFindApi->vehicleFindManufacturerGet: ', $e->getMessage(), PHP_EOL;
}


$model_name = "206"; // string | 
$manufacturer_id = 31;
try {
  $result = $vehicleFindApi->vehicleFindManufacturerManufacturerIdModelGet($manufacturer_id, $model_name);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling VehicleFindApi->vehicleFindManufacturerManufacturerIdModelGet: ', $e->getMessage(), PHP_EOL;
}


$type_name = "";
$manufacturer_id = 31;
$model_id = 3546;
try {
  $result = $vehicleFindApi->vehicleFindManufacturerManufacturerIdModelModelIdTypeGet($manufacturer_id, $model_id, $type_name);
  print_r($result);
} catch (Exception $e) {
  echo 'Exception when calling VehicleFindApi->vehicleFindManufacturerManufacturerIdModelModelIdTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

## Documentation For Authorization
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$client = new GuzzleHttp\Client();
$config = new Carooline\Configuration();
$config->setHost('https://dev1.carooline.com/api');

// Authenticate to get new Token
$authApi = new Carooline\Api\AuthApi(
    $client,
    $config
);
$body = new Carooline\Model\LoginRequest([
    'login' => 'login',
    'password' => 'password'
]);
$result = $authApi->authLoginPost($body);
$token = $result->getToken();

// Setting token for subscequent requests
$config->setAccessToken($token);
```

## bearerAuth

- **Type**: HTTP bearer authentication


## Author

Philippe L'ATTENTION - SOGEXIS
