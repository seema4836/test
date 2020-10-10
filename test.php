<?php
error_reporting('E_All ^ E_NOTICE');
$a=67;
 $a++; 
++$a;
echo $a++;
echo "=====================";


define('GREETING', 'Hello World',true);

function test(){
 $a=45; // local variable
 //echo $a;
 echo Greeting;

}
test();



die();

//isset();// to check variable exist or not
$a="56";
$name="rajvir";
echo $name;
echo $a;
echo "test";
echo "<br />";
var_dump($a);// length, datatype and value of a variable
//unset($a);// delete a variable
echo $a;

?>
