<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div>

        <h1 id="heading">Log-in</h1>
        <div>
            <button>Log-in</button>
            <button>Create Account</button>
        </div>
        <form action="login.php" method="post">
            <fieldset>
                <legend>Username</legend>
                <input type="text" name="username" id="username">
            </fieldset>
            <fieldset>
                <legend>Password</legend>
                <input type="password" name="password" id="password">
            </fieldset>
        </form>
    </div>
</body>

</html>