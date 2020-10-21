<?php
include 'conn.php';
    $e_id = $_GET['e_id'];
    $sql ="select * from event where e_id = '$e_id'  ";
    $result = mysql_query($sql,$conn)
        or die("Can't query");
    $rs = mysql_fetch_array($result);
    //หารูป//

?>
<style>
    *{
        font-family: "TH SarabunPSK";


    }
</style>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Event_Fomantic</title>
    <?php
    include 'script.php';
    ?>
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
                    <td width="100"height="20" align="center" ><font  style size="+1.5">ชื่อกิจกรรม</font></td>
                    <td width="100" height="50" align="center" >
                        <div class="ui left  icon">
                            <i class="users big icon"></i> <?php echo "$rs[e_name]" ;?>
                        </div>

                    </td>
                </tr>
                <tr>
                  <td  width="100" align="center" ><font  style size="+1.5">รูป</font></td>
                  <td  width="200" align="center"> <input    type="file" class="custom-file-input " name="photo" id="photo" ></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                      <button   class="ui inverted green button" type="submit" name="submit" id="submit"  >
                      <i class="save icon"></i> บันทึก
                      </button>

                      <button class="ui inverted red button" type="reset" name="reset" id="reset"  onclick=window.location.href="index.php">
                          <i class="undo icon"></i> ย้อนกลับ
                      </button>
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