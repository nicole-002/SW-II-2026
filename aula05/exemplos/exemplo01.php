<?php

    //JASON É UMA LINGUAGEM UNIVERSAL 'COMPATÍVEL' COM TODAS AS OUTRAS

    //string json contendo os dados de um funcionário
    $json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';

    //faz o parsing na string, gerando um objeto PHP
    $obj = json_decode($json_str);

    // echo $obj;
    echo "<pre>"; // separa o cód em linhas no navegador
    var_dump($obj);
    echo "</pre>";


    echo "<hr>";

    //imprime o conteúdo do objeto 
    echo "nome: $obj->nome<br>"; 
    echo "idade: $obj->idade<br>"; 
    echo "sexo: $obj->sexo<br>";

?>