<?php
include 'conn.php';


$e_name = $_POST['e_name'];
$e_detail = $_POST['e_detail'];
if($e_name != NULL ){
    $sql1 = "SELECT * FROM event WHERE e_name = '$e_name' ";
    $result1 = mysql_query($sql1,$conn);
    $total1 = mysql_num_rows($result1);
    ////////////
    if($total1 == 0){
        $sql = "insert into event (e_name,e_detail) value ('$e_name','$e_detail') ";
        echo '<div class="alert alert-success" role="alert" > บันทึกข้อมูลเรียบร้อย ! </div> ';
        echo '<a href="index.php"> 
					<button type="button" class="btn btn-primary"> Back to Homepage </button> </a>' ;
        mysql_query($sql,$conn);
    }
    else {
        echo '<div class="alert alert-danger" role="alert"> ชื่อซ้ำ ! </div>';
        echo '<a href="index.php"> 
			<button type="button" class="btn btn-primary"> Back to Homepage </button>  </a>'  ;
        mysql_close();
    }
}
else {
    echo mysql_error($conn);
    echo '<div class="alert alert-danger" role="alert"> ไม่สามารถบันทึกข้อมูลได้ ! </div>';
    echo '<a href="frm_addInfo.php"> 
		<button type="button" class="btn btn-primary"> Back to Homepage </button>  </a>'  ;
    mysql_close();
}
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
