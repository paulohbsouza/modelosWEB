<?php

	abstract class Animal {

		protected $peso;
		protected $idade;
		protected $membros;

		abstract function locomover();
		abstract function alimentar();
		abstract function emitirSom();

		public function getPeso() {
			return $this->peso;
		}
		public function getIdade() {
			return $this->idade;
		}
		public function getMembros() {
			return $this->membros;
		}
		public function setPeso($pe) {
			$this->peso = $pe;
		}
		public function setIdade($id) {
			$this->idade = $id;
		}
		public function setMembros($me) {
			$this->membros = $me;
		}

	}

?>