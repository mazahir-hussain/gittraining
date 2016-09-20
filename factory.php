<?php

class Animal {
	private $species;
	private $breed;

	public function __construct($var1,$var2) {
		$this -> species = $var1;
		$this -> breed = $var2;
	}

	public function getSpecies() {
		return $this -> species;
	}

	public function getBreed() {
		return $this -> breed;
	}
}

class AnimalFactory {
	public static function makeanimal($species,$breed) {
		return new Animal($species, $breed);
	}
}

$myDog = AnimalFactory::makeanimal('dog', 'poodle');
echo $myDog->getSpecies() . "\n";
echo $myDog->getBreed() . "\n";


?>
