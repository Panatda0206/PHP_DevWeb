<?php
declare(strict_types=1);
require_once __DIR__ . '/Helpers/Psr4AutoloaderClass.php';
require_once ('/Vendor/Plates/src/Engine.php');

use League\Plates\Engine;
$loader = new Helpers\Psr4AutoloaderClass();

$loader->register();

$loader->addNamespace('\Helpers', '/Helpers');
$loader->addNamespace('\League\Plates', '/Vendor/Plates/src');

$templates = new Engine(__DIR__ . '/Views');

// On génère la vue "home"
echo $templates->render('home', [
    'gameName' => 'Genshin Impact'
]);

?>