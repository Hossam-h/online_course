<?php


require_once '../db/dbconnect.php';

$row = select('coursee', $_GET['id']);

$row_qus = selectall('questions', $row['id'], 'course_id');

$courses = getrow_all('coursee');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/show.css">
    <title>Document</title>
</head>

<body>

    <!DOCTYPE php>
    <php lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>about</title>

            <!-- font awesome cdn link  -->

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

            <!-- custom css file link  -->

            <link rel="stylesheet" href="../css/stylet.css">
            <link rel="stylesheet" href="../css/show.css">

        </head>

        <body>

            <!-- header section starts  -->

            <header class="header">

                <a href="../index.php" class="logo"> <i class="fas fa-graduation-cap"></i> educa </a>

                <div id="menu-btn" class="fas fa-bars"></div>

                <nav class="navbar">
                    <ul>
                        <li><a href="../index.php">home</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="#">courses +</a>
                            <ul>
                                <?php foreach ($courses as $course) { ?>

                                    <li><a href="./show.php?id=<?= $course['id'] ?>"><?= $course['course_name'] ?></a></li>

                                <?php } ?>

                            </ul>
                        </li>

                        <li><a href="../contact.php">contact</a></li>
                    </ul>
                </nav>

            </header>


            <div class="images_contain">

                <img src="./vedios/<?= $row['course_image']  ?>" class="course" alt="" width="100%" height="100%">

            </div>


            <?php


$i=9;


// $_POST['radv'];
// $_POST['radf'];
// $_POST['rade'];
// $_POST['rad6'];

// $_POST['rad0'];
// $_POST['rad1'];
// $_POST['rad2'];
// $_POST['rad3'];
// $_POST['rad7'] ;


if(!isset($_POST['radv'])){
    $i--;
}

if(!isset($_POST['radf'])){
    $i--;
}

if(!isset($_POST['rade'])){
    $i--;
}

if(!isset($_POST['rad6'])){
    $i--;
}

if(!isset($_POST['rad0'])){
    $i--;
}

if(!isset($_POST['rad1'])){
    $i--;
}


if(!isset($_POST['rad2'])){
    $i--;
}


if(!isset($_POST['rad3'])){
    $i--;
}


if(!isset($_POST['rad7'])){
    $i--;
}
?>
<div class="your_degree">
<h1 >your degree</h1>
</div>
              
            <div class="contain_degeree">

                <h2> <?=$i ?>/10 </h2>
            </div>



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



            <?php foreach ($courses as $course) { ?>

                <a href="./show/show.php?id=<?= $course['id'] ?>"><i class="fas fa-arrow-right"></i> <?= $course['course_name'] ?></a>

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