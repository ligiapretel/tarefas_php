<?php

//Tarefa 03
// Imprimindo números de 1 a 100.

// for($i=0; $i<=100; $i++){
//     echo $i."<br>";
// }

// $numeroRandom = mt_rand(1,100);

// for($i=0; $i<=$numeroRandom; $i++){
//     echo $i."<br>";
// }

// Exercício 3 - voltar
// $moeda = mt_rand(0,1);
// $quantidadeDeCara = 0;
// $quantidadeDeLoop = 1;

// while($moeda == 1 && $quantidade < 5){
//     echo "Moeda cara <br>";
//     $quantidade++;
// }

// Exercício 06
// $nomes =["Ligia","Larissa","Dudu","Eduardo","Marcia"];

// // Percorrendo array com for
// for($i=0;$i<count($nomes);$i++){

//     echo $nomes[$i]."<br>";
// }

// echo "<br><br>";
// //Percorrendo array com foreach
// foreach($nomes as $nome){
//     echo $nome."<br>";
// }

// echo "<br><br>";
// //Percorrendo array com while
// $i = 0;
// while($i<count($nomes)){
//     echo $nomes[$i]."<br>";
//     $i++;
// }

// echo "<br><br>";
// //Percorrendo array com do while
// $i=0;
// do{
//     echo $nomes[$i]."<br>";
//     $i++;
// }while($i<count($nomes));

//Exercício 07 - Array com 10 números aleatórios. Imprimir até sair o 5.
// $numerosAleatorios = [];
// for($i=0;$i<10;$i++){
//     $numerosAleatorios[] = mt_rand(1,10);
//     // echo $numerosAleatorios."<br>";
// }
//Resolvendo com for
// for($i=0; $i<count($numerosAleatorios); $i++){
//     if($numerosAleatorios[$i] != 5){
//         echo "Número ".$numerosAleatorios[$i]."<br>"; 
//     }else{
//         echo "Encontramos o número 5.";
//         break;
//     }
// }

//Resolvendo com while

// $i=0;
// while($i<count($numerosAleatorios)){
//     if($numerosAleatorios[$i] != 5){
//         echo "Número ".$numerosAleatorios[$i]."<br>";
//     }else{
//         echo "Encontramos o número 5.";
//         break;
//     }
//     $i++;
// }

//Resolvendo com do while
// $i = 0;
// do{
//     if($numerosAleatorios[$i] != 5){
//         echo "Número ".$numerosAleatorios[$i]."<br>";
//     }else{
//         echo "Encontramos o número 5.";
//         break;
//     }
//     $i++;
// }while($i<count($numerosAleatorios));

// Exercício 08 - Range

// Como estou criando o array agora, e a função range já retorna um array, não preciso colocar os []:
// $letras = range("a","n");
// // var_dump($letras);

// foreach($letras as $posicao => $letra){
//     echo "Na posição ".$posicao." está a letra ".$letra."<br>";
// }

// Exercício 09

// $mascote = ["animal"=>"passarinho","idade"=>"1","altura"=>"10cm","nome"=>"Nico"];

// foreach($mascote as $item=>$dadoMascote){
//     echo "<li>$item = $dadoMascote</li>";
// }

// Exercício 11
// $ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
// "Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
// "Finlândia"=>"Helsinki", "França" => "Paris",
// "Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
// "Alemanha" => "Berlim", "Grécia" => "Atenas",
// "Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
// "Portugal"=>"Lisboa", "Espanha"=>"Madri",
// "Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
// "Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
// Tcheca"=>"Praga", "Estônia"=>"Tallinn",
// "Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta",
// "Áustria" => "Viena", "Polônia"=>"Varsóvia"];

// // Ordenando pelo valor e mantendo a associação com o índice
// asort($ceu);

// foreach($ceu as $pais=>$capital){
//     echo "A capital de $pais é $capital.<br>";
// }

// Exercício 12
// $ceu = [
//     "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
//     "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
//     "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
//     "França" => ["Paris", "Nantes", "Lyon"],
//     "Itália" => ["Roma", "Milão", "Veneza"],
//     "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
//     ];

//     foreach($ceu as $pais=>$cidades){
//         echo "As cidades de $pais são:";
//         foreach($cidades as $cidade){
//             echo "<li>$cidade</li>";
//         }
//     }

// Exercício 13
$ceu = [
        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
        "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
        "França" => ["Paris", "Nantes", "Lyon"],
        "Itália" => ["Roma", "Milão", "Veneza"],
        "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
        ];

        foreach($ceu as $pais=>$cidades){
            if($pais=="Argentina" || $pais=="Brasil" || $pais=="Colômbia"){
                $ceu[$pais]["naAmerica"] = true; 
            }else{
                $ceu[$pais]["naAmerica"] = false; 
            }
    
        }

    foreach ($ceu as $pais => $cidades) {

        foreach ($cidades as $key=>$cidade) {
            $america = $cidades["naAmerica"];
            
            if($america){
                if($key != "naAmerica"){
                    echo "$cidade <br>";
                }
               
            }
        }
        
    }


// var_dump($ceu);

?>