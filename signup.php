<?php
	$server = "localhost";
	$username = "root";
	$password = "123987";
	$db = "Form";

	$conn = new mysqli($server,$username,$password,$db);
	if($conn->connect_error){
		die("Connection Failed: ".$conn->connect_error);
	}

	$FirstName = $_POST['fname'];
	$LastName = $_POST['lname'];
	$Year = $_POST['year'];
	$Branch = $_POST['branch'];
	$Roll = $_POST['rollNo'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	$pass = md5($Password);
	$Mobile = $_POST['mobile'];
//	echo "$FirstName $LastName $Year $Branch $Roll $Email $Password $Mobile";
//	echo "$FirstName $LastName";
	$insQuery = "INSERT INTO signup VALUES('$FirstName','$LastName','$Year','$Branch','$Roll','$Email','$Password','$Mobile')";

	if($conn->query($insQuery)==TRUE){
		echo "Registered Successfully";
		echo "<br> Redirecting to previous page to sign in";

		header("refresh:2; url=form.html");
	}

	else{
		echo "error:".$insQuery."<br>".$conn->error;
	}

	$conn->close();

/*	$con = mysqli_connect($server,$username,$password);
	if(!$con){
		echo "Unable to connect to server";
	}

	$conn = mysql_select_db($con,'Form');
	if(!$conn){
		echo "Unable to connect to database";
	}
*/


?>