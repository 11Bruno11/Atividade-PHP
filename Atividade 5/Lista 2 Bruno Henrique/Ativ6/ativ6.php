<?php
$tri = ($_POST['a'] * $_POST['b']) / 2;
$cir = ($_POST['c'] * $_POST['c'] * 3.14159);
$tra = (($_POST['b'] * $_POST['a']) * $_POST['c'] / 2);
$quad = ($_POST['b'] * 4);
$ret = (($_POST['a'] * 2) + ($_POST['b'] * 2));

echo 'Triangulo: ', $tri, '<br>';
echo 'Circulo: ', $cir, '<br>';
echo 'Trapezio: ', $tra, '<br>';
echo 'Quadrado: ', $quad, '<br>';
echo 'Retangulo: ', $ret, '<br>';

?>