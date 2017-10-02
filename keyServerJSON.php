<?php 

class KeyGenerator {
	public $numbers;
	public $stars;

	public function __construct($nn,$ns) {
		$this->numbers = array();
		$this->stars = array();


	//numbers
	do {
		$myRandom = rand(1,50);
		if (!in_array($myRandom, $this->numbers)) {
			$this->numbers[] = $myRandom;
		}
	} while (count($this->numbers) < $nn);
	sort($this->numbers);


	//stars
	do {
		$myRandom = rand(1,12);
		if (!in_array($myRandom, $this->stars)) {
			$this->stars[] = $myRandom;
		}
	} while (count($this->stars) < $ns);
	sort($this->stars);

	}

}

$myKey = new KeyGenerator(8,4);
$myKeyJSON = json_encode($myKey);

echo $myKeyJSON;

//var_dump($myKey);
?>