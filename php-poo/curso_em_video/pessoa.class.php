<?php

	/**
	 * 
	 */
	class Pessoa{
		var $nome;
		var $idade;
		var $voz;

		function falar() {
			if ($this->voz == true) {
				echo "Falar verdadeiro";
			}
		}
		
	}

?>