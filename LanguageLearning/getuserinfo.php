<?php
// Include database connection
include("config1.php");

// Initialize $userInfo as an empty array
$userInfo = array();

// Fetch user information
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $userInfoQuery = "SELECT * FROM user WHERE email = '$email'";
    $userInfoResult = mysqli_query($conn, $userInfoQuery);
    $userInfo = mysqli_fetch_assoc($userInfoResult);
}
?>
