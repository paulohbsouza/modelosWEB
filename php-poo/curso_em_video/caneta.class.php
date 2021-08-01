<?php

	/**
	#Aula 2 e 3
	class Caneta {
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;
 
		public function rabiscar() {
			if ($this->tampada == true) {
				echo "ERRO! Não posso rabiscar!";
			} else {
				echo "Estou rabiscando...";
			}		
		}
		public function tampar() {
			$this->tampada = true;
		}		
		private function destampar() {
			$this->tampada = false;
		}
	}
	**/
    
    /**
	#Aula 4
	class Caneta {
		private $modelo;
		private $cor;
		private $ponta;
		private $tampada;

		public function Caneta($m, $c, $p){ //__construct
			//$this->cor = "Azul";
			//$this->tampar();
			$this->modelo = $m;			
			//$this->getModelo($m);
			$this->cor = $c;
			$this->ponta = $p;
			$this->tampar();
		}
		public function tampar(){
			$this->tampada = true;
		} 
		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($m){
			$this->modelo = $m;
		}
		public function getPonta(){
			return $this->ponta;
		}
		public function setPonta($p){
			$this->ponta = $p;
		}
	}
	**/

	/** **/
	#Aula 5
	//class Caneta{
	//	The-Banks
	//}

?>