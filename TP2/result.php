<?php
    declare(strict_types=1);

    require_once("HTMLForm.php");
    require_once("HTMLInput.php");
    require_once("Index.php");

    echo "Formulaire";

    $form->hydate($_POST);
    echo $form->__toStringResultat();
   
?>