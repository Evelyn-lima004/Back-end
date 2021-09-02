<?php

$frutas= [
   "Banana",
   "Maça",
   "Uva",
   "Abacaxi",
   "Morango",
   "Pera",
   "Goiaba",
   "Maracujá",
   "Melancia",
  "Limão",
  "Kiwi",
  "Abacaxi"

   

];

// print_r($frutas);

$encontrarFruta = "Limão";

$encontrei = false;
foreach($frutas as $chave => $fruta){
    if($fruta == $encontrarFruta) {
        echo "Fruta deletada $fruta";
        unset($frutas[$chave]);
        $encontrei = true;
    }
}
           
if (!$encontrei){
    echo "Fruta não encontrada";
}

print_r($frutas);