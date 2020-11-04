<?php

class Index
{
	public $doller = 10;

	public function hello()
	{
		return "I love my country";
	}
	public function hello1()
	{
		return "I love my country";
	}
}

class Our extends Index{
	public function kamon()
	{
		return "Hello Bangladesh, \n\n";
	}
}

$ok = new Our();

echo $ok ->hello();
echo $ok ->kamon();

class Index
{
	public $doller = 10;

	public function hello()
	{
		return "hi";
	}
}

$ob = new Index();


$ob->doller;

echo $ob -> hello();
$any = new Index();
$any -> hello();
class Simran{
	public $doll = 10;

	public function WE()
	{
		return "StarWar";
	}
}

$o= new Simran();

echo $o -> WE();


