<?php

trait A 
{
	public function hello() 
	{
		echo 'hello';
	}

	public function world() 
	{
		echo 'world';
	}
}

trait B 
{
	public function hello() 
	{
		echo "hi";
	}

	public function world()
	{
		echo "universe";
	}
}

class intro
{
	use A, B
	{
		A::hello insteadof B;
		B::world insteadof A;
	}
}

class intro2
{
	use A, B
	{
		B::hello insteadof A;
		A::world insteadof B;
	}


}

$obj = new intro();
echo $obj -> hello() . " ";
echo $obj -> world() . "\n";

$obj2 = new intro2();
echo $obj2 -> hello() . " ";
echo $obj2 -> world() . "\n";

?>