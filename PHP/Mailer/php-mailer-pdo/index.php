<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once './connection.php';
require './lib/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

        <title>Enviar e-Mail | PHPMailer PDO</title>
    </head>
    <body>
        <br/>

        <?php
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($data['sendAddMsg'])) {
            $attachment = $_FILES['attachment'];
            //var_dump ($attachment);
            $query_msg = "INSERT INTO contacts_msgs (name, email, assunto, content, file, created) VALUES (:name, :email, :subject, :content, :file, NOW())";

            $add_msg = $conn->prepare($query_msg);

            $add_msg->bindParam(':name', $data['name'], PDO::PARAM_STR);
            $add_msg->bindParam(':email', $data['email'], PDO::PARAM_STR);
            $add_msg->bindParam(':subject', $data['subject'], PDO::PARAM_STR);
            $add_msg->bindParam(':content', $data['content'], PDO::PARAM_STR);
            $add_msg->bindParam(':file', $attachment['name'], PDO::PARAM_STR);

            $add_msg->execute();

            if ($add_msg->rowCount()) {
                $mail = new PHPMailer(true);
                try {
                    $mail->CharSet = 'UTF-8';
                    $mail->isSMTP();
                    $mail->Host = 'smtp.mailtrap.io';
                    $mail->SMTPAuth = true;
                    $mail->Username = '008a7c9f76485f';
                    $mail->Password = '886ff7e34b4151';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 2525;

                    //Enviar e-mail para o cliente
                    $mail->setFrom('paulohbsouza@hotmail.com', 'Atendimento');
                    $mail->addAddress($data['email'], $data['name']);

                    $mail->isHTML(true);
                    $mail->Subject = 'Recebi a mensagem de contato';
                    $mail->Body = "Prezado(a) " . $data['name'] . "<br><br>Recebi o seu e-mail.<br>Será lido o mais rápido possível.<br>Em breve será respondido.<br><br>Assunto: " . $data['subject'] . "<br>Conteúdo: " . $data['content'];
                    $mail->AltBody = "Prezado(a) " . $data['name'] . "\n\nRecebi o seu e-mail.\nSerá lido o mais rápido possível.\nEm breve será respondido.\n\nAssunto: " . $data['subject'] . "\nConteúdo: " . $data['content'];

                    $mail->send();

                    //******
                    //Segundo email
                    //******

                    $mail->clearAddresses();

                    //Enviar e-mail para o colaborador da empresa
                    $mail->setFrom('paulohbsouza@hotmail.com', 'Atendimento');
                    $mail->addAddress('comercial@dotsis.com.br', 'PHBS');

                    //Attachments
                    if ((isset($attachment['name'])) AND (!empty($attachment['name']))) {
                        $mail->addAttachment($attachment['tmp_name'], $attachment['name']); //Add attachments
                    }
                    $mail->isHTML(true);
                    $mail->Subject = $data['subject'];
                    $mail->Body = "Nome: " . $data['name'] . "<br>E-mail: " . $data['email'] . "<br>Assunto: " . $data['subject'] . "<br>Conteúdo: " . $data['content'];
                    $mail->AltBody = "Nome: " . $data['name'] . "\nE-mail: " . $data['email'] . "\nAssunto: " . $data['subject'] . "\nConteúdo: " . $data['content'];

                    $mail->send();
                    unset($data);

                    if ((isset($attachment['name'])) AND (!empty($attachment['name']))) {
						//Recuperar último ID inserido no banco de dados
						$last_id = $conn->lastInsertId();

                    	//Diretório onde o arquivo será salvo
                    	$directory = 'images/' . $last_id . "/";

                    	//Criar o diretório
                    	mkdir($directory, 0755);

                    	//Upload do arquivo
                    	$file = $attachment['name'];
                    	move_uploaded_file($attachment['tmp_name'], $directory . $file);
                    }

                    echo "Mensagem de contato enviada com sucesso!<br>";
                } catch (Exception $e) {
                    echo "Erro: Mensagem de contato não enviada com sucesso!<br>";
                }
                echo '<br><br>Mensagem de contato enviada com sucesso!<br><br>';
            } else {
                echo '<br><br>Erro: Mensagem de contato não enviada com sucesso!<br><br>';
            }
        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="jumbotron">
                        <h2 class="text-center">Form contato - PHP PDO</h2>
                        <p class="lead">Nos envie um email com ou sem anexo e receba a nossa confirmação em instantes.</p>

                        <!--
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Oloco, meu!</strong> Olha esse alerta animado, como é chique!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        -->

                        <form name="add_msg" action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nome:</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nome completo" value="<?php
                                if (isset($data['name'])) {
                                    echo $data['name'];
                                }
                                ?>" autofocus required/>
                                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>

                                <label>e-Mail:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Melhor e-Mail" value="<?php
                                if (isset($data['email'])) {
                                    echo $data['email'];
                                }
                                ?>" required/>

                                <label>Assunto:</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" value="<?php
                                if (isset($data['subject'])) {
                                    echo $data['subject'];
                                }
                                ?>" required/>

                                <label>Conteúdo:</label>
                                <textarea class="form-control" rows="3" name="content" id="content" placeholder="Conteudo da mensagem" value="<?php
                                if (isset($data['content'])) {
                                    echo $data['content'];
                                }
                                ?>" required></textarea>
                            </div>

                            <hr class="my-4">
                            <label>Anexar arquivos:</label>
                            <input type="file" class="form-control-file" name="attachment" id="attachment" />
                            <br/><br/>
                            <button type="submit" class="btn btn-primary" value="Enviar" name="sendAddMsg">Enviar</button>

                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>


        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>