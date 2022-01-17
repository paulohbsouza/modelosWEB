<?php

$texto  = "Envio de SICOM das CM e PM referente ao mês de Dezembro. CM - Aguanil, Boa Esperança, GV, Ilicínea, Jesuânia, ";
$texto .= "Monsenhor Paulo, Santa Rita, São Gonçalo e Soledade de Minas PM - Cristais, Divisa Nova, Ilicínea, Peçanha e Soledade de Minas.";
$texto2  = "Análise de auditorias das CM e PM referente ao mês de Dezembro. CM - Aguanil, Boa Esperança, GV, Ilicínea, ";
$texto2 .= "Jesuânia, Monsenhor Paulo, Santa Rita, São Gonçalo e Soledade de Minas PM - Cristais, Divisa Nova, Ilicínea, Peçanha e Soledade de Minas.";
$frase = "batata frita";

$array_teste = explode(";", $frase);


echo "<pre>";
var_dump($array_teste);
echo "</pre>";

echo "<br>---<br>";


$data = new DateTime('2021-07-06');
//echo DataTime[2];
var_dump($data);