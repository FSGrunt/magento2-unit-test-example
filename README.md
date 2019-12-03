# How to write Magento 2 Unit Tests & Integration Test

## Executing the test

execute all the unit tests from all the modules of Magento2 including ours:\
`php bin/magento dev:tests:run unit`

unit test: test only on a single file:\
`php ./vendor/bin/phpunit -c dev/tests/unit/phpunit.xml.dist app/code/FSGrunt/Magento2UnitTestExample/Test/Unit/Model/TestModel.php`

integration test: test only on a single file:\
`php ./vendor/bin/phpunit -c dev/tests/unit/phpunit.xml.dist app/code/FSGrunt/Magento2UnitTestExample/Test/Integration/ModuleTest.php`