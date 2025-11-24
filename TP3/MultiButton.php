<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultiButton</title>
</head>
<body>
    <h1>MultiButton</h1>
    <p>Choisir un bouton: </p>
    <form action="multiButton.php" method='POST'>
        <input type="submit" name="btn" value="btn1">
        <input type="submit" name="btn" value="btn2">
        <input type="submit" name="btn" value="btn3">
    </form>
    <?php
        if (isset($_POST['btn'])){
            switch ($_POST['btn']) {
                case 'btn1':
                    $str = "<br>Vous avez cliqué sur btn1";
                    break;
                case 'btn2':
                    $str = "<br>Vous avez cliqué sur btn2";
                    break;
                case 'btn3':
                    $str = "<br>Vous avez cliqué sur btn3";
                    break;
                default:
                    $str = "<br>il n'y a rien à cliqué ici";
                    break;
            }
        }else {
            $str = "cliquez sur un boutton";
        }
        echo $str;
    ?>
</body>
</html>

