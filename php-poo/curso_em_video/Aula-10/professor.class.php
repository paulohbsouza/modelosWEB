<?php

	require_once 'pessoa.class.php';

	class Professor extends Pessoa {

		private $especialidade;
		private $salario;

		public function receberAumento($aum) {
			$this->salario += $aum;
		}

		public function getEspecialidade() {
			return $this->especialidade;
		}
		public function getSalario() {
			return $this->salario;
		}
		public function setEspecialidade($es) {
			$this->especialidade = $es;
		}
		public function setSalario($sa) {
			$this->salario = $sa;
		}

	}

?>