<?php
class calculator
{
	private $num1;
	private $num2;
	private $operatorChoice;
	public function setNum1($valueNum1)
	{
		$this->num1=$valueNum1;
	}
	public function setNum2($valueNum2)
	{
		$this->num2=$valueNum2;
	}
	public function setOperator($operator)
	{
		$this->operatorChoice=$operator;
	}
	public function performArith()
	{
	 if($this->operatorChoice=='+')
	 {
		 return $this->num1+$this->num2;
	 }
	 else if($this->operatorChoice=='-')
	 {
		 return $this->num1-$this->num2;
	 }
	 else if($this->operatorChoice=='*')
	 {
		 return $this->num1*$this->num2;
	 }
	 else if($this->operatorChoice=='/')
	 {
		 return $this->num1/$this->num2;
	 }
	 else
	 {
		 return -1;
	 }
	}
		public function getNum1()
	{
		return $this->num1;
	} 
	public function getNum2()
	{
		return $this->num2;
	} 
	public function getOperator()
	{
		return $this->operatorChoice;
	} 
	}
	print"<b>***Arithmetic operation***</b><br><br>";
	$calc=new calculator();
	$calc->setNum1(100);
	$calc->setNum2(80);
	$calc->setOperator('+');
	echo"Number1:".$calc->getNum1()."<br>";
	echo"Number2:".$calc->getNum2()."<br>";
	print"Result of arithmetic operation (".$calc->getOperator().") is ".$calc->performArith();
	echo"<br>";
	$calc->setNum1(200);
	$calc->setNum2(834);
	$calc->setOperator('*');
	echo"<br> Number1:".$calc->getNum1()."<br>";
	echo"Number2:".$calc->getNum2()."<br>";
	print"Result of arithmetic operation (".$calc->getOperator().") is ".$calc->performArith();
	echo"<br><br>";
	echo"<b>****End of Arithmetic Operation****</b>";
	?>
	