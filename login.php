<?php
require_once "User.php";

$user = new user();

if(isset($_POST['login'])){
    echo $user->login($_POST);
}
?>


<head>
    <title>login</title>

    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
</head>



<main>
    <div class="sidenav">
        <div class="login-main-text">
            <img src="images/LOGO.png" alt="HOBO LOGO">
        </div>
    </div>

    <section class="form">
        <form method="post" >
            <label for="username" id="username">Gebruikersnaam: </label><br>
            <input type="text" name="username" required><br>
            <label for="password">Wachtwoord: </label><br>
            <input type="password" name="password" required><br>
            <label for="rememberMe">Onthoud mij</label><br>
            <input type="checkbox" value="lsRememberMe" id="rememberMe"><br>

            <input type="submit" name="login" value="Login">
            <br>
            <br>

            <p>Nog geen account? <a href="register.php">Regestreer nu</a>.</p>
        </form>
    </section>
</main>





<script>
    const rmCheck = document.getElementById("rememberMe"),
        emailInput = document.getElementById("email");

    if (localStorage.checkbox && localStorage.checkbox !== "") {
        rmCheck.setAttribute("checked", "checked");
        emailInput.value = localStorage.username;
    } else {
        rmCheck.removeAttribute("checked");
        emailInput.value = "";
    }

    function lsRememberMe() {
        if (rmCheck.checked && emailInput.value !== "") {
            localStorage.username = emailInput.value;
            localStorage.checkbox = rmCheck.value;
        } else {
            localStorage.username = "";
            localStorage.checkbox = "";
        }
    }
</script>