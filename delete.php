<?php
include ("conexion.php");

if(isset($_POST['enviar'])){

    if (!isset($_POST['id'])){
        echo "<h2>Falta información</h2>";
        die();
    }

    $id = $_POST['id'];

    $sql = "delete from  noticias where id={$id}";

    if(create($db, $sql)){
        echo "<h2>Registro eliminado</h2>";
        die('<a href="index.php">Atras</a>');
    }else{
        echo "<h2>El registro no se eliminado<h2>";
    }
}

$id = $_GET["id"];
$sql = "select * from noticias where id = {$id}";
$temp = read($db, $sql);

$resultado = $temp[0];
?>
<h1>Noticia</h1>
<form method="post">
    <p><input type="number" name="id" value="<?php echo $resultado["id"]?>" readonly />
    <p><input type="texto" name="titulo" placeholder="Titulo de la nota" value="<?php echo $resultado["titulo"]?>" readonly required></p>
    <p><textarea name="nota" readonly required><?php echo $resultado["texto"]?></textarea></p>
    <p><input type="texto" name="categoria" placeholder="categoria de la nota" value="<?php echo $resultado["categoria"]?>" readonly></p>
    <p><input type="datetimelocal" name="fecha" required value="<?php echo $resultado["fecha"]?>" readonly></p>
    <p><input type="submit" name="enviar" value="Eliminar" /><input type="button" value="Cancelar" onclick="cancelar()" /></p>
</form>
<a href="index.php">Atras</a>
<script>
    function cancelar(){
        window.location="index.php";
    }
</script>