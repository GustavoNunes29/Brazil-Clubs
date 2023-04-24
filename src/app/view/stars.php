<?php
require_once __DIR__ . '/../helpers/FileHelper.php';
require_once __DIR__ . '/../models/Player.php';
$helper = new FileHelper('destaques.json');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogadores em Destaque</title>
    <img src="">
    <style>
        @import "../../node_modules/bootstrap/dist/css/bootstrap.min.css";
    </style>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body class="p-4">
    <h2>Jogadores em Destaque</h2>
    <a href="http://localhost/soccer/src/app/view/clubs.php">Clubes Brasileiros</a>
    <table class="table table-striped table-info">
        <thead>
            <tr>
                <th>Clube</th>
                <th>Posição</th>
                <th>Apelido</th>
                <th>Jogador</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($helper->getData() as $row) {
                $player = (new Player())->fill($row);
            ?>
                <tr>
                    <td><img src="<?= $player->logo ?>" /></td>
                    <td><?= $player->position ?></td>
                    <td><?= $player->name ?></td>
                    <td> <?= $player->nickname ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>