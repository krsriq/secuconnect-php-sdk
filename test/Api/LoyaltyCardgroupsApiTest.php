<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\LoyaltyCardgroupsList;
use Secuconnect\Client\Model\LoyaltyCardgroupsProductModel;

/**
 * Class LoyaltyCardgroupsApiTest
 */
class LoyaltyCardgroupsApiTest extends TestCase
{
    private static ?LoyaltyCardgroupsApi $api;

    private static ?SecuconnectObjects $instance;

    private static LoyaltyCardgroupsList $cardgroupsList;

    /**
     * Setup before running any test cases
     * @throws ApiException
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new LoyaltyCardgroupsApi();
    }

    /**
     * Test case for loyaltyCardgroupsGet
     *
     * GET Loyalty/Cardgroups.
     *
     * @throws ApiException
     */
    public function testLoyaltyCardgroupsGet()
    {
        try {
            $response = self::$api->getAll();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(LoyaltyCardgroupsList::class, $response);
        $this->assertIsInt($response->getCount());

        self::$cardgroupsList = $response; // save data for next tests

        foreach ($response->getData() as $cardgroup) {
            $this->assertInstanceOf(LoyaltyCardgroupsProductModel::class, $cardgroup);
            $this->assertEquals('loyalty.cardgroups', $cardgroup->getObject());
            $this->assertNotEmpty($cardgroup->getId());
            $this->assertNotEmpty($cardgroup->getDisplayName());
            $this->assertNotEmpty($cardgroup->getDisplayNameRaw());
            $this->assertNotNull($cardgroup->getStockWarnLimit());
            $this->assertNotEmpty($cardgroup->getMerchant());
            $this->assertNotEmpty($cardgroup->getMerchant()->getId());
        }
    }

    /**
     * Test case for loyaltyCardgroupsGetById
     *
     * GET Loyalty/Cardgroups/{id}.
     *
     * @throws ApiException
     */
    public function testLoyaltyCardgroupsGetById()
    {
        $response = self::$api->getOne(self::$cardgroupsList->getData()[0]->getId());
        $this->assertNotEmpty($response);
        $this->assertInstanceOf(LoyaltyCardgroupsProductModel::class, $response);

        $this->assertEquals('loyalty.cardgroups', $response->getObject());
        $this->assertNotEmpty($response->getId());
        $this->assertNotEmpty($response->getDisplayName());
        $this->assertNotEmpty($response->getDisplayNameRaw());
        $this->assertNotNull($response->getStockWarnLimit());
        $this->assertNotEmpty($response->getMerchant());
        $this->assertNotEmpty($response->getMerchant()->getId());
    }

    /**
     * Test case for loyaltyCardgroupsIdCheckPasscodeEnabledPost
     *
     * POST Loyalty/Cardgroups/{id}/checkPasscodeEnabled.
     *
     * @throws ApiException
     */
    public function testLoyaltyCardgroupsIdCheckPasscodeEnabledPost()
    {
        $response = self::$api->checkPassCodeEnabled(self::$cardgroupsList->getData()[0]->getId(), null);
        $this->assertNotEmpty($response);
        $this->assertTrue(true);
    }
}
