<?php

require_once 'User.php';

$user = new User();

if(isset($_POST['register'])){
    echo $user->create($_POST);
}

?>

<head>
    <title>register</title>
    <style>

    </style>

    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
</head>

<main>
    <div class="sidenav">
        <div class="login-main-text">
            <img src="images/LOGO.png" alt="HOBO LOGO">
        </div>
    </div>

    <section class="form">
        <form method="post">
            <label for="username" id="username">Gebruikersnaam: </label><br>
            <input type="text" name="username" required><br>
            <label for="password">Wachtwoord: </label><br>
            <input type="password" name="password" required><br>
            <label for="conf-password">Wachtwoord bevesteging: </label><br>
            <input type="password" name="conf-password" required><br>
            <label for="abonnement">Kies uw abonnement:</label><br>

            <select  name="abonnement" id="abonnement"><br>
                <option for="Basis" value="Basis">Basis</option>
                <option for="Extra" value="Extra">Extra</option>
                <option for="Platinum" value="Platinum">Platinum</option>
            </select><br>
            <input type="submit" name="register" value="Register">

            <br>
            <br>

            <p>Al een klant? <a href="login.php">Nu inloggen</a>.</p>
        </form>

    </section>
</main>