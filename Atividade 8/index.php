<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h2>Atividade 20</h2>
        <?php
            require 'Carro.php';

            $carro1 = new Carro();
            $carro1->setMarca("BMW");
            $carro1->setModelo("M3");

            echo "<pre>";
             print_r($carro1);
            echo "</pre>";
        ?>
</body>

</html>