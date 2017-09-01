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

</body>
</html>