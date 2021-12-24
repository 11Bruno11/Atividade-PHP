<?php

function multiplicacao($num1, $num2){
    $total = $num1 * $num2;
    return "$num1 * $num2 = $total";
}

function divisao($num3, $num4){
    $total2 = $num3 / $num4;
    return "$num3 / $num4 = $4$total2";
}


function subtracao($num5, $num6){
    $total3 = $num5 - $num6;
    return "$num5 - $num6 = $total3";
}

function soma($num7, $num8){
    $total4 = $num7 + $num8;
    return "$num7 + $num8 = $total4";
}


echo multiplicacao(2,2);
//echo divisao(4,2);
//echo subtracao(2,5);
//echo soma(2,10);

echo "<br>";


$carros = array("Nissan" => "350z", "Audi" => "Audi Q8", "BMW" => "BMW M3");

foreach ($carros as $indice => $valor) {
    echo $indice. ": ". $valor. "<br>";
}

?>