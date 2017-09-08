<?php
$con = mysqli_connect("localhost", "root", "", "fvcomercial");
if (!$con) {
    die('Erro ao conectar ao banco: ' . mysql_error());
}
ini_set('max_execution_time', 900);
?>