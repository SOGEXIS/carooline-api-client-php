<?php
/**
 * CategoriesApiTest
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
use Carooline\Configuration;
use Carooline\ApiException;
use Carooline\ObjectSerializer;
use Carooline\Api\AuthApi;
use Carooline\Api\CategoriesApi;
use Carooline\Model\LoginRequest;

/**
 * CategoriesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoriesApiTest extends \PHPUnit\Framework\TestCase
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
     * Test case for categoriesGet
     *
     * Search Category by name.
     *
     */
    public function testCategoriesGet()
    {
        $categoriesApi = new CategoriesApi(
            self::$client,
            self::$config
        );
        $result = $categoriesApi->categoriesGet("Filtre à air");
        $this->assertInstanceOf(\Carooline\Model\ProductCategorySearchResponse::class, $result);
        $this->assertGreaterThanOrEqual(1, $result->getCount());
    }

    /**
     * Test case for categoriesIdGet
     *
     * Get Category's informations.
     *
     */
    public function testCategoriesIdGet()
    {
        $categoriesApi = new CategoriesApi(
            self::$client,
            self::$config
        );
        $result = $categoriesApi->categoriesIdGet(2246);
        $this->assertInstanceOf(\Carooline\Model\ProductCategory::class, $result);
        $this->assertEquals(2246, $result->getId());
        $this->assertEquals("Pièces / Filtre / Filtre à air", $result->getDisplayName());
        
    }
}
