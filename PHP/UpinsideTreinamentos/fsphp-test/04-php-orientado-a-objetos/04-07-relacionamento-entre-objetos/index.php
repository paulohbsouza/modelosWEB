<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

//associação onde o objeto tem um lugar específico na memória, uma propriedade, em outro objeto
//que será destinado a ale
//ex. estratégia do objeto

$company = new \Source\Related\Company();
$company->bootCompany(
    "UpInside",
    "address"
);

var_dump($company);

$address = new \Source\Related\Address("Av. Rubens Vicente de Lucca", 109, "Casa");
$company->boot(
    "DotSis",
    $address
);

var_dump($company);

echo "<p>A {$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()}</p>";


/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

//agragação onde pegamos um objeto externo e torna interno de outro objeto!!
//ex. carrinho de compras

$productA = new \Source\Related\Product("ProdutoA", 321);
$productB = new \Source\Related\Product("ProdutoB", 123);

var_dump($productA, $productB);

$company->addProduct($productA);
$company->addProduct($productB);
$company->addProduct(
    new \Source\Related\Product("ProdutoC", 7889)
);

var_dump($company);

/**
 * @var \Source\Related\Product $product
 */
foreach ($company->getProducts() as $product)
{
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}


/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

//na composição o objeto é construido internamente outro objeto (os objetos não coexistem)

$company->addTeamMember("CEO", "Robson", "Leite");
$company->addTeamMember("Menager", "Paulo", "Souza");
$company->addTeamMember("Support", "Luiza", "Frogeri");
$company->addTeamMember("Producer", "Samuel", "Bernardes");

var_dump($company);

/**
 * @var \Source\Related\User $member
 */
foreach ($company->getTeam() as $member) {
    echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}




