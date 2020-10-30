<?php

/** Lectura de información */
include ("conexion.php");

$registros = read($db); ?>
<a href="create.php">Nuevo</a>
<table>
<tr>
    <th>ID</th>
    <th>Titulo</th>
    <th>Noticias</th>
    <th>Categoria</th>
    <th>Fecha</th>
    <th></th>
</tr>
<?php foreach ($registros as $registro){?>
<tr>
    <td><?php echo $registro["id"]?></td>
    <td><?php echo $registro["titulo"]?></td>
    <td><?php echo $registro["texto"]?></td>
    <td><?php echo $registro["categoria"]?></td>
    <td><?php echo $registro["fecha"]?></td>
    <td> |<a href = "update.php?id=<?php echo $registro["id"]?>">Actualizar</a>|<a href="delete.php?id=<?php echo $registro["id"]?>">Eliminar</a>|</td>
</tr>
<?php } ?>
</table>