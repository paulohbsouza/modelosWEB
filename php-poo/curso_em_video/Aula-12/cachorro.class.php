<?php

	require_once 'mamifero.class.php';

	class Cachorro extends Mamifero {

		//@Sobrepor
		public function emitirSom() {
			echo "<p>Au! Au!</p>";
		}

	}

?>