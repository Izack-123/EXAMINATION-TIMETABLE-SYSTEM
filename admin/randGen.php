<?php 
namespace classes;

class randGen{
	
	public static function generate($min,$max,$quantity){
		$numbers = range($min,$max);
		shuffle($numbers);
		return array_slice($numbers,0,$quantity);
	}
}
?>