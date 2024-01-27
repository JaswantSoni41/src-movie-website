<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
</head>
<body>
	<!--Nav-->
	<div class="nav-wrapper">
    <div class="container">
      <div class="nav">
        <a href="index.php" class="logo">
          <i class='bx bx-movie-play bx-tada'></i>S<span class="main-color">R</span>C
  
        </a>
        <ul class="nav-menu" id="nav-menu">
        
        <li>
          <a href="signup.php" class="btn btn-hover">
            <span>register</span>
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
	<div class="log-in-box-2" style="width: 80%;
    margin: 5% auto;
    display: flex;
	flex-direction:column;
    justify-content: center;
    align-items: center;">
	<h3>USER LOGIN</h3><br>
		<form action="" method="post" class="login">
			<div class="email-box"> <p>Email ID:</p> <input type="text" name="username" required><br><br></div>
			<div class="password-box"> <p>Password:</p> <input type="password" name="password" required><br><br>
			<div class="button"><input type="submit" class="design" name="submit" value="Log-In" style="background:#c0392b; border:none;	padding:5px 17px; font-weight:bold; color:white;"></div>
			</div>
			
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit']))
			{
				include_once "db.php";
			$connection = mysqli_connect($hostname,$username,$password);
			$db = mysqli_select_db($connection,$dbname);
				$query = "select * from login where username = '$_POST[username]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)){
					if($row['username'] == $_POST['username']){
						if($row['password'] == $_POST['password']){
							$_SESSION['full_name'] =  $row['full_name'];
							$_SESSION['username'] =  $row['username'];
							header("Location: main.php");
						}
						else{
							?>
							<span style="color:red">Wrong Password !!</span>
							<?php
						}
					}
					else
					{
						?>
						<span>Wrong PasswordUserName !!</span>
						<?php
					}
				}
			}
		?>
	</div>
		
</body>
</html>