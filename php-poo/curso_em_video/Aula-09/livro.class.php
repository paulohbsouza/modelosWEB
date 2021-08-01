<?php

	require_once 'pessoa.class.php';

	require_once 'publicacao.interf.php';

	class Livro implements Publicacao {

		private $titulo;
		private $autor;
		private $totPaginas;
		private $aberto;
		private $leitor;

		public function detalhes(){
			echo "Livro " . $this->titulo . " escrito por " . $this->autor;
			echo "<br/> Páginas: " . $this->totPaginas . " Pag. atual " . $this->pagAtual;
			echo "<br/> Sendo lido por " . $this->leitor->getNome();
			echo "<hr/>";
		}

		public function __construct($titulo, $autor, $totPaginas, $leitor) {
			$this->titulo = $titulo;
			$this->autor = $autor;
			$this->totPaginas = $totPaginas;
			$this->leitor = $leitor;
		} 

		public function getTitulo() {
			return $this->titulo;
		}
		public function getAutor() {
			return $this->autor;
		}
		public function getTotPaginas() {
			return $this->totPaginas;
		}
		public function getAberto() {
			return $this->aberto;
		}
		public function getLeitor() {
			return $this->leitor;
		}
		public function setTitulo() {
			$this->titulo = $titulo ;
		}
		public function setAutor() {
			$this->autor = $autor;
		}
		public function setTotPaginas() {
			$this->totPaginas = $totPaginas;
		}
		public function setAberto() {
			$this->aberto = $aberto;
		}
		public function setLeitor() {
			$this->leitor = $leitor;
		}

		public function abrir() {
			$this->aberto = true;
		}
		public function avancarPag() {
			$this->pagAtual ++;
		}
		public function fechar() {
			$this->aberto = false;
		}
		public function folhear($p) {
			if ($p > $this->totPaginas) {
				$this->pagAtual = 0;
			} else {
				$this->pagAtual = $p;
			}
		}
		public function voltarPag() {
			$this->pagAtual --;
		}
	}
 
?>