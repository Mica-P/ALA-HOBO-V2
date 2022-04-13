
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

    <script src="main.js"></script>
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
<div class="wrapper">
    <?php
    require_once 'sidebar.php';
    ?>
    <!-- HEADER -->
    <header>
        <div class="netflixLogo">
            <a id="logo" href="#home">
                <img src="images/LOGO.png" alt="Logo Image">
            </a>
        </div>
        <nav class="main-nav">
            <a href="home.php">Home</a>
            <a href="home.php">TV Shows</a>
            <a href="home.php">Movies</a>
        </nav>
        <nav class="sub-nav">
            <a href="searchbar.php"><i class="fas fa-search sub-nav-logo"></i></a>
            <button class="openbtn " onclick="openNav()">🔔</button>
            <a href="#">Account</a>
        </nav>
    </header>

</div>
</body>
</html>