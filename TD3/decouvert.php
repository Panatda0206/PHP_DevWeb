<?php
declare(strict_types=1);
session_start();

$cpt=0;
if(isset($_SESSION['compteur'])){
    $cpt=$_SESSION['compteur'];
}

$cpt++;

echo "on a affiché cette fouttue page ".$cpt. "fois";

$_SESSION['compteur'] = $cpt;
?>