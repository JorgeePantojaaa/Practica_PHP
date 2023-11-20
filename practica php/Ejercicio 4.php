<?php
$nombre = $_POST['nombre'];
$trabajo = $_POST['trabajo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$otras = $_POST['otras'];
$bus = $_POST['busca'];
$boton = $_POST['boton'];
$file = "agenda.txt";
if ($boton == "guardar") {
    $archivo = fopen($file, "a");
    $var = "Contacto: $nombre $trabajo $telefono $direccion $otras" .PHP_EOL;
    fwrite($archivo,$var );
    fclose($archivo);
}
if ($boton == "mostrar") {
    $archivo = fopen($file, "r");
    while (!feof($archivo)) {
        echo fgets($archivo) . "<br>";
    }
    fclose($archivo);  
}
if ($boton == "buscar") {
    $archivo = fopen($file, "r");
    $encontrado = false;
    while (!feof($archivo)) {
        $line = fgets($archivo);
        if (strpos($line,"Contacto: $bus" ) !== false) {
            echo  $line."<br>";
            $encontrado = true;
        }
    }
    fclose($archivo);
    if (!$encontrado) {
        echo "No se eoncntraron resultados para el nombre indicado.";
    }
}
?>
