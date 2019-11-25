<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testando PHP</title>
</head>
<body>
    <form action="tarefa04.php" method="POST">
        Nome: 
        <input type="text" name="nome">
        <br>
        <br>
        Email:
        <input type="text" name="email">
        <br>
        <br>
        <label>Como conheceu o site?</label>
        <br>
        <input type="checkbox" name="google" value="origem-google">Google
        <input type="checkbox" name="bola-cristal" value="origem-bola-cristal">Bola de cristal
        <input type="checkbox" name="spotify" value="origem-spotify">Spotify
        <br>
        <br>
        <label>Qual seu gênero</label>
        <br>
        <input type="radio" name="feminino" value="feminino">Feminino
        <input type="radio" name="masculino" value="masculino">Masculino
        <input type="radio" name="x" value="x">X
        <br>
        <br>
        <select name="dormiu-bem">
            <option disabled selected>Dormiu bem a noite? Dê uma nota de 0 a 10</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <br>
        <input type="checkbox" name="aceita-termos" value="aceita-termos">
        <label>Aceito termos e condições</label>
        <br>
        <br>
        <input type="submit">
    </form>
    <?php
        echo "<pre>";
        // Imprimindo tudo que vem pelo GET
        //var_dump($_GET);

        // Imprimindo somente um campo específico que vem pelo GET
        //var_dump($_GET['email']);

        // Utilizando foreach para imprimir todos os valores do GET
        $valores = $_GET;
        //var_dump($valores);
        foreach($valores as $valor){
            echo "<p>$valor</p>";
        }

        // Alterando form para POST e utilizando foreach para imprimir todos os valores do POST
        // $valores = $_POST;
        // // var_dump($valores);
        // foreach(getallheaders() as $valor){
        //     echo "<p>$valor</p>";
        // }

        // Testando a função de php getAllHeaders() e imprimindo valores com foreach            
        // $cabecalhosHttp = getallheaders();
        // foreach ($cabecalhosHttp as $chave => $valor) {
        //     echo "$chave : $valor <br>";
        // }

        // Imprimindo outras variáveis globais
        // $_SERVER - Exibe informação do servidor e ambiente de execução
        // $_FILES - Podemos ter as informações do arquivo que foi enviado - precisamos ter um input type="file", e adicionar enctype="multipart/form-data" no form
        // $_REQUEST - Reúne todos os valores presentes nas superglobais $_GET, $_POST e $_COOKIE em um único array associativo
        // $_SESSION - Sessão é um recurso que permite salvar valores (variáveis) para serem usados ao longo da visita do usuário. Valores salvos na sessão podem ser usados em qualquer parte do script, mesmo em outras páginas do site. São variáveis que permanecem setadas até o visitante fechar o browser ou a sessão ser destruída.
        // $_COOKIE - Exibe as informações armazenadas do usuário.    
        // $_GLOBALS - usada para acessar variáveis ​​globais de qualquer lugar do script PHP (também de dentro de funções ou métodos).

        // var_dump($_COOKIE);

        $_SERVER;
        print_r($GLOBALS);

    ?>

</body>
</html>