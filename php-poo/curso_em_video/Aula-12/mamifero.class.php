<?php
	
	require_once 'animal.class.php';

	class Mamifero extends Animal {

		private $corPelo;

		//@Sobrepor
		public function alimentar() {
			echo "<p>Mamando</p>";
		}
		//@Sobrepor
		public function emitirSom() {
			echo "<p>Som de mamífero</p>";
		}
		//@Sobrepor
		public function locomover() {
			echo "<p>Correndo</p>";
		}
		public function getCorPelo() {
			return $this->corPelo;
		}
		public function setCorPelo($corPelo) {
			$this->corPelo = $corPelo;
		}

	}

?>