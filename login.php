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

  
  <div id="rep" class="error">  </div>

 

  <div class="form_container">

    <div class="">
      <form method="POST" action="./login_validate.php" class="form_registe" >
        <div class="input_field">
          <input type="email" name="email" id="email_validate" placeholder="Email" />
        </div>
        <div class="input_field">
          <input type="password" name="password" placeholder="Password" />
        </div>
      
      

        <input class="button" type="submit" name="submit" style="width: 200px; margin-left:35%" value="login" />
      </form>
    </div>

  </div>

  
<?php
session_unset();

?>