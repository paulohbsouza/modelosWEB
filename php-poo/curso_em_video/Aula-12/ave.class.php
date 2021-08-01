<?php

	require_once 'animal.class.php';

	class Ave extends Animal {

		private $corPena;

		//@Sobrepor
		public function alimentar() {
			echo "<p>Comendo Frutas.</p>";
		}
		//@Sobrepor
		public function emitirSom() {
			echo "<p>Som de ave</p>";
		}
		//@Sobrepor
		public function locomover() {
			echo "<p>Voando</p>";
		}

		public function fazerNinho() {
			echo "<p>Construindo um Ninho.</p>";
		}
		public function getCorPena() {
			return $this->corPena;
		}
		public function setCorPena($cp) {
			$this->corPena = $cp;
		}

	}

?>