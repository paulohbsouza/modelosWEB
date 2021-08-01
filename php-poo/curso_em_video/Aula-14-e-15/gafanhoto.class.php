<?php

	require_once 'pessoa.class.php';

	class Gafanhoto extends Pessoa {

		private $login;
		private $totAssistido;

		public function __construct($nome, $idade, $sexo, $login) {
			parent::__construct($nome, $idade, $sexo);
			$this->login = $login;
			$this->totAssistido = 0;
		}

		public function assistirMaisUm() {
			$this->totAssistido ++;
		}

		public function getLogin() {
			return $this->login;
		}
		public function getTotAssistido() {
			return $this->totAssistido;
		}
		public function setLogin($lo) {
			$this->login = $lo;
		}
		public function setTotAssistido($totAs) {
			$this->totAssistido = $totAs;
		}

	}

?>