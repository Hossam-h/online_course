
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