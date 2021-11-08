<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\PrepaidItemsList;
use Secuconnect\Client\Model\PrepaidItemsProductModel;

/**
 * Class PrepaidItemsApiTest
 */
class PrepaidItemsApiTest extends TestCase
{
    private static PrepaidItemsApi $api;

    private static SecuconnectObjects $secuconnectObjects;

    private static PrepaidItemsList $prepaidItemsList;

    /**
     * Setup before running any test cases
     * @throws ApiException
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$secuconnectObjects = SecuconnectObjects::getInstance();
        self::$secuconnectObjects->authenticateByApplicationUser();
        self::$api = new PrepaidItemsApi();
    }

    /**
     * Test case for getAll
     *
     * GET Prepaid/Items.
     *
     * @throws ApiException
     */
    public function testGetAll()
    {
        try {
            $response = self::$api->getAll();
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        self::assertNotNull($response);
        self::assertNotEmpty($response);
        self::assertInstanceOf(PrepaidItemsList::class, $response);

        foreach ($response->getData() as $item) {
            self::assertInstanceOf(PrepaidItemsProductModel::class, $item);
            self::assertEquals("prepaid.items", $item->getObject());
            self::assertNotNull($item->getId());
            self::assertNotEmpty($item->getId());
        }

        //save this list for future tests
        self::$prepaidItemsList = $response;
    }

    /**
     * Test case for getOne
     *
     * GET Prepaid/Items/{prepaidItemId}.
     *
     * @throws ApiException
     */
    public function testGetOne()
    {
        try {
            $response = self::$api->getOne(self::$prepaidItemsList->getData()[0]->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        self::assertInstanceOf(PrepaidItemsProductModel::class, $response);
        self::assertEquals("prepaid.items", $response->getObject());
        self::assertNotNull($response->getId());
        self::assertNotEmpty($response->getId());
    }
}
