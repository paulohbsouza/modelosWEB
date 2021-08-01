<?php

	require_once 'mamifero.class.php';

	class Canguru extends Mamifero {

		//@Sobrepor
		public function locomover() {
			echo "<p>Saltando - Correndo</p>";
		}

		//@Sobrepor
		public function emitirSom() {
			echo "<p>Som de mamífero - Canguru</p>";
		}

	}

?>