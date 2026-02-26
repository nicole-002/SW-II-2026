<?php
     for ($i=1; $i <=5 ; $i++) { 
        echo $i;
        echo "<br/>";
    }


    echo "<hr>";


    $nomes = ['fulano','ciclano','beltrano'];
    echo $nomes; //erro pois é um array


    echo "<hr>";


    $nomes = ['fulano','ciclano','beltrano'];
    echo $nomes[0];
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2]; //cód mtoo grande e num limitado de itens, nada funcional para bd
 

    echo "<hr>";


    $nomes = ['fulano','ciclano','beltrano'];
    for ($i=0; $i < 3 ; $i++) { 
        echo $nomes[$i];
        echo "<br>"; //num limitado de itens, nada funcional para bd
    }


    echo "<hr>";


    $nomes = ['fulano','ciclano','beltrano'];
    $qntd = count($nomes);    
    for ($i=0; $i < $qntd ; $i++) { 
        echo $nomes[$i];
        echo "<br>";//pft
    }


    echo "<hr>"; 


    foreach ($nomes as $key => $valor) {
        echo $key;
        echo "<br>"; // pega todas os índices do array
    }


    echo "<hr>";


    foreach ($nomes as $key => $value) {
        echo $value; // pega todas os valores do array
        echo "<br>";
    }
?>