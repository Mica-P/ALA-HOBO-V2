<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="POST">
    <input type="text" name="image_name" placeholder="type a name and hit submit button to see particular image">
    <input type="submit" name="submit" value="submit">
</form>
<table>
    <?php
    $db_connect = mysqli_connect( "localhost", "root", "", "hobo2022" ) or die( "Database not connected!" );
    $select_data = mysqli_query( $db_connect, "SELECT * FROM display_images ") or die( mysqli_error( $db_connect ) );
    while( $row = mysqli_fetch_assoc( $select_data) ){
        ?>
        <tr>
            <td>
                <img src="<?php echo $row["filename"];?>" height="100" width="100">
            </td>
            <td><?php echo $row["filename"];?></td>
        </tr>
    <?php }?>
</table>
</body>