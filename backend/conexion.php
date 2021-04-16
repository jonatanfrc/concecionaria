<?php
    class Conexion{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('name', 'concessionaria');
            define('usuario', 'root');
            define('password', '');	
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{
                $conexion = new PDO("mysql:host=".servidor."; dbname=".name, usuario, password, $options);
                return $conexion;                    
            }catch (Exception $e){
                die("O erro da conexão é: ". $e->getMessage());
            }
        }
    }
?>