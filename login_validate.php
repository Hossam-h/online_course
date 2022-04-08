<?php

require_once "./db/dbconnect.php";


session_start();

$_SESSION['erors']=[];
  $pass= $_POST['password'];
  $email = $_POST['email'];
  

$select="SELECT * FROM `users` WHERE `email` ='$email' ";   
$result=mysqli_query($connection,$select); 
$data_email = mysqli_fetch_assoc($result);



if( isset($_POST['submit'])){

  if(isset($data_email) && $data_email['password']==$pass ){

    $_SESSION['register']=$data_email['Fname'] .' '. $data_email['Lname'];

    header('Location:http://127.0.0.1/online_education/index.php');
  

  }else{

    $_SESSION['erors'][]='Invalid data';

    header('Location:http://127.0.0.1/online_education/login.php');

  }

  
} 


?>