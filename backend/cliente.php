<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id_cli = (isset($_POST['id_cli'])) ? $_POST['id_cli'] : '';
$cpf = (isset($_POST['cpf'])) ? $_POST['cpf'] : '';
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$telefone = (isset($_POST['telefone'])) ? $_POST['telefone'] : '';
$endereco = (isset($_POST['endereco'])) ? $_POST['endereco'] : '';

switch($opcion){
    case 1: //criar
        $consulta = "INSERT INTO cliente (id_cli, cpf, nome, telefone, endereco) VALUES('$id_cli', '$cpf', '$nome', '$telefone', '$endereco') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;

    case 2: //modificacao
<<<<<<< HEAD
        $consulta = "UPDATE cliente SET marca = '$id_cli', '$cpf', '$nome', '$telefone', '$endereco' WHERE id_cli = '$id_cli' ";
=======
        $consulta = "UPDATE cliente SET id_cli = '$id_cli', cpf = '$cpf', nome = '$nome', telefone = '$telefone', enderenco = '$endereco' WHERE id_cli = '$id_cli' ";
>>>>>>> rian.melo
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        $data = $resultado -> fecthAll(pdo::FETCH_ASSOC);
        break;
    case 3: //deletar
        $consulta = "DELETE FROM cliente WHERE id_cli = '$id_cli' ";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        break;
    case 4: //listar
        $consulta = "SELECT id_cli, cpf, nome, telefone, endereco FROM cliente";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        $data = $resultado -> fetchAll(PDO::FETCH_ASSOC);
        break;
    }

    print json_encode($data, JSON_UNESCAPED_UNICODE);
    $conexion = NULL;