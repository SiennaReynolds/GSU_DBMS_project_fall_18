
<html>
<body>
<?php
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$count = 0;
	
	$link = mysqli_connect("samplecodb.cplqfb6rscf0.us-east-2.rds.amazonaws.com", "swizzywizzy", "Rootroot","gsudbproject_fall2018") or die(mysql_error());
	$check = mysqli_query($link,"SELECT email,username FROM gsudbproject_fall2018.users") or die(mysql_error());
	if ($check && mysqli_num_rows($check) > 0){
		while ($row = mysqli_fetch_assoc($check)) {
			if($row['email'] != $email || $row['username'] != $username){
				//Checks that there are no users by x username or x email.
			}
			else{
				$count = $count + 1;
				//if user exists by that username or password, no new user can be created.
			}
		}
		if($count > 0){
			echo '<script type="text/javascript"> document.location = "/FailedSignupPage.html";</script>';
		}
		else{
			$insert = mysqli_query($link,"INSERT INTO gsudbproject_fall2018.users VALUES('$email','$password','$username',null)") or die(mysql_error());
			echo '<script type="text/javascript"> document.location = "/NewUsersOptionsPage.html";</script>';
		}
    }
	else{
		echo '<script type="text/javascript"> document.location = "/SignupPage.html";</script>';
    }
	?>
	</body>
</html>