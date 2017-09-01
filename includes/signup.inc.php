<?php

include_once 'dbh.inc.php';

$email = mysqli_real_escape_string($conn, $_POST['emailadd']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password1']);

$sql ="INSERT INTO users (user_email, user_name, user_pwd) VALUES ('$email', '$username', '$password');";
mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
