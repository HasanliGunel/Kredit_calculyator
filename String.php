<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php

	// $txt = "Hello PHP";
	// echo strlen($txt);

	// $txt = "Hello PHP";
	// echo str_word_count($txt);

	// $txt = "Hello";
	// echo strrev($txt);

    //$txt = "Hello PHP and Javascript";
	// echo strpos($txt,"C");

    //$txt = "Hello PHP and Javascript";
	// echo str_replace("PHP", "C#",$txt);

    //$txt = "Hello PHP and Javascript";
	// echo addcslashes($txt, "P");

    //$txt = "Hello 'PHP' and Javascript";
    //echo addslashes($txt);

    //$txt = "Hello PHP";
	// echo bin2hex($txt);

    // $txt = "Hello PHP and Javascript";
    // echo $txt, "<br>";
    // echo chop($txt, "Javascript");

    // echo chr(52),"<br>";
    // echo chr(052),"<br>";
    // echo chr(0x52),"<br>";

	// $txt = "Hello PHP and Javascript";
    // echo chunk_split($txt,1,".");

	// $txt = "Hello PHP and Javascript";
    // echo chunk_split($txt,3,"/");

	// $txt = "Hello PHP";
    // $encode=convert_uuencode($txt);
    // echo $encode, "<br>";
    // $decode=convert_uudecode($encode);
    // echo $decode;

	// $txt = "Hello PHP and Javascript";
    //echo crc32($txt);

	//$color="qirmizi";

	// $txt = "Hello PHP and Jacascript";
	// $txt1 = "Eli,Veli,Gul,Lale";
	// print_r(explode(",", $txt1,0)); 

	$country = "Turkiyede";
	$num = 4360000;
	$file = fopen("test.txt","w"); 
	echo fprintf($file,"%s %u ishsiz var",$country,$num);

	// $num = 36000;
	// $num1 = -2434;
	// $char = 50;
	// printf("b=, %b <br>",$num);
	// printf("c=, %c <br>",$char);
	// printf("d=, %d <br>",$num);
	// printf("d=, %d <br>",$num1);
	// printf("e=, %e <br>",$num);
	// printf("E=, %E <br>",$num);
	// printf("u=, %u <br>",$num);
	// printf("u=, %u <br>",$num1);
	// printf("f=, %f <br>",$num);
	// printf("F=, %F <br>",$num);
	// printf("g=, %g <br>",$num);
	// printf("G=, %G <br>",$num);
	// printf("o=, %o <br>",$num);
	// printf("s=, %s <br>",$num);
	// printf("x=, %x <br>",$num);
	// printf("X=, %X <br>",$num);
	// printf("+d pozitif=, %+d <br>",$num);
	// printf("+d negative=, %+d <br>",$num);

    // echo var_dump($num);
     print_r(get_html_translation_table(HTML_specialchars));

	 // $txt = '&lt;a href=&quot; https://www.youtube.com/&quot;&gt; Youtube&lt;/a&gt;';
	#echo html_entity_decode($txt);
	// echo htmlspecialchars($txt);

	#$txt="<a href = “https://www.youtube.com”> Youtube </a>";
	#echo $txt ,"<br>";
	// echo htmlentities($txt);

	#$txt1="This is so &lt;b&gt;nice&lt;/b&gt; code";
	#echo htmlspecialchars_decode($txt1),"<br>";
	//echo html_entity_decode($txt1) ,"<br>";

	//$txt2="This is so <b>nice</b>code";
	//echo htmlspecialchars($txt2),"<br>";
	//echo htmlentities($txt2)

	// $arr=array("Hello","PHP","Nice","Language");
	// echo implode("+",$arr);
?>
	<!--<p> Guller <?=$color?> dir.</p>-->

</body>
</html>