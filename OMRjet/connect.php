<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $conn = new mysqli('localhost','root','','test2');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name,email,password)
            values(?,?,?)")
        $stmt->bind_param("sss",$name ,$email, $password);
        $stmt->execute();
        echo "Successfully done...";
        $stmt->close();
        $conn->close();
    }
?>