<?php

$linguagemPreferida = "JavaScript";

//estrutura condicional if

if($linguagemPreferida == "java"){
    echo "Você é um javeiro, professor celso gostou disso";
}else{
    echo "Você não é um javeiro"; 
}

echo "<br><br>";

/*
* == Igual
* != diferente
* > maior 
*  menor
* >- maior ou igual
* <- menor ou igual
* ! negação 
* && (and) e
* || (or) ou
*/

$opcao = 2;

//estrutura switch (escolha)
switch($opcao){
    case 1:
        echo "Você escolheu a opção 1";
        break;
     case 2:
        echo "Você escolheu a opção 2";
        break;
    case 3:
        echo "Você escolheu a opção 3";
        break;
    default:
        echo "Você não escolheu uma opção válida";
}

echo "<br><br>";

$salarioEstagiario = 1200;
$salarioJunior = 2200;
$salarioPleno = 4500;
$salarioSenior = 10000;

$mediaSalarial = ($salarioEstagiario + $salarioJunior + $salarioPleno + $salarioSenior) / 4;

echo " A média salárial é: $mediaSalarial";

echo "<br><br>";

//estruturas de repetição (laços, loops)

$cont = 0;

while ($cont < 5){
    echo " O cont é: $cont <br>";
    $cont++;

for ($cont = 0; $cont < 5; $cont++){
    echo "O cont é: $cont <br>";
}
}