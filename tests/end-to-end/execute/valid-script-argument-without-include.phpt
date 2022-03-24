--TEST--
phpcov execute ../../fixture/test.php
--INI--
xdebug.mode=debug
xdebug.mode=coverage
--SKIPIF--
<?php declare(strict_types=1);
require __DIR__ . '/../../../vendor/autoload.php';

use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Driver\Driver;
use SebastianBergmann\CodeCoverage\Filter;

try {
    $filter = new Filter;

    new CodeCoverage(
        Driver::forLineCoverage($filter),
        $filter
    );
} catch (Exception $e) {
    print 'skip: ' . $e->getMessage();
}
--FILE--
<?php declare(strict_types=1);
require __DIR__ . '/../../../vendor/autoload.php';

$_SERVER['argv'][1] = 'execute';
$_SERVER['argv'][2] = __DIR__ . '/../../fixture/test.php';

var_dump((new SebastianBergmann\PHPCOV\Application)->run($_SERVER['argv']));
--EXPECTF--
phpcov %s by Sebastian Bergmann.

No list of files to be included in code coverage configured
int(1)
