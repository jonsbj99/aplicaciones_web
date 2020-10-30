<?php
include ("conexion.php");

if(isset($_POST['enviar'])){
    

    if (!isset($_POST['titulo']) && empty($_POST['titulo'])){
        die("Debe especificar en titulo");
    }

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['nota'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fecha']; //AAAA-MM-DD

    $sql = "update noticias set titulo = '{$titulo}', texto = '{$texto}', categoria = '{$categoria}', fecha = '{$fecha}' where id={$id}";

    if(create($db, $sql)){
        echo "<h2>Registro actualizado</h2>";
        //exit();
    }else{
        echo "<h2>El registro no se actualizo<h2>";
    }
    
}

$id = $_GET["id"];

$sql = "select * from noticias where id = {$id}";

$temp = read($db, $sql);

$resultado = $temp[0];
?>
<h1>Nueva noticia</h1>
<form method="post">
    <p><input type="number" name="id" value="<?php echo $resultado["id"]?>" readonly />
    <p><input type="texto" name="titulo" placeholder="Titulo de la nota" value="<?php echo $resultado["titulo"]?>"  required></p>
    <p><textarea name="nota" required><?php echo $resultado["texto"]?></textarea></p>
    <p><input type="texto" name="categoria" placeholder="categoria de la nota" value="<?php echo $resultado["categoria"]?>"></p>
    <p><input type="datetimelocal" name="fecha" required value="<?php echo $resultado["fecha"]?>"></p>
    <p><input type="submit" name="enviar" value="Crear"></p>
</form>
<a href="index.php">Atras</a>