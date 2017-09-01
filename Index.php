<?php

include_once 'includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


</head>


<body>
    <p>Log In:</p>
    <form>
        <input name="usernameLogin" type="text" placeholder="Username"/>
        <input name="passwordLogin" type="password" placeholder="Password"/>
        <button type="submit">Log In</button>
    </form>

    <br />
    <br />
    <div>
        <p>Create Account:</p>
        <form action="includes/signup.inc.php" method="POST">
            <input name="username" type="text" placeholder="Username"/>
            <input name="password1" type="password" placeholder="Password"/>
            <input name="password2" type="password" placeholder="Password again" />
            <input name="emailadd" type="email" placeholder="E-Mail Address" />
            <button type="submit" name="submit">Create Account</button>
        </form>

    </div>
    <br />
    <br />
    <div>
        <?php

        $sql ="INSERT INTO users (user_email, user_name, user_pwd) VALUES ('playwithcows@gmail.com', 'PlayingWithCows', 'testpassword');";
        mysqli_query($conn, $sql);


      


        ?>

    </div>

</body>
</html>