<?php
	$servername = "localhost";
    $email = "email";
    $password = "";
    $conn = new mysqli($servername,$email,$password);
    if($conn->connect_error){
        die ('connection failed'.$conn->connect_error);
    }
$sql = "INSERT INTO `login details`(`email`, `password`) VALUES ('$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>

