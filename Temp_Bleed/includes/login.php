<?php

session_start();

if(isset($_POST['submit'])) {
	include 'dbh.php';

	$hid = mysqli_real_escape_string($conn, $_POST['hid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	// ERROR HANDLERS
	// CHECK
	if (empty($hid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
			exit();
	} else{
		$sql = "SELECT * FROM admin WHERE hid= '$hid' OR h_email= '$hid' ";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=erro");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//DE-HASH
				$hashedPwdCheck = password_verify($pwd, $row['pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//LOG IN
					$_SESSION['h_id'] = $row['ID'];
					$_SESSION['h_name'] = $row['h_name'];
					$_SESSION['h_address'] = $row['h_address'];
					$_SESSION['h_phone'] = $row['h_phone'];
					$_SESSION['h_email'] = $row['h_email'];
					$_SESSION['hid'] = $row['hid'];
					

					header("Location: ../index.php?login=success");
					exit();

				}
			}			
		}
	}	
} else {
		header("Location: ../index.php?login=error");
		exit();

}

?>