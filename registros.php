<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

 include ("conexion.php");
 $sql = null;
 $id = 0;
 if (isset($_GET["id"])){
 $id = $_GET["id"];
 $sql = "select * from noticias where id = {$id}";
 }

$registros = read($db, $sql);

 if(!count($registros)){
 http_response_code(404);
 echo '{"message":"No se encontro el registro"}';
 exit();
 }

 $resultados = array();

 foreach($registros as $temp){
 $item = array("id"=>$temp["id"], "titulo"=>$temp["titulo"],
"texto"=>$temp["texto"], "categoria"=>$temp["categoria"],
"fecha"=>$temp["fecha"]);
 $resultados[] = $item;
 }

 if (empty($id)){
 echo json_encode($resultados);
 exit();
 }

 echo json_encode($resultados[0]);

 ?>