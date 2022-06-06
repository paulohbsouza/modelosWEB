<?php
echo ceil(4.3) . "<br/>";    // 5
echo ceil(9.999) . "<br/>";  // 10
echo ceil(-3.14) . "<br/>";  // -3
echo round(11.4997, 3) . "<br/>";
echo round(10.0026, 3) . "<br/>";
echo "<br/>";

$strNumber = "5,5";
$var = str_replace(",",".",$strNumber);
echo "Antes: " . $var;
$var = round($var, 2);
echo "<br/>Resultado (depois): " . $var;

$var2 = str_replace(".", ",", $var);
$var2 = floatval($var2);
var_dump($var2);

echo $var2."-00";

echo "<br/><br/>";

$strNumber = "10,0656";
$var = str_replace(",",".",$strNumber);
echo "Antes: " . $var;
$var = round($var, 2);
echo "<br/>Resultado (depois): " . $var;
var_dump($var);
$var2 = str_replace(".", ",", $var);
echo $var2."-00";

