<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new \Source\Inheritance\Event\Event(
    "Workshop FSPHP",
    new DateTime("2022-07-03 16:00"),
    2500,
    "4"
);

var_dump($event);

$event->register("Paulo Souza", "email1@email.com");
$event->register("Luiza Souza","email2@email.net");
$event->register("Samuel Frogeri", "email3@com.br");
$event->register("Yasmin Bernardes","email5@email.com");
$event->register("João Victor","email12@email.net");


/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$address = new \Source\Inheritance\Address("Av. Rubens de Lucca", "109");
$event = new \Source\Inheritance\Event\EventLive(
    "Workshop FSPHP",
    new DateTime("2022-07-03 16:00"),
    2500,
    "4",
    $address
);

var_dump($event);

$event->register("Nome1", "email@email.com");
$event->register("Nome2", "email@email.com");
$event->register("Nome3", "email@email.com");
$event->register("Nome4", "email@email.com");
$event->register("Nome5", "email@email.com");

/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a classes
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new \Source\Inheritance\Event\EventOnline(
    "Workshop FSPHP",
    new DateTime( "2022-07-03 16:00"),
    198,
    "http://upinside.com.br/aovivo"
);

var_dump($event);

$event->register("Nome", "email@email.net");
$event->register("Nome1", "email@email.net");
$event->register("Nome2", "email@email.net");
$event->register("Nome3", "email@email.net");
$event->register("Nome4", "email@email.net");
$event->register("Nome5", "email@email.net");
