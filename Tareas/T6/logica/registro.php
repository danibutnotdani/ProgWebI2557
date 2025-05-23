<?php
    include ('conexion.php');

    $nombreUsuario= $_GET['nombre'];

    $sql="INSERT INTO usuario (nombre) VALUES ('$nombreUsuario')";

       
    if($conexion -> query($sql) === TRUE){

        header('Location:../index.html');
        exit();
    }else{
        echo "<h1>Error de consulta</h1>";
    }


?>