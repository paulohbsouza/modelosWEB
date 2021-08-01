<?php

	require_once 'video.class.php';
	
	interface AcoesVideo {
		public function play();
		public function pause();
		public function like();
	}

?>