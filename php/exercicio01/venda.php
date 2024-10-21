<?php
    $produto    = $_POST["produto"];
    $preco      = $_POST["preco"];
    $quantidade = $_POST["quantidade"];
    $desconto   = $_POST["desconto"];

    echo "Produto: $produto <br>";
    echo "Preço: $preco <br>";
    echo "Quantidade: $quantidade <br>";
    echo "Preço com o desconto: ";

    $total      = $preco * $quantidade;
    echo "Total: $total";

    if ($desconto > 0) {
        $valor_desconto = ($total * $desconto) / 100;
        $total -= $valor_desconto;
        echo "Desconto: $desconto% $valor_desconto";
    }
?>