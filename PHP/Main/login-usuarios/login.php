<?php
    require_once './connect.php';

    $test = $connect->query(" SELECT * FROM main_login_usuarios ")->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    var_dump($test);
    echo "</pre>";

    foreach($test as $t)
    {
        echo "<pre>";
        var_dump($t['firstName']);
        echo "</pre>";
        echo "E-mail do ususário: " . $t['email'];
    }
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

    <title>Login Usuários</title>
</head>

<body>

    <div class="cardLogin">
        <h4>Login <span class="text-muted">Usuários</span></h4>
        <hr />
        <form action="./login.php" method="POST">
            <div class="mt-3">
                <label class="form-label">E-mail <i class="fa-regular fa-user text-muted"></i></label>
                <input type="email" class="form-control form-control-sm" required>
            </div>
            <div class="mt-2">
                <label class="form-label">Senha <i class="fa-solid fa-key text-muted"></i></label>
                <input type="password" class="form-control form-control-sm" required>
            </div>
            <div class="mt-2 form-check form-switch">
                <input class="form-check-input" type="checkbox" id="">
                <label class="form-check-label">Manter conectado</label>
            </div>
            <div class="mt-4 d-grid gap-2">
                <button class="btn btn-outline-success">Entrar</button>
            </div>
            <div class="mt-3 text-center">
                <small><a href="./login.php" class="text-muted">Esqueci minha senha</a></small>
            </div>
        </form>
    </div>

</body>

</html>