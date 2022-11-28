<?php
	// $a1 = array_fill(2, 3,"white");
	// $a2 = array_fill(1, 3, "blue");
	// print_r($a1);
	// echo "<br>";
	// print_r($a2);

	// $keys = array("HTML","CSS","PHP","Java");
	// $result = array_fill_keys($keys,"12");
	// print_r($result);

	// function oddNumber($par){
	// 	return ($par & 1);
	// }
	// // function evenNumber($par){
	// // 	return ($par & 2);
	// // }
	// $test = array(1,2,3,3,4,5,6,3,22);
	// print_r(array_filter($test,"oddNumber"));
	// echo "<br>";

	// $test = array(1,2,3,3,4,5,6,3,22);
	// print_r(array_filter($test,"evenNumber"));

	// $color1 = array(
	// 	"r"=>"red",
	// 	"g"=>"green",
	// 	"w1"=> "black",
	// );
	// print_r(array_flip($color1));

	// $color1 = array(
	// 	"r"=>"red",
	// 	"g"=>"green",
	// 	"b"=> "blue",
	// 	"w"=> "white",
	// );
	// $color2 = array(
	// 	'a' => "red", 
	// 	"g" => "green", 
	// 	"b"=> "black ", 
	// );
	// print_r(array_intersect($color1,$color2));
	
	// $arr = array("Hello","PHP","Nice","Language");
	// if(array_key_exists(10,$arr)){
	// 	echo "Bu reqemli indeks movcuddur";
	// }else
	// 	{ echo "Bu reqemli indeks movcud deyil";}

// 	$color1 = array(
// 		"r"=>"red",
// 		"g"=>"green",
// 		"b"=> "blue",
// 		"w"=> "white",
// 	);
// 	$color2 = array(
// 		'a' => "red", 
// 		"g" => "green", 
// 		"b"=> "black ", 
// 	);	
// 	$result = array_intersect($color1, $color2);
// 	print_r($result);

	$color1 = array(
		"r"=>"red",
		"g"=>"green",
		"b"=> "blue",
		"w"=> "white",
	);
	$color2 = array(
		'a' => "red", 
		"g" => "green", 
		"b"=> "black ", 
	);	
	$result = array_intersect_key($color1, $color2);
	print_r($result);
?>
?>