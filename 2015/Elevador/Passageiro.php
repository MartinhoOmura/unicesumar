<?php

class Passageiro
{
	private $andarAtual;
	private $andarDesajado;
	
	public function __construct($andarAtual = 1, $andarDesajado = 1)
	{
		$this->andarAtual = $andarAtual;
		$this->andarDesajado = $andarDesajado;
	}
	
	public function setAndarAtual($andarAtual){
		$this->andarAtual = $andarAtual;
	}
	
	public function getAndarAtual(){
		return $this->andarAtual;
	}
	
	public function setAndarDesajado($andarDesajado){
		$this->andarDesajado = $andarDesajado;
	}
	
	public function getAndarDesajado(){
		return $this->andarDesajado;
	}
}