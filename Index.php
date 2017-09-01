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


    </div>

</body>
</html>