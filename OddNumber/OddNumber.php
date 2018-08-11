<?php

class OddNumber
{
    /**
     * @var int[]
     */
    private $numbers;

    /**
     * @param array $numbers
     */
    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * @return int
     * @throws Exception
     */
    public function find()
    {

	$count = sizeof($this->numbers)/sizeof($this->numbers[0]);
	$value = $this->numbers[0];
	for($i=1; $i<$count; $i++) {
		// Using XOR for every element, by that we may find the number odd number of times occuring
		$value = $value^$this->numbers[$i];
	}

	if ($value <= 1) {
	    throw new Exception('Empty array.');
	}

	return $value;
    }
}
