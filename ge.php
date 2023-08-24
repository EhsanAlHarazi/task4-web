<?php
     //$text = $_POST['name'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ge";

    $conn = new mysqli ($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $text = $_POST['name'];
    

    $sql = "INSERT INTO gg (name) VALUES ('$text')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header(Location: "g.html");
    ?>
