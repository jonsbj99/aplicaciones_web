<?php
if(isset($_POST['enviar'])){
    include ("conexion.php");

    if (!isset($_POST['titulo']) && empty($_POST['titulo'])){
        die("Debe especificar en titulo");
    }

    $titulo = $_POST['titulo'];
    $texto = $_POST['nota'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fecha']; //AAAA-MM-DD

    $sql = "insert into noticias set titulo = '{$titulo}', texto = '{$texto}', categoria = '{$categoria}', fecha = '{$fecha}'";

    if(create($db, $sql)){
        echo "<h2>Registro creado</h2>";
        //exit();
    }else{
        echo "<h2>El registro no se creo<h2>";
    }
    
}

?>
<h1>Nueva noticia</h1>
<form method="post">
    <p><input type="texto" name="titulo" placeholder="Titulo de la nota" required></p>
    <p><textarea name="nota" required></textarea></p>
    <p><input type="texto" name="categoria" placeholder="categoria de la nota"></p>
    <p><input type="date" name="fecha" required></p>
    <p><input type="submit" name="enviar" value="Crear"></p>
</form>
<a href="index.php">Atras</a>