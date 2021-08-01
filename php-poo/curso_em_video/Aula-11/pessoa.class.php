<?php

	abstract class Pessoa {

		protected $nome;
		protected $idade;
		protected $sexo;

		public final function fazerAniversario() { /** "final /class final (folha)" server para que o método não seja sobreposto **/
			$this->idade ++;
		}

		public function getNome() {
			return $this->nome;
		}
		public function getIdade() {
			return $this->idade;
		}
		public function getSexo() {
			return $this->sexo;
		}
		public function setNome($no) {
			$this->nome = $no;
		}
		public function setIdade($id) {
			$this->idade = $id;
		}
		public function setSexo($se) {
			$this->sexo = $se;
		}

	}

?>