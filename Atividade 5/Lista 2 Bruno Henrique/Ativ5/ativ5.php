<?php 
$prod1 = $_POST['valor1'] * $_POST['quant1'];
$prod2 = $_POST['valor2'] * $_POST['quant2'];
$valfinal = $prod1 + $prod2;
echo 'R$ ',$valfinal;

?>