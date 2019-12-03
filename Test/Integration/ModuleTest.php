<?php

namespace FSGrunt\Magento2UnitTestExample\Test\Integration;

use Magento\TestFramework\Helper\Bootstrap;
use PHPUnit\Framework\TestCase;
use Magento\Framework\Module\ModuleList\Loader;

class ModuleTest extends TestCase
{
    private $config;

    protected function setUp()
    {
        $objectManager = Bootstrap::getObjectManager();
        $this->config = $objectManager->create(Loader::class);
    }

    public function testModuleSequence()
    {
        $moduleName = "Magento2UnitTestExample";
        $expectedDependencies = ["Magento_Widget"];
        $modulesList = $this->config->load();

        $this->assertArrayHasKey($moduleName, $modulesList);

        $moduleConfig = $modulesList[$moduleName];
        $this->assertContains($expectedDependencies, $moduleConfig);
    }
}