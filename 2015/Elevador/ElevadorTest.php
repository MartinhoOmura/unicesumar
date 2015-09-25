<?php
spl_autoload_register(
		function($className) {
			require $className . '.php';
		});

class ElevadorTest extends PHPUnit_Framework_TestCase
{
	public function testeTest(){
		
		$elevador = new Elevador(10);
		$this->assertNotNull($elevador);
		echo "Andar atual do Elevador: " . $elevador->getAndarAtual() . "\n";
		
		$passageiro = new Passageiro(1,20);
		$this->assertNotNull($passageiro);
		echo "Andar atual do Passageiro: " . $passageiro->getAndarAtual() . "\n";
		echo "Andar Desejado: " . $passageiro->getAndarDesajado() . "\n";
		
		$this->assertNotNull($passageiro->getAndarAtual());
		$this->assertNotNull($passageiro->getAndarDesajado());
				
		echo "\n".$elevador->mover($passageiro->getAndarAtual(), $passageiro->getAndarDesajado());
		
	}
}
