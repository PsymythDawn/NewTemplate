<?php
  date_default_timezone_set('Asia/Manila');
  $servername = "localhost";
  $username = "root"; // Enter your database username here
  $password = ""; // Enter your database password here
  $dbname = "saledb";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>