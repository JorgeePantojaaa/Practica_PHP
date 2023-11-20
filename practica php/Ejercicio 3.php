<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$matricula = $_POST['matricula'];
$op = $_POST['op'];
$mostrar = $_POST['datos'];
$m;
 
if ($matricula == 'si') {
    if ($mostrar=='pantalla'){
    echo "el alumno ".  $nombre ." con teléfono ". $telefono .",está matriculado en ".$op;
}
if ($mostrar=='archivo'){
    $file="datos.txt";
    $archivo=fopen($file,"w");
    fwrite($archivo,"el alumno ".  $nombre ." con telefono ". $telefono .",esta matriculado en ".$op);
    fclose($archivo);
}
 }
 
if ($matricula != 'si'){
    if ($mostrar=='pantalla'){
    echo "el alumno ".  $nombre ." con teléfono ". $telefono .", no está matriculado en ningún curso";
}
if ($mostrar=='archivo'){
    $file="datos.txt";
    $archivo=fopen($file,"w");
    fwrite($archivo,"el alumno ".  $nombre." con telefono ". $telefono.", no esta matriculado en ningun curso");
    fclose($archivo);
}
}
 
 
?>