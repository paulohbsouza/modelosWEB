<?php
    $_GET['btn'] = isset($_GET['btn']) ? $_GET['btn'] : '';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">

    <title>Main</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                <nav class="navbar">
                    <div class="mx-auto">
                        <a href="?btn=loginUsuarios" class="btn btn-outline-info btn-sm" role="button">Login Usuários</a>
                        <a href="./" class="btn btn-outline-warning btn-sm" role="button">Voltar</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <?php
                switch ($_GET['btn'])
                {
                    case 'loginUsuarios':
                        include "./login-usuarios/login.php";
                        break;
                    default :
                    include "./home.php";
                }
            ?>
        </div>
    </div>

</body>

</html>