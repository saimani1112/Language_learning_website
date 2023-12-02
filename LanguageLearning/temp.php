<?php
include("config.php");

// Execute the main query to retrieve user and quiz score information
$query = "SELECT * FROM user NATURAL JOIN quiz_score";
$result = $conn->query($query);
?>

<div class="container">
    <h6 class="section-title bg-white text-start text-primary pe-3">User and Quiz Score Information</h6>

    <!-- Display User and Quiz Score Information table -->
    <table>
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Score</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['userid']}</td>";
                echo "<td>{$row['firstname']}</td>";
                echo "<td>{$row['lastname']}</td>";

                // Check if 'quiz_id' exists in the current row before accessing it
                if (isset($row['quiz_id'])) {
                    echo "<td>{$row['quiz_id']}</td>";
                }

                echo "<td>{$row['score']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }
        ?>
    </table>
</div>

<?php
// Close the database connection
$conn->close();
?>

