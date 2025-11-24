<?php
    var_dump($_POST);
    if(isset($_POST['submit'])){
        echo "Bonjour   ".$_POST['prenom']."     ".$_POST['nom'];
    
    }else{
        echo"Qu'est ce que tu fous ici on n'a pas soumis le formulaire";
    }
?>