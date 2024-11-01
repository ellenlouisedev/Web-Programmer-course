<?php
include_once("head.html.php");
include_once("conexao.php");

$sql = "SELECT * FROM alunos";
$result = mysqli_query($conn, $sql);
// verifica se retornou algo do banco de dados
if ($result) {
    echo "<div class='container card mt-2'>
    <h2 class= 'text-center m-2'>Lista de alunos</h2>

    <a class='btn btn-primary' type='submit' href='./insert_aluno.html'><i class='fa fa-plus'> Cadastrar</i></a>

    <table class='table table-striped table-sm'>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>data_nascimento</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>";
    // continuar enquanto tiver linha na tabela
    while($linha = mysqli_fetch_array($result)){
        echo "
        <tr>
            <td>$linha[id]</td>
            <td>$linha[nome]</td>
            <td>$linha[cpf]</td>
            <td>$linha[data_nascimento]</td>
            <form action='update_aluno.html.php' method='post'>
                <td>
                    <button class= 'btn btn-warning text-white' type='submit' value=''><i class='fas fa-edit-o'></i>
                </td>
            </form>
            <form action='delete_aluno.html.php' method='post'>
                <td>
                <button class='btn btn-danger' type='submit' value=''><i class='fa fa-trash-o'></i>
                </td>
            </form>
        </tr>";
    }
    echo "</table>";
}
else{
    echo "erro";
}
?>