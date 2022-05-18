<?php
$uname_error="";
$pwd_error="";
$mobno_error="";
$email_error="";

if(isset($_POST["submit"])){
    if(empty($_POST["uname"])){
        $uname_error="<p>*Enter your name</p>";
    }
    if(empty($_POST["pwd"])){
        $pwd_error="<p>*Enter your password</p>";
    }
    else{
        if(strlen($_POST["pwd"]) <= 8){
            $pwd_error="<p>*atleast 8 characters</p>";
        }
        if(!preg_match("/\d/", $_POST["pwd"])){
            $pwd_error="<p>*atleast one digit</p>";
        }
        if(!preg_match("/[A-Z]/", $_POST["pwd"])){
            $pwd_error="<p>*atleast one Capital Letter</p>";
        }
        if(!preg_match("/[a-z]/", $_POST["pwd"])){
            $pwd_error="<p>*atleast one small Letter</p>";
        }
        if(!preg_match("/\W/", $_POST["pwd"])){
            $pwd_error="<p>*atleast one special character</p>";
        }
    }
    if(empty($_POST["mobno"])){
        $mobno_error="<p>*enter your mobile no</p>";
    }
    if(empty($_POST["email"])){
        $email_error="<p>*Enter your email id</p>";
    }
    else{
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $email_error="<p>*Invalid email format</p>";
        }
    }
}    
?>
 
  