<?php

session_start();

$host = "localhost"; /* Host name */
$user = "globuwhg_qevent"; /* User */
$password = "Se-h;la*vMkc"; /* Password */
$dbname = "globuwhg_quantsevent"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}