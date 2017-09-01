<?php

include_once 'dbh.inc.php';

$email = $_POST['emailadd'];
$username = $_POST['username'];
$password = $_POST['password1'];

$sql ="INSERT INTO users (user_email, user_name, user_pwd) VALUES ('$email', '$username', '$password');";
mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
