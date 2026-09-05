<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Location: form_regis.php?error=1");
        exit;
    }
    elseif($password !== $cpassword){
        header("Location: form_regis.php?error=3");
        exit();
    }
    else {
        $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
        $insertResult = mysqli_query($connect, $query);

        if ($insertResult) {
            header("Location: login.php");
            exit;
        } else {
            header("Location: form_regis.php?error=2");
            exit();
        }
    }
}

?>