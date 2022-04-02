<?php

$xml = simplexml_load_file("ques.xml");

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

            <div class="header_course">
                <h2>Answer the question of <?= $row['course_name'] ?></h2>
            </div>

            <div class="contain_ques">
                <?php $i = 0 ?>
                <?php foreach ($xml->children() as $child1) { ?>
                    <div class="container">
                        <p><?= $child1 ?></p>
                        <?php foreach ($child1->children() as $child2) { ?>
                            <input type="radio" class="lableques" name="rad<?= $i ?>" style="margin-left: 50px;" value="<?php echo  $child2  ?>">
                            <label for=""> <?php echo  $child2  ?> </label>

                        <?php } ?>
                    </div>
                    <?php $i++ ?>
                <?php } ?>

                <div class="container">
                    <p> to drop table in databse write ........... </p>
                    <input type="radio" class="lableques" name="radv" style="margin-left: 50px;" value="dsfsd">
                    <label for=""> php artisan migrate </label>

                    <input type="radio" class="lableques" name="radv" style="margin-left: 50px;" value="dsfsd">
                    <label for=""> php artisan make:model </label>

                    <input type="radio" class="lableques" name="radv" style="margin-left: 50px;" value="dsfsd">
                    <label for=""> php artisan make:controller </label>

                </div>


                <div class="container">
                    <p> query builder to get all data from database is .........</p>
                    <input type="radio" class="lableques" name="radf" style="margin-left: 50px;" value="Model_name::all()">
                    <label for="">Model_name::all()</label>

                    <input type="radio" class="lableques" name="radf" style="margin-left: 50px;" value="Model_name::where('id',1)">
                    <label for=""> Model_name::where('id',1)</label>

                    <input type="radio" class="lableques" name="radf" style="margin-left: 50px;" value="Model_name::find(1)">
                    <label for=""> Model_name::find(1)</label>

                </div>


                <div class="container">
                    <p> this query table_name::find(1) return ..............</p>
                    <input type="radio" class="lableques" name="rade" style="margin-left: 50px;" value="dsfsd">
                    <label for="">return Object</label>

                    <input type="radio" class="lableques" name="rade" style="margin-left: 50px;" value="dsfsd">
                    <label for=""> return collesion </label>

                    <input type="radio" class="lableques" name="rade" style="margin-left: 50px;" value="dsfsd">
                    <label for=""> return true </label>

                </div>


                <?php $i = 6 ?>

                <?php foreach ($row_qus as $row) { ?>
                    <div class="container">
                        <p><?= $row['question_name'] ?></p>



                        <?php

                        $row_answer = selectall('answer', 'ques_id', $row['id']);

                        foreach ($row_answer as $answer) {

                        ?>
                            <input type="radio" class="lableques" name="rad<?= $i ?>" style="margin-left: 50px;" value="dsfsd">
                            <label for=""><?= $answer['Answers'] ?></label>

                        <?php } ?>
                    </div>

                    <?php $i++ ?>
                <?php } ?>

            </div>
        </body>

        
</html>
<h1></h1>