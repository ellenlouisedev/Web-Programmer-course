<?php 
    $capital    = $_POST["capital"];
    $taxa       = $_POST["taxa"];
    $tempo      = $_POST["tempo"];

    $montante   = $capital * pow(1 + $taxa, $tempo);
    echo "Montante: $montante"
?>