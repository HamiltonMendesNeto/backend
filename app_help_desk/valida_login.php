<?php

$usuario_autenticado = false;

//cria uma variavel que armasena os valores dos email e senhas
$usuario_cadastrado = [
    ['email'=> 'adimin@gmail.com',
    'senha'=> 12345]
];
// cria uma foreach que aprevia a variavel $usuario_cadastrado para $user
foreach($usuario_cadastrado as $user){
    //ve se a informação do $_POST é igual a um dos email ou senha cadastrados
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
        


}
//se usuario = a verdadeiro irá validae
if($usuario_autenticado == true){
    echo "Usuário altenticado com sucesso";
}
else{
    //echo 'Usuário ou senha incorreto';
    header ('location: index.php?login=erro');
}
    


?>