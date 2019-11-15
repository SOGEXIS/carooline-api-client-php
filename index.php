<?php 
require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;

$host = 'https://sfpr-pre-prod.carooline.com/api';
$client = new Client([
    'headers' => [ 'Content-Type' => 'application/json' ]
]);

$headers = [];
$queryParams = [];
$headers['Content-Type'] = 'application/json';
$resourcePath = "/commons/auth/login";


$httpBody = new stdClass;
$httpBody->login = 'sfpr-api@carooline.com';
$httpBody->password = '$Fp@P1_R';
// 
// $httpBody = \GuzzleHttp\json_encode($httpBody);
// // var_dump($httpBody);
// // 
// // $response = $client->post(
// //     'https://sfpr-pre-prod.carooline.com/api/commons/auth/login',
// //     ['body' => $httpBody]
// // );
// // var_dump($response);
// 
// $query = \GuzzleHttp\Psr7\build_query($queryParams);
// 
// $request= new Request(
//     'POST',
//     $host . $resourcePath,
//     $headers,
//     $httpBody
// );
// $options = [];

// $response = $client->send($request, $options);
// $statusCode = $response->getStatusCode();
// if ($statusCode < 200 || $statusCode > 299) {
//     // ERROR
//     var_dump($response);
//     exit();
// }
// $responseBody = $response->getBody();
// $content = $responseBody->getContents();
// $content = json_decode($content);
// 
// $token = $content->token;
// var_dump($token);

// $authApi = new Carooline\Api\AuthApi(
//     $client
// );
// 
// $body = new Carooline\Model\LoginRequest([
//     'login' => 'sfpr-api@carooline.com',
//     'password' => '$Fp@P1_R'
// ]);
// 
// $result = $authApi->authLoginPost($body);
// print_r($result);

$config = new Carooline\Configuration();
$config->setAccessToken("eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX3Blcm1pc3Npb25zIjpbImJhc2UucmVzdC5qd3QuYXV0aC5zZXJ2aWNlcyIsInNvLmNhcm9vbGluZS5jYXRhbG9nLnByaXZhdGUiLCJzby5jYXJvb2xpbmUuc2FsZS5wcml2YXRlIl0sInVzZXJfaWQiOjM2OSwiZXhwIjoxNTc0MTc5MDMxfQ.-e2E0Hcsv_gJebRvRXEzPINcM0dms4ufi33Hcsi2c0k");
// $apiInstance = new Carooline\Api\OrdersApi(
//     new GuzzleHttp\Client()
// );

$apiInstance = new Carooline\Api\PartnersApi(
    new GuzzleHttp\Client([
        'headers' => ['Content-Type' => 'application/x-www-form-urlencoded']
    ]),
    $config
);

$result = $apiInstance->partnersIdGet(21285);
print_r($result);



$response = $client->put(
    'https://sfpr-pre-prod.carooline.com/api/sale/partners/21285',
    ['form_params' => ['email' => 'test@test.test']]
);
// 
// // $body = new Carooline\Model\PartnerUpdateRequest(['email' => 'test@test.test']);
// $result = $apiInstance->partnersIdPut(
//     21285,
//     new Carooline\Model\PartnerUpdateRequest(['email' => 'test@test.test'])
// );
// print_r($result);
?>