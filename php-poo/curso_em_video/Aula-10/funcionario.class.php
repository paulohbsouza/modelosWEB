<?php

	require_once 'pessoa.class.php';

	class Funcionario extends Pessoa {

		private $setor;
		private $trabalhando;

		public function mudarTrabalho() {
			$this->trabalhando = ! $this->trabalhando;
		}

		public function getSetor() {
			return $this->setor;
		}
		public function getTrabalhando() {
			return $this->trabalhando;
		}
		public function setSetor($se) {
			$this->setor = $se;
		}
		public function setTrabalhando($tr) {
			$this->trabalhando = $tr;
		}

	}

?>