<?php
    if(isset($_POST['cadastrar'])){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $senha = $_POST["senha"];
        $check_senha = $_POST["repita"];
    }

    if($senha != $check_senha){
        die("Senhas não correspondem");
    }

    $host = "localhost";
    $banco = "formularioCadastro";
    $user = "root";
    $senha_user = "";

    $con = mysqli_connect($host, $user, $senha_user, $banco);

    if(!$con){
        die("Conecção falhou" . mysqli_connect_error());
    }

    $sql = "INSERT INTO Clientes(Nome, CPF, Senha) VALUES('$nome', '$cpf', '$senha')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Você foi cadastrado com sucesso";
    }
?>