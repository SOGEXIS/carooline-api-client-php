<?php
/**
 * PricelistsApiTest
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
 use Carooline\Api\PricelistsApi;
 use Carooline\Model\LoginRequest;
 use Carooline\Model\Pricelist;
 use Carooline\Model\PricelistItem;
 use Carooline\Model\PricelistSearchResponse;

/**
 * PricelistsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PricelistsApiTest extends \PHPUnit\Framework\TestCase
{

    protected static $client;
    protected static $config;
    protected $pricelistApi;

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
        $this->pricelistApi = new PricelistsApi(
            self::$client,
            self::$config
        );
    }

    /**
     * Test case for pricelistsGet
     *
     * Search Pricelists by name..
     *
     */
    public function testPricelistsGet()
    {
        $result = $this->pricelistApi->pricelistsGet();
        $this->assertInstanceOf(PricelistSearchResponse::class, $result);
        $this->assertEquals(5, $result->getCount());
        foreach ($result->getRows() as $pricelist) {
            $this->assertInstanceOf(\Carooline\Model\Pricelist::class, $pricelist);
        }
        
        $result = $this->pricelistApi->pricelistsGet("catal");
        $this->assertInstanceOf(PricelistSearchResponse::class, $result);
        $this->assertEquals(1, $result->getCount());
        foreach ($result->getRows() as $pricelist) {
            $this->assertInstanceOf(\Carooline\Model\Pricelist::class, $pricelist);
            $this->assertEquals("2019-12-03", $pricelist->getDateEnd());
            $this->assertEquals("2012-12-04", $pricelist->getDateStart());
            $this->assertEquals(8, $pricelist->getId());
            $this->assertEquals(8, $pricelist->getVersionId());
            $this->assertEquals("Liste de prix catalogue", $pricelist->getName());
        }
    }

    /**
     * Test case for pricelistsIdGet
     *
     * Get Pricelists's informations.
     *
     */
    public function testPricelistsIdGet()
    {
        $pricelist = $this->pricelistApi->pricelistsIdGet(8);
        $this->assertInstanceOf(\Carooline\Model\Pricelist::class, $pricelist);
        $this->assertEquals("2019-12-03", $pricelist->getDateEnd());
        $this->assertEquals("2012-12-04", $pricelist->getDateStart());
        $this->assertEquals(8, $pricelist->getId());
        $this->assertEquals(8, $pricelist->getVersionId());
        $this->assertEquals("Liste de prix catalogue", $pricelist->getName());
        foreach ($pricelist->getPricelistItems() as $pricelistItem) {
            $this->assertInstanceOf(\Carooline\Model\PricelistItem::class, $pricelistItem);
            if ($pricelistItem->getManufacturerId()) {
                $this->assertEquals(3494, $pricelistItem->getManufacturerId());
            }
        }

    }
}