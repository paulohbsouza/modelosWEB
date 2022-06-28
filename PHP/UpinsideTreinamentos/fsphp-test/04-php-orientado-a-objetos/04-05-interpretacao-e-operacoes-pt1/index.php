<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

//$user = new \Source\Interpretation\User();
$user = new \Source\Interpretation\User(
    "Paulo",
    "Souza",
    "email@email.com"
);

var_dump($user);


/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

$paulo = $user;

$luiza = $paulo;
$luiza->setFirstName("Luiza");
$luiza->setLastName("Frogeri");

$paulo->setFirstName("Pauloo");
$paulo->setLastName("Souzaa");

$luiza = clone $paulo;
$luiza->setFirstName("Luizaa");
$luiza->setLastName("Frogerii");

$samuel = clone $paulo;

$luiza = null; //destruct manual

var_dump($paulo, $luiza, $samuel);

/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);