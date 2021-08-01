<?php

	/**
	# Algoritmo 
	**/
	class ContaBanco {

		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;
		
 		public function abrirConta($t){
 			$this->setTipo($t);
 			$this->setStatus(true);
 			if ($t == "CC") {
 				$this->setSaldo(50);
 			} elseif ($t == "CP") {
 				$this->setSaldo(150);
 			}
 		}
 		public function fecharConta(){
 			if ($this->getSaldo() > 0) {
 				echo "Conta com dinheiro, não pode ser fechada.".$this->getDono()."</br>";
 			} elseif ($this->getSaldo() < 0) {
 				echo "Conta em débito, não pode ser fechada.".$this->getdono()."<br/>";
 			} else {
 				$this->setStatus(false);
 				echo "Conta de - ".$this->getDono()."Fechada. <br/>";
 			}
 		}
 		public function depositar($vl){
 			if ($this->getStatus() == true) {
 				$this->setSaldo($this->getSaldo() + $vl);
 				echo "Deposito de R$ $vl na conta de - ".$this->getDono()."<br/>";
 			} else {
 				echo "Impossível fazer depósito";
 			}
 		}
 		public function sacar($vl){
 			if ($this->getStatus() == true) {
 				if ($this->getSaldo() >= $vl) {
 					$this->setSaldo($this->getSaldo() - $vl);
 					echo "Saque de R$ $vl altorizado. - ".$this->getDono()."<br/>";
 				} else {
 					echo "Saldo insuficiente para sacar. - ".$this->getDono()."<br/>";
 				}
 			} else {
 				echo "Impossível sacar.";
 			}
 		}
 		public function pagarMensal(){
 			$v_m = 0;
 			if ($this->getTipo() == "CC") {
 				$v_m = 12;
 			} elseif ($this->getTipo() == "CP") {
 				$v_m = 20;
 			}
 			if ($this->getStatus() == true) {
 				if ($this->getSaldo() > $v_m) {
 					$this->setSaldo($this->getSaldo() - $v_m);
 					echo "Mensalidade debitada R$ $v_m na conta de - ".$this->getDono()."<br/>";
 				} else {
 					"Saldo insuficiente.";
 				}
 			} else {
 				echo "Impossível pagar.";
 			}
 		}

 		// Métodos especiais
 		public function ContaBanco(){
			$this->setStatus(false);
			$this->setSaldo(0);
			echo "Conta criada com sussesso! <br/>";
		}
 		public function setNumConta($nc){
 			$this->numConta = $nc;
 		}
 		public function getNumConta(){
 			return $this->numConta;
 		}
 		public function setTipo($t){
 			$this->tipo = $t;
 		}
 		public function getTipo(){
 			return $this->tipo;
 		} 		
 		public function setDono($d){
 			$this->dono = $d;
 		}
 		public function getDono(){
 			return $this->dono;
 		}
 		public function setSaldo($sd){
 			$this->saldo = $sd;
 		}
 		public function getSaldo(){
 			return $this->saldo;
 		}
 		public function setStatus($st){
 			$this->status = $st;
 		}
 		public function getStatus(){
 			return $this->status;
 		}
	}

?>


