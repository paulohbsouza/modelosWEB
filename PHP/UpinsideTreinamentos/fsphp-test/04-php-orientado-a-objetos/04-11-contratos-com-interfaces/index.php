<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.11 - Contratos com interfaces");

require __DIR__ . "/source/autoload.php";

/*
 * [ implementacão ] Um contrato de quais métodos a classe deve implementar
 * http://php.net/manual/pt_BR/language.oop5.interfaces.php
 */
fullStackPHPClassSession("implementacão", __LINE__);

$user = new \Source\Contracts\User(
    "Poliana",
    "Frogeri",
    "email@email.com"
);

$admin = new \Source\Contracts\UserAdmin(
    "Paulo",
    "Souza",
    "email@email.net"
);

var_dump($user, $admin);


/*
 * [ associação ] Um exemplo associando ao login
 */
fullStackPHPClassSession("associação", __LINE__);

$login = new \Source\Contracts\Login();

$loginUser = $login->loginUser($user);
$loginAdmin = $login->loginUserAdmin($admin);

var_dump(
    $loginUser,
    $loginAdmin
);


/*
 * [ dependência ] Dependency Injection ou DI, é um contrato de relação entre objetos, onde
 * um método assina seus atributos com uma interface.
 */
fullStackPHPClassSession("dependência", __LINE__);

// para garantir a comunicação entre objetos atravez de contratos
var_dump(
    $login->login($user),
    $login->login($user)->getLastName(),
    $login->login($admin),
    $login->login($admin)->getLastName()
);


