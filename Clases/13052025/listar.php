<?php
global $conecta;
include ("./conexion.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar datos</title>
</head>
<body>
<table border="2";>
    <tr>
        <th>Numero</th>
        <th>Nombre Usuario</th>
        <th>Carrera</th>
        <th>Acciones</th>
    </tr>
    <?php
    $consulta = "SELECT * FROM persona";
    $resultado = $conecta->query($consulta);

    while ($row = $resultado->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row['numero']; ?></td>
        <td><?php echo $row['nombre_usuario']; ?></td>
        <td><?php echo $row['carrera']; ?></td>
        <td>
            <a href="./update.php?numero=<?php echo $row['numero']; ?>">Editar</a>
            <a href="./delete.php?numero=<?php echo $row['numero']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php
    }
    ?>

</table>
</body>
</html>