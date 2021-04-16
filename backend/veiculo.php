<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);

$options = (isset($_POST['options'])) ? $_POST['options'] : '';
$id_vei = (isset($_POST['id_vei'])) ? $_POST['id_vei'] : '';
$placa = (isset($_POST['placa'])) ? $_POST['placa'] : '';
$modelo = (isset($_POST['modelo'])) ? $_POST['modelo'] : '';
$cor = (isset($_POST['cor'])) ? $_POST['cor'] : '';
$fabricante = (isset($_POST['fabricante'])) ? $_POST['fabricante'] : '';
$ano = (isset($_POST['ano'])) ? $_POST['ano'] : '';

switch($options){
    case 1: //criar
        $consulta = "INSERT INTO veiculo (id_vei, placa, modelo, cor, fabricante, ano) VALUES('$id_vei', '$placa', '$modelo', '$cor', '$fabricante', '$ano') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;

    case 2: //modificacao
        $consulta = "UPDATE veiculo SET id_vei = '$id_vei', placa = '$placa', modelo = '$modelo', cor = '$cor', fabricante = '$fabricante', ano = '$ano' WHERE id_vei = '$id_vei' ";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        $data = $resultado -> fecthAll(pdo::FETCH_ASSOC);
        break;
    case 3: //deletar
        $consulta = "DELETE FROM veiculo WHERE id_vei = '$id_vei' ";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        break;
    case 4: //listar
        $consulta = "SELECT id_vei, placa, modelo, cor, fabricante, ano FROM veiculo";
        $resultado = $conexion -> prepare($consulta);
        $resultado -> execute();
        $data = $resultado -> fetchAll(PDO::FETCH_ASSOC);
        break;
    }

    print json_encode($data, JSON_UNESCAPED_UNICODE);
    $conexion = NULL;