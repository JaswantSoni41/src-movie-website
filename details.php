<!DOCTYPE html>
<?php require_once("db.php");
if(!isset($_SESSION["login_sess"])) 
{
    header("location:login.php"); 
}
  $username=$_SESSION["login_username"];
  $findresult = mysqli_query($dbc, "SELECT * FROM login WHERE username= '$username'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username']; 
$full_name = $res['full_name'];   
$mobile_no = $res['mobile_no'];  
$password = $res['password'];  
}
 ?> 
<html>
<head>
    <title> My Account - Techno Smarter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
     <form action="login_process.php" method="POST">
  <div class="login_form">
 <img src="https://technosmarter.com/assets/images/logo.png" alt="Techno Smarter" class="logo img-fluid"> <br> 
     <p><a href="logout.php"><span style="color:red; float: right;">Logout</span> </a></p>
          <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
          <table class="table">
          <tr>
              <th>First Name </th>
              <td><?php echo $full_name; ?></td>
          </tr>
          <tr>
              <th>Last Name </th>
              <td><?php echo $mobile_no; ?></td>
          </tr>
          <tr>
              <th>Username </th>
              <td><?php echo $username; ?></td>
          </tr>
           <tr>
              <th>Email </th>
              <td><?php echo $password; ?></td>
          </tr>
          </table>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>