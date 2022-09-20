<?php
require_once 'conexion.php';

$buscador = $_POST['search'];
$aBuscar = $_POST['buscar'];

$db = new Conexion();

$qry = "SELECT * FROM pokemon LEFT JOIN imagen ON pokemon.imagen = imagen.id LEFT JOIN tipo ON pokemon.tipo = tipo.id WHERE pokemon.numero LIKE '%" . $aBuscar .  "%'' OR pokemon.tipo LIKE '%" . $aBuscar .  "%'' OR pokemon.nombre LIKE '%" . $aBuscar .  "%'";

$resultados = $db->query($qry);

if(isset($buscador)){
	
}



?>