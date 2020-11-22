<?php
//Dirección del Servidor
$host = "localhost";
 
// Puerto del servidor MySQL
$puerto = "3306";

// Nombre de usuario del servidor MySQL
$usuario = "noticias";

// Contraseña del usuario
$passwd = "noticias01";

// Nombre de la base de datos
$baseDeDatos ="noticias";

$db = mysqli_connect($host, $usuario, $passwd, $baseDeDatos);

if (!$db){
    echo mysqli_connect_errno();
    die("No se puedo conectar a la base de datos");
}

echo "Conexión realizada\n";
echo mysqli_get_host_info($db)."<br>";

$sql = "insert into noticias set titulo = 'ejemplo1', texto = 'ejemplo1', categoria = 'inicio1', fecha = CURRENT_TIMESTAMP()";
echo $resultados = mysqli_query($db, $sql);

$sql = "select * from noticias";
$resultados = mysqli_query($db, $sql);

echo "Numero de registro: " . mysqli_num_rows($resultados)."<br>";

while ($temp = mysqli_fetch_array($resultados)){
    //print_r($temp);
    echo "<b>ID:</b> ".$temp['id']."<br>";
    echo "Titulo: ".$temp['titulo']."<br>";
    echo "Texto: ".$temp['texto']."<br>";
    echo "Categoria: ".$temp['categoria']."<br>";
    echo "Fecha: ".$temp['fecha']."<br>";
}
?>