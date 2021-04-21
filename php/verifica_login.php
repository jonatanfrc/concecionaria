<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: ../loga.php');
    exit();
}