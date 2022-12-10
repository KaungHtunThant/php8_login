<?php

include 'auth.php';

if(isset($_POST['login'])){
	$servername = "localhost";
	$username = "yuuji";
	$password = "3ug3n32c4r13T//";
	$database = "my_login";

	// Create connection
	$connect = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		echo "Connected successfully";
	}

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = new User($username, $password);

	// echo "<script>console.log('username-$username');</script>";
	// echo "<script>console.log('password-$password');</script>";
    // $sql = "SELECT * FROM users WHERE username='$login->get_name()' AND password='$login->get_pass()'";
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	
	$data = mysqli_query($connect,$sql);
	echo "<br><hr>";
    $result = mysqli_num_rows($data);
    if($result > 0){
    	$_SESSION['username'] = $login->get_name();
    	$_SESSION['password'] = $login->get_pass();
    	$u = $_SESSION['username'];
    	echo "$u login success";
    }
    else{
    	echo "login failed";
    }
}
?>