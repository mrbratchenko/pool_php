<?php
class Jaime extends Lannister {

	public function __construct() {
		return;
	}
	
	public function sleepWith($arg) {
		
		if ($arg instanceof Lannister)
		{
			if ($arg instanceof Cersei)
			{
				print "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
			}
			else
			{
				print "Not even if I'm drunk !" . PHP_EOL;
			}
		}
		else
		{
			print "Let's do this." . PHP_EOL;
		}
	}

	public function __destruct() {
		return;
	}
}
?>