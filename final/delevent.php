<?php
include "conn.php";
    $e_id = $_GET['e_id'];

    $sql = "DELETE FROM event WHERE e_id = '$e_id'";
    mysql_query( $sql,$conn);
    mysql_close($conn);

echo '<div> ลบข้อมูลเรียบร้อย ! </div> ';
echo '<a href="index.php"> 
			<button class="ui primary button" type="button" > Back to Homepage </button> </a>' ;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include 'script.php';
    ?>
</head>
<body>

</body>
</html>
