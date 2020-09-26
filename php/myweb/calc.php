<?php
class calculator
{
	private $num1;
	private $num2;
	private $operator;
	public function getNum1($a)
	{
		$this->num1=$a;
		return $this->num1;
	}
	public function getNum2($b)
	{
		$this->num2=$b;
		return $this->num2;
	}
	public function getOperator($op)
	{
		$this->operator=$op;
		return $this->operator;
	}
	public function performArith()
	{
	 if($this->operator=='+')
	 {
		 return $this->num1+$this->num2;
	 }
	 else if($this->operator=='-')
	 {
		 return $this->num1-$this->num2;
	 }
	 else if($this->operator=='*')
	 {
		 return $this->num1*$this->num2;
	 }
	 else if($this->operator=='/')
	 {
		 return $this->num1/$this->num2;
	 }
	 else
	 {
		 return -1;
	 }
	}
}
?>
<html>
<head><title>Calculator</title></head>
<?php
if(!isset($_POST['submit']))
{
	?><center>
	<form method="post" action="calc.php">
	Enter two integer:<br>
	<input type="text" name="num_1" size="3"/>
	<select name="operation">
	<option value="+"><b>+</b></option>
	<option value="-"><b>-</b></option>
	<option value="*"><b>*</b></option>
	<option value="/"><b>/</b></option>
	<input type="text" name="num_2" size="3"/><br/>
	<input type="submit" name="submit" value="Submit"/>
	</form></center>
	
<?php
}
else
{
	$num1=(int)$_POST['num_1'];
	$num2=(int)$_POST['num_2'];
	$operator=$_POST['operation'];
	$calc=new calculator();
	echo "The number1: ".calc->getNum1($num1)."<br/>";
	echo "The number1: ".$calc->getNum2($num2)."<br/>";
	echo "The result of the operation(".$calc->getOperator($operator).") is ".$calc->performArith()."<br/>";
}
?>

</body>
</html>
