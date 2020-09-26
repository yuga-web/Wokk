<?php
class Automobile
{
	public $color;
	public $make;
	public $speed=55;
	public function accelerate()
	{
		$this->speed+=10;
		echo"Acelerating to ".$this->speed."<br/>";
	}
	public function brake()
	{
		$this->speed-=10;
		echo"slowing".$this->speed."<br/>";
	}
	public function turn()
	{
		$this->brake();
		echo 'Turning '."<br>";
		$this->accelerate();
	}
}
?>
<?php 
$car=new Automobile();
$car->accelerate();
$car->turn();
?>