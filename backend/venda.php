<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);

$options = (isset($_POST['options'])) ? $_POST['options'] : '';
$id_venda = (isset($_POST['id_venda'])) ? $_POST['id_venda'] : '';
$id_ven = (isset($_POST['id_ven'])) ? $_POST['id_ven'] : '';
$id_cli = (isset($_POST['id_cli'])) ? $_POST['id_cli'] : '';
$id_vei = (isset($_POST['id_vei'])) ? $_POST['id_vei'] : '';
$anotacoes = (isset($_POST['anotacoes'])) ? $_POST['anotacoes'] : '';

switch($options){
    case 1: //criar
        $consulta = "INSERT INTO venda (id_venda, id_ven, id_cli, id_vei, anotacoes) VALUES('$id_venda', '$id_ven', '$id_cli', '$id_vei', '$anotacoes') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;

    case 2: //modificacao
        $consulta = "UPDATE venda SET id_venda = '$id_venda', id_ven = '$id_ven', id_cli = '$id_cli', id_vei = '$id_vei', anotacoes = '$anotacoes' WHERE id_venda = '$id_venda' ";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        $data = $resultado -> fecthAll(pdo::FETCH_ASSOC);
        break;
    case 3: //deletar
        $consulta = "DELETE FROM venda WHERE id_venda = '$id_venda' ";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        break;
    case 4: //listar
        $consulta = "SELECT id_venda, id_ven, id_cli, id_vei, anotacoes FROM venda";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        $data = $resultado -> fetchAll(PDO::FETCH_ASSOC);
        break;
    }

    print json_encode($data, JSON_UNESCAPED_UNICODE);
    $conexion = NULL;