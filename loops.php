<?php

$a=230;
$b=160;
var_dump($a/$b); // float ->int 12.39  = 12
var_dump($b/$a);
echo "<br />";
echo "============================"."<br />";


function test($num1,$num2){
	return $res=$num1+$num2;
}
echo $data=test(25,20); //45
echo "<br />";
echo $data+100;

?>