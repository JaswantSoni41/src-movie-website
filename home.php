<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Responsive Movie Website
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
  <link rel="stylesheet" href="/grid.css ?php echo time(); ?>">
  <link rel="stylesheet" href="/app.css ?php echo time(); ?>">
 
  <!--database-->
  <?php
		session_start();
		include_once "db.php";
		$connection = mysqli_connect($hostname,$username,$password);
		$db = mysqli_select_db($connection,$dbname);
	?>


</head>
        
<body>

  <!--Nav-->
  <div class="nav-wrapper">
    <div class="container">
      <div class="nav">
        <a href="home.php" class="logo">
          <i class='bx bx-movie-play bx-tada'></i>S<span class="main-color">R</span>C
  
        </a>
        <ul class="nav-menu" id="nav-menu">
        <li><a href="login.php">Home</a></li>
        <li><a href="login.php">Genere</a></li>
        <li><a href="login.php">Movies</a></li>
        <li><a href="login.php">Series</a></li>
        <li><a href="login.php">About</a></li>
        <li>
          <a href="login.php" class="btn btn-hover">
            <span>Sign In</span>
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

  <!--Hero Section-->
  <div class="hero">
    <div class="hero-slide">
      <div class="owl-carousel carousel-nav-center" id="hero-carousel">

        <!--Slide Content-->
        <div class="hero-slide-item">
          <img src="images/black-banner.png" alt="">
          <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wrapped">
                <div class="item-content-title top-down delay-2">
                  Black Panther
                </div>
                <div class="movie-infos top-down delay-4">
                  <div class="movie-info">
                    <i class="bx bx-stars"></i>
                    <span>9.5</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bx-time"></i>
                    <span>102 mins</span>
                  </div>
                  <div class="movie-info">
                    <span>HD</span>
                  </div>
                  <div class="movie-info">
                    <span>16+</span>
                  </div>
                </div>
                <div class="item-content-description top-down delay-6">
                After his father's death, T'Challa returns home to Wakanda to inherit his throne. 
                However, a powerful enemy related to his family threatens to attack his nation
                </div>
                <div class="item-action top-down delay-8">
                  <a href="Login.php" class="btn btn-hover">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Sign In</span>
                  </a>
                </div>
              </div>
            </div>
        </div>
        <!--End Slide content-->

         <!--Slide Content-->
        <div class="hero-slide-item">
          <img src="images/supergirl-banner.jpg" alt="">
          <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wrapped">
                <div class="item-content-title top-down delay-2" >
                  Supergirl
                </div>
                <div class="movie-infos top-down delay-4">
                  <div class="movie-info">
                    <i class="bx bx-stars"></i>
                    <span>9.5</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bx-time"></i>
                    <span>102 mins</span>
                  </div>
                  <div class="movie-info">
                    <span>HD</span>
                  </div>
                  <div class="movie-info">
                    <span>16+</span>
                  </div>
                </div>
                <div class="item-content-description top-down delay-6">
                Kara Danvers who is Superman's biological cousin is forced to unveil
                her hidden powers and protect the inhabitants when an unexpected disaster
                strikes National City.
                </div>
                <div class="item-action top-down delay-8">
                  <a href="login.php" class="btn btn-hover">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Sign In</span>
                  </a>
                </div>
              </div>
            </div>
        </div>
        <!--End Slide content-->

         <!--Slide Content-->
         <div class="hero-slide-item">
          <img src="images/wanda-banner.jpg" alt="">
          <div class="overlay"></div>
            <div class="hero-slide-item-content">
              <div class="item-content-wrapped">
                <div class="item-content-title top-down delay-2">
                  Wanda Vision
                </div>
                <div class="movie-infos top-down delay-4">
                  <div class="movie-info">
                    <i class="bx bx-stars"></i>
                    <span>9.5</span>
                  </div>
                  <div class="movie-info">
                    <i class="bx bx-time"></i>
                    <span>102 mins</span>
                  </div>
                  <div class="movie-info">
                    <span>HD</span>
                  </div>
                  <div class="movie-info">
                    <span>16+</span>
                  </div>
                </div>
                <div class="item-content-description top-down delay-6">
                Living idealized suburban lives, super-powered beings Wanda
                 and Vision begin to suspect that everything is not as it seems
                </div>
                <div class="item-action top-down delay-8">
                  <a href="login.php" class="btn btn-hover">
                    <i class="bx bxs-right-arrow"></i>
                    <span>Sign In</span>
                  </a>
                </div>
              </div>
            </div>
        </div>
        <!--End Slide content-->

      </div>
    </div>
  </div>
<!--Special Movie Section-->
<div class="section">
    <div class="hero-slide-item">
      <img src="images/transformer-banner.jpg" alt="">
      <div class="overlay"></div>
        <div class="hero-slide-item-content">
          <div class="item-content-wrapped">
            <div class="item-content-title">
              Transformer
            </div>
            <div class="movie-infos">
              <div class="movie-info">
                <i class="bx bx-stars"></i>
                <span>9.5</span>
              </div>
              <div class="movie-info">
                <i class="bx bx-time"></i>
                <span>102 mins</span>
              </div>
              <div class="movie-info">
                <span>HD</span>
              </div>
              <div class="movie-info">
                <span>16+</span>
              </div>
            </div>
            <div class="item-content-description">
              Transformers is a series of American science fiction action films
              based on the Transformers franchise which began in the 1980s.
              Michael Bay has directed the first five films: Transformers,
              Revenge of the Fallen, Dark of the Moon, Age of Extinction, and The Last Knight.
            <div class="item-action">
              <a href="login.php" class="btn btn-hover">
                <i class="bx bxs-right-arrow"></i>
                <span>Sign In</span>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!--End Special Movie Section-->

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