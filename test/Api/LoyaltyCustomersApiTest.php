<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\Address;
use Secuconnect\Client\Model\Contact;
use Secuconnect\Client\Model\LoyaltyCustomersDTO;
use Secuconnect\Client\Model\LoyaltyCustomersList;
use Secuconnect\Client\Model\LoyaltyCustomersProductModel;

/**
 * Class LoyaltyCustomersApiTest
 */
class LoyaltyCustomersApiTest extends TestCase
{
    const TEST_MERCHANT_ID = 'MRC_35SZ3R5GGQQP4T0U2T5GFAN9P6C4PG';

    private static ?LoyaltyCustomersApi $api;

    private static ?SecuconnectObjects $instance;

    private static ?LoyaltyCustomersProductModel $receivedCustomer;

    private static ?string $idPaymentContainer;

    private static string $dummyCustomerId;

    private static LoyaltyCustomersDTO $dummyCustomer;

    /**
     * Setup before running any test cases
     *
     * @throws ApiException
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$instance = SecuconnectObjects::getInstance();
        self::$instance->authenticateByApplicationUser();
        self::$api = new LoyaltyCustomersApi();
        self::$dummyCustomer = new LoyaltyCustomersDTO();
        self::$dummyCustomer->setCustomernumber('testnr');
        self::$dummyCustomer->setNote('test');
        self::$dummyCustomer->setAge('30');
        self::$dummyCustomer->setDaysUntilBirthday('23');
        self::$dummyCustomer->setMerchant(self::TEST_MERCHANT_ID);

        $oAddress = new Address();
        $oAddress->setStreet('Example Street');
        $oAddress->setStreetNumber('9');
        $oAddress->setCity('Examplecity');
        $oAddress->setPostalCode('01234');
        $oAddress->setCountry('Germany');

        $oMerchantContact = new Contact();
        $oMerchantContact->setForename('John');
        $oMerchantContact->setSurname('Test');
        $oMerchantContact->setCompanyname('Example Inc.');
        $oMerchantContact->setSalutation('Mr.');
        $oMerchantContact->setGender('m');
        $oMerchantContact->setTitle('Dr.');
        $oMerchantContact->setEmail('email@example.com');
        $oMerchantContact->setPhone('123456789');
        $oMerchantContact->setMobile('987654321');
        $oMerchantContact->setDob('1901-02-03');
        $oMerchantContact->setUrlWebsite('example.com');
        $oMerchantContact->setBirthplace('Example Birthplace');
        $oMerchantContact->setNationality('Germany');
        $oMerchantContact->setAddress($oAddress);

        self::$dummyCustomer->setMerchantContact($oMerchantContact);
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
        self::$api = null;
        self::$instance = null;
        self::$receivedCustomer = null;
        self::$idPaymentContainer = null;
        parent::tearDownAfterClass();
    }

    /**
     * Test case for loyaltyCustomersLoyaltyCustomerIdPost
     *
     * POST Loyalty/Customers/{loyaltyCustomerId}.
     *
     * @throws ApiException
     */
    public function testAddCustomer()
    {
        try {
            $response = self::$api->addCustomer(self::$dummyCustomer);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        self::$dummyCustomerId = $response->getId();
        $this->checkLoyaltyCustomersProductModel($response);
    }

    /**
     * Test case for loyaltyCustomersGet
     *
     * GET Loyalty/Customers.
     *
     * @throws ApiException
     */
    public function testLoyaltyCustomersGet()
    {
        try {
            $response = self::$api->getAll(
                null,
                null,
                null,
                ['customernumber' => 'testnr']
            );
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(LoyaltyCustomersList::class, $response);

        $this->assertIsInt($response->getCount());
        if (is_int($response->getCount()) && $response->getCount() > 0) {
            foreach ($response->getData() as $customer) {
                $this->checkLoyaltyCustomersProductModel($customer);
            }
        }
    }

    private function checkLoyaltyCustomersProductModel(LoyaltyCustomersProductModel $customer)
    {
        $this->assertInstanceOf(LoyaltyCustomersProductModel::class, $customer);
        $this->assertNotEmpty($customer->getObject());
        $this->assertNotEmpty($customer->getId());
        $this->assertNotEmpty($customer->getMerchant());
        $this->assertNotEmpty($customer->getMerchant()->getObject());
        $this->assertNotEmpty($customer->getMerchant()->getId());
        if (empty(self::$receivedCustomer)) {
            self::$receivedCustomer = $customer;
        }

        $aPaymentContainers = $customer->getPaymentContainer();
        if (!empty($aPaymentContainers)) {
            foreach ($aPaymentContainers as $aPaymentContainer) {
                $this->assertNotEmpty($aPaymentContainer->getId());
                $this->assertNotEmpty($aPaymentContainer->getType());
                $this->assertNotEmpty($aPaymentContainer->getPaymentInformation());
                $this->assertNotEmpty($aPaymentContainer->getPaymentInformation()->getOwner());
                $this->assertNotEmpty($aPaymentContainer->getPaymentInformation()->getIban());
                $this->assertNotEmpty($aPaymentContainer->getPaymentInformation()->getBic());
                $this->assertNotEmpty($aPaymentContainer->getPaymentInformation()->getBankname());
                if (empty(self::$idPaymentContainer)) {
                    self::$idPaymentContainer = $aPaymentContainer->getId();
                }
            }
        }

//        Disabled forename check, because it's not set always:
        $this->assertNotEmpty($customer->getMerchantContact()->getForename());
        $this->assertNotEmpty($customer->getMerchantContact()->getSurname());

        $this->assertNotEmpty($customer->getMerchantContact()->getAddress());
        $this->assertNotEmpty($customer->getMerchantContact()->getAddress()->getStreet());
        $this->assertNotEmpty($customer->getMerchantContact()->getAddress()->getStreetNumber());
        $this->assertNotEmpty($customer->getMerchantContact()->getAddress()->getPostalCode());
        $this->assertNotEmpty($customer->getMerchantContact()->getAddress()->getCity());

        $this->assertNotEmpty($customer->getContact()->getForename());
        $this->assertNotEmpty($customer->getContact()->getSurname());
        $this->assertNotEmpty($customer->getContact()->getAddress());
        $this->assertNotEmpty($customer->getContact()->getAddress()->getStreet());
        $this->assertNotEmpty($customer->getContact()->getAddress()->getStreetNumber());
        $this->assertNotEmpty($customer->getContact()->getAddress()->getPostalCode());
        $this->assertNotEmpty($customer->getContact()->getAddress()->getCity());

        $this->assertNotEmpty($customer->getCustomernumber());
        $this->assertNotEmpty($customer->getCreated());
    }

    /**
     * Test case for loyaltyCustomersGet
     *
     * GET Loyalty/Customers.
     *
     * @throws ApiException
     */
    public function testLoyaltyCustomersGetById()
    {
        $this->assertNotEmpty(self::$receivedCustomer);

        try {
            $response = self::$api->getOne(self::$receivedCustomer->getId());
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(LoyaltyCustomersProductModel::class, $response);
        $this->assertEquals(self::$receivedCustomer, $response);
    }

    /**
     * Test case for
     *
     * PUT Loyalty/Customers/{loyaltyCustomerId}.
     *
     * @depends testAddCustomer
     *
     * @throws ApiException
     */
    public function testUpdateCustomer()
    {
        try {
            self::$dummyCustomer->setNote('Test Update');
            $oMerchantContactTestUpdate = clone self::$dummyCustomer->getMerchantContact();
            $oMerchantContactTestUpdate->setSurname('Test Surname');
            self::$dummyCustomer->setMerchantContact($oMerchantContactTestUpdate);
            $response = self::$api->updateCustomer(self::$dummyCustomerId, self::$dummyCustomer);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }
        $this->assertEquals(self::$dummyCustomer->getMerchantContact()->getSurname(), $response->getMerchantContact()->getSurname());
        $this->assertEquals(self::$dummyCustomer->getNote(), $response->getNote());
    }
}
