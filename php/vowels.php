<?php
$vow = 0;
$con = 0;
$str = "salman";
$str = strtolower($str);
for($i=0; $i < strlen($str); $i++)
{
		if($str[$i]=='a' || $str[$i]=='e' || $str[$i]=='i' || $str[$i]=='o' || $str[$i]=='u')
		{
			$vow ++;
		}
		elseif($str[$i] >='a' && $str[$i] <='z')
		{
			$con ++;
		}
}
echo "Number of Vowels:", $vow;
echo "<br>";
echo "Number of Consonants:", $con;
?>
