<?php
session_start();


?>

<?php 
require_once './db/dbconnect.php';

$courses=getrow_all('coursee');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teachers</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/stylet.css">

</head>
<body>

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-graduation-cap"></i> educa </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="#">courses +</a>
            <ul>
            <?php foreach($courses as $course)  {?>
    
                    <li><a href="./show/show.php?id=<?= $course['id'] ?>"><?=$course['course_name']?></a></li>
                    
                    <?php } ?>
                </ul>
            </li>
           
            <li><a href="contact.php">contact</a></li>
            <li><a href="join_us.php">Join US</a></li>
            <li><a href="login.php">login</a></li>
        </ul>
    </nav>

</header>


  <?php if (isset($_SESSION['erors'])) { ?>
    <ul>
      <?php foreach ($_SESSION['erors'] as $error) { ?>


        <li class="danger"><?= $error ?></li>
      <?php } ?>

    </ul>

  <?php } ?>


  
  <?php if (isset( $_SESSION['sucess'])) { ?>
    <ul>
      <?php foreach ($_SESSION['sucess'] as $success) { ?>


        <li class="sucess"><?= $success ?></li>
      <?php } ?>

    </ul>

  <?php } ?>


  <div id="rep" class="error">  </div>

  <div class="form_container">

    <div class="">
      <form method="POST" action="./register.php" class="form_registe">
        <div class="input_field">
          <input type="email" name="email" id="email_validate" placeholder="Email" />
        </div>
        <div class="input_field">
          <input type="password" name="password" placeholder="Password" />
        </div>
        <div class="input_field">
          <input type="password" name="re_password" placeholder="Re-type Password" />
        </div>

        <div class="row clearfix">
          <div class="col_half">
            <div class="input_field">
              <input type="text" name="fname" placeholder="First Name" />
            </div>
          </div>
          <div class="col_half">
            <div class="input_field">
              <input type="text" name="lname" placeholder="Last Name" />
            </div>
          </div>
        </div>

        <div class="input_field radio_option">

          <input type="radio" name="radies" value="teacher" id="rd1" />

          <label for="rd1">teacher</label>
          <input type="radio" name="radies" value="student" id="rd2" />

          <label for="rd2">student</label>
        </div>


        <input class="button" type="submit" name="submit" value="Register" />
      </form>
    </div>

  </div>

  
<script>

let email_val= document.getElementById('email_validate');
let mydiv= document.getElementById('rep');


email_val.addEventListener("blur", () => {

  let myRequest = new XMLHttpRequest();
  let email= email_val.value

 myRequest.onreadystatechange = function () {
   if(email == ''){

    mydiv.innerHTML = myRequest.responseText;
   
   }else{
    mydiv.innerHTML='';
   }

  };

  myRequest.open("POST", "info.php", true);
  myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded")
  myRequest.send('email='+email);

});


</script>
</body>

</html>

<?php require_once('./footer.php') ?>

<?php
session_unset();

?>