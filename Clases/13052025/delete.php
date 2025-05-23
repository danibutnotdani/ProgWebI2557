<?php
global $conecta;
include ("./conexion.php");

$numero = $_GET['numero'];
$eliminar = "DELETE FROM persona WHERE numero = $numero";

$conecta->query($eliminar);

if($conecta->query($eliminar)){
    header("Location: ./listar.php");
    exit();
} else {
    echo "Error". $conecta->error;
}
