<?php

// Definir uma função triangulo() que retorne sua superfície.

function areaTriangulo($base,$altura){
    return $base * $altura;
}

echo "<pre>";
echo areaTriangulo(10,20);

// Definir uma função retangulo() que retorne sua superfície.

function areaRetangulo($base,$altura){
    return $base * $altura;
}

echo "<pre>";
echo areaRetangulo(5,20);

// Definir uma função quadrado() que retorne sua superfície.

function areaQuadrado($lado){
    return $lado * $lado;
}

echo "<pre>";
echo areaQuadrado(6);

?>