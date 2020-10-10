<?php
error_reporting('E_ALL ^ E_NOTICE');
include 'config.php';
$get_id=$_GET['id'];
$delete=$con->query("delete from register where user_id='$get_id'");
if($delete)
{
	 //echo "<script>alert('Record Deleted Successfully')</script>";
	 //echo "<script>window.location.href='view.php'</script>";
	header("location:view.php?msg=success");
}else{
	header("location:view.php?msg=failed");
}
?>