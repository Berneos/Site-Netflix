<?php
/* Informações do banco de dados */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'netflix');
 
/* Tentar conectar com o banco de dados*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Checar conexão
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>