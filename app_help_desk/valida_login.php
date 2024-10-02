<?php

echo '<h1>Bem- vindo ao Senai';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
echo '<pre>';
print_r($_POST);
echo '</pre> <hr>';
 
echo"E-mail; " ;
echo $_POST['email'];
echo '<br>';
echo"Senha: ";
echo $_POST['senha'];

?>
</body>
</html>