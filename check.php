<?php
session_start();

$usersdb = $_SESSION["userdb"];

echo "<pre>"; 

foreach($usersdb as $key => $value){
    
    if($usersdb[$key]["role"] == "admin"){

         if($_POST['username'] == $usersdb[$key]["username"] && $_POST['password'] == $usersdb[$key]["passowrd"] ){
            
            header("Location: admin.php");
             }};

    if($usersdb[$key]["role"] == "user"){
        if($_POST['username'] == $usersdb[$key]["username"] && $_POST['password'] == $usersdb[$key]["passowrd"] ){
         
            header("Location: userwlc.php");
          }}
     };


?>