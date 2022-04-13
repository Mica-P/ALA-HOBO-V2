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
    <meta name="author" content="Dustin moenen">
    <meta name="keywords" content="html,css-- mijn eigen website">
    <title>Ra site</title>
    <link rel="stylesheet" href="../project hobo/css/header.css">
</head>
<body>
<main>
    <section id='een'>
    </section>
    <section class="form">
        <form method="post">
            <label for="username" id="serie"></label>
            <input type="text" placeholder="vul hier een serie titel in" name="serie">
            <input type="submit" name="zoeken" value="zoek">
        </form>
        <?php

        if(isset($_POST['zoeken'])){
            $sql = "SELECT * FROM serie where SerieTitel like '%".$_POST['serie']."%' AND actief = 1";
            $result = $conn->query($sql);
            while($data = $result->fetch(PDO::FETCH_ASSOC)){

                ?>
                <section class='zoekding'>
                    <?php
                    echo "<img class='plaatje' src='../ALA-HOBO-V2/images/images/images/".$data['SerieID'].".jpg'>"."<br>";
                    echo "<a href='https://www.imdb.com/title/" . $data['IMDBLink']."'><p>".$data['SerieTitel']. "</p></a><br>";
                    ?>
                </section>
                <?php

            }



        }


        ?>


    </section>
    <section id='twee'>
    </section>
</main>
