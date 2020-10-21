<?php
include 'conn.php';

$e_id = $_POST['e_id'];
$fileupload = $_FILES['photo']['tmp_name'];
$fileupload_name = $_FILES['photo']['name'];


if($fileupload !=""){
    copy($fileupload,"./picture/".$fileupload_name);
    $sql = "INSERT INTO picevent (p_pic,e_id)VALUES('$fileupload_name','$e_id')";
    mysql_query($sql,$conn);
}

echo '<div class="alert alert-success" role="alert" > บันทึกข้อมูลเรียบร้อย ! </div> ';
echo '<a href="index.php"> 
			<button type="button" class="btn btn-primary"> Back to Homepage </button> </a>' ;



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
