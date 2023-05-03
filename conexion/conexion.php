<?php
$servername = "database-biblioteca.mysql.database.azure.com";
$username = "Administrador";
$password = "Secreto123";
$db = "biblioteca";
$port= 3306;

#$con = mysqli_connect($servername, $username, $password,$db);

$conexion = mysqli_init();
mysqli_ssl_set($conexion, NULL, NULL, NULL, '../ssl/BaltimoreCyberTrustRoot.crt.pem', NULL);
mysqli_real_connect($conexion, $servername, $username, $password, $db, $port,
    MYSQLI_CLIENT_SSL) or die("Error al conectar " . mysqli_errr());


?>
