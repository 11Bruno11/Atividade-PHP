<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 21</title>
</head>

<body>
    <h2>Atividade 21</h2>
        <?php
            require 'scripts.php';

            echo '<h2>Exercício 1</h2>';

            $retangulo = new Retangulo();
            echo "Área = {$retangulo->area(48, 54)}<br>";
            echo "Perímetro = {$retangulo->perimetro(78, 48)}<br>";
            echo "Diagonal = {$retangulo->diagonal(15, 23)}";

            echo '<h2>Exercício 2</h2>';

            $produto1 = new Produto();
            $produto1->adicionarProdutos('Fósforo', 0.50, 20);
            echo "<pre>";
            print_r($produto1);
            echo "</pre><br>";

            echo "Valor em estoque: R$ {$produto1->valorTotalEmEstoque()}";
            $produto1->removerProdutos();

            echo '<h2>Exercício 3</h2>';

            $professor1 = new Professor();
            $professor1->setTelefone(985967858);
            $professor1->setOculos(true);

            echo "<pre>";
            print_r($professor1);
            echo "</pre>";

            echo '<h2>Exercício 4</h2>';

            $aluno1 = new Aluno();
            $aluno1->setEmail('aluno1@aluno.com');
            $aluno1->setCidade('Mangabeiras');
            $aluno1->setStatus(true);

            echo "<pre>";
            print_r($aluno1);
            echo "</pre>";
        ?>
</body>

</html>