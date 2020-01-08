<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $inserir = mysqli_query($conexao,"insert into usuario
    (nomeUsuario,usuario,senha) values ('$nome','$usuario','$senha')");

    if($inserir){
        echo "<script>alert('Usuário Cadastro')
        location.href='usuario.php'</script>";
    }else{
        echo "<script>alert('Erro ao Cadastrar')
        location.href='cadusuario.php'</script>";
    }
?>