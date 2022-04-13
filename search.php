<?php

$search = $_POST['search'];

$servername = "root";
$username = "";
$password = "";
$db = "hobo2022";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from display_images where name like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
        echo $row["id"]."  ".$row["filename"]."  ".$row["imdb_name"]."<br>";
    }
} else {
    echo "0 records";
}

$conn->close();

?>