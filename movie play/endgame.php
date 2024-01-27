<!--
    <?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Endgame
  </title>
  <!--FONTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Box Icons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

  <!-- App CSS -->
  <link rel="stylesheet" href="grid.css">
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="video.css">
  <link rel="stylesheet" href="/grid.css ?php echo time(); ?>">
  <link rel="stylesheet" href="/app.css ?php echo time(); ?>">
  
</head>

 

<body>
<!--Nav-->
<div class="nav-wrapper">
    <div class="container">
      <div class="nav">
        <a href="#" class="logo">
          <i class='bx bx-movie-play bx-tada'></i>S<span class="main-color">R</span>C
  
        </a>
        <ul class="nav-menu" id="nav-menu">
        <li><a href="javascript:history.go(-1)">Home</a></li>
       <!-- <li><a href="#">Genere</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">Series</a></li>
        <li><a href="aboutpage.php">About</a></li>-->
        <li>
          <a window.location.href="C:\xampp\htdocs\moviewebsite\moviewebsite\main.php" class="btn btn-hover">
            <span>sign out</span>
          </a>
        </li>
       </ul>

       <!-- Mobile Menu Toggle -->
      <div class="hamburger-menu" id="hamburger-menu">
         <div class="hamburger"></div>
       </div>
      </div>
    </div>
  </div>
  <!--End Nav-->

<div class="frame">
        <marquee class="adv" direction="right" bgcolor="white"><h1><font color="black">Advertisement</h1></marquee>
</div>
      
<div class="video-playback">
<iframe width="900" height="475" frameborder="0" src="https://mega.nz/embed/I68WHK5R#jInODfr_m3n5OVuMJ1KGi7dGLMvVUnns7Qu671YTp4o" allowfullscreen ></iframe>

</div>

<div class = "movie-info">
    <h2 class="title" allign=>End Game</h2>
</div>

<p class="description">After Thanos, an intergalactic warlord,<br> disintegrates half of the universe, the Avengers must 
    reunite and assemble again to reinvigorate their trounced<br> allies and restore balance</p>

<button class ="readmore" onclick="myFunction()" id="myBtn" href="https://en.wikipedia.org/wiki/Avengers:_Endgame">Read more</button>

<!-- FOOTER SECTION -->
<footer class="section">
    <div class="container">
        <div class="row">
            <div class="col-4 col-md-6 col-sm-12">
                <div class="content">
                    <a href="#" class="logo">
                        <i class='bx bx-movie-play bx-tada main-color'></i>S<span class="main-color">R</span>C
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut veniam ex quos hic id nobis beatae earum sapiente! Quod ipsa exercitationem officiis non error illum minima iusto et. Dolores, quibusdam?
                    </p>
                    <div class="social-list">
                        <a href="#" class="social-item">
                            <i class="bx bxl-facebook"></i>
                        </a>
                        <a href="#" class="social-item">
                            <i class="bx bxl-twitter"></i>
                        </a>
                        <a href="#" class="social-item">
                            <i class="bx bxl-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-3 col-md-6 col-sm-6">
                        <div class="content">
                            <p><b>SRC</b></p>
                            <ul class="footer-menu">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">My profile</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 col-md-6 col-sm-6">
                        <div class="content">
                            <p><b>Browse</b></p>
                            <ul class="footer-menu">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">My profile</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3 col-md-6 col-sm-6">
                        <div class="content">
                            <p><b>Help</b></p>
                            <ul class="footer-menu">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">My profile</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER SECTION -->

<!-- COPYRIGHT SECTION -->
<div class="copyright">
    Copyright 2021 <a href="#" target="_blank">
        Kewal Patel, Jaswant Soni, Rakesk Gudekar, Siddesh Bramhane</a>
</div>
<!-- END COPYRIGHT SECTION -->
 <!-- Script -->
  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!--App Script-->
  <script src="app.js"></script>
</body>
</html>