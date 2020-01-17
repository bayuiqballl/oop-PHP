<?php 

class ContohStatic {
	public static $angka = 1;

	public static function halo(){
		return "Halo.";
	}

	public static function kali(){
		return "Hello " . self::$angka++ . " kali. "; 
	}	
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::kali();











 ?>