<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Dashboard</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
	<nav class="navbar-expand-lg navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">TRAICORD</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	      	<?php if($_SESSION["employee_type"]=="HOD"){?>
	        	<a class="nav-link" href="http://localhost/Dashboard_file/WebDashboardHod/Hod_Dashboard.php" id="backwhite">Home <span class="sr-only">(current)</span></a>
	    	<?php } else if($_SESSION["employee_type"]=="Admin"){?>
	    		<a class="nav-link" href="http://localhost/Dashboard_file/WebDashboardAdmin/Admin_Dashboard.php" id="backwhite">Home <span class="sr-only">(current)</span></a>
	    	<?php } else{ ?>
	    		<a class="nav-link" href="http://localhost/Dashboard_file/WebDashboardEmployee/Employee_Dashboard.php" id="backwhite">Home <span class="sr-only">(current)</span></a>
	    	<?php } ?>
	      </li>
	    </ul>
	    <ul class="navbar-nav ml-auto">
	      
	      <li class="nav-item">
	      	<a class="nav-link" id="logout" href="http://localhost/Login_file/login_authentication.php">LOGOUT</a>
	      </li>
	    </ul>
	   
	  </div>
    </nav>

<br><br>
<center><img src="facebook-default-no-profile-pic.jpg">
<br><br>
<a href="http://localhost/Login_file/change_password.php">To change password click here</a>
</center>
<form><center>
	<?php
	
	$db = mysqli_connect('localhost','root','','traicord') or 
	die('Error connecting to MySQL server.');
	$email_loggedin = $_SESSION["email"];
	$query = "SELECT * from users where email = '$email_loggedin'";
	$result = mysqli_query($db,$query);
	while($row=mysqli_fetch_assoc($result))
    {
		echo '<br><br>First Name:<br><input type="text" value='.$row['first_name'].'><br><br>';
		echo 'Last Name:<br><input type="text" value='.$row['last_name'].'><br><br>';
		echo 'Email:<br> <input type="text" value='.$row['email'].'"><br><br>';
    	echo 'Employee Type:<br> <input type="text" value='.$row['employee_type'].'><br><br>';
		echo 'Phone Number:<br> <input type="text" value='.$row['contact'].'><br><br>';
		echo 'DOB:<br> <input type="text" value='.$row['dob'].'><br><br>';
		echo 'Department:<br> <input type="text" value='.$row['department'].'><br><br>';
		echo 'Password:<br><input type="password" value='.$row['password_set']. '<br><br>';
		
	}

	
	/*
    Name:<br> <input type="text" name="name" placeholder="Peter Sullivan"><br><br>
    Email:<br> <input type="text" name="email" placeholder="petersullivan@outlook.com"><br><br>
    Employee Type:<br> <input type="text" name="type" placeholder="HOD"><br><br>
    Phone Number:<br> <input type="text" name="phone" placeholder="9982434342"><br><br>
    New Password:<br> <input type="password" name="pass" placeholder="*******"><br><br>
    Confirm Password:<br> <input type="password" name="pass" placeholder="*******"><br><br>
	<input type="submit" value="Save and Continue">
	*/
	
	?>
</form></center>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  





</body>
</html>