<?php
session_start();

$usuario_autenticado = false;

//cria uma variavel que armasena os valores dos email e senhas
$usuario_cadastrado = [
    ['email'=> 'admin@senai.br',
    'senha'=> 12345],
    ['email'=> 'aluno@senai.br',
    'senha'=> 'abcde'],
    ['email'=> 'suport@senai.br',
    'senha'=> '1a2b3c']
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
    //SESSION validando o usuario esta logado para ir para a prosima sessão
    $_SESSION['autenticado'] ='SIM';
    //echo "Usuário altenticado com sucesso";
    header ('location: painel.php');
}
else{
    $_SESSION['autenticado'] ='NÂO';
    //echo 'Usuário ou senha incorreto';
    header ('location: entrar.php?login=erro');
}
    


?>
