<?php

require_once '../db/dbconnect.php';

$row = select('coursee', $_GET['id']);

$row_user = select('users', $row['user_id']);

$all_lesson = selectall('lessones', 'course_id', $_GET['id']);

$courses = getrow_all('coursee');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>


    <link rel="stylesheet" href="../css/stylet.css">
    <link rel="stylesheet" href="../css/show.css">
    <link rel="stylesheet" href="./ques.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="../index.php" class="logo"> <i class="fas fa-graduation-cap"></i> educa </a>

        <div id="menu-btn" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul>
                <li><a href="../index.php">home</a></li>
                <li><a href="../about.php">about</a></li>
                <li><a href="#">courses +</a>
                    <ul>
                        <?php foreach ($courses as $course) { ?>

                            <li><a href="./show.php?id=<?= $course['id'] ?>"><?= $course['course_name'] ?></a></li>

                        <?php } ?>

                    </ul>
                </li>

                <li><a href="../contact.php">contact</a></li>

                <li><a href="../join_us.php">Join US</a></li>
            </ul>
        </nav>

    </header>


    <div class="images_contain">

        <img src="./vedios/<?= $row['course_image']  ?>" class="course" alt="" width="100%" height="100%">

    </div>



    <div class="contain_description">
        <div class="container">
            <div>
                <p> <span>Time of course :</span> <?= $row['date'] ?> </p>
            </div>

            <div>
                <p> <span> Instructor :</span> <?= $row_user['Fname'] . ' ' . $row_user['Lname'] ?> </p>
            </div>


            <div>

                <p> <?= $row['course_description'] ?></p>

            </div>
        </div>
    </div>


    <div class="contain_lessons">

        <?php foreach ($all_lesson as $lesson) { ?>

            <div>
                <video width="320" height="240" controls>

                    <source src="./vedios/<?= $lesson['lesson_name'] ?>" type="video/mp4">
                </video>
            </div>
        <?php } ?>

    </div>

    <div class="question">
        <a href="./question.php?id=<?= $row['id'] ?>"> Answer question</a>
    </div>
</body>


<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>explore</h3>
        <a href="index.php"> <i class="fas fa-arrow-right"></i> home </a>
        <a href="about.php"> <i class="fas fa-arrow-right"></i> about </a>
        <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact </a>
    </div>

    <div class="box">
        <h3>categories</h3>


        
        <?php foreach($courses as $course)  {?>

<a href="./show/show.php?id=<?= $course['id'] ?>"><i class="fas fa-arrow-right"></i> <?=$course['course_name']?></a>

<?php } ?>
        
    </div>

    
    <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        
    </div>

</div>


</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>