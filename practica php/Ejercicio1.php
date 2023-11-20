<?php

$ancho= trim(strip_tags($_REQUEST["ancho"]));
$alto= trim(strip_tags($_REQUEST["alto"]));


if(is_numeric($ancho) && is_numeric($alto)){
  if($ancho>0 && $ancho<=100 && $alto>0 && $alto<= 100){
    echo "Ancho: " . $ancho. "<br>";
    echo "Alto: " . $alto. "<br><br><br>";
for ($i=0; $i<$alto; $i++){
   for ($j=0; $j<$ancho; $j++) {
        echo "* ";
    }
    print"<br>";
}
}
else {
    echo "deben ser 2 números entre 0 y 100.";
}
}
else {
    echo "<br> los 2 valores deben ser números";
}

?>