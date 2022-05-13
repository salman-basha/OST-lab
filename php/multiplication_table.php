<?php
$x= 5;
$r= 10;
echo "----The input number is :",$x, "<br>";
echo "----The range number is :",$r, "<br>";

echo "----The above Multiplication Table:<br>";
for($i=1;$i<=$r;$i++)
{
	echo "\t",$x,"*",$i,"=",$x*$i,"<br>";
}
?>


