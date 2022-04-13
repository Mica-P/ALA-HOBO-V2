<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <title>Hello, world!</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hobo2022";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
include_once 'navbar.php';
?>










<img class="residentbox" src="images/residentevil/Rectangle 13.png">
<img class="residentbox2" src="images/residentevil/Rectangle 14.png">
<img class="box2" src="images/residentevil/Rectangle 15.png">
<img class="box4" src="images/residentevil/Rectangle 16.png">
<img class="box5" src="images/residentevil/RESIDENT EVIL.png">

<img class="box3" src="images/residentevil/PLAY.png">

<img class="box+" src="images/residentevil/+.png">

<h1 class="head-title">Popular</h1>
<img class="img1" src="images/img1.png">
<img class="img2" src="images/img2.png">
<img class="img3"src="images/img3.png">
<img class="img4" src="images/img4.png">

<section class="main-container" >
    <div class="location" id="home">

    <h1 id="#home">Trending</h1>
    <div class="box">
        <?php
        $sql = "SELECT * FROM serie   ";
        $result = $conn->query($sql);
        while($record = mysqli_fetch_assoc($result)){
        ?>
        <a href ="https://www.imdb.com/title/<?php echo $record['IMDBLink'] ?>"><img class='plaatje' src="images/images/images/<?php echo $record['SerieID']?>.jpg" onError="this.src='images/LOGO.png'"><br>
        <?php
        }
        ?>
    </div>
</section>

<table style="width:95%">
    <h1 class="genres">Genres</h1>
    <tr>
        <th>Animation</th>
        <th>Biography</th>
        <th>Drama</th>
        <th>Historical</th>
        <th>Mystery</th>
        <th>Thriller</th>
    </tr>
    <tr>
        <th>Action</th>
        <th>Comedy</th>
        <th>Documentary</th>
        <th>Horror</th>
        <th>Romance</th>
        <th>War</th>
    </tr>
    <tr>
        <th>Adventure</th>
        <th>Crime</th>
        <th>Fantasy</th>
        <th>Muscial</th>
        <th>Science fiction</th>
        <th>Western</th>
    </tr>
</table>



</body>

<?php

require_once "footer.html";
?>
</section>
</body>
</html>
