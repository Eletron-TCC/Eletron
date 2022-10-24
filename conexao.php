<?php
session_start();
$hostname = "localhost";
$usuario = "root";
$senha = "";
$database = "eletron";

$mysqli = new PDO('mysql:host=localhost;dbname=eletron', $usuario,$senha );
if(!$mysqli){
 echo "Falha ao conectar ao banco de dados";
}


?>