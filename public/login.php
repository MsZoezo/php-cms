<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<?php include('../private/shared/header.php'); ?>
<div class="login">
    <form action="" class="login__holder">
        <div class="login__inputWrapper">
            <label for="username" class="login__label">Login</label>
            <input type="text" class="login__input" id="username">
        </div>
        <div class="login__inputWrapper">
            <label for="password" class="login__label">Password</label>
            <input type="text" class="login__input" id="password">
        </div>
        <button class="button login__button--login">Log in</button>
    </form>
</div>

</body>


</html>