<?php

 $friends=['Raman','Raj','Komal'];
 $test=['23','21','24'];
 $res=array_combine($friends,$test);
 print_r($res);
 die();
 
 //echo end($friends);
echo $imp=implode(' ',$friends);
echo "<br />";
echo "*******************************";
 echo "<br />";
 array_push($friends,'Riya');
 array_pop($friends);
 print_r($friends);
 echo "<br />";
 $splice=array_splice($friends,1,2,'sonia');
 //print_r($splice);
 echo "<br />";
 print_r($friends);
//echo $count=count($friends);







// //echo $friends[3];
// //print_r($friends);

// for($i=0;$i<$count;$i++){
// 	echo $friends[$i]."<br />";
// }

// foreach ($friends as $key => $value) {
// 	# code...
// 	echo $value."<br />";
// }

//  $emp=['empname'=>'Rahul','age'=>23,'dept'=>'clerk','city'=>'mohali'];
// foreach ($emp as $key => $res) {
// 	# code...
// 	echo $key."=".$res."<br />";
// }
?>

