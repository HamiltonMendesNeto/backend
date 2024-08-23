<?php
//todas as variaveis declaradas
$salario = 1000;
$horas_extras = 1;



//Verificação se o salario e as horas extras são compativeis
if($horas_extras > 10 and $salario < 2000 ){
    echo'O total de horas extras trabalhadas foram de:' . $horas_extras;
        echo "<br>";
    echo'E seu salario final é:' . $salario+($salario * 0.20);

}
//Se não o codigo fara mais uma verificação
elseif($horas_extras > 5 and $salario >= 2000){
    echo'O total de horas extras trabalhadas foram de:' . $horas_extras;
         echo "<br>";
    echo'E seu salario final é:' . $salario+($salario * 0.10);

}
//Apenas se as duas verificações acima não funcionarem aparece o salrio bruto sem acrecimo
else{
    echo 'Você não bateu a meta de horas minimas para obiter bônus';
        echo "<br>";
    echo'Seu foi de:' . $salario;
}

   




?>
