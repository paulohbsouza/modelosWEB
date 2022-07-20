<?php
//send_mail.php

function send_mail($subject, $destination, $body, $debug = false)
{
    if (empty($subject) || is_null($subject)) {
         throw new Exception("Subject empty", 1);
     }
     else {
         $subject = utf8_encode($subject);
     }

     if (empty($destination) || is_null($destination)) {
         throw new Exception("You should must define a destination", 1);
     }
     else {
         $destination = utf8_encode($destination);
     }

     if (empty($body) || is_null($body)) {
         throw new Exception("Body empty", 1);
    }
     else {
         $body = utf8_encode($body);
     }

     /** gera token jwt para autenticacao no serviço */
    sc_include_library("sys", "JWT", "Jwt.php");
    sc_include_library("sys", "GuzzleHttp", "http.php");

     $Key = 'lMcXV1CzRKTd1Eb4zIKp';

     
     $Token = JWT::Issue($Key, ['userId' => [usr_id]], 'https://www.diretriz.net');

    $str_token = (string)$Token;

    $cliente = new \GuzzleHttp\Client();

     /** corpo do email **/
     $payload = [
         'header' => [
             'destination' => $destination
        ],
         'mail' => [
            'subject' => $subject,
           'body' => $body
       ]
     ];
    
    /* headers */
    $options = array(
        'json' => $payload,
        'debug' => $debug,
       'headers' => [
             'Accept'        => 'application/json',
           'Authorization' => 'Bearer ' . $str_token,
            'Content-Type'  => 'application/json'
         ],
     );

     return $cliente->request('POST', 'https://d-mailer.herokuapp.com/mailer/send', $options);
}



