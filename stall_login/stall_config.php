<?php
$servername='localhost';
$username='globuwhg_stall_login';
$password='HZxL6^QboxNu';
$dbname = "globuwhg_quantsevent";
try {
    $phone = $_POST['phone_validate'];
    $email = $_POST['email_validate'];
    // date_default_timezone_set("Asia/Calcutta");
    // $insertdate = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO stall_login (phone, email)
    VALUES ('$phone', '$email')";
    $conn->exec($sql);
    echo "Validate successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
