<?php

namespace SON;

class Cliente {

	private $id;
	private $nome;

	const CLIENTE_CPF = "00000000000";


	public function __construct() {
		$this->id = 100;
		$this->nome = 'Marcos Barbosa';
	}


	public function __toString() {
		return $this->nome;
	}
 
	public function teste($id) {
		return $id;
	}


	public function getId() {
		return $this->id;
	}


	public function getNome() {
		return $this->nome;
	}


}