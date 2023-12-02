<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LanguaLuxe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Admin Stylesheet -->
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>LanguaLuxe</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item active">404 Page</a>
                    </div>
                </div>

            </div>
            <a href="logout.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Log Out</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Admin</h1>
                    <nav aria-label="breadcrumb">
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

     <!-- Service Start -->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <a href="Adminhome.php"><h5 class="mb-3">Users</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <a href="Languages.php"><h5 class="mb-3">Languages</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <a href="Quiz.php"><h5 class="mb-3">Quizzes</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <a href="QuizScore.php"><h5 class="mb-3">Quiz Score</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <a href="Greetings_and_Farewell.php"><h5 class="mb-3">Greetings and Farewell</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.11s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <a href="Food.php"><h5 class="mb-3">Food</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <a href="Travel.php"><h5 class="mb-3">Travel</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <a href="Frequent.php"><h5 class="mb-3">Frequently Used Words</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <?php
include("config.php");

// Insert operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_insert_travel"])) {
    $quizID = $_POST["quiz_id"];
    $languageID = $_POST["language_id"];
    $wordsInLang = $_POST["words_in_language"];
    $englishMeaning = $_POST["english_meaning"];

    $sql = "INSERT INTO travel (quiz_id, language_id, words_in_language, english_meaning) 
            VALUES ('$quizID', '$languageID', '$wordsInLang', '$englishMeaning')";

    if ($conn->query($sql) === TRUE) {
        echo "New travel entry added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_delete_travel"])) {
    $quizIDToDelete = $_POST["quiz_id_to_delete"];

    $sql = "DELETE FROM travel WHERE quiz_id = '$quizIDToDelete'";

    if ($conn->query($sql) === TRUE) {
        echo "Travel entry deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_update_travel"])) {
    $quizIDToUpdate = $_POST["quiz_id_to_update"];
    $newLanguageID = $_POST["new_language_id"];
    $newWordsInLang = $_POST["new_words_in_language"];
    $newEnglishMeaning = $_POST["new_english_meaning"];

    $sql = "UPDATE travel 
            SET language_id = '$newLanguageID', words_in_language = '$newWordsInLang', english_meaning = '$newEnglishMeaning' 
            WHERE quiz_id = '$quizIDToUpdate'";

    if ($conn->query($sql) === TRUE) {
        echo "Travel entry updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch data from the travel table
$sql = "SELECT * FROM travel";
$result = $conn->query($sql);
?>

<div class="container">
    <h6 class="section-title bg-white text-start text-primary pe-3">Admin Dashboard</h6>
    <h1 class="mb-4">Travel</h1>

    <!-- Insert form -->
    <form method="post" action="">
        <label for="quiz_id">Quiz ID:</label>
        <input type="text" name="quiz_id" required>

        <label for="language_id">Language ID:</label>
        <input type="text" name="language_id" required>

        <label for="words_in_language">Words in Language:</label>
        <input type="text" name="words_in_language" required>

        <label for="english_meaning">English Meaning:</label>
        <input type="text" name="english_meaning" required>

        <input type="submit" name="submit_insert_travel" value="Insert">
    </form>

    <!-- Delete form -->
    <form method="post" action="">
        <label for="quiz_id_to_delete">Quiz ID to Delete:</label>
        <input type="text" name="quiz_id_to_delete" required>
        <input type="submit" name="submit_delete_travel" value="Delete">
    </form>

    <!-- Update form -->
    <form method="post" action="">
        <label for="quiz_id_to_update">Quiz ID to Update:</label>
        <input type="text" name="quiz_id_to_update" required>

        <label for="new_language_id">New Language ID:</label>
        <input type="text" name="new_language_id" required>

        <label for="new_words_in_language">New Words in Language:</label>
        <input type="text" name="new_words_in_language" required>

        <label for="new_english_meaning">New English Meaning:</label>
        <input type="text" name="new_english_meaning" required>

        <input type="submit" name="submit_update_travel" value="Update">
    </form>

    <!-- Display travel table -->
    <table>
        <tr>
            <th>Quiz ID</th>
            <th>Language ID</th>
            <th>Words in Language</th>
            <th>English Meaning</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['quiz_id']}</td>";
                echo "<td>{$row['language_id']}</td>";
                echo "<td>{$row['words_in_language']}</td>";
                echo "<td>{$row['english_meaning']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No travel entries found</td></tr>";
        }
        ?>
    </table>
</div>

<?php
// Close the database connection
$conn->close();
?>

    <!-- About End -->    



   
      

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                </div>
                <div class="col-lg-3 col-md-6">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>