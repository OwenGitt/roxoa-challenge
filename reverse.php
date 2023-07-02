<?php 
function reverse($stringToReverse) {
	if(strlen($stringToReverse) == 1) {
	return $stringToReverse;
}
else{
$endChar = substr($stringToReverse, -1);
	$restOfString = substr($stringToReverse, 0, -1);
	return $endChar.= reverse($restOfString);		
}
}

$initialString = "Roxoa Group";
$reversedString = reverse($initialString);
echo $reversedString;


?>