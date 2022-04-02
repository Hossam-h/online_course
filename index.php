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
            <a href="#"> <i class="fas fa-arrow-right"></i> Laravel </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> php</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> mysql</a>
            
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