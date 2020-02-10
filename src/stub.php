<?php

spl_autoload_register(function ($name) {
    $d = (strpos(__FILE__, ".phar") === false ? __DIR__ : "phar://" . __FILE__ . "/src");
    if ($name == "test-phar-aa") require_once($d . "/src/test-phar-aa.php");
    if ($name == "test-phar-bb") require_once($d . "/src/test-phar-bb.php");
    if ($name == "test-phar-cc") require_once($d . "/src/test-phar-cc.php");
});

__HALT_COMPILER();
