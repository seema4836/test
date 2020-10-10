<?php
error_reporting('E_ALL ^ E_NOTICE');
include 'config.php';
if(isset($_POST['submit'])){

$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$phone=$_POST['phone'];
 $gender=$_POST['gender'];
 $skills=$_POST['skills'];
 $img_name=$_FILES['image']['name'];
 //$img_size=$_FILES['image']['size'];optional
 //$img_type=$_FILES['image']['type'];//optional
$temp_name=$_FILES['image']['tmp_name'];

$path='uploads/'.$img_name;
move_uploaded_file($temp_name,$path);
   
 $afterimplode=implode(',',$skills);

 $checkEmail=$con->query("select email from register where email='$email'");
  $count=$checkEmail->num_rows;
if($count>0){
    echo "<script>alert('Email already exist in database')</script>";
    }else{

    $insert=$con->query("insert into register(first_name,last_name,email,password,phone,gender,skills,image)values('$firstName','$lastName','$email','$password','$phone','$gender','$afterimplode','$img_name')");
    if($insert){

        //echo "inserted";
        //echo "<script>alert('Record inserted ')</script>";
       header("location:login.php");
    }else{
        echo "not inserted".mysqli_error($con);
    }
}



}

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
<form class="text-center border border-light p-5" method="post"  enctype="multipart/form-data">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="firstname">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lastname">
        </div>
    </div>
      <div class="col">
            <!-- Last name -->
            <input type="radio" id="defaultRegisterFormLastName" class="form-control" placeholder="" name="gender" value="male">Male
               <input type="radio" id="defaultRegisterFormLastName" class="form-control" placeholder="" value="female" name="gender">Female
        </div>

        <div class="col">
            <!-- Last name -->
            <input type="checkbox" id="defaultRegisterFormLastName" class="form-control" placeholder="" name="skills[]" value="PHP">PHP
               <input type="checkbox" id="defaultRegisterFormLastName" class="form-control" placeholder="" value="java" name="skills[]">Java
               
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

    <!-- Password -->
    <input type="password" name="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>

    <!-- Phone number -->
    <input type="text" name="phone" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
        Optional - for two step authentication
    </small>

   <div class="col">
            <!-- Last name -->
            <input type="file" id="defaultRegisterFormLastName" class="form-control"  name="image">
        </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Sign up</button>

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