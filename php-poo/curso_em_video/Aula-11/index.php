<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <h4>Aula 11</h4>
    <pre>
    <?php
    	
        //require_once 'visitante.class.php';
        require_once 'aluno.class.php';
        require_once 'bolsista.class.php';
        require_once 'professor.class.php';
        
        
        //Programa princiapal

        //$p1 = new Pessoa(); /** Classe abstrata não pode ser implementada **/
        //$p2 = new Aluno();
        //$v1 = new Visitante();
        //$v1->setNome("Juvenal");
        //$v1->setIdade(33);
        //$v1->setSexo("M");
        //print_r($v1);

        $al = new Aluno();
        $al->setNome("Pedro");
        $al->setMatr(1111);
        $al->setIdade(16);
        $al->setSexo("M");
        $al->setCurso("Informática");
        $al->pagarMensalidade();
        print_r($al);

        $bl = new Bolsista();
        $bl->setMatr(1112);
        $bl->setNome("Jubileu");
        $bl->setBolsa(12.5);
        $bl->setCurso("Administração");
        $bl->setIdade(20);
        $bl->setSexo("M");
        $bl->pagarMensalidade();
        print_r($bl);

    ?>
    </pre>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

