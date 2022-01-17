<?php
// Instantiate a DateTime with microseconds.
$d = new DateTime('2011-01-01T15:03:01.012345Z');
// Output the microseconds.
echo $d->format('u') . "<br><br>"; // 012345
// Output the date with microseconds.
echo $d->format('Y-m-d\TH:i:s.u'); // 2011-01-01T15:03:01.012345

echo "<br>---<br>";

$date = new DateTime('2021-09-06');
$date->modify('-1 day');
//$da = '2021-07-06';
//echo $da->modify('last day of this month');
//echo $date->format('Y-m-d');
echo $date->format('t');

echo "<br>---<br>";

// Exibe alguma coisa como: Monday
echo date("l");
echo "<br>".date("m");

echo "<br>---<br>";

// Teste AGORA!
$now = new DateTime('now');
$now = $now->format("Y-m-d H:i:s");
echo "Agora: ".$now;

echo "<br>---<br>";

$texto = "A expressão Lorem ipsum em design gráfico e editoração é um texto padrão em latim utilizado na produção ";
$texto .= "gráfica para preencher os espaços de texto em publicações para testar e ";
$texto .= "ajustar aspectos visuais antes de utilizar conteúdo real.";
$test = explode("em", $texto);
echo "<pre>";
var_dump($test);
echo "</pre>";

echo "<br>---<br>";

// contar os dias do mes
$dias = cal_days_in_month(CAL_GREGORIAN, 9, 2021); // 31
echo "Existem: ".$dias;


