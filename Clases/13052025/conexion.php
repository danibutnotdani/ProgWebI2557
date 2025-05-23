<?php
$host ='127.0.0.1:3306';
$user ='danielrm';
$contraseñaDB='dzb7Wz538C';
$dbName= 'alumnos';

/*
    $dbName: if0_38704731_ico;
    $hostDB: sql311.infinityfree.com;
    $userDB:if0_38704731
    $passDB: VFzanQv2ZyxZOWa
*/

$conecta = new mysqli($host,$user,$contraseñaDB,$dbName);

if($conecta -> connect_error ){
    die('Error en la conexion'.$conecta->connect_error);

}else{
    echo "<h1>Conexion realizada</h1>";
}

?>
