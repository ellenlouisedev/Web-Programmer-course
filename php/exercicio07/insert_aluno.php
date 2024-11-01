<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div class="container card text-center mt-3 bg-primary text-white">
    <?php
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["dnasc"];
    
    # CONEXÃO COM BANCOS DE DADOS
    # $conn = new MySQli('localhost','usuario','senha','banco de dados');
    $conn = new MySQli('localhost','root','','bd_senac');
    
    if($conn->connect_error){
        die("Connection failed: " .
        $conn->connect_error);
    }
    else{
        $sql = "INSERT INTO alunos (nome, cpf, data_nascimento)
        VALUES ('$nome','$cpf','$data_nascimento')";
    
        if(mysqli_query($conn,$sql)){
            if(mysqli_affected_rows($conn)){
                echo "Cadastro realizado com sucesso.";
            }
            else{
                echo "Falha ao cadastrar.";
            }
        }
        else {
            echo "Falha no comando SQL.";
        }
    }
    ?>
</div>
</body>
</html>