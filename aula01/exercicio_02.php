<?php

    $nota1 = "8";
    $nota2 = "1";
    $nota3 = "7";

    $media = ($nota1 + $nota2 + $nota3)/3;

    if ($media >= 6) {
        echo "Media: " . "$media" . "<br/>" . "Você foi Aprovado!";
    } else echo "Media: " . "$media" . "<br/>" . "Você foi Reprovado";

?>