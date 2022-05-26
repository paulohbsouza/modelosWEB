<!--
//https://instagram.com/oauth/authorize/?client_id=b2ded91285b0469dba4666a7481807ee&redirect_uri=http://phbs.com.br/instagram/app.php&response_type=code
//http://phbs.com.br/instagram/app.php?code=3a31b80c3f514c51b3ebd637badca72f
//https://instagram.com/oauth/authorize/?client_id=b2ded91285b0469dba4666a7481807ee&redirect_uri=http://phbs.com.br/instagram/app.php&response_type=token
//http://phbs.com.br/instagram/app.php#access_token=1134184369.b2ded91.fe397ba342e54f119870ece6ea2ac5c2
-->

<?php

function callInstagram($url)
{
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_SSL_VERIFYHOST => 2
));

$result = curl_exec($ch);
curl_close($ch);
return $result;
}

$tag = 'coffe';
$client_id = "b2ded91285b0469dba4666a7481807ee";

$url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id.'&count=24';

$inst_stream = callInstagram($url);
$results = json_decode($inst_stream, true);

//Now parse through the $results array to display your results... 
foreach($results['data'] as $item){
    $image_link = $item['images']['low_resolution']['url'];
    echo '<img src="'.$image_link.'" />';
}
?>

<!--
foreach($results['pagination'] as $page){
	$new_page = $page;
}

//novo loop para completar a tela com as 12 fotos restantes

function callInstagram2($url2)
{
$ch2 = curl_init();
curl_setopt_array($ch2, array(
CURLOPT_URL => $url2,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_SSL_VERIFYHOST => 2
));

$result2 = curl_exec($ch2);
curl_close($ch2);
return $result2;
}

$tag = 'coffe';
$client_id = "b2ded91285b0469dba4666a7481807ee";

$url2 = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id.'&count=12&max_id='.$new_page;

$inst_stream2 = callInstagram2($url2);
$results2 = json_decode($inst_stream2, true);

//Now parse through the $results array to display your results... 
foreach($results2['data'] as $item2){
    $image_link2 = $item2['images']['low_resolution']['url'];
    echo '<img src="'.$image_link2.'" style="width: 180px; height: 180px"/>';
}
-->
