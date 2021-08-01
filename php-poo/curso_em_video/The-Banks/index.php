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
    <h4>Aula 05 - The Banks</h4>
    <pre>
    <?php
    	require_once 'conta_bancaria.class.php';

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();
        $p1->abrirConta("CC");
        $p1->setDono("P1");
        $p1->setNumConta(111);
        $p2->abrirConta("CP");
        $p2->setDono("P2");
        $p2->setNumConta(222);

        $p1->depositar(300);
        $p2->depositar(500);

        $p1->sacar(100);
        $p2->sacar(1000);
  
        $p1->pagarMensal();
        $p2->pagarMensal();

        $p1->sacar(238);
        //$p2->sacar();

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);

    ?>
    </pre>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

