<?php
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="prueba";

    $conecta=mysqli_connect($server,$user,$pass,$db);

    return $conecta;
}
?>