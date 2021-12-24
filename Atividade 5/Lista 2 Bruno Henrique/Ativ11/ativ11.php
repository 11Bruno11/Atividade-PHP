<?php
$itens = array(
    array("Item", "Preço"),
    array("1", "Cachorro quente", "4"),
    array("2", "X-Salada", "4.50"),
    array("3", "X-Bacon", "5"),
    array("4", "Torrada", "2"),
    array("5", "Refrigerante", "1.50")
);

$preco = $itens[$_POST['item']][2]*$_POST['quant'];

echo "O preço total foi de R$ ", $preco;