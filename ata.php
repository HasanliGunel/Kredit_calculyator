
<?php
function oddNumber($par)
{
   return ($par & 1);
}


echo oddNumber(5);
echo "<br>";
echo oddNumber(4);
?>