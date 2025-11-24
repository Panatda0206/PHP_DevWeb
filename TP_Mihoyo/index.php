<?php
require_once("Helpers\Psr4AutoloaderClass.php");

private Psr4AutoloaderClass $loader;

$loader->register();

$loader->addNamespace('\Helpers', '\Helpers');


?>