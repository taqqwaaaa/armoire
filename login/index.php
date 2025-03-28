<?php
session_start();

$loggedIn = $_SESSION["username"];

if ($loggedIn) {
    echo "cool beans";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/login-mode.js"></script>
    <title>Login</title>
</head>

<body>
    <div id="form">
        <h1 id="heading">log in</h1>
        <form action="login.php" method="post">
            <section id="account-btns">
                <div id="login-btn" class="active">
                    <label for="login">log-in</label>
                    <input checked type="radio" name="account-mode" id="login" value="login">
                </div>
                <div id="create-btn">
                    <label for="create">create account</label>
                    <input type="radio" name="account-mode" id="create" value="create">
                </div>
            </section>
            <fieldset>
                <legend>username</legend>
                <input type="text" name="username" id="username">
            </fieldset>
            <fieldset>
                <legend>password</legend>
                <input type="password" name="password" id="password">
            </fieldset>
            <input hidden type="checkbox" name="create-check" id="create-check">
            <input id="submit" type="submit" value="sign in!">
        </form>
    </div>
</body>

</html>