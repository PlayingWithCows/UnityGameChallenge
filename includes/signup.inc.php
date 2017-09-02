<?php

include_once 'dbh.inc.php';

$email = mysqli_real_escape_string($conn, $_POST['emailadd']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password1']);
$errorfound = false;

if(!$password===mysqli_real_escape_string($conn, $_POST['password2']);){
    $errorfound=true;
}

if(!$errorfound){
$sql ="INSERT INTO users (user_email, user_name, user_pwd) VALUES (?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "SQL error";
}else{
    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $password);
    mysqli_stmt_execute($stmt);
}

header("Location: ../index.php?signup=success");

}else{"Location: ../index.php?signup=failed"}
