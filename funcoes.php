<?php

$funcoesExecutadas++;

// Definir uma variável chamada numeroMagico, que contenha um número. Ela deverá estar na primeira linha do nosso código PHP.


$numeroMagico = 15;

// Definir uma função maior() que receba 3 números e retorne o maior deles.

function maior($numeroA,$numeroB,$numeroC){
    // global $funcoesExecutadas;
    return max($numeroA,$numeroB,$numeroC);
}

echo maior(10,60,30);

// Definir uma função tabela() que receba um parâmetro base (número inicial), um parâmetro limite (número máximo), e retorne um array com a sequência de números a partir do número base até o número limite.

function tabela($numeroInicial,$numeroMaximo){
    // global $funcoesExecutadas;
    return range($numeroInicial,$numeroMaximo);
}

echo "<pre>";
var_dump(tabela(10,20));

// // Modificar maior() de forma que, se receber apenas 2 parâmetros, a função compare esses dois números com o número da variável numeroMagico.

function maior2($numeroA,$numeroB){
    global $numeroMagico;
    return max($numeroA,$numeroB,$numeroMagico);
}

echo maior2(10,5);

// // Modificar função tabela() de forma que, se a receber apenas um parâmetro, a função use numeroMagico como limite.

function tabela2($numeroInicial){
    global $numeroMagico;
    return range($numeroInicial,$numeroMagico);
}

echo "<pre>";
var_dump(tabela2(10));

// Utilizando a função strpos() , encontrar a posição da primeira aparição da palavra "php" dentro da frase: "Adoro php! -Eu também adoro php!"

var_dump(strpos("Adoro php! -Eu também adoro php!","php"));

?>