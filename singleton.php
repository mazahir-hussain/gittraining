<?php

/**

*This class makes a new object using Singleton approach

*/

final class MakeObject {
	public $name = "Mazahir";
	static $instance;

	public static function Instance() {
		if (self::$instance === NULL) {
			$instance = new MakeObject();
		}
		return $instance;
	}

	public function name() {
		return $this -> name;
	}

	private function __construct() {
	}


}

$var = MakeObject::Instance();
echo $var -> name() . "\n";
$var2 = MakeObject::Instance();

if ($var == $var2) {
	echo "Same" . "\n";
}

// fatal error
//$var2 = new MakeObject();
//echo $var2 -> name();


?>
