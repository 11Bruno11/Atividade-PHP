<?php

$carros = array(1=>"Nissan", 2=>"Audi", 3=>"BMW");
$carros[] = "Toyota";
$carros[8] = "Ford";
print_r($carros);
//echo $carros[2];
echo "<br>";

foreach ($carros as $valor){
    echo $valor . "<br>";
}
echo "<br>";
echo "<hr>";
$carro = ["Crevrolet", "Kia", "Hyundai"];
print_r($carro);
echo "<br>";

foreach ($carro as $valor){
    echo $valor . "<br>";
}
echo "<br>";
echo "<hr>";

$eu = array("Nome"=> "Bruno", "Idade"=> "18 anos");
$eu["Altura"] = 1.73;

foreach ($eu as $indice => $valor) {
    echo $indice. ": ". $valor. "<br>";
}
echo "<br>";
echo "<hr>";

$cidades = array(
    "MG" => array("Sabará", "Belo Horizonte", "Santa Luzia"),
    "SP" => array("Bauru", "Jundiaí", "Guarulhos"),
    "RJ" => array("Niterói", "Petrópolis", "Maricá"));
    echo "<br>";

    echo "Minas Gerais". "<br>";
    foreach($cidades["MG"] as $indice => $valor){
        echo $indice. ": " . $valor."<br>";
    }
    echo "<br>";
    echo "<hr>";

    echo "São Paulo". "<br>";
    foreach($cidades["SP"] as $indice => $valor){
        echo $indice. ": " . $valor."<br>";
    }
    echo "<br>";
    echo "<hr>";

    echo "Rio de Janeiro". "<br>";
    foreach($cidades["RJ"] as $indice => $valor){
        echo $indice. ": " . $valor."<br>";
    }
?>