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
            <form action="addInfo.php" method="post"  name="form1" id="form1" >
        <table width="400" border="2" align="center" cellpadding="0" cellspacing="0"  >
              <tbody>
                <tr>
                  <td colspan="2" align="center" bgcolor="#fff333" ><font  style size="+2"> เพิ่มกิจกรรม</font></td>
                </tr>
                <tr>
                  <td width="100" align="center"><font  style size="+1.5"> ชื่อกิจกรรม</font></td>
                  <td align="center">
                      <div class="ui small  input focus">
                          <input   name="e_name" type="text" id="e_name" >
                      </div>
                  </td>
                </tr>
                <tr>
                  <td align="center" ><font  style size="+1.5"> รายละเอียด</font></td>
                  <td align="center">
                      <div class="ui small  input focus"> <input name="e_detail" cols="30" rows="9" id="e_detail" > </div></td>
                </tr>

                <tr>
                  <td colspan="2" align="center">
                      <button  class="ui inverted green button" type="submit" name="submit" id="submit" >
                          <i class="save icon"></i> บันทึก
                      </button>
                      <button class="ui inverted red button"  type="reset" name="reset" id="reset"  onclick= window.location.href="index.php" >
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