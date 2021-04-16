<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);

$options = (isset($_POST['options'])) ? $_POST['options'] : '';
$id_ven = (isset($_POST['id_ven'])) ? $_POST['id_ven'] : '';
$cpf = (isset($_POST['cpf'])) ? $_POST['cpf'] : '';
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$telefone = (isset($_POST['telefone'])) ? $_POST['telefone'] : '';
$endereco = (isset($_POST['endereco'])) ? $_POST['endereco'] : '';

switch($options){
    case 1: //criar
        $consulta = "INSERT INTO vendedor (id_ven, cpf, nome, telefone, endereco) VALUES('$id_ven', '$cpf', '$nome', '$telefone', '$endereco') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;

    case 2: //modificacao
        $consulta = "UPDATE vendedor SET id_ven = '$id_ven', cpf = '$cpf', nome = '$nome', telefone = '$telefone', enderenco = '$endereco' WHERE id_ven = '$id_ven' ";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        $data = $resultado -> fecthAll(pdo::FETCH_ASSOC);
        break;
    case 3: //deletar
        $consulta = "DELETE FROM vendedor WHERE id_ven = '$id_ven' ";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        break;
    case 4: //listar
        $consulta = "SELECT id_ven, cpf, nome, telefone, endereco FROM vendedor";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        $data = $resultado -> fetchAll(PDO::FETCH_ASSOC);
        break;
    }

    print json_encode($data, JSON_UNESCAPED_UNICODE);
    $conexion = NULL;