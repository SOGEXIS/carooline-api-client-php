<?php
/**
 * DeliveryCarrierApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sale REST services
 *
 * Get or Update Sales
 *
 * OpenAPI spec version: 0.1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Carooline;

use GuzzleHttp\Client;
use Carooline\Configuration;
use Carooline\ApiException;
use Carooline\ObjectSerializer;
use Carooline\Api\AuthApi;
use Carooline\Api\DeliveryCarrierApi;
use Carooline\Model\LoginRequest;


/**
 * DeliveryCarrierApiTest Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeliveryCarrierApiTest extends \PHPUnit\Framework\TestCase
{
    protected static $client;
    protected static $config;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass() : void
    {
        self::$client = new Client();
        self::$config = new Configuration();
        self::$config->setHost($_ENV['api_host']);

        $authApi = new AuthApi(
            self::$client,
            self::$config
        );
        $body = new LoginRequest([
            'login' => $_ENV['api_login'],
            'password' => $_ENV['api_password']
        ]);

        $result = $authApi->authLoginPost($body);
        $token = $result->getToken();
        self::$config->setAccessToken($token);
    }

    /**
     * Setup before running each test case
     */
    protected function setUp() : void
    {
        $this->deliveryCarrierApi = new DeliveryCarrierApi(
            self::$client,
            self::$config
        );
    }

    /**
     * Test case for deliveryCarrierGet
     *
     * Search Delivery Carrier by name..
     *
     */
    public function testDeliveryCarrierGet()
    {
        $result = $this->deliveryCarrierApi->deliveryCarrierGet();
        $this->assertInstanceOf(\Carooline\Model\DeliveryCarrierSearchResponse::class, $result);
        $this->assertGreaterThanOrEqual(13, $result->getCount());
        
        $result = $this->deliveryCarrierApi->deliveryCarrierGet("Colissi");
        $this->assertInstanceOf(\Carooline\Model\DeliveryCarrierSearchResponse::class, $result);
        $this->assertEquals(5, $result->getCount());
        
        $result = $this->deliveryCarrierApi->deliveryCarrierGet("Colissimo domicile");
        $this->assertInstanceOf(\Carooline\Model\DeliveryCarrierSearchResponse::class, $result);
        $this->assertEquals(1, $result->getCount());
    }

    /**
     * Test case for deliveryCarrierIdGet
     *
     * Get Delivery Carrier's informations.
     *
     */
    public function testDeliveryCarrierIdGet()
    {
        $deliveryCarrier = $this->deliveryCarrierApi->deliveryCarrierIdGet(5);
        $this->assertInstanceOf(\Carooline\Model\DeliveryCarrier::class, $deliveryCarrier);
        $this->assertEquals("Chronopost express", $deliveryCarrier->getName());
        $this->assertEquals(24, $deliveryCarrier->getPartnerId());
        $this->assertEquals(72872, $deliveryCarrier->getDeliveryProductId());
    }
}
