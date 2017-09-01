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
        <form action="signup.php" method="POST">
            <input name="username" type="text" placeholder="Username"/>
            <input name="password1" type="password" placeholder="Password"/>
            <input name="password2" type="password" placeholder="Password" />
            <input name="emailadd" type="email" placeholder="E-Mail Address" />
            <button type="submit">Create Account</button>
        </form>

    </div>
    <br />
    <br />
    <div>
        <?php

        $sql ="SELECT * FROM users;";
        $result = mysqli_query($conn, $sql);

        $resultCheck = mysqli_num_rows($result);

        if($resultCheck>0){
            while ($row = mysqli_fetch_assoc($result))
            {
            	echo $row['user_name'];
            }
            
        }


        ?>

    </div>

</body>
</html>