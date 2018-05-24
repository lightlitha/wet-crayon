<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$rootfile = dirname(__FILE__);

require_once 'epiqworx/autoloader.php';
new Epiqworx\Concrete\Router();

?>
