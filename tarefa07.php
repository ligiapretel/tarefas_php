<?php

// Criar uma variável $a contendo um array ( 'a' => 1 , 'b' => 2 , 'c' => 'Eu <3 JSON' ):
// a. Fazer echo da variável $a.
$a = ["a"=>1,"b"=>2,"c"=>"Eu <3 JSON"];

// echo "<pre>";
// var_dump($a);

foreach($a as $posicao){
    echo "<pre>";
    echo $posicao;
}

// b. Utilizando json_encode, transformar o array em um json e atribuí-lo a $a.



?>