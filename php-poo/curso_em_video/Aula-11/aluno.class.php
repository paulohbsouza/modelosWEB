<?php

	require_once 'pessoa.class.php';
	
	class Aluno extends Pessoa {

		private $matricula;
		private $curso;

		public function pagarMensalidade() {
			echo "<p>Pagando mensalidade do aluno $this->nome. </p>";
		}

		public function getMatr() {
			return $this->matricula;
		}
		public function getCurso() {
			return $this->curso;
		}
		public function setMatr($ma) {
			$this->matricula = $ma;
		}
		public function setCurso($cu) {
			$this->curso = $cu;
		}

	}

?>