<?php
require_once 'DbConfig.php';
?>
<title>HOBO</title>
<div class="wrapper">
    <div class="main_card">
        <div class="card_left">
            <div class="card_datails">
                <?php
                session_start();
                $hostName = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "hobo2022";
                $conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                if(isset($_POST['zoeken'])) {
                    $sql = "SELECT * FROM serie where SerieTitel like '%" . $_POST['serie'] . "%' AND actief = 1";
                    $result = $conn->query($sql);
                }
                while($data = $result->fetch(PDO::FETCH_ASSOC)){
                echo '<h1>' .$data['SerieTitel'].'</h1>';
                echo "<img class='plaatje' src='../ALA-HOBO-V2/images/images/images/".$data['SerieID'].".jpg'>"."<br>";
                ?>
                <h1>Mission: Impossible – Fallout</h1>
                <div class="card_cat">
                    <p class="PG">PG - 13</p>
                    <p class="year">2018</p>
                    <p class="genre">Action | Adventure </p>
                    <p class="time">2h 28m</p>
                </div>
                <p class="disc">Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gone wrong.</p>
                <a href="https://www.imdb.com/title/tt4912910/" target="_blank">Read More</a>
                <div class="social-btn">
                    <!-- WATCH TRAILER-->
                    <button>
                        <i class="fas fa-play"></i> SEE TRAILER
                    </button>
                    <!-- GET-->
                    <button>
                        <i class="imdb"></i> IMDb
                    </button>
                </div>
            </div>
        </div>
        <div class="card_right">
            <div class="img_container">
                <img src="https://upload.wikimedia.org/wikipedia/en/f/ff/MI_%E2%80%93_Fallout.jpg" alt="">
            </div>
            <div class="play_btn">
                <a href="https://www.imdb.com/title/tt4912910/" target="_blank">
                    <i class="fas fa-play-circle"></i>
                </a>
            </div>
        </div>
    </div>
</div>



<!-- FOLLOW -->
<a class="Follow" href="https://codepen.io/ZaynAlaoudi/" target="blank_"></a>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
    }

    .main_card {

        width: 760px;
        height: 390px;
        margin: 50px auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        max-width: 770px;
        background: #1C1E23;
        -webkit-box-shadow: 0 0 40px rgba(0,0,0,0.3);
        box-shadow: 0 0 40px rgba(0,0,0,0.3);
    }

    .card_left {
        width: 90%;
    }

    .card_datails {
        color: white;
        width: 90%;
        padding: 30px;
        margin-top: -25px;
    }
    .card_datails  h1 {
        font-size: 30px;
    }
    .card_right img {
        height: 390px;
        border-radius: 2px;
    }
    .card_right {
        border-radius: 2px;
    }

    .card_cat {
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .PG, .year, .genre, .time {
        padding: 10px;
        font-weight: bold;
        border-radius: 15px;
    }

    .PG {
        background: #92D050;
        -webkit-box-shadow: 0 0 50px rgba(0,0,0,0.1);
        box-shadow: 0 0 50px rgba(0,0,0,0.1);
        -webkit-transition: 300ms ease-in-out;
    }

    .disc {
        font-weight: 100;
        line-height: 27px;
    }
    a {
        color: white;
        display: block;
        text-decoration: none;
    }
    .social-btn {
        margin-left: -10px;
    }
    button {
        color: #fff;
        border: none;
        padding: 20px;
        outline: none;
        font-size: 12px;
        margin-top: 30px;
        margin-left: 10px;
        background: gray;
        border-radius: 12px;
        -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.2);
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
        -webkit-transition: 300ms ease-in-out;
        -o-transition: 200ms ease-in-out;
        transition: 200ms ease-in-out;
    }

    button:hover {
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
    }
    .play_btn {
        height: 100%;
        margin: -394px auto;
        position: relative;
        text-align: center;
        background: rgba(0, 244, 170,0.4);
        box-shadow: 0 0 50px rgba(0,0,0,0.2);
    }
    .fa-play-circle {
        color: #92D050;
        font-size: 160px;
        margin-top: 110px;
        -webkit-animation: bounce 1.0s -0.4s infinite;
        animation: bounce 1.0s -0.4s infinite;
    }

    .fa-play-circle:hover {
        color: aqua;
        animation: bounce 0.4s infinite;
    }
    @-webkit-keyframes bounce {
        8% {
            transform: scale(0.3);
            -webkit-transform: scale(0.8);
            opacity: 1;
        }
        10% {
            transform: scale(1.8);
            -webkit-transform: scale2);
            opacity: 0;
        }
    }

    @keyframes bounce {
        8% {
            transform: scale(0.3);
            -webkit-transform: scale(0.8);
            opacity: 1;
        }
        20% {
            transform: scale(1.8);
            -webkit-transform: scale2);
            opacity: 0;
        }
    }





    /*  FOLLOW*/
    .Follow {	  background:url("https://pbs.twimg.com/profile_images/959092900708544512/v4Db9QRv_bigger.jpg")no-repeat center / contain;
        width: 50px;
        height: 50px;
        bottom: 9px;
        right: 20px;
        display:block;
        position:fixed;
        border-radius:50%;
        z-index:999;
        animation:  rotation 10s infinite linear;
    }

    @-webkit-keyframes rotation {
        from {
            -webkit-transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(359deg);
        }
    }
}




}
</style>