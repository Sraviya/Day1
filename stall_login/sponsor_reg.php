<?php
include_once 'stall_config.php';
if(isset($_POST['butn_submit']))
{	 
	 $phone = $_POST['phone_validate'];
	 $email = $_POST['email_validate'];
	 
	 $sql = "INSERT INTO stall_login (phone,email)
	 VALUES ('$phone','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header('location: login.html');
                exit();
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>