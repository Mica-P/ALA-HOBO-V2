<?php
require_once "User.php";

$user = new user();

if(isset($_POST['login'])){
    echo $user->login($_POST);
}
?>

<main>
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

