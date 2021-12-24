<?php
    class Convenio{

        public $nome_fantasia;
        public $nome_empresa;
        public $cnpj;
        public $complemento;
        public $email;
        public $nome_cont;
        public $homepage;
        public $telefone;
        public $celular;
        public $endereco;
        public $numero;
        public $cep;
        public $cidade;
        public $estado;

        public function __construct(){
            require_once '../conexao.php';
            $conn = new Conexao;
        }

        public function delete($id_convenio){
            if(isset($_GET['id_convenio']) && !empty($_GET['id_convenio'])){
                $id_convenio = addslashes($_GET['id_convenio']);
                        
               $cmd = $conn->prepare("DELETE FROM convenios WHERE id_convenio = :id"); 
               $cmd->bindParam(":id", $id_convenio);
               $cmd->execute();
               
               header("location: index.php");
            }
        }

        public function insert($fantasia, $empresa,  $cnpj, $email, $nome_cont, $homepage, $telefone, $celular, $endereco, $numero, $cep, $complemento, $cidade, $estado){

                // if(isset($_POST['nome_fantasia'], $_POST['nome_empresa'], ['cnpj'], $_POST['complemento'], $_POST['email'], ['nome_cont'], $_POST['homepage'], $_POST['telefone'],  $_POST['celular'], $_POST['endereco'], $_POST['numero'], $_POST['cep'], $_POST['complemento'], $_POST['cidade'], $_POST['estado'])){
        
                    // $fantasia = $_POST['nome_fantasia'];
                    // $empresa = $_POST['nome_empresa'];
                    // $cnpj = $_POST['cnpj'];
                    // $email = $_POST['email'];
                    // $nome_cont = $_POST['nome_cont'];
                    // $homepage = $_POST['homepage'];
                    // $telefone = $_POST['telefone'];
                    // $celular = $_POST['celular'];
                    // $endereco = $_POST['endereco'];
                    // $numero = $_POST['numero'];
                    // $cep = $_POST['cep'];
                    // $complemento = $_POST['complemento'];
                    // $cidade = $_POST['cidade'];
                    // $estado = $_POST['estado'];

                    try {
                        $conn = new PDO("mysql:hostname=localhost;dbname=sa_02_crud_db","root","");
                    } catch (PDOException $e) {
                        echo 'Error: ' . $e->getMessage();
                    }
                    $conn->query("INSERT INTO convenios(nome_fantasia, nome_empresa, cnpj, email, nome_cont, homepage, telefone, celular, endereco, numero, cep, complemento, cidade, estado) VALUES ('$fantasia', '$empresa', '$cnpj', '$email', '$nome_cont', '$homepage', '$telefone', '$celular', '$endereco', '$numero', '$cep', '$complemento', '$cidade', '$estado');");
                // }
            

            header("location: index.php");
        }

        public function update(){

            if(isset($_GET['id_convenio'])){
                $id_convenio = addslashes($_GET['id_convenio']);
                $fantasia = addslashes($_POST['nome_fantasia']);
                $empresa = addslashes($_POST['nome_empresa']);
                $cnpj = addslashes($_POST['cnpj']);
                $email = addslashes($_POST['email']);
                $nome_cont = addslashes($_POST['nome_cont']);
                $homepage = addslashes($_POST['homepage']);
                $telefone = addslashes($_POST['telefone']);
                $celular = addslashes($_POST['celular']);
                $endereco = addslashes($_POST['endereco']);
                $numero = addslashes($_POST['numero']);
                $cep = addslashes($_POST['cep']);
                $complemento = addslashes($_POST['complemento']);
                $cidade = addslashes($_POST['cidade']);
                $estado = addslashes($_POST['estado']);
            }
        
            $cmd = $conn->prepare("UPDATE convenios SET nome_fantasia = :a, nome_empresa = :b, cnpj = :c, email = :d, nome_cont = :e, homepage = :f, telefone = :g, celular = :h, endereco = :i, numero = :j, cep = :k, complemento = :l, cidade = :m, estado = :n WHERE id_convenio = :id");
        
            $cmd->bindParam(":a", $fantasia);
            $cmd->bindParam(":b", $empresa);
            $cmd->bindParam(":c", $cnpj);
            $cmd->bindParam(":d", $email);
            $cmd->bindParam(":e", $nome_cont);
            $cmd->bindParam(":f", $homepage);
            $cmd->bindParam(":g", $telefone);
            $cmd->bindParam(":h", $celular);
            $cmd->bindParam(":i", $endereco);
            $cmd->bindParam(":j", $numero);
            $cmd->bindParam(":k", $cep);
            $cmd->bindParam(":l", $complemento);
            $cmd->bindParam(":m", $cidade);
            $cmd->bindParam(":n", $estado);
            $cmd->bindParam(":id", $id_convenio);
            $cmd->execute();
        
            header("location: index.php");
        }
        
    }
    
?>