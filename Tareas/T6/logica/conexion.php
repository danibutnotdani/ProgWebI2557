<?php
$servidor= 'sql308.infinityfree.com';
$usuarioDB='if0_39055908';
$passDB='dzb7Wz538C';
$nameDB='if0_39055908_registro';

$conexion = new mysqli($servidor,$usuarioDB,$passDB,$nameDB);

if($conexion->connect_error){
    echo "<h1>Sin conexion a la DB</h1>";

}else{
    echo "<h1> Conexion realizada</h1>";
}


?>