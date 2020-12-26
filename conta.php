<?php
class Conta{
	protected $agencia;
	protected $conta;
	protected $saldo;
	protected $sacar;
  
	public function detalhes(){
		echo "<br>A conta $this->conta contem o saldo de R$ $this->saldo .<br>";
	}
	public function setconta($valorConta){
		$this->conta = $valorConta;
	}
	public function depositar($valorParametro){
		if($valorParametro>0){
			echo "<br> Deposito R$ $valorParametro";
		$this->saldo = $this->saldo + $valorParametro;
	}else{
		echo "<br> valor para depósito invalido! (R$ $valorParametro) <br>";
	}
  }
  public function sacar($valorSaque){
  	if($valorSaque<$this->saldo){
  	 echo "<br> saque R$ $valorSaque<br>";
  	$this->saldo = $this->saldo - $valorSaque;
   }else{
   	echo "<br> Valor para saque invalido! (R$ $valorSaque) <br>";
   }
  }
  public function setConta($valorConta){
  	$this->conta = $valorConta;
  }
  public function setAgencia($valorAgencia){
  	$this->agencia = $valoragencia;
  }
}

 class Poupanca extends conta{


}

class Corrente extends conta{
	$limite;

	  public function sacar($valorSaque){
  	if($valorSaque<$this->saldo+$this->limite){
  	 echo "<br> saque R$ $valorSaque<br>";
  	$this->saldo = $this->saldo - $valorSaque;
   }else{
   	echo "<br> Valor para saque invalido! (R$ $valorSaque) <br>";
   }
  }
}
}


$c1 = new Corrente();
$c1->setConta(111322);
$c1->setAgencia(2020);
$c1->depositar(5000);
$c1->detalhes();

$c1-> depositar(-500);
$c1-> detalhes();

$c1-> depositar(300);
$c1-> detalhes();

$c1-> sacar(800);
$c1-> detalhes();

$c1-> sacar(80000);
$c1-> detalhes();
?>