<?php
// TableauMultiplication.php
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Table de multiplication 0 à 10</title>
    <style>
        table { border-collapse: collapse; font-family: sans-serif; }
        th, td { border: 1px solid #ccc; padding: .4rem .6rem; text-align: right; }
        th { text-align: center; }
        caption { margin-bottom: .5rem; font-weight: 600; }
    </style>
</head>
<body>
<table>
    <caption>Table de multiplication (0 à 10)</caption>
    <thead>
        <tr>
            <th scope="col">x</th>
            <?php for ($col = 0; $col <= 10; $col++): ?>
                <th scope="col"><?= $col ?></th>
            <?php endfor; ?>
        </tr>
    </thead>
    <tbody>
        <?php for ($row = 0; $row <= 10; $row++): ?>
            <tr>
                <th scope="row"><?= $row ?></th>
                <?php for ($col = 0; $col <= 10; $col++): ?>
                    <td><?= $row * $col ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>
</body>
</html>
