<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\DayTime;
use Secuconnect\Client\Model\GeneralStoresDTOReason;
use Secuconnect\Client\Model\GeneralStoresDTOType;
use Secuconnect\Client\Model\GeneralStoresProductModel;
use Secuconnect\Client\Model\OpenHours;

/**
 * Class GeneralStoresApiTest
 */
class GeneralStoresApiTest extends TestCase
{
    private static ?GeneralStoresApi $api;

    private static ?SecuconnectObjects $instance;

    /**
     * Setup before running all test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new GeneralStoresApi();
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
        self::$instance = null;
        self::$api = null;
        parent::tearDownAfterClass();
    }

    /**
     * Test case for getting list of General Stores.
     *
     * @throws ApiException
     */
    public function testGetListOfGeneralStores(): ?GeneralStoresProductModel
    {
        $response = self::$api->getAll();
        $numberOfStores = $response->getCount();

        if ($numberOfStores > 0) {
            $stores = $response->getData();

            foreach ($stores as $store) {
                $this->assertInstanceOf(GeneralStoresProductModel::class, $store);
                $this->assertNotEmpty($store);
                $this->assertEquals("general.stores", $store->getObject());
                $this->assertNotFalse(strpos($store->getId(), "STO_"));
                $this->assertTrue(is_numeric($store->getIdOld()));
                $this->assertNotEmpty($store->getName());
                $this->assertNotEmpty($store->getNameRaw());
                $this->assertNotEmpty($store->getFacebookId());
                $this->assertTrue(is_bool($store->getHasBeacon()));
                $this->assertNotEmpty($store->getPhoneNumberFormatted());
                $this->assertNotEmpty($store->getUrlWebsite());

                $merchant = $store->getMerchant();
                $this->assertEquals("general.merchants", $merchant->getObject());
                $this->assertNotFalse(strpos($merchant->getId(), "MRC_"));

                $openHours = $store->getOpenHours();

                if (!empty($openHours) && sizeof($openHours) > 0) {
                    foreach ($openHours as $openHour) {
                        $this->assertInstanceOf(OpenHours::class, $openHour);

                        $open = $openHour->getOpen();
                        $this->assertInstanceOf(DayTime::class, $open);
                        $this->assertTrue(is_numeric($open->getDay()));
                        $this->assertNotEmpty($open->getTime());

                        $close = $openHour->getClose();
                        $this->assertInstanceOf(DayTime::class, $close);
                        $this->assertTrue(is_numeric($close->getDay()));
                        $this->assertNotEmpty($close->getTime());
                    }
                }
            }
        }

        return $numberOfStores > 0 ? $response->getData()[0] : null;
    }

    /**
     * Test case for getting one General Store by provided id.
     *
     * @depends testGetListOfGeneralStores
     * @param GeneralStoresProductModel|null $store
     * @return string
     * @throws ApiException
     */
    public function testGetOneGeneralStoreByProvidedId(?GeneralStoresProductModel $store): string
    {
        if ($store !== null) {
            $response = self::$api->getOne($store->getId());

            if (!empty($response)) {
                $receivedStore = $response;

                $this->assertInstanceOf(
                    GeneralStoresProductModel::class,
                    $receivedStore
                );
                $this->assertEquals($store, $receivedStore);
                $this->assertEquals($store->getMerchant(), $receivedStore->getMerchant());

                $openHours = $store->getOpenHours();
                $receivedOpenHours = $receivedStore->getOpenHours();

                if (sizeof($openHours) === sizeof($receivedOpenHours)) {
                    for ($i = 0; $i < sizeof($openHours); $i++) {
                        $this->assertEquals($openHours[$i], $receivedOpenHours[$i]);

                        $open = $openHours[$i]->getOpen();
                        $receivedOpen = $receivedOpenHours[$i]->getOpen();
                        $this->assertEquals($open, $receivedOpen);

                        $close = $openHours[$i]->getClose();
                        $receivedClose = $receivedOpenHours[$i]->getClose();
                        $this->assertEquals($close, $receivedClose);
                    }
                }
            }
        }

        return $store->getId();
    }

    /**
     * /**
     * Test case for setting default.
     *
     * @depends testGetOneGeneralStoreByProvidedId
     * @param string $storeId
     * @throws ApiException
     */
    public function testSetDefault(string $storeId)
    {
        if (!empty($storeId)) {
            $reason = new GeneralStoresDTOReason();
            $reason->setReason("optional - Lorem ipsum dolor");

            $response = self::$api->setDefault($storeId, $reason);

            if (!empty($response)) {
                $this->assertTrue($response['result']);
            }
        }
    }

    /**
     * Test case for check in.
     *
     * @throws ApiException
     */
    public function testCheckIn()
    {
        $storeId = self::$api->getAll(1)->getData()[0]->getId();

        $checkinType = new GeneralStoresDTOType();
        $checkinType->setType("standard");

        try {
            $response = self::$api->checkIn($storeId, $checkinType);
            $this->assertTrue(is_bool($response['result']));
        } catch (ApiException $e) {
            $response = $e->getResponseBody();

            $this->assertEquals('error', $response->status);
            $this->assertEquals('ProductNotFoundException', $response->error);
            $this->assertNotEmpty($response->error_details);
            $this->assertNotEmpty($response->error_user);
            $this->assertNotEmpty($response->supportId);
        }
    }

    /**
     * @return array
     */
    public function prepareOpenHours(): array
    {
        $newOpenHours = [];

        for ($i = 0; $i < 7; $i++) {
            $open = new DayTime();
            $open->setDay($i);
            $open->setTime("0" . rand(6, 9) . "00");
            $close = new DayTime();
            $close->setDay($i);
            $close->setTime(rand(18, 23) . "00");
            $openHours = new OpenHours();
            $openHours->setOpen($open);
            $openHours->setClose($close);
            $newOpenHours[] = $openHours;
        }

        return $newOpenHours;
    }
}
