<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
    .error {color: #FF0000;}
</style>
</head>

<?php 
$nameErr = $passErr = $pass_repeateErr = $pass_repeateErr2 = $phoneErr = $wlc_message = "";
$name = $pass = $pass_repeate = $phone = "";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["pass"])) {
      $passErr = "pass is required";
    } else {
      $pass = test_input($_POST["pass"]);
    }
      
    if (empty($_POST["pass_repeate"])) {
        $pass_repeateErr = "pass repeate is required";
      } else {
        $pass_repeate = test_input($_POST["pass_repeate"]);
      }
  
    if (empty($_POST["phone"])) {
      $phoneErr = "phone is required";
    } else {
      $phone = test_input($_POST["phone"]);
    }

    if ( (($_POST["pass"]) != ($_POST["pass_repeate"]))){
        if(!empty($_POST["phone"])){
            $pass_repeateErr="";
            $pass_repeateErr2 = "pass not matching";
        }
    }else{
        $pass_repeateErr2 = "";
        $wlc_message="You have Succesful rigstration! please login";
    }    
  };

 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<body>

<div class="container">
<br>  <p class="text-center"> welcome to our magazine </p>
<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 800px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	
	<form action="result.php" method="post" >
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text" required>
        <span class="error">* <?php echo $nameErr;?></span>
    </div> <!-- form-group// -->
    
   
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass" class="form-control" placeholder="Create password" type="password" required>
        <span class="error">* <?php echo $passErr;?></span>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass_repeate" class="form-control" placeholder="Repeat password" type="password" required>
        <span class="error">* <?php echo $pass_repeateErr;?></span>
        <span class="error"> <?php echo $pass_repeateErr2;?></span>
    </div> <!-- form-group// -->                                      
     <!-- form-group// -->  
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">077</option>
		    <option value="1">079</option>
		    <option value="2">078</option>
		</select>
        <input name="phone" class="form-control" placeholder="Phone number" type="text" required >
        <span class="error">* <?php echo $phoneErr;?></span>
    </div>
    <span class="welcom"> <?php echo $wlc_message;?></span>    
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> 
    <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
</form>
</article>
<br><br>
<article class="hh bg-secondary mb-3">  
<div class="card-body header1 text-center">
    <h1 class="text-white mt-3">Hokage (火影)</h1>
<br><br>
</article>
    
</body>

</html>

<?php

$_SESSION["name"] = $name;
$_SESSION["pass"] = $pass;

?>
