--TEST--
phpcov
--INI--
xdebug.mode=debug
--FILE--
<?php declare(strict_types=1);
require __DIR__ . '/../../../vendor/autoload.php';

$_SERVER['argv'][1] = '--version';

var_dump((new SebastianBergmann\PHPCOV\Application)->run($_SERVER['argv']));
--EXPECTF--
phpcov %s by Sebastian Bergmann.
int(0)
