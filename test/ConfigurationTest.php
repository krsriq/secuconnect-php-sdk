<?php

namespace Secuconnect\Client;

use PHPUnit\Framework\TestCase;

/**
 * Class ConfigurationTest
 */
class ConfigurationTest extends TestCase
{

    public function testDebug()
    {
        // check default
        $config = clone Configuration::getDefaultConfiguration();
        $this->assertFalse($config->getDebug());

        // check change
        $config->setDebug(true);
        $this->assertTrue($config->getDebug());

        // default config should net be changed
        $this->assertFalse(Configuration::getDefaultConfiguration()->getDebug());
    }

    public function testDebugFile()
    {
        // check default
        $config = clone Configuration::getDefaultConfiguration();
        $this->assertSame('php://output', $config->getDebugFile());

        // check change
        $config->setDebugFile('php://stdout');
        $this->assertFalse('php://stdout', $config->getDebugFile());

        // default config should net be changed
        $this->assertSame('php://output', Configuration::getDefaultConfiguration()->getDebugFile());
    }

    public function testSetSSLVerification()
    {
        // check default
        $config = clone Configuration::getDefaultConfiguration();
        $this->assertTrue($config->getSSLVerification());

        // check change
        $config->setSSLVerification(false);
        $this->assertFalse($config->getSSLVerification());

        // default config should net be changed
        $this->assertTrue(Configuration::getDefaultConfiguration()->getSSLVerification());
    }
}
