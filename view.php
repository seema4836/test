<?php
error_reporting('E_ALL ^ E_NOTICE');
include 'config.php';
if($_SESSION['id']==''){
  //header("location:login.php?msg=loginfirst");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php session_start();?>
<div class="container">
  <h2>View Records</h2>
  <h2>Welcome <?php echo $_SESSION['name'];?></h2>
           <a href="logout.php">Logout</a>   
  <table class="table table-bordered">
    <thead>
      <tr>
      	<th>Sno.</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Skills</th>
        <th>Image</th>
        <th colspan="2">Action</th>
       
      </tr>
    </thead>


    <tbody>
    	 <?php
     $select=$con->query("select * from register ");
 // $count=$select->num_rows; //9
     $i=1;
   while($fetch=$select->fetch_object()){
  // print_r($fetch);
?>
      <tr>
      	   <td><?php echo $i;?></td>
        <td><?php echo $fetch->first_name; ?></td>
        <td><?php echo $fetch->last_name; ?></td>
        <td><?php echo $fetch->email; ?></td>
        
        <td><?php echo $fetch->gender; ?></td>
        <td><?php echo $fetch->phone; ?></td>
        <td><?php echo $fetch->skills; ?></td>
        <td><img src="uploads/<?php echo $fetch->image; ?>" height="100" width="100"></td>
        <td><a href="update.php?id=<?php echo $fetch->user_id;?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $fetch->user_id;?>" onclick="return confirm('Are you sure');">Delete</a></td>
      </tr>
      <?php
      $i++;
  }

  ?> 
    </tbody>

  </table>
  <?php 
if($_GET['msg']=='success'){
	?>
	<script type="text/javascript">
		alert('Record Deleted Successfully');
	</script>
  <!--<h2>Record Deleted Successfully</h2>-->
  <?php
}
?>
</div>

</body>
</html>
