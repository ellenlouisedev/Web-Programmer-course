<?php
$n1 = $_POST["n1"];
$i = 0;

while ($i <= 10) {
    $resultado = $n1 * $i;
    echo "$n1 x $i = $resultado <br>";
    $i = $i + 1;
}
?>