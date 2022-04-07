<?php 
require_once ('./db/dbconnect.php');

 $courses=getrow_all('coursee');

require_once ('./header.php')
?>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

    <div class="content">
        <h3>your course to success</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa cumque neque quam amet perferendis sed rem ut tenetur porro praesentium.</p>
        <a href="#" class="btn">get started</a>
    </div>

</section>

<!-- home section ends -->

<!-- categories section starts  -->

<section class="category">




<?php  foreach($courses as $course ) {?>
    
    <a href="<?= './show/show.php?id='.$course["id"] ?>" class="box">
        <img src=<?= "./images/$course[course_image]"?> width="250" height="200" alt="">
        <h3><?= $course['course_name'] ?></h3>
    </a>

    <?php }?>

</section>

<!-- categories section ends -->



<!-- footer section starts  -->

<?php require_once('./footer.php') ?>