<?php 

    interface Contas {
        public function abrirConta($titular, $tipoDaConta, $vinculo, $deposito);
        public function encerrar($status);
        public function depositar($valor);
        public function sacar($valor);
        public function tarifaMensal($chequeEspecial);
    }


// CLASS CONTA CORRENTE
    class ContaCorrente implements Contas {
        
        public $numeroConta;
        public $tipo;
        public $titular;
        public $saldo;
        public $status;
        public $cttps;
        public $deposito;
        public $chequeEspecial;
        public $cobranca;
        public $total;


// ABRIR CONTA         
      public function abrirConta($titular, $tipoDaConta, $vinculo, $deposito){
                    
            $this->cttps = $vinculo;
            $this->deposito = $deposito;
            $this->tipo = $tipoDaConta;
            $this->saldo = $deposito;
            $this->titular = $titular;
            

            if ($this->cttps === '' and $this->deposito <200){
                
                echo "Não foi possivel fazer a abertura da conta. Necessario numero do vinculo impregaticio ou deposito de 200 reais";
                $this->status = "Fechada";

            }else {

                echo "Sua conta foi aberta com Sucesso.";
                echo "<br>";
                echo "Titular: ". $this->titular;
                echo "<br>";
                echo "Conta do tipo: ".$this->tipo;
                echo "<br>";
                echo "O seu saldo é de: ".$this->saldo;

               $this->status ="Aberta";
            }
        }

// ENCERRAR 
        public function encerrar($status){
            if($this->saldo === 0){
                $this->status === false;
                echo "Conta encerrada";
            }else {
                echo "Para encerrar conta, saldo necessita ser 0";
            }
        }

// DEPOSITAR         
        public function depositar($valor){
            $this->total += $valor;
            echo "Você depositou $valor <br> Seu saldo agora é de R$ $this->total <br><br>";
        }

// SACAR 
        public function sacar($valor){
            $this->total -= $valor;
            echo "Você sacou $valor <br> Seu saldo agora é de R$ $this->total <br><br>";
        }

// TARIFA DA CONTA        
        public function tarifaMensal($chequeEspecial){
            if(date('d/m/Y',strtotime('+30 days',strtotime(str_replace('/', '-', '25/10/2021'))))){
                $this->saldo -= 29.90;
                if($this->saldo < 0 && $this->chequeEspecial === true){
                    $this->cobranca += 50;
                    echo "Cheque especial = R$ {$this->cobranca}<br>";
                    $this->saldo *= 0.001;
                    echo "Saldo com acréscimo = R$ {$this->saldo}<br>";
                }
                else
                    echo "Conta adimplente<br><br>";
            } 
        }
    }

  

// CLASS CONTA POUPANÇA
    class contaPoupanca implements Contas{
        private $numConta;
        private $tipo;
        private $titular;
        private $saldo;
        private $status;
 
// ABRIR CONTA        
        public function abrirConta($titular, $tipoDaConta, $vinculo, $deposito){
            $this->titular = $titular;
            $this->tipo = $tipoDaConta;
            $this->vinculoEmpregaticio = $vinculoEmpregaticio;
            $this->cttps = $vinculo;
            $this->numConta = $numConta;
            $this->saldo += $deposito;

        }

// ENCERRAR  
        public function encerrar($status){
            if($this->saldo === 0){
                $this->status === false;
                echo "Conta encerrada";
            }else {
                echo "Para encerrar conta, saldo necessita ser 0";
            }
        }

// DEPOSITAR
        public function depositar($valor){
            $rendimento = 0;
            $this->total += $valor; 
            echo "Seu saldo é de R$ $this->total";
            echo"<br>";
            if(date('d/m/Y',strtotime('+30 days',strtotime(str_replace('/', '-', '05/06/2016'))))){
                $rendimento = $this->total * 0.0049;
                echo "Seu rendimento foi de: R$ $rendimento";
                echo "<br><br>";
            }
            if($this->total < 0){
                echo "O saldo não pode ser menor que R$ 0,00";
            }  
        }

// SACAR  
        public function sacar($valor){
            if($this->total > 0){
                $this->total -= $valor;
            }
            echo "Você sacou R$ $valor";
            echo"<br>";
            echo "Seu saldo total é de R$ $this->total";
        }

// TARIFA DA CONTA  
        public function tarifaMensal($chequeEspecial){
        }
    }

?>