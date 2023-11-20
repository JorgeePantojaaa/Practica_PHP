<?php
    $file = "agenda.txt";
    $archivo = fopen($file,"a");
    if (isset($_REQUEST["nombre"]))
    fwrite($archivo, $_REQUEST["nombre"]);

    ?>