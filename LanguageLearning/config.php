<?php

  $conn = mysqli_connect('localhost', 'root', '','language_db');

  if (!$conn) {
    echo 'connection failed';
    exit;
  }
  // session_start();
  if(empty($_SESSION) || !isset($_SESSION['login']))
  {
    //session_start();
  }
//   include('functions.php');
?>