<?php

require_once "./db/dbconnect.php";

session_start();


$_SESSION['erors']=[];


  $fname = $_POST["fname"]; 
  $lname =$_POST['lname'];
  $pass= $_POST['password'];
  $email= $_POST['email'];
 


if( isset($_POST['submit'])){

  
  
if( strlen(trim(str_replace(' ','',$fname)))<3 ){

  $_SESSION['erors'][]='the first name is small';

}if( strlen(trim(str_replace(' ','',$lname)))<3 ){
  
  $_SESSION['erors'][]='the lastname name is small';

}if( strlen(trim(str_replace(' ','',$pass)))<5 ){

  $_SESSION['erors'][]='the password is small';

}if( htmlspecialchars(trim(strlen($email)<12))){

  $_SESSION['erors'][]='the email is small';

}if(!isset($_POST['radies'])){
    $_SESSION['erors'][]='the type is required';
  }else{
    $rad= $_POST["radies"];

  }
} 



print_r($_SESSION['erors']);

if(empty($_SESSION['erors'])){

   $quer="INSERT INTO users (Fname,Lname,email,password,type) VALUES ('$fname','$lname','$email','$pass','$rad') ";

  db_inser($quer);

  $_SESSION['sucess'][]='joined is successed';

  header('Location:http://127.0.0.1/online_education/join_us.php');
  
}else{
  header('Location:http://127.0.0.1/online_education/join_us.php');

}









?>