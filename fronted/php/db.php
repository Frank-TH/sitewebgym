<?php

$conexion = new mysqli("localhost","root","","gym");

if($conexion->connect_errno){
    echo 'Fallo la conexion: ('.$conexion->connect_errno.")".$conexion->connect_error;
}
echo $conexion->host_info."\n";