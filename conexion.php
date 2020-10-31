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

function read($db, $sql_temp = null){
    $sql = "select * from noticias";

    if (isset($sql_temp)){
        $sql = $sql_temp;
    }

    $consulta = mysqli_query($db, $sql);
    $resultados = array();

    //echo "Numero de registro: " . mysqli_num_rows($consulta)."<br>";

    while ($temp = mysqli_fetch_array($consulta)){
        $resultados[]=$temp;
    }

    mysqli_close($db);

    return $resultados;
}

function create($db, $sql){
    //$sql = "insert into noticias set titulo = 'ejemplo1', texto = 'ejemplo1', categoria = 'inicio1', fecha = CURRENT_TIMESTAMP()";
    $resultados = mysqli_query($db, $sql);

    return $resultados;
}

function update(){

}

function delete(){

}

?>