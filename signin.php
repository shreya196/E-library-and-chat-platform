<?php


	$conn = new mysqli('localhost','root','123987','Form');

	if($conn->connect_error){
		echo "Connection Failed".$conn->connect_error;
	}
	else{
		echo "Connection established...Database Selected";
	}

	$UserName = $_POST['username'];
	$Password = $_POST['PassWord'];

	$UserName = strip_tags($UserName);
	$Password = strip_tags($Password);

	$UserName = stripslashes($UserName);
	$Password = stripslashes($Password);

//	$UserName = mysqli_real_escape_string($UserName);
//	$Password = mysqli_real_escape_string($Password);

	$pass = md5($Password);

//	echo "$UserName $pass";

	$Var = mysqli_query($conn,"SELECT * FROM signup WHERE Email = '$UserName' AND Password = '$Password'") or die("Failed to log in");
	$row = mysqli_fetch_array($Var);


	if($row!=0){
		session_start();
		$_SESSION['userName'] = $UserName;
		echo $_SESSION['userName'];
//		header('Location:chat.php');
//		echo "hello You are succesfully logged in.";
	}



	else
		echo "failed to login";


//	if(isset($_SESSION['userName'])){
//		session_destroy();
//	}

	echo "$UserName $Password";

//	echo "$Var";

?>