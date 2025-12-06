<?php
/* Informações do banco de dados */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'netflix');

/* Tentar conectar com o banco de dados */
// O @ evita warnings na tela
$link = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* Checar conexão */
if (!$link) {
    // Não interrompe a página, apenas registra no log do PHP (xampp/php/logs/php_error_log)
    error_log("AVISO: Falha ao conectar ao banco de dados: " . mysqli_connect_error());
    $db_connected = false;
} else {
    $db_connected = true;
}

/* Desativar exibição de erros (mas eles continuam sendo logados) */
error_reporting(0);
ini_set('display_errors', 'Off');
?>
