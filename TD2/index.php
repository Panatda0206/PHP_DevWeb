<?php
declare(strict_types=1);
require_once('Personnage.php');
require_once('PersonnagesManager.php');

$p1 = new Personnage('chuyue',15,16);
echo $p1->__toString();
$pdo = new PersonnagesManager();
$pdo->add($p1);
echo $pdo->get('1');


?>