<?php
#levenshtein() method
	echo levenshtein("Hello World","      ello World");
	echo levenshtein("Hello World","ello World",67,67,20);


#localeconv() method                ???
	// setlocale(LC_ALL, "AZE");
	// $locale_info = localeconv();
	// print_r($locale_info);

#metaphone()
	echo metaphone("Sait"),"<br>";
	$str = "Saitlerlemelefmelflemfefl";
	echo metaphone($str,10);


?>