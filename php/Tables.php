<?php
$a=array(10, 20,30);
foreach($a as $n)
{
echo "<br> Multiplication Table for $n <hr>";
for($i=1; $i <= 10; $i++)
{
echo "$i x $n = ", ($i * $n), "<br>" ;
}
}
?>
