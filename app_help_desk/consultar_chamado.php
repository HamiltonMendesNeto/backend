<?php
require_once ("login.php");

?>

<?php
$chamados = [];

$arquivo = fopen('registro.txt','r');

while(!feof($arquivo)){
  //O fget vai ler o arquivo linha a linha
  $registro = fgets($arquivo);

  $chamados [] = $registro;
}

fclose ($arquivo);

// echo "<pre>";
// print_r ($chamados);
// echo "</pre>";

?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" type="text/css" href="estilizacao.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <button onclick="location.href='logoff.php'" class="botao-sair" type="button">Sair</button>

    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
      <?php

        foreach($chamados as $chamado){

        $chamado_dados = explode('|',$chamado);

        if(count($chamado_dados) < 3){
          continue;
        }

        //echo "<pre>";
        //print_r ($chamado_dados);
        //echo "</pre>";
      ?>
      <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chamado_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[1]?></h6>
                  <p class="card-text"><?php echo $chamado_dados[2]?></p>

                </div>
            
              <?php } ?>
              
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>