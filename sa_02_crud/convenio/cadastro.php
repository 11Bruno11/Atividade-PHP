<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="styleBH.css">
    <title>Cadastro de Convenio</title>
</head>
<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="../index.php" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span class="link-text">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../paciente/view.php" class="nav-link">
                    <i class="fas fa-address-card"></i>
                    <span class="link-text">Paciente</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../medicos/consultar.php" class="nav-link">
                    <i class="fas fa-user-md"></i>
                    <span class="link-text">Médico</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="insert.php" class="nav-link">
                    <i class="fas fa-file-medical"></i>
                    <span class="link-text">Convênio</span>
                </a>
        </ul>
    </nav>
    <main>
        <div class="container">
            <div class="formPaciente">
                <form  method="post">

                    <label for="nome_fantasia">Nome Fantasia:</label>
                    <input type="text" name="nome_fantasia" id="nome_fantasia">

                    <label for="nome_empresa">Nome da Empresa:</label>
                    <input type="text" name="nome_empresa" id="nome_empresa">

                    <label for="cnpj">CNPJ:</label>
                    <input type="text" name="cnpj" id="cnpj">

                    <label for="email">E-Mail:</label>
                    <input type="email" name="email" id="email">

                    <label for="contato">Nome do Contato:</label>
                    <input type="text" name="nome_cont" id="nome_cont">

                    <label for="homepage">Homepage:</label>
                    <input type="text" name="homepage" id="homepage">

                    <label for="telefone">Telefone:</label>
                    <input type="tel" name="telefone" id="telefone">

                    <label for="celular">Celular:</label>
                    <input type="tel" name="celular" id="celular">

                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" id="endereco">

                    <label for="numero">Número:</label>
                    <input type="number" name="numero" id="numero">

                    <label for="cep">CEP:</label>
                    <input type="number" name="cep" id="cep">

                    <label for="complemento">Complemento:</label>
                    <input type="text" name="complemento" id="complemento">

                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" id="cidade">

                    <label for="estado">Estado:</label>
                    <input type="text" name="estado" id="estado">

                    <button type="submit" class="btnCadastro">Cadastrar</button>

                    <?php
                        try {
                            $conn = new PDO("mysql:hostname=localhost;dbname=sa_02_crud_db","root","");
                        } catch (PDOException $e) {
                            echo 'Error: ' . $e->getMessage();
                        }
                        require_once 'convenio.php';

                        if(isset(_$POST['nome_fantasia'], $_POST['nome_empresa'], ['cnpj'], $_POST['complemento'], $_POST['email'], ['nome_cont'], $_POST['homepage'], $_POST['telefone'],  $_POST['celular'], $_POST['endereco'], $_POST['numero'], $_POST['cep'], $_POST['complemento'], $_POST['cidade'], $_POST['estado'])){
                            
                            $fantasia = _$POST['nome_fantasia'];
                            $empresa = $_POST['nome_empresa'];
                            $cnpj = $_POST['cnpj'];
                            $email = $_POST['email'];
                            $nome_cont = $_POST['nome_cont'];
                            $homepage = $_POST['homepage'];
                            $telefone = $_POST['telefone'];
                            $celular = $_POST['celular'];
                            $endereco = $_POST['endereco'];
                            $numero = $_POST['numero'];
                            $cep = $_POST['cep'];
                            $complemento = $_POST['complemento'];
                            $cidade = $_POST['cidade'];
                            $estado = $_POST['estado'];


                            $conv = new Convenio();
                            $conv->insert($fantasia, $empresa,  $cnpj, $email, $nome_cont, $homepage, $telefone, $celular, $endereco, $numero, $cep, $complemento, $cidade, $estado);
                        }
                    ?>
    
                </form>
                <a href="index.php"><button type="submit" class="btnCadastro">Voltar</button></a>
                    
            </div>
        </div>
    </main>
</body>
</html>

