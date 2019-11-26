<?php
/**
 * PartnersApiTest
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
use Carooline\Api\PartnersApi;
use Carooline\Model\LoginRequest;
use Carooline\Model\PartnerUpdateRequest;
use Carooline\Model\PartnerCreateRequest;

/**
 * PartnersApiTest Class Doc Comment
 *
 * @category Class
 * @package  Carooline
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PartnersApiTest extends \PHPUnit\Framework\TestCase
{

    protected static $client;
    protected static $config;
    protected $partnerApi;

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
        $this->partnerApi = new PartnersApi(
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
     * Test case for partnersGet
     *
     * Search Partner by Ref, Name or Email.
     *
     */
    public function testPartnersGet()
    {
        $result = $this->partnerApi->partnersGet("philippe@sogexis.fr");
        $this->assertInstanceOf(\Carooline\Model\PartnerSearchResponse::class, $result);
        $this->assertGreaterThanOrEqual(1, $result->getCount());
        foreach ($result->getRows() as $partner) {
            $this->assertInstanceOf(\Carooline\Model\Partner::class, $partner);
            $this->assertStringContainsStringIgnoringCase("philippe@sogexis.fr", $partner->getEmail());
        }
    }

    /**
     * Test case for partnersIdGet
     *
     * Get Partners's informations.
     *
     */
    public function testPartnersIdGet()
    {
        $result = $this->partnerApi->partnersIdGet(31);
        $this->assertInstanceOf(\Carooline\Model\Partner::class, $result);
        $this->assertEquals(31, $result->getId());
        $this->assertStringContainsStringIgnoringCase("philippe@sogexis.fr", $result->getEmail());
    }


    /**
     * Test case for partnersIdPut
     *
     * Update Partner informations.
     *
     */
    public function testPartnersIdPut()
    {
        $body = new PartnerUpdateRequest(['phone' => "06060606008"]);
        $result = $this->partnerApi->partnersIdPut(31, $body);
        $this->assertInstanceOf(\Carooline\Model\Partner::class, $result);
        $this->assertEquals(31, $result->getId());
        $this->assertEquals("06060606008", $result->getPhone());
        
        $body = new PartnerUpdateRequest(['phone' => "0693 12 12 12"]);
        $result = $this->partnerApi->partnersIdPut(31, $body);
        $this->assertInstanceOf(\Carooline\Model\Partner::class, $result);
        $this->assertEquals(31, $result->getId());
        $this->assertEquals("0693 12 12 12", $result->getPhone());
    }


    /**
     * Test case for partnersCreatePost
     *
     * Create a new Partner..
     *
     */
    public function testPartnersCreatePost()
    {
        $body = new PartnerCreateRequest([
            'city' => 'Paris',
            'street' => '21 Rue du test',
            'name' => "Philippe L'ATTENTION API",
            'phone' => '00123456789',
            'mobile' => '987654432100',
            'country' => 'France',
            'street2' => 'Street 2',
            'email' => 'philippe-api@sogexis.fr'
        ]);

        $result = $this->partnerApi->partnersCreatePost($body);
        $this->assertInstanceOf(\Carooline\Model\Partner::class, $result);
        $this->assertEquals("Paris", $result->getCity());
        $this->assertEquals("21 Rue du test", $result->getStreet());
        $this->assertStringContainsStringIgnoringCase("Philippe L'ATTENTION API", $result->getName());
        $this->assertEquals("00123456789", $result->getPhone());
        $this->assertEquals("987654432100", $result->getMobile());
        $this->assertEquals("France", $result->getCountry());
        $this->assertEquals("Street 2", $result->getStreet2());
        $this->assertEquals("philippe-api@sogexis.fr", $result->getEmail());
        $this->assertIsInt($result->getId());
    }


    /**
     * Test case for partnersIdDelete
     *
     * Delete a Partner.
     *
     */
    public function testPartnersIdDelete()
    {
        $result = $this->partnerApi->partnersGet("philippe-api@sogexis.fr");
        foreach ($result->getRows() as $partner) {
            $result = $this->partnerApi->partnersIdDelete($partner->getId());
        }
        $result = $this->partnerApi->partnersGet("philippe-api@sogexis.fr");
        $this->assertInstanceOf(\Carooline\Model\PartnerSearchResponse::class, $result);
        $this->assertGreaterThanOrEqual(0, $result->getCount());
    }
}
