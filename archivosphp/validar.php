<?php
require_once("conexion.php");

$usuario = $_POST['user'];
$password = $_POST['password'];
$_SESSION['logeado'] = false;

$db = new Conexion();

$sql = "SELECT * FROM usuarios";

$resultados = $db->query($sql);

if(!empty($_POST['enviar'])) {
    if ($resultados['user'] == $usuario && $resultados['password'] == $password) {
        session_start();
        $_SESSION['logeado'] = true;
        header('location:indexAdmin.php');
        exit();
    } else {
        header('indexAdmin.php');
    }
}
?>