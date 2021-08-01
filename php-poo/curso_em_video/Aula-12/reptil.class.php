<?php

	require_once 'animal.class.php';

	class Reptil extends Animal {

		private $corEscama;
		//@Sobrepor
		public function alimentar() {
			echo "<p>comendo vegetais.</p>";
		}
		//@Sobrepor
		public function emitirSom() {
			echo "<p>Som de réptil</p>";
		}
		//@Sobrepor
		public function locomover() {
			echo "<p>Rastejando</p>";
		}
		function getReptil() {
			return $this->reptil;
		}
		function setReptil($re) {
			$this->reptil = $re;
		}
	}

?>