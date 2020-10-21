
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
            <form action="addInfo.php" method="post"  name="form1" id="form1" >
        <table width="400" border="2" align="center" cellpadding="0" cellspacing="0"  >
              <tbody>
                <tr>
                  <td colspan="2" align="center" bgcolor="#fff333"><font color="#000000" style size="+2">เพิ่มกิจกรรม</font></td>
                </tr>
                <tr>
                  <td width="100"height="20" >ชื่อกิจกรรม</td>
                  <td width="100" height="50" align="center"><input  name="e_name" type="text" id="e_name" width="150"></td>
                </tr>
                <tr>
                  <td width="100" > รายละเอียด</td>
                  <td width="200"  align="center"><textarea name="e_detail" cols="30" rows="9" id="e_detail" ></textarea></td>
                </tr>

                <tr>
                  <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="บันทึก">
                  <input type="reset" name="reset" id="reset" value="ยกเลิก" onclick= window.location.href="index.php" >
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