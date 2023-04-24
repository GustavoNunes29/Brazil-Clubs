<?php
require_once __DIR__ . '/../helpers/FileHelper.php';
require_once __DIR__ . '/../models/Club.php';
$helper = new FileHelper("clubes.json");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubes Brasileiros</title>
    <style>
        @import "../../node_modules/bootstrap/dist/css/bootstrap.min.css";
    </style>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body class="p-4">
    <span>Clubes Brasileiros</span>
    <a href="http://localhost/soccer/src/app/view/stars.php">Jogadores em Destaque</a>
    <table class="table table-striped table-info">
        <thead>
            <tr>
                <th>ID</th>
                <th>Logo</th>
                <th>Nome</th>
                <th>Abreviação</th>
            </tr>
        </thead>
        <tbody> olhas
            <?php
            foreach ($helper->getData() as $row) {
                $club = (new Club())->fill($row);
                if (!$club->hasLogo()) continue;
            ?>
                <tr>
                    <td><?= $club->id ?></td>
                    <td><img src="<?= $club->logo ?>"  alt="<?= $club->name ?>"/></td>
                    <td><?= $club->name ?></td>
                    <td><?= $club->nickname ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>