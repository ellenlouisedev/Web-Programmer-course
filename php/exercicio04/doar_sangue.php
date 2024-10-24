<?php 
    $idade = $_POST["idade"];

    if($idade >= 16 && $idade <= 66) {
        echo "Você pode doar sangue.";
    }

    if ($idade < 16) {
        echo "Você não pode doar sangue. Idade mínima: 16.";
    }

    if ($idade > 66) {
        echo "Você não pode doar sangue. Idade máxima: 66.";
    }
?>