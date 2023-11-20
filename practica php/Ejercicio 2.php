<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Jugador1</h1>
    <?php
    $total=0;
    for ($i = 0; $i < 5; $i++)
    {
        $dado = rand(1,6);
        echo "<img src='./img/$dado.jpg' width=200 height=200>\n";
        $total = $total + $dado; // es igual a $total += $dado
    }
    echo "<h1>Jugador 2</h1>";
    $total1=0;
    for ($i = 0; $i < 5; $i++)
    {
        $dado = rand(1,6);
        echo "<img src='./img/$dado.jpg' width=200 height=200>\n";
        $total1 = $total1 + $dado;
    }
    if($total>$total1)
    {
        echo "<h1>Jugador 1 Ha ganado  con $total puntos</h1>";
    }
    elseif($total==$total1)
    {
        echo"<h1>Empate</h1>";
    }
    else
    {
        echo "<h1>Jugador 2 Ha ganado con $total1 puntos</h1>";
    }
    ?>
</body>
</html>