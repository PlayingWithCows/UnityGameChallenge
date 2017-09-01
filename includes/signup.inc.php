<?php

include_once 'includes/dbh.inc.php';

$sql ="INSERT INTO users (user_email, user_name, user_pwd) VALUES ('playwithcows@gmail.com', 'PlayingWithCows', 'testpassword');";
mysqli_query($conn, $sql);

header("Location: ../index.php?signup=success");
