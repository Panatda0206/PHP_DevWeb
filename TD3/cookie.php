<?php
    declare(strict_types=1);
    session_start();

    require_once("generer.php");

    session_destroy();

    echo generer_en_tete_html();


    if(isset($_SESSION['secret'])){
        $secret=$_SESSION['secret'];
        $historique = $_SESSION['historique'];

            if(isset($_SESSION['submit'])){
                $saisie = $_POST['saisie']
                $historique .= $saisie.",";
                $_SESSION['historique'] = $historique;

            }

            if($saisie > $secret){
                echo "Trop grand ! <br/>"
                echo generer
            }
    }


?>