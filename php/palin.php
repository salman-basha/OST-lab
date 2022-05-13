<?php
function checkpalindrome($string)
{
if($string == strrev($string))
{
echo "Given Word is palindrome";
}
else
{
echo "Not a palindrome";
}
}
echo checkpalindrome("madam") , "\n";

?>
