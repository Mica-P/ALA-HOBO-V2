<?php
require_once "User.php";

$user = new user();

if(isset($_POST['login'])){
    echo $user->login($_POST);
}
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
</head>
<body>
<main>
    <div class="sidenav">
        <div class="login-main-text">
            <img src="images/LOGO.png" alt="HOBO LOGO">
        </div>
    </div>
    <section class="form">
        <form method="post">
            <label for="username" id="username">Gebruikersnaam: </label>
            <input type="text" name="username" required>
            <label for="password">Wachtwoord: </label>
            <input type="password" name="password" required>
            <input type="submit" name="login" value="Login">
        </form>
        <a href="admincrud-system.php"></a>
    </section>
</main>
</body>
