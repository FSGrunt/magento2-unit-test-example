# How to write Magento 2 Unit Tests

## Executing the test

execute all the unit tests from all the modules of Magento2 including ours:
<br>
`php bin/magento dev:tests:run unit`

test only on a single file:
<br>
`php ./vendor/bin/phpunit -c dev/tests/unit/phpunit.xml.dist app/code/FSGrunt/Magento2UnitTestExample/Test/Unit/Model/TestModel.php`