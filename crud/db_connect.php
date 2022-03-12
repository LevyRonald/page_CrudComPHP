<?php
$servername = "localhost";
$usuario = "root";
$password = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $usuario, $password, $db_name);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()){
    echo "falha na conexão: ".mysqli_connect_error();
}

?>