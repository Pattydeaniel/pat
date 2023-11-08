<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> AIRGO </title>


<!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


<!-- css file link -->
<link rel="stylesheet"href="style.css">


</head>
<body>
<!-- header section starts -->
<section class="header">
<a href="home.php" class="logo">AIRGO BOOKING SYSTEM</a>
<nav class="navbar">
<a href="home.php">HOME</a>
<a href="about.php">ABOUT</a>
<a href="tour.php">DESTINATION</a>
<a href="pay.php">BOOKING</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->

<div class="heading" style="background:url(air.avif)">
<h1> BOOKING</h1>
</div>





<!-- footer section starts -->
<section class="footer">

<div class="box-container">
<div class="box">
    <h3>QUICKY LINKS </h3>
<a href="home.php"><i class="fas fa-angle-right"></i>HOME</a>
<a href="about.php"><i class="fas fa-angle-right"></i>ABOUT</a>
<a href="tour.php"><i class="fas fa-angle-right"></i>DESTINATION</a>
<a href="pay.php"><i class="fas fa-angle-right"></i>BOOKING</a>
</div>
<div class="box">
    <h3>EXTRA LINKS </h3>
<a href="#"><i class="fas fa-angle-right"></i>ASK SOMETHING?</a>
<a href="#"><i class="fas fa-angle-right"></i>ABOUT US?</a>
<a href="#"><i class="fas fa-angle-right"></i>PRIVACY POLICY</a>
<a href="#"><i class="fas fa-angle-right"></i>TERMS OF FUCKING USE</a>

</div>
<div class="box">
    <h3>CONTACT INFO </h3>
<a href="#"><i class="fas fa-phone"></i> +639-1234-5678</a>
<a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
<a href="#"><i class="fas fa-envelope"></i> airgo@gmail.com</a>
<a href="#"><i class="fas fa-map"></i> airgo st.booking system</a>

</div>

<div class="box">
    <h3>MEDIA</h3>
<a href="#"><i class="fab fa-facebook"></i> facebook</a>
<a href="#"><i class="fab fa-twitter"></i> twitter</a>
<a href="#"><i class="fab fa-instagram"></i> instagram</a>
<a href="#"><i class="fab fa-viber"></i> viber</a>

</div>



</div>
<div class="credit">created by <span>GROUP 2 </span> </div>

</section>
<!-- footer section ends -->


<!-- booking section start -->
<section class="booking">
<h1 class="heading-title">BOOK YOUR DESTINATION</h1>

<form action="pay_form.php" method="post" class="book-form">

<div class="flex">

<div class="inputbox">
<span>name:</span>
<input type="text" placeholder="enter your name" name="Name">
</div>
<div class="inputbox">
<span>email:</span>
<input type="text" placeholder="enter your email" name="Email">
</div>
<div class="inputbox">
<span>phone:</span>
<input type="text" placeholder="enter your phone#" name="Phone">
</div>
<div class="inputbox">
<span>address:</span>
<input type="text" placeholder="enter your address" name="Address">
</div>
<div class="inputbox">
<span>where to:</span>
<input type="text" placeholder="place want to visit" name="Location">
</div>
<div class="inputbox">
<span>how many:</span>
<input type="text" placeholder="number of guests" name="Guests">
</div>
<div class="inputbox">
<span>arrivals:</span>
<input type="date" name="Arrivals">
</div>
<div class="inputbox">
<span>leaving:</span>
<input type="date" name="Leaving">
</div>
</div>

<input type="submit" value="submit" class="btn" name="Send">
</form>

</section>
<!-- booking section ends -->



    <!-- swiper js link --> 
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--custome js file link -->
    <script src="script.js"></script>
</body>
</html>