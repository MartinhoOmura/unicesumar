<?php

class Elevador  extends PHPUnit_Framework_TestCase
{
	private $andares;
	private $andarAtual;
	
	public function __construct($andarAtual = 1, $andares = 20)
	{
		$this->andarAtual = $andarAtual;
		$this->andares = $andares;
	}
	
	public function setAndarAtual($andarAtual){
		$this->andarAtual = $andarAtual;
	}
	
	public function getAndarAtual(){
		return $this->andarAtual;
	}
	
	public function mover($andarAtualPassageiro, $andarDesejadoPassageiro ){
		$this->assertNotNull($andarAtualPassageiro);
		$this->assertNotNull($andarDesejadoPassageiro);
		if($andarAtualPassageiro > $this->andarAtual)
		{
			echo"Elevador sobe" . "\n";
			$this->sobe($this->andarAtual, $andarAtualPassageiro);
			echo"\nAndar atual do Elevador " .$this->andarAtual. "\n";
		}else{
			echo"Elevador desce" . "\n";
			$this->desce($this->andarAtual, $andarAtualPassageiro);
			echo"\nAndar atual do Elevador " .$this->andarAtual. "\n";
		}
		if($andarDesejadoPassageiro < $this->andarAtual)
		{
			echo"\nAndar desejado pelo Passageiro ".$andarDesejadoPassageiro. "\n";
			echo"Elevador desce" . "\n";
			$this->desce($this->andarAtual, $andarDesejadoPassageiro);
		}else{
			echo"\nAndar desejado pelo Passageiro ".$andarDesejadoPassageiro. "\n";
			echo"Elevador sobe" . "\n";
			$this->sobe($this->andarAtual, $andarDesejadoPassageiro);
		}
		return "Chegou ao seu destino!";
	}
	public function sobe($atual, $objetivo) {
		$this->assertNotNull($atual);
		$this->assertNotNull($objetivo);
		for ($i=$atual; $i <=$objetivo; $i++) {
			echo "Andar: ".$i. " - ";
			$this->andarAtual = $i;
			$this->assertEquals($this->andarAtual,$i);
		}
	}
	public function desce($atual, $objetivo) {
		$this->assertNotNull($atual);
		$this->assertNotNull($objetivo);
		for ($i=$atual; $i >=$objetivo; $i--) {
			echo "Andar: ".$i. " - ";
			$this->andarAtual = $i;
			$this->assertEquals($this->andarAtual,$i);
		}
	}
}