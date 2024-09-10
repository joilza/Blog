<?php
include './../App/Libraries/Rota.php';
include'../App/Libraries/Controller.php';
include './../App/Configuracao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NOME?></title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/estilo.css"/>
    <link rel ="stylesheet" type="text/css" href="<?URL?>/public/bootstrap/css/bootstrap.css"/>
</head>
<body>

    <?php
    include "../App/Views/header.php";
    $rotas = new Rota();
    include "../App/Views/footer.php";
    ?>
    <script src="<?=URL?>/public/js/query.js"></script>
    <script src="<?=URL?>/publi/bootstrap/bootstrap.js"></script>
</body>
</html>