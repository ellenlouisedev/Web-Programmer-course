<?php 
# CONEXÃO COM O BANCOS DE DADOS
# $conn = new MySQli('localhost','usuario','senha','banco de dados');
$conn = new MySQli('localhost','root','','bd_senac');
    if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>