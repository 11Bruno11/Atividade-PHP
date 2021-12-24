<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 22</title>
</head>
<body>
    <h2>Atividade 22</h2>
        <?php 
            require "contas.php";
        
            $corrente1 = new contaCorrente();
            $corrente1->abrirConta("Bruno", "Corrente", 6548, 500);

            echo "<pre>";
                print_r($corrente1);
            echo "</pre>";

            echo "<h3>Deposito</h3>";
            $corrente1->depositar(1000);
            echo "<h3>Saque</h3>";
            $corrente1->sacar(50);
            echo "<h3>Tarifa Mensal</h3>";
            $corrente1->tarifaMensal(true);
            echo "<h3>Encerramento da Conta</h3>";
            $corrente1->encerrar(false);
        ?>
</body>
</html>