<?php
require_once 'config.php';

session_start();
$hostName = "localhost";
$username = "root";
$password = "";
$databaseName = "hobo2022";
$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="keywords" content="html,css-- mijn eigen website">
    <title>Search bar</title>
    <link rel="stylesheet" href="css/searchbar.css">
</head>
<body>
<main>
    <section class="search-box">
    <section id='een'>
    </section>
    <section class="form">
        <form method="post">
            <div class="wrapper">
            <label for="username" id="serie"></label>
            <input class="search" type="text" placeholder="vul hier een serie titel in" name="serie">
            <input class="submit" type="submit" name="zoeken" value="zoek">
            </div>
        </form>
        <button class="goback">
            <a href="home.php">Go back!</a>
        </button>
        <div class="content-box">
        <?php
        if(isset($_POST['zoeken'])){
            $sql = "SELECT * FROM serie where SerieTitel like '%".$_POST['serie']."%' AND actief = 1 ORDER BY SerieID";
            $result = $conn->query($sql);
            while($data = $result->fetch(PDO::FETCH_ASSOC)){
                ?>
                <section class='zoekding'>
                    <h1 class="serieName"><?php echo $data['SerieTitel']?></h1>
                    <?php
                    echo "<img class='plaatje' src='../ALA-HOBO-V2/images/images/images/".$data['SerieID'].".jpg'>"."<br>";
                    ?>
                    <h1 class="IMDB-text">IMDB Link:</h1>
                    <?php
                    echo "<a class='imdblink'  href='https://www.imdb.com/title/" . $data['IMDBLink']."'><p>".$data['SerieTitel']. "</p></a ><br>";
                    ?>
                    <?php
                    echo "<a class='video-text' href='videovenster.php'>video</a>"
                    ?>
                </section>
                <?php
            }
        }
        ?>
        </div>
    </section>
    </section>
</main>
