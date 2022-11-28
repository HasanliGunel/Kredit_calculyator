<?php 
	// $array=['Salam','necəsən!','nə var nə yox'];
	// print_r(array_chunk($array,2));

	// $array=['Salam','necəsən!','Salam',"Salam","necesen"];
	// print_r(array_count_values($array))

	// $color1 = array("r1"=>"red","g1"=>"green","w1"=> "white","p1"=>"pink");
	// $color2 = array('r2' => "red", "g2" => "green", "b2"=> "blue","y2"=>"yellow");
	// print_r(array_diff($color1, $color2));

	// $color1 = array("r"=>"red","g"=>"green","w1"=> "white","p"=>"pink");
	// $color2 = array('r2' => "red", "g" => "green", "b"=> "blue","y2"=>"yellow");
	// print_r(array_diff_assoc($color1, $color2));

	// $color1 = array("r"=>"red","g"=>"green","w1"=> "white","p"=>"pink");
	// $color2 = array('r1' => "red", "g" => "green", "b"=> "blue", "w1"=> "white","y2"=>"yellow");
	// print_r(array_diff_key($color1, $color2));

	// function karshilashdır($x,$y){
	// 	if($x===$y){
	// 		return 0;
	// 	}
	// 	return ($x > $y)? 1 : -1;
	// }
	// $color1 = array(
	// 	"r"=>"red",
	// 	"g"=>"green",
	// 	"w1"=> "black",
	// );
	// $color2 = array(
	// 	'r1' => "purple", 
	// 	"g" => "yellow", 
	// 	"b"=> "pink", 
	// 	"w1"=> "white",
	// );
	// $result = array_diff_uassoc($color1, $color2,"karshilashdır");
	// print_r($result);
	
	function karshilashdır($x,$y){
	if($x===$y){
		return 0;
	}
	return ($x > $y)? 1 : -1;
	}
	$color1 = array(
		"r"=>"red",
		"g"=>"green",
		"w1"=> "black",
	);
	$color2 = array(
		'r1' => "purple", 
		"g" => "yellow", 
		"b"=> "pink", 
		"w1"=> "white",
	);
	$result = array_diff_ukey ($color1, $color2,"karshilashdır");
	print_r($result);
?>