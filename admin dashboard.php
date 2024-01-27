<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

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
<style>
#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
      color: tomato;
		}
    </style>
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
        
        <li><a href="main.php">Website</a></li>
        <li><a href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=movie+website">Database</a></li>
        <li>
          <a href="https://www.gmail.com" class="btn btn-hover">
            <span>complain</span>
          </a>
        </li>
        <li>
          <a href="admin login.php" class="btn btn-hover">
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
     
  <h5>User Details</h5>
						<table>
							<tr>
								<td id="td"><b>ID</b></br></td>
								<td id="td"><b>mobile_no</b></br></td>
								<td id="td"><b>full_name</b></br></td>
								<td id="td"><b>username</b></br></td>
								<td id="td"><b>password</b></br></td>
							</tr>
						</table>
					
					<?php
					$query = "select * from login";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						
						<table style="border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['id']?></td>
								<td id="td"><?php echo $row['mobile_no']?><br></td>
								<td id="td"><?php echo $row['full_name']?><br></td>
								<td id="td"><?php echo $row['username']?></br></td>
                 <td id="td"><?php echo $row['password']?></td>
							</tr>
						</table>
						
                        <?php
                    }
                    ?>
</body>
</html>