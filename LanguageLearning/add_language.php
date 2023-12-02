<?php
session_start();
// add_language.php

// Include database connection
include("config1.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve selected language ID from the form
    $selectedLanguageID = $_POST['language'];

    // Retrieve user ID based on the current session
    $email = $_SESSION['email'];
    $getUserIDQuery = "SELECT userid FROM user WHERE email = '$email'";
    $getUserIDResult = mysqli_query($conn, $getUserIDQuery);

    if ($getUserIDResult && mysqli_num_rows($getUserIDResult) > 0) {
        $userID = mysqli_fetch_assoc($getUserIDResult)['userid'];

        // Check if the user already has the selected language
        $checkLanguageQuery = "SELECT * FROM user_lang WHERE userid = '$userID' AND language_id = '$selectedLanguageID'";
        $checkLanguageResult = mysqli_query($conn, $checkLanguageQuery);

        if ($checkLanguageResult && mysqli_num_rows($checkLanguageResult) == 0) {
            // Add the selected language to the user
            $addLanguageQuery = "INSERT INTO user_lang (userid, language_id) VALUES ('$userID', '$selectedLanguageID')";
            $addLanguageResult = mysqli_query($conn, $addLanguageQuery);

            if ($addLanguageResult) {
                echo "Language added successfully!";
            } else {
                echo "Error adding language: " . mysqli_error($conn);
            }
        } else {
            echo "User already has the selected language.";
        }
    } else {
        echo "Error retrieving user information.";
    }
}

// Close the database connection
$conn->close();
?>
