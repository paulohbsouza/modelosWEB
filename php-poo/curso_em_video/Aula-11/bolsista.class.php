<?php

	require_once 'aluno.class.php';
	
	class Bolsista extends Aluno {

		private $bolsa;

		public function renovarBolsa() {
			echo "<p>Bolsa renovada.</p>";
		}

		public function pagarMensalidade() {
			echo "<br/><p>$this->nome é bolsista! Então paga ocm desconto!</p>";
		}

		public function getBolsa() {
			return $this->bolsa;
		}
		public function setBolsa($bo) {
			$this->bolsa = $bo;
		}

	}

?>