<?php
$a = array (array(6,2), array(8,4));
$b = array (array(10,5), array(4,6));

echo "Matrix Addition <br>";

for($i=0; $i<2;$i++)
{
for($j=0; $j<2;$j++)
{
   echo $a[$i][$j] + $b[$i][$j] ,"\t";
  
}
echo "<br>";
}
?>


