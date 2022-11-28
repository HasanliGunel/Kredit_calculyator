<?php 
#strlen()
	$txt = "Hello 'World' and ";
	$txt1 = "Example 'string' 1432 and";

	echo "strlen method1 => ",strlen($txt), "<br>","strlen method2 => ",strlen($txt1), "<br>";

#str_word_count()
	echo "str_word_count method1 => ",str_word_count($txt),"<br>", "str_word_count method2 => ",str_word_count($txt1), "<br>";

#strrev()
	echo "strrev method1 => ",strrev($txt),"<br>", "strrev method2 => ",strrev($txt1);

#strpos()
	echo "strpos method1 => ",strpos($txt,"and"), "strpos method2 => ", "<br>", strpos($txt,"and"),"<br>";

#str_replace()
	echo "str_replace method1 => ",str_replace("and","then",$txt), "<br>";
	echo "str_replace method2 => ", str_replace("and","then",$txt1), "<br>";

#addcslahes()
	echo "addcslahes method1 => ",addcslashes("$txt", "a"), "<br>";
	echo "addcslahes method2 => ",addcslashes("$txt1", "a"), "<br>";
#addslahes()
	echo "addslahes method1 => ", addslashes($txt), "<br>";
	echo "addslahes method2 => ", addslashes($txt1), "<br>";

#bin2hex
	echo "bin2hex method1 => ", bin2hex($txt),"<br>";
	echo "bin2hex method2 => ", bin2hex($txt1),"<br>";

#chop()
	echo "chop method1 => ", chop($txt,'and'), "<br>";
	echo "chop method2 => ", chop($txt1,"and"), "<br>";

#chr()
	echo "chr method1 => ", chr(72),"<br>"; 
	echo "chr method2 => ", chr(072), "<br>";
	echo "chr method3 => ", chr(0x72), "<br>";

#chuck_split()
	echo "chuck_split method1 => ", chunk_split($txt, 1,"*"), "<br>";
	echo "chuck_split method2 => ", chunk_split($txt1, 2,"_"),"<br>";

#convert_uuencode()
	$encode = convert_uuencode($txt);
	$encode1 = convert_uuencode($txt1);
	echo "convert_uuencode method1 => ",$encode, "<br>","convert_uuencode method2 =>", $encode1, "<br>", "<br>";

#convert_uudecode()
	$decode = convert_uudecode($encode);
	$decode1 = convert_uudecode($encode1);
	echo "convert_uudecode method1 => ",$decode,"<br>","convert_uudecode method2 => ",$decode1,"<br>";

#crc32()
	echo "crc32 method1 => ",crc32($txt), "<br>";
	echo "crc32 method2 => ",crc32($txt1), "<br>"; 

#explode()
	echo "explode method1 =>";
	print_r (explode(" ", $txt));
	echo "<br>";
	echo "explode method2 =>";
	print_r(explode(" ", $txt1));
	echo "<br>";
#implode
	$array = array("PHP","Java","HTML");
	echo "implode method => ", implode(" ",$array);
#
?>