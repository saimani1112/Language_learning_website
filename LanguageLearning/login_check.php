<?php
// error_reporting(0);
// $host="localhost";
// $user="root";
// $password="";
// $db="language_db";
// $data=mysqli_connect($host, $user, $password, $db);

// $sql = "SELECT * FROM user WHERE email='" . $name . "' AND password='" . $pass . "'";
// $result = mysqli_query($data, $sql);
// $row = mysqli_fetch_array($result);

// if($data==false){
//     die("Connection error");
// }

// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $name=$_POST['email'];
//     $pass=$_POST['password'];
//     $sql = "select * from User where email='".$name."' AND password='".$pass."' ";
//     $result = mysqli_query($data,$sql);
//     $row=mysqli_fetch_array($result);

//     if($row['email']=='harinder@gmail.com'){
//         header("location:adminhome.php");
//     }
//     else if($row['email']){
//         session_start();
//         $_SESSION['user_id'] = $row['userid'];
//         header("location:Userhome.php");
//     }
//     else{
//         echo "Email or Password does not match";
//     }
// }


?>

<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$db = "language_db";

session_start();

$data = mysqli_connect($host, $user, $password, $db);

if ($data == false) {
    die("Connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user credentials
    $sql = "SELECT userid, email FROM User WHERE email='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        if ($row['email'] == 'harinder@gmail.com') {
            $_SESSION['user_id'] = 'admin'; // Example for admin user
            header("location: adminhome.php");
        } else {
            $_SESSION['email'] = $row['email'];
            header("location: Userhome.php");
        }
    } else {
        echo "Email or Password does not match";
    }
}
?>
