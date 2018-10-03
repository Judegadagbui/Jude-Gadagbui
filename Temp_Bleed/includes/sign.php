<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$telephone= mysqli_real_escape_string($conn, $_POST['telephone']);
	$email= mysqli_real_escape_string($conn, $_POST['email']);
	$hid = mysqli_real_escape_string($conn, $_POST['hid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//ERROR HANDLERS
	// EMPTY FEILDS
	if(empty($name) || empty($address) || empty($telephone)||empty($email) || empty($hid) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
				$sql = "SELECT * FROM users WHERE hid = '$hid' ";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else {
					//HASHING PWD
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into DBS
					$sql = "INSERT INTO admin (h_name,h_address,h_phone,h_email,hid, pwd) VALUES ('$name', '$address', '$telephone','$email', '$hid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../login.php");
					exit();
				}
				
			}
		}
	 else{
	header("Location: ../signup.php");
	exit();
}

?>