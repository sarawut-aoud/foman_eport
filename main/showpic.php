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
          <table width="400" border="2" align="center" cellpadding="0" cellspacing="0"  >
              <tbody>
              <tr>
                  <td colspan="2" align="center" bgcolor="#fff333"><font color="#000000" style size="+2">เพิ่มกิจกรรม</font></td>
              </tr>
              <tr>
                  <td width="100" height="20" align="center">ชื่อกิจกรรม</td>
                  <td width="100" height="50" align="center"> <?php echo "$rs[e_name]" ;?> </td>
              </tr>
              <tr>
                  <td height="60" align="center">รายละเอียด</td>
                  <td height="60" align="center"> <?php echo "$rs[e_detail]" ;?>  </td>
              </tr>
              <?php
                $sql2 = "select * from picevent p , event e where p.e_id = e.e_id ";
                $result2 =mysql_query($sql2,$conn)
                    or die("Can't Query ").mysql_error();

              ?>

                  <?php
                  while($rs2 = mysql_fetch_array($result2)){
                      ?>
                      <tr>

                          <td colspan="2" align="center">
                              <?php
                              if("$rs2[p_pic]"!=""){
                                  ?>
                                  <img src="<?php echo "./picture/$rs2[p_pic]";?>" width="200" height="150">
                                  <?php
                              }
                              ?>
                          </td>
                      </tr>

                      <?php
                  }
                  mysql_close();
                  ?>


              <tr>
                  <td colspan="2" align="center"  >

                  <input style="margin-top: 20px;margin-bottom: 20px;font-size: 20px" type="reset" name="reset"
                         value="ยกเลิก" onclick= window.location.href="index.php" >
                  </td>
              </tr>
               </tbody>
          </table>
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