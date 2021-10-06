<?php
include "stall_config.php";

$phone_validate = mysqli_real_escape_string($con,$_POST['phone_validate']);
$email_validate = mysqli_real_escape_string($con,$_POST['email_validate']);


if ($email != "" && $mobile !=""){

    $Insert = "INSERT INTO stall_login(phone, email) values(?, ?)";
            
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ss",$phone_validate, $email_validate);
            $stmt->execute();
            $stmt->close();
            $conn->close();
             $_SESSION['phone_validate'] = $phone_validate;
             $_SESSION['email_validate'] = $email_validate;
            echo 1;
}
else{
    echo "Fields are empty!!!";
    echo 0;
}
?>