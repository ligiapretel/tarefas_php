<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testando PHP</title>
</head>
<body>
<?php
    $numeroInteiro = "9";
        echo "Variável ".$numeroInteiro."<br>";
        var_dump($numeroInteiro);
        echo "<br>";
    $numeroDecimal = 0.3;
        echo "Variável ".$numeroDecimal."<br>";
        var_dump($numeroDecimal);
        echo "<br>";
    $aspasDuplas = "!";
        echo "Variável ".$aspasDuplas."<br>";
        var_dump($aspasDuplas);
        echo "<br>";
    $aspasSimples = '!';
        echo "Variável ".$aspasSimples."<br>";
        var_dump($aspasSimples);
        echo "<br>";
    $stringAspasDuplas = "meninas";
        echo "Variável ".$stringAspasDuplas."<br>";
        var_dump($stringAspasDuplas);
        echo "<br>";
    $stringAspasSimples = '0.8';
        echo "Variável ".$stringAspasSimples."<br>";
        var_dump($stringAspasSimples);
        echo "<br>";
        echo "<br>";

    $um = "Três";
    $dois = "pratos";
    $tres = "de";
    $quatro = "trigo";
    $cinco = "para";
    $seis = "três";
    $sete = "tigres";
    $oito = "tristes";
        echo $um." ".$dois." ".$tres." ".$quatro." ".$cinco." ".$seis." ".$sete." ".$oito;
        echo "<br>";
        echo "<br>";

        echo $numeroDecimal." ".$dois." ".$tres." ".$quatro." ".$cinco." ".$seis." ".$stringAspasDuplas." ".$oito;
        echo "<br>";
        echo "<br>";


    $variable01 = true;
    $variable02 = false;
    $variable03 = 0;
    $variable04 = 1;
    $variable05 = 6;
    $variable06 = '';
    $variable07 = "3";
    $variable08 = "true";
    $variable09 = 'false';
    $variable10 = null;

    function tipoDado($varN){
        if ( $varN == true )
        {
        echo 'o valor ' . $varN . ' é verdadeiro.';
        }
        else
        {
        echo 'o valor ' . $varN . ' é falso.';
        }
    }
    tipoDado( $variable10 );

    echo "<br>";
    echo "<br>";

    $arrayAnimais = ["urso","ornitorrinco","macaco","tucano","lagarta"];
    var_dump($arrayAnimais);
    echo "<br>";
    echo "<br>";

    //Adicionando animais ao final do array
    array_push($arrayAnimais,"mariposa","bicho preguiça");
    var_dump($arrayAnimais);
    echo "<br>";
    echo "<br>";

    //Concatenando cada posição do array em uma frase
    echo "Eu gosto dos seguintes animais: ".$arrayAnimais[0].", ".$arrayAnimais[1].", ".$arrayAnimais[2].", ".$arrayAnimais[3].", ".$arrayAnimais[4].", ".$arrayAnimais[5].", ".$arrayAnimais[6].".";
    echo "<br>";
    echo "<br>";

    //Alterando primeiro elemento do $arrayAnimais
    $alteraBicho = ["pomba"];
    print_r(array_replace($arrayAnimais,$alteraBicho));
    echo "<br>";
    echo "<br>";

    //Adicionando animal na posição 100 do $arrayAnimais
    $arrayAnimais[100] = "tatu";
    var_dump($arrayAnimais);
    echo "<br>";
    echo "<br>";

    //Adicionando animal na posição 16 do $arrayAnimais
    $arrayAnimais[16] = "furão";
    var_dump($arrayAnimais);
    echo "<br>";
    echo "<br>";


    // Forma de se declarar arrays em versões anteriores do php.
    // $animais=array("minhoca","elefante","jacaré");
    // $alterandoAnimal=array("tigre");
    // print_r(array_replace($animais,$alterandoAnimal));

    //Declarando array associativo com dados de um carro
    $carro = ["marca"=>"Jeep","modelo"=>"Compass","cor"=>"azul","ano"=>"2018","placa"=>"LPE5021"];
    var_dump($carro);
    echo "<br>";
    echo "<br>";

    //Adicionando um elemento no início do array associativo
    array_unshift($carro,["proprietário"=>"Wilson"]);
    var_dump($carro);
    echo "<br>";
    echo "<br>";

    //Adicionando elemento na posição 14 do array associativo
    $carro[14]=["seguradora"=>"Azul Seguros"];
    var_dump($carro);
    echo "<br>";
    echo "<br>";

    //Declarando variável de número inteiro e decimal
    $inteiro = 10;
    $decimal = 1.2;
    echo "Soma dos valores = " . ($inteiro+$decimal);
    echo "<br>";
    echo "Subtração dos valores = " . ($inteiro-$decimal);
    echo "<br>";
    echo "Divisão dos valores = " . ($inteiro/$decimal);
    echo "<br>";
    echo "Multiplicação dos valores = " . ($inteiro*$decimal);
    echo "<br>";
    $restoDivisao = $inteiro%$decimal;
    echo "Resto da divisão dos valores = " . $restoDivisao;
    echo "<br>";
    echo "Adicionando 1 aos números = " . ($inteiro+1) ." e ". ($decimal+1);
    echo "<br>";
    echo "Adicionando 5 ao número inteiro = " . ($inteiro+5) .". Subtraindo 0,6 do decimal = ". ($decimal-0.6);
    echo "<br>";
    $resultado = (($inteiro*2) + $decimal) / ($inteiro/2);
    echo "Resultado da conta = " . $resultado;
    echo "<br>";
    echo "<br>";

    //Declarando variáveis Olá e Mundo
    $ola = "Olá";
    $mundo = "Mundo!";
    //Concatenando as variáveis
    $helloWorld = $ola." ".$mundo;
    echo $helloWorld;
    echo "<br>";
    $frase = $helloWorld." PHP é o máximo.";
    echo $frase;

?>
    
</body>
</html>