<?php
// Include database connection
include("config1.php");

// Update user information if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user ID from the session
    $email = $_SESSION['email'];

    $newFirstName = $_POST['newFirstName'];
    $newLastName = $_POST['newLastName'];
    $newEmail = $_POST['newEmail'];
    $newPassword = $_POST['newPassword'];

    $userInf = "SELECT userid FROM user WHERE email = '$email'";
    $userInfoR = mysqli_query($conn, $userInf);
    $userInfo1 = mysqli_fetch_assoc($userInfoR);

    // Perform the update in the database
    $updateQuery = "UPDATE user SET userid='{$userInfo1['userid']}', firstname = '$newFirstName', lastname = '$newLastName', email = '$newEmail', password = '$newPassword' WHERE userid = '{$userInfo1['userid']}'";
    mysqli_query($conn, $updateQuery);

    // Optional: Refresh user information after update
    $userInfoQuery = "SELECT * FROM user WHERE email = '$email'";
    $userInfoResult = mysqli_query($conn, $userInfoQuery);
    $userInfo = mysqli_fetch_assoc($userInfoResult);
}
?>
