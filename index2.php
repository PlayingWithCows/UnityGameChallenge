<?php
include_once 'dbh.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />


</head>


<body>
    <p>Log In:</p>
    <form>
        <input name="usernameLogin" type="text" placeholder="Username" />
        <input name="passwordLogin" type="password" placeholder="Password" />
        <button type="submit">Log In</button>
    </form>

    <?php

$data ="admin";

    //template
    $sql ="SELECT * FROM users WHERE user_name=?;";
    //prepared statement
    $stmt = mysqli_stmt_init($conn);
    //prepare the prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed";
    } else {
        //bind parameters to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        //run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)){
        echo $row['user_name']."<br>";
        }
    }




    ?>

</body>
</html>