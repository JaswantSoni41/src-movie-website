

	
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		include_once "db.php";
		$connection = mysqli_connect($hostname,$username,$password,$dbname);
		
		// Taking all 4 values from the form data(input)
		$full_name = $_REQUEST['full_name'];
		$mobile_no = $_REQUEST['mobile_no'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		$insertSQL = "INSERT INTO login(full_name,mobile_no,username,password ) values(?,?,?,?)";
		$stmt = $con->prepare($insertSQL);
		$stmt->bind_param("siss",$full_name,$mobile_no,$username,$password);
		$stmt->execute();
		$stmt->close();
		
		?>

<script type="text/javascript">
	alert("user added successfully.");
	window.location.href = "login.php";
</script>
