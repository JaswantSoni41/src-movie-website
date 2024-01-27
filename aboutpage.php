<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
    <!--Nav-->
  <div class="nav-wrapper">
    <div class="container">
      <div class="nav">
        <a href="main.php" class="logo">
          <i class='bx bx-movie-play bx-tada'></i>S<span class="main-color">R</span>C
  
        </a>
        <ul class="nav-menu" id="nav-menu">
        <li><a href="main.php">Home</a></li>
        <li><a href="aboutpage.php">About</a></li>
        <li>
          <a href="main.php" class="btn btn-hover">
            <span>Back</span>
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

<div class="about-section">
  <h1>Developer's Page</h1>
  <p>You can browse information of developers and contact us with help of mail.</p>
  <p>do visit us again!Have a nice day.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="about images/jaswant 2.jpg" alt="Jaswant" style="width:100%">
      <div class="container">
        <h2>Jaswant Soni</h2>
        <p class="title">Developer</p>
        <p>hello!.....</p>
        <p>jaswantsoni@gmail.com</p>
        <a href="mailto:jaswantsoni@gmail.com"><button class="button">Contact</button></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="about images/kewal image.jpg" alt="kewal" style="width:100%">
      <div class="container">
        <h2>kewal patel</h2>
        <p class="title">Developer</p>
        <p>hello!......</p>
        <p>kewalpatel@gmail.com</p>
        <a href="mailto:kewalpatel@gmail.com"><button class="button">Contact</button></a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="about images/rakesh image.jpg" alt="rakesh gudekar" style="width:100%">
      <div class="container">
        <h2>Rakesh </h2>
        <p class="title">Developer</p>
        <p>hello!.......</p>
        <p>rakesh@gmail.com</p>
        <a href="mailto:rakesh@gmail.com"><button class="button">Contact</button></a>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="about images/siddhesh.jpg" alt="Siddhesh" style="width:100%">
      <div class="container">
        <h2>siddhesh</h2>
        <p class="title">Developer</p>
        <p>hello!.......</p>
        <p>siddhesh@gmail.com</p>
        <a href="mailto:siddhesh@gmail.com"><button class="button">Contact</button></a>
      </div>
    </div>
  </div>

</div>
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
