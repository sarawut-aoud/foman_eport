<?php
include 'conn.php';
    $e_id = $_GET['e_id'];
    $sql ="select * from event where e_id = '$e_id'  ";
    $result = mysql_query($sql,$conn)
        or die("Can't query");
    $rs = mysql_fetch_array($result);
    //หารูป//

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Event_Fomantic</title>
</head>

<body>
<table align="center" style="width: 100%; height: 150px" border="1px" cellpadding="0"cellspacing="0" >
  <tbody>
    <tr>
        <td align="center">
            <div style="height: 150px; width: 100%;">
                <img src="./img/header.jpg" alt="header image"
                     style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <p>&nbsp;</p>
            <form action="addPic.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <input hidden="hidden" id="e_id" name="e_id" value=" <?php echo "$rs[e_id]" ;?>">
            <table width="400" border="2" align="center" cellpadding="0" cellspacing="0"  >
                <tbody>
                <tr>
                    <td colspan="2" align="center" bgcolor="#fff333"><font color="#000000" style size="+2">เพิ่มรูปกิจกรรม</font></td>
                </tr>
                <tr>
                    <td width="100"height="20" >ชื่อกิจกรรม</td>
                    <td width="100" height="50" align="center">
                        <?php echo "$rs[e_name]" ;?>
                    </td>
                </tr>
                <tr>
                  <td  width="100">รูป</td>
                  <td  width="200" align="center"> <input type="file" class="custom-file-input" name="photo" id="photo" ></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                      <input   class="ui inverted red button" type="submit" name="submit" id="submit" value="บันทึก"> </input>
                      <input type="reset" name="reset" id="reset" value="ยกเลิก" onclick=window.location.href="index.php">
                  </td>
                </tr>
                </tbody>
            </table>
                </form>
            <p>&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td align="center">
            <h3> Fomantic ui </h3>
        </td>
    </tr>
  </tbody>
</table>

</body>
</html>