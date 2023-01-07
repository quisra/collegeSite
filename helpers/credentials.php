<?php
    $servername = "localhost";
    $username = "jaxcode";
    $password = "Richfield1";
    $dbname = "jaxcode";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
?>