<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\SmartDevicesDTO;
use Secuconnect\Client\Model\SmartDevicesList;
use Secuconnect\Client\Model\SmartDevicesProductModel;

/**
 * Class SmartDevicesApiTest
 */
class SmartDevicesApiTest extends TestCase
{
    private static SmartDevicesApi $api;

    private static SecuconnectObjects $instance;

    private static SmartDevicesList $smartDevicesList;

    private static SmartDevicesDTO $smartDevicesDTO;

    private static SmartDevicesProductModel $smartDevicesProductModel;

    /**
     * Setup before running any test cases
     * @throws ApiException
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new SmartDevicesApi();
    }

    /**
     * Test case for getAll
     *
     * GET Smart/Devices.
     *
     * @throws ApiException
     */
    public function testGetAll()
    {
        try {
            self::$smartDevicesList = self::$api->getAll(
                null,
                null,
                null,
                ['online' => true]
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$smartDevicesList);
        $this->assertInstanceOf(SmartDevicesList::class, self::$smartDevicesList);
        $this->assertIsInt(self::$smartDevicesList->getCount());

        foreach (self::$smartDevicesList->getData() as $smartDevice) {
            $this->assertInstanceOf(SmartDevicesProductModel::class, $smartDevice);
            $this->assertEquals('smart.devices', $smartDevice->getObject());
            $this->assertNotEmpty($smartDevice->getId());
            $this->assertNotEmpty($smartDevice->getMerchant());
            $this->assertNotEmpty($smartDevice->getMerchant()->getId());
            $this->assertNotEmpty($smartDevice->getStore());
            $this->assertNotEmpty($smartDevice->getStore()->getId());
            $this->assertNotEmpty($smartDevice->getVendor());
            $this->assertNotEmpty($smartDevice->getVendorUid());
            $this->assertNotEmpty($smartDevice->getType());
            $this->assertNotEmpty($smartDevice->getCreated());
        }
    }

    /**
     * Test case for getOne
     *
     * GET Smart/Devices/{id}.
     *
     * @depends testGetAll
     *
     * @throws ApiException
     */
    public function testGetOne()
    {
        try {
            $response = self::$api->getOne(self::$smartDevicesList->getData()[0]->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(SmartDevicesProductModel::class, $response);

        $this->assertEquals('smart.devices', $response->getObject());
        $this->assertNotEmpty($response->getId());
        $this->assertNotEmpty($response->getMerchant());
        $this->assertNotEmpty($response->getMerchant()->getId());
        $this->assertNotEmpty($response->getStore());
        $this->assertNotEmpty($response->getStore()->getId());
        $this->assertNotEmpty($response->getVendor());
        $this->assertNotEmpty($response->getVendorUid());
        $this->assertNotEmpty($response->getType());
        $this->assertNotEmpty($response->getCreated());
    }

    /**
     * Test case for getRouting
     *
     * GET Smart/Devices/{smartDeviceId}/routing/type/{type}.
     *
     * @depends testGetAll
     *
     * @throws ApiException
     */
    public function testGetRouting()
    {
        try {
            $smartDevice = self::$api->getRouting(self::$smartDevicesList->getData()[0]->getId(), 'zvt');
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        // print_r($response);
        $this->assertInstanceOf(SmartDevicesProductModel::class, $smartDevice);
        $this->assertEquals('smart.devices', $smartDevice->getObject());
        $this->assertNotEmpty($smartDevice->getId());
        $this->assertNotEmpty($smartDevice->getMerchant());
        $this->assertNotEmpty($smartDevice->getMerchant()->getId());
        $this->assertNotEmpty($smartDevice->getStore());
        $this->assertNotEmpty($smartDevice->getStore()->getId());
        $this->assertNotEmpty($smartDevice->getVendor());
        $this->assertNotEmpty($smartDevice->getVendorUid());
        $this->assertNotEmpty($smartDevice->getType());
        $this->assertNotEmpty($smartDevice->getCreated());
    }

    /**
     * Test case for addDevice
     *
     * POST Smart/Devices.
     *
     * @depends testGetAll
     *
     * @throws ApiException
     */
    public function testAddDevice()
    {
        self::$smartDevicesDTO = new SmartDevicesDTO();
        self::$smartDevicesDTO->setMerchant(self::$smartDevicesList->getData()[0]->getMerchant()->getId());
        self::$smartDevicesDTO->setStore(self::$smartDevicesList->getData()[0]->getStore()->getId());
        self::$smartDevicesDTO->setVendor("shopware");
        self::$smartDevicesDTO->setVendorUid(rand(100000000, 999999999)); // FIXME: in real life this should be a unique UId
        self::$smartDevicesDTO->setType("cashier");

        try {
            self::$smartDevicesProductModel = self::$api->addDevice(self::$smartDevicesDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$smartDevicesProductModel);
        $this->assertInstanceOf(SmartDevicesProductModel::class, self::$smartDevicesProductModel);

        $this->assertEquals('smart.devices', self::$smartDevicesProductModel->getObject());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getMerchant());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getMerchant()->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getStore());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getStore()->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getVendor());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getVendorUid());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getType());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getCreated());
    }

    /**
     * Test case for updateDevice
     *
     * PUT Smart/Devices/{id}.
     *
     * @depends testGetAll
     * @depends testAddDevice
     *
     * @throws ApiException
     */
    public function testUpdateDevice()
    {
        self::$smartDevicesDTO->setVendor("shopware");

        try {
            self::$smartDevicesProductModel = self::$api->updateDevice(self::$smartDevicesProductModel->getId(), self::$smartDevicesDTO);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty(self::$smartDevicesProductModel);
        $this->assertInstanceOf(SmartDevicesProductModel::class, self::$smartDevicesProductModel);

        $this->assertEquals('smart.devices', self::$smartDevicesProductModel->getObject());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getMerchant());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getMerchant()->getId());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getStore());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getStore()->getId());
        $this->assertEquals("shopware", self::$smartDevicesProductModel->getVendor());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getVendorUid());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getType());
        $this->assertNotEmpty(self::$smartDevicesProductModel->getCreated());
    }
}
