<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css"><link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">

    <?php
		session_start();
		include_once "db.php";
		$name = "";
		$connection = mysqli_connect($hostname,$username,$password);
		$db = mysqli_select_db($connection,$dbname);
	?>
</head>
<body>

						<h5> Details</h5>
						<table>
							<tr>
								<td id="td"><b>ID</b></td>
								<td id="td"><b>mobile_no</b></td>
								<td id="td"><b>full_name</b></td>
								<td id="td"><b>username</b></td>
								<td id="td"><b>password</b></td>
							</tr>
						</table>
					
					<?php
					$query = "select * from login";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['id']?></td>
								<td id="td"><?php echo $row['mobile_no']?></td>
								<td id="td"><?php echo $row['full_name']?></td>
								<td id="td"><?php echo $row['username']?></td>
                                <td id="td"><?php echo $row['password']?></td>
							</tr>
						</table>
						
                        <?php
                    }
                    ?>
</body>
</html>