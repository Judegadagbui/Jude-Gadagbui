<?php

if (isset($_POST['submit'])) {

	include_once 'dbh.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$address = mysqli_real_escape_string($conn, $_POST['area']);
	$telephone= mysqli_real_escape_string($conn, $_POST['telephone']);
	$email= mysqli_real_escape_string($conn, $_POST['email']);
	$btype = mysqli_real_escape_string($conn, $_POST['btype']);

	//ERROR HANDLERS
	// EMPTY FEILDS
	if(empty($name) || empty($address) || empty($telephone)||empty($email) || empty($btype)){
		header("Location: ../search.php?add=empty");
		exit();
	} else {
				$sql = "SELECT * FROM students WHERE name = '$name' ";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../search.php?add=alreadyindatabase");
					exit();
				} else {
					//Insert the user into DBS
					$sql = "INSERT INTO students (p_name,p_address,p_phone,p_email,p_btype) VALUES ('$name', '$address', '$telephone','$email', '$btype');";
					mysqli_query($conn, $sql);
					header("Location: ../search.php");
					exit();
				}
				
			}
		}
	 else{
	header("Location: ../search.php");
	exit();
}

?>