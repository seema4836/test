<?php
error_reporting('E_ALL ^ E_NOTICE');
<?php session_start();
echo $_SESSION['name'];
if($_SESSION['id']==''){
  header("location:login.php?msg=loginfirst");
}
?>

include 'config.php';
$get_id=$_GET['id'];

$select=$con->query("select * from register where user_id='$get_id'");
 $count=$select->num_rows;
 $fetch=$select->fetch_object();
 //print_r($fetch);
  $skills=$fetch->skills;
 $get_skills=explode(',',$skills);
 
?>
<?php


// if(isset($_POST['submit'])){

// $firstName=$_POST['firstname'];
// $lastName=$_POST['lastname'];
// $password=md5($_POST['password']);
// $email=$_POST['email'];
// $phone=$_POST['phone'];
//  $gender=$_POST['gender'];
//  $update=$con->query("update register set first_name='$firstName',last_name='$lastName',email='$email' where user_id='$get_id'");
//  if($update){
//  	echo "updated";

//  }else{
//  	echo "record not updated";
//  }
 


// }

?>



<!-- Default form register -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<form class="text-center border border-light p-5" method="post">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="firstname" value="<?php echo $fetch->first_name;?>">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lastname" value="<?php echo $fetch->last_name;?>">
        </div>
    </div>
      <div class="col">
            <!-- Last name -->
            <input type="radio" id="defaultRegisterFormLastName" class="form-control" placeholder="" name="gender" value="male" <?php if($fetch->gender=='male'){ echo 'checked';} ?>>Male
               <input type="radio" id="defaultRegisterFormLastName" class="form-control" placeholder="" value="female" <?php if($fetch->gender=='female'){ echo 'checked';} ?> name="gender">Female
        </div>

        <div class="col">
            <!-- Last name -->
            <input type="checkbox" id="defaultRegisterFormLastName" class="form-control" placeholder="" name="skills[]" value="PHP" <?php if(in_array("PHP",$get_skills)){ echo 'checked';} ?>>PHP
               <input type="checkbox" id="defaultRegisterFormLastName" class="form-control" placeholder="" value="java" <?php if(in_array("java",$get_skills)){ echo 'checked';} ?> name="skills[]" >Java
               
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" value="<?php echo $fetch->email; ?>">

    

    <!-- Phone number -->
    <input type="text" name="phone" id="defaultRegisterPhonePassword" value="<?php echo $fetch->phone; ?>"class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>

   

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Update </button>

    <!-- Social register -->
    <p>or sign up with:</p>

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

    <!-- Terms of service -->
    <p>By clicking
        <em>Sign up</em> you agree to our
        <a href="" target="_blank">terms of service</a>

</form>
<!-- Default form register -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>