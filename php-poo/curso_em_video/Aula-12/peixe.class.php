<?php

	require_once 'animal.class.php';
	
	class Peixe extends Animal {

		private $corEscama;
		
		//@Sobrepor
		public function alimentar() {
			echo "<p>Comendo substâncias.</p>";
		}
		//@Sobrepor
		public function emitirSom() {
			echo "<p>Peixe não faz som.</p>";
		}
		//@Sobrepor
		public function locomover() {
			echo "<p>Nadando</p>";
		}

		public function soltarBolha() {
			echo "<p>Soltou uma Bolha</p>";
		}		
		public function getCorEscama() {
			return $this->corEscama;
		}
		public function setCorEscama($co) {
			$this->corEscama = $co;
		}

	}

?>