<?php
    // include 'test.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['text'];
if(isset($_POST['submit'])){
    
    $sql = "INSERT INTO `contact`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$msg')";
    if($conn->query($sql)===true){
        echo 'new record created successfully';
    }else
    {
        echo 'error:';
        // $conn->error;
    }
    $conn->close();
};
?>