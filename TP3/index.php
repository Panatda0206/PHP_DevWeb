<?php
session_start(); 
// initialisation quand on ouvre le premier page
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = "";
}

//cliquer sur le bouton clavier
if (isset($_POST['clavier'])) {
    $_SESSION['history'] .= $_POST['clavier'];
}

//cliquer sur le boutton CE pour reset
if (isset($_POST['reset'])) {
    $_SESSION['history'] = "";
}

// cliquer le boutton egal pour calculer et retourner le résultat grace à la fonction eval()
if (isset($_POST['resultat'])) {
    try {
        $histo = $_SESSION['history'];
        // pour que utilisateur peut calculer log10(10) = 1 car le premier fois il est 2.038 donc on utilise la fonction str_replace(recherche, remplace, $variable)
        $histo = str_replace("log(", "log10(", $histo);
        $histo = str_replace("^", "**", $histo);
        @eval("\$r = $histo;");
        $_SESSION['history'] = $r ?? "Erreur";
    } catch (Throwable $e) {
        $_SESSION['history'] = "Erreur";
    }
}

$affichage = $_SESSION['history'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
        <h1>Calculatrice</h1>
        <form action="index.php" method="POST">
            <input type="text" name="champText" value="<?= htmlspecialchars($affichage) ?>">
            <br>
            <input type="submit" name="clavier" value="log(">
            <input type="submit" name="clavier" value="exp(">
            <input type="submit" name="clavier" value="^">
            <input type="submit" name="clavier" value=")">
            <br>
            <input type="submit" name="clavier" value="7">
            <input type="submit" name="clavier" value="8">
            <input type="submit" name="clavier" value="9">
            <input type="submit" name="clavier" value="+">
            <br>
            <input type="submit" name="clavier" value="4">
            <input type="submit" name="clavier" value="5">
            <input type="submit" name="clavier" value="6">
            <input type="submit" name="clavier" value="-">
            <br>
            <input type="submit" name="clavier" value="1">
            <input type="submit" name="clavier" value="2">
            <input type="submit" name="clavier" value="3">
            <input type="submit" name="clavier" value="*">
            <br>
            <input type="submit" name="clavier" value="0">
            <input type="submit" name="reset" value="CE">
            <input type="submit" name="clavier" value="/">
            <input type="submit" name="resultat" value="=">
        </form>
    </fieldset>
</body>
</html>
