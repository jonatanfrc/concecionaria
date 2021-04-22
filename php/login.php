<?php
session_start();
include('conexao.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../loga.php');
    exit();
}
 
$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
 
$query = "select * from usuario where usuario = '{$usuario}' and senha = '{$senha}'";
 
$result = mysqli_query($conn, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../index.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    echo "<script>
    window.location.href='../loga.php';
    alert('Ops! Algo deu errado, faça o login!');
    </script>";
    exit();
}