<?php
#Task 1
	$array1 = ["Həmid","Günel", "Azər", "Aytac","Nigar"];
	sort($array1);
	foreach($array1 as $key=>$val)
	{
		echo $array1[$key], "<br>";
	};

#Task2
	$array1 = ["Həmid","Günel", "Azər", "Aytac","Nigar"];
	echo count($array1);
	echo "<br>";
	echo sizeof($array1);
	echo "<br>";

#Task3
	shuffle($array1);
	print_r($array1);
	echo "<br>";

#Task 6 
	rsort($array1);
	foreach($array1 as $key)
	{
		echo $key, "<br>";
	};

#Task 7 
	$emarray = [];
	for ($i = 1; $i < 50; $i++)
	{
		array_push($emarray, $i);
	}
	print_r($emarray);
	echo "<br>";

#Task 8
	$string ="Teachway";
	echo strstr($string,'way');
	echo "<br>";

// #Task 11

		array_pop($array1);
		print_r($array1);

#Task 14
		echo strip_tags('<p>Salam hörmətli iştirakçılar</p>');
		echo "<br>";

#Task 16
		$array3=[4,4,3,4,5,1];
		// for($i = 0; $i < count($array3), $i++){
		// 	if($array3[i])
		// }
		print_r(array_unique($array3));
		echo "<br>";
?>