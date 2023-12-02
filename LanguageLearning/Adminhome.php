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
                <a href="index.php" class="nav-item nav-link">About</a>
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
                            <a href=""><h5 class="mb-3">Users</h5></a>
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


    <!-- User Start -->
<div class="container">
    <?php
    include("config.php");

    // Insert operation
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_insert_user"])) {
        $userID = $_POST["user_id"];
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO User (userid, firstname, lastname, email, password) VALUES ('$userID','$firstName', '$lastName', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New user added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Delete operation
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_delete_user"])) {
        $userIDToDelete = $_POST["user_id_to_delete"];

        $sql = "DELETE FROM User WHERE UserID = '$userIDToDelete'";

        if ($conn->query($sql) === TRUE) {
            echo "User deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Update operation
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_update_user"])) {
        $userIDToUpdate = $_POST["user_id_to_update"];
        $newFirstName = $_POST["new_first_name"];
        $newLastName = $_POST["new_last_name"];
        $newEmail = $_POST["new_email"];
        $newPassword = $_POST["new_password"];

        $sql = "UPDATE User SET FirstName = '$newFirstName', LastName = '$newLastName', Email = '$newEmail', Password = '$newPassword' WHERE UserID = '$userIDToUpdate'";

        if ($conn->query($sql) === TRUE) {
            echo "User updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Fetch data from the User table
    $userQuery = "SELECT * FROM User";
    $userResult = $conn->query($userQuery);
    ?>
    <div class="container">
        <h6 class="section-title bg-white text-start text-primary pe-3">Admin Dashboard</h6>
        <h1 class="mb-4">User Management</h1>

        <!-- Insert form -->
        <form method="post" action="">
            <label for="user_id">User ID:</label>
            <input type="text" name="user_id" required>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" required>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" required>
            <label for="email">Email:</label>
            <input type="text" name="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <input type="submit" name="submit_insert_user" value="Insert">
        </form>

        <!-- Delete form -->
        <form method="post" action="">
            <label for="user_id_to_delete">User ID to Delete:</label>
            <input type="text" name="user_id_to_delete" required>
            <input type="submit" name="submit_delete_user" value="Delete">
        </form>

        <!-- Update form -->
        <form method="post" action="">
            <label for="user_id_to_update">User ID to Update:</label>
            <input type="text" name="user_id_to_update" required>
            <label for="new_first_name">New First Name:</label>
            <input type="text" name="new_first_name" required>
            <label for="new_last_name">New Last Name:</label>
            <input type="text" name="new_last_name" required>
            <label for="new_email">New Email:</label>
            <input type="text" name="new_email" required>
            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" required>
            <input type="submit" name="submit_update_user" value="Update">
        </form>

        <!-- Display User table -->
        <table>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php
            if ($userResult->num_rows > 0) {
                while ($row = $userResult->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['userid']}</td>";
                    echo "<td>{$row['firstname']}</td>";
                    echo "<td>{$row['lastname']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['password']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No users found</td></tr>";
            }
            ?>
        </table>
    </div>
    <?php
    // Close the database connection
    $conn->close();
    ?>
</div>
<!-- User End -->



   
      

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