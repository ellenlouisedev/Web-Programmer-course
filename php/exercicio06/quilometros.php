<?php 
    $quilometros = $_POST["quilometros"];
    $valor_inicial = 5;
    $valor_km = 2.50;

    $qnt_km = 1;
    while ($qnt_km <= $quilometros) {    
        $valor_total = $valor_inicial + $valor_km * $qnt_km;
        echo "$qnt_km km = $valor_total <br>";
        $qnt_km = $qnt_km + 1;
    }
?>