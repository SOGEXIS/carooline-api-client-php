<?php
/**
 * ForfaitsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * catalog REST services
 *
 * Get or Update Catalog
 *
 * OpenAPI spec version: 0.0.0.1
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
use Carooline\Api\AuthApi;
use Carooline\Configuration;
use Carooline\ApiException;
use Carooline\ObjectSerializer;
use Carooline\Model\LoginRequest;
use Carooline\Model\Forfait;
use Carooline\Model\ForfaitLine;
use Carooline\Model\ForfaitSearchResponse;
use Carooline\Api\ForfaitsApi;

/**
 * ForfaitsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ForfaitsApiTest extends \PHPUnit\Framework\TestCase
{
    protected static $client;
    protected static $config;
    protected $forfaitApi;

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
        $this->forfaitApi = new ForfaitsApi(
            self::$client,
            self::$config
        );
    }


    /**
     * Clean up after running each test case
     */
    protected function tearDown() : void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass() : void
    {
    }

    /**
     * Test case for forfaitsGet
     *
     * Search Forfait by name.
     *
     */
    public function testForfaitsGet()
    {
        $result = $this->forfaitApi->forfaitsGet();
        $this->assertInstanceOf(ForfaitSearchResponse::class, $result);
        $this->assertGreaterThanOrEqual(1, $result->getCount());
        foreach ($result->getRows() as $forfait) {
            $this->assertInstanceOf(Forfait::class, $forfait);
        }
    }

    /**
     * Test case for forfaitsIdGet
     *
     * Get Forfait's informations.
     *
     */
    public function testForfaitsIdGet()
    {
        $result = $this->forfaitApi->forfaitsIdGet(1);
        $this->assertInstanceOf(Forfait::class, $result);
        $this->assertStringContainsStringIgnoringCase("Montage pneu", $result->getName());
        $this->assertEquals(75.00, $result->getPriceFromHt());
        $this->assertEquals("FO0001", $result->getCode());
        foreach ($result->getLines() as $forfaitLine) {
            $this->assertInstanceOf(ForfaitLine::class, $forfaitLine);
            $this->assertEquals(1, $forfaitLine->getQuantity());
            $this->assertGreaterThan(1, $forfaitLine->getProductId());
            $this->assertStringContainsStringIgnoringCase("Montage pneu", $forfaitLine->getName());
        }
    }
}
