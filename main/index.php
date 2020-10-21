<?php
    include "conn.php";
    $sql = "select * from event ";
    $result = mysql_query($sql,$conn)
        or die ("Can't Query").mysql_error();
?>
<style>
    *{
        font-size: 20px;
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
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a href="frm_addInfo.php">
                    <!-- icon --> Add Event
                </a>
            </div>
            <!--            Inner Table-->
            <table  style="width: 80%; margin-top: 10px" border="1px" cellpadding="0"cellspacing="0">
                <thead>
                <tr>
                    <th width="30%">Name Event</th>
                    <th width="30%"></th>
                    <th width="20%"></th>
                    <th width="20%"></th>
                </tr>
                </thead>

                <tbody >
                <?php
                    while ($rs =mysql_fetch_array($result)){
                ?>
                    <tr>
                        <td align="center"><?php echo"$rs[e_name]";?></td>
                        <td align="center" >
                            <?php echo "<a href=\"showpic.php?e_id=$rs[e_id] \">"; ?> Detail <?php echo "</a>";?>
                        </td>
                        <td align="center" >
                            <?php echo "<a href=\"frm_addPic.php?e_id=$rs[e_id] \">"; ?> Addpic <?php echo "</a>";?>
                        </td>
                        <td align="center">

                            <button  href="#">
                                 Edit
                            </button>

                            <button >
                                 Delete
                            </button>

                        </td>

                    </tr>
                <?php
                }
                ?>

                </tbody>

            </table>
            <p>&nbsp;</p>
            <!--            Inner Table-->

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