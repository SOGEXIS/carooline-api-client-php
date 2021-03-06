<?php
/**
 * ForfaitsCategoriesApiTest
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
use Carooline\Model\ForfaitCategory;
use Carooline\Model\ForfaitCategorySearchResponse;
use Carooline\Api\ForfaitsCategoriesApi;

/**
 * ForfaitsCategoriesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ForfaitsCategoriesApiTest extends \PHPUnit\Framework\TestCase
{
    protected static $client;
    protected static $config;
    protected $forfaitCategoriesApi;

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
        $this->forfaitCategoriesApi = new ForfaitsCategoriesApi(
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
     * Test case for forfaitsCategoriesGet
     *
     * Search Forfait Category by name.
     *
     */
    public function testForfaitsCategoriesGet()
    {
        $result = $this->forfaitCategoriesApi->forfaitsCategoriesGet("Révision");
        $this->assertInstanceOf(ForfaitCategorySearchResponse::class, $result);
        $this->assertEquals(1, $result->getCount());
        foreach ($result->getRows() as $forfaitCategory) {
            $this->assertInstanceOf(ForfaitCategory::class, $forfaitCategory);
            $this->assertStringContainsStringIgnoringCase("Révision", $forfaitCategory->getName());
        }
    }

    /**
     * Test case for forfaitsCategoriesIdGet
     *
     * Get Forfait's Category's informations.
     *
     */
    public function testForfaitsCategoriesIdGet()
    {
        $result = $this->forfaitCategoriesApi->forfaitsCategoriesIdGet(1);
        $this->assertInstanceOf(ForfaitCategory::class, $result);
        $this->assertStringContainsStringIgnoringCase("Révision", $result->getName());
        $this->assertEquals(1, $result->getid());
    }
}
