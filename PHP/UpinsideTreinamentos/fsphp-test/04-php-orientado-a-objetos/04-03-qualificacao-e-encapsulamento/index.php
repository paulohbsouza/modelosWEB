<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/classes/App/Template.php";
require __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump(
    $appTemplate,
    $webTemplate
);

use App\Template;
use Web\Template AS WebTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

var_dump(
    $appUseTemplate,
    $webUseTemplate
);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

//$user->firstName = "Paulo";
//$user->lastName = "Souza";

//$user->setFirstName("Paulo");
//$user->setLastName("Souza");

var_dump(
    $user,
    get_class_methods($user)
);

echo "<p>O e-mail de {$user->getFirstName()} é {$user->getEmail()}!</p>";


/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$paulo = $user->setUser(
    "Paulo",
    "Souza",
    "meu@email"
);

if (!$paulo)
{
    echo "<p class='trigger error'>{$user->getErro()}</p>";
}

$matheus = new \Source\Qualifield\User();
$matheus->setUser(
    "Matheus",
    "Bernardes",
    "seu@email.com"
);

$luiza = new \Source\Qualifield\User();
$luiza->setUser(
    "Luiza",
    "Frogeri",
    "seu@email.com"
);

var_dump(
    $user,
    $matheus,
    $luiza
);

