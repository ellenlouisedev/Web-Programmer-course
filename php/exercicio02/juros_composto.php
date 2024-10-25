<?php 
    $capital    = $_POST["capital"];
    $taxa       = $_POST["taxa"];
    $tempo      = $_POST["tempo"];

    $i = 1; // inicialização
    while($i <= $tempo){ // condição
        $juros = $capital * $taxa;
        $montante = $capital + $juros;
        echo $i."º ano: juros = ". round($juros, 2) ." e Total = ". round($montante, 2) ." <br>";
        $i = $i + 1;
        $capital = $montante;
    }
?>