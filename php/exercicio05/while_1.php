<?php 
$n1 = $_POST["n1"]; //inicialização
$n2 = $_POST["n2"];

if ($n1 <= $n2) {
    while($n1 <= $n2) { //condição
        echo "$n1 <br>";
        $n1 = $n1 + 1; //incrementar
    }
}

else {   
    while($n1 >= $n2) { 
        echo "$n1 <br>";
        $n1 = $n1 - 1; 
    }
}
?>