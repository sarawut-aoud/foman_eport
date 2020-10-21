<?php
    include "conn.php";
    $sql = "select * from event ";
    $result = mysql_query($sql,$conn)
        or die ("Can't Query").mysql_error();
?>
<style>
    *{
        font-family: "TH SarabunPSK";
        font-size:25px;

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

<table align="center"  style="width: 100%; height: 150px" border="1px" cellpadding="0"cellspacing="0" >

    <tbody>
    <tr>
        <td align="center">
            <div style="height: 150px; width: 100%;">
                <img src="./img/header.jpg" alt="header image"
                     style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a class="ui primary button" href="frm_addInfo.php">
                    <i class="plus circle icon"></i> Add Event
                </a>
            </div>
            <!--            Inner Table-->
            <table  style="width: 80%; margin-top: 10px" class="ui selectable inverted table" border="1px" cellpadding="0"cellspacing="0">
                <thead >
                <tr align="center">
                    <th width="30%">Name Event</th>
                    <th width="10%"></th>
                    <th width="10%"></th>
                    <th width="30%"></th>
                </tr>
                </thead>

                <tbody >
                <?php
                    while ($rs =mysql_fetch_array($result)){
                ?>
                    <tr align="center">
                        <td align="center"><?php echo"$rs[e_name]";?></td>
                        <td align="center" >
                            <?php echo "<a href=\"showpic.php?e_id=$rs[e_id] \">"; ?> Detail <?php echo "</a>";?>
                        </td>
                        <td align="center" >
                            <?php echo "<a href=\"frm_addPic.php?e_id=$rs[e_id] \">"; ?> Addpic <?php echo "</a>";?>
                        </td>
                        <td align="center">

                            <button class="ui inverted yellow button" href="#">
                                <i class="pencil alternate icon"></i> Edit
                            </button>

                             <?php echo "<a class=\"ui inverted red button\"  href=\"delevent.php?e_id=$rs[e_id] \">";?>
                            <i class="trash icon"></i>  Delete  <?php echo "</a>";?>



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
<script>
/*$(document).ready(function() {
$('#example').DataTable();
} );*/
function delevent(e_id) {
    /*Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete location",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {*/
        window.location = "delevent.php?e_id="+e_id;
      /*  }
    })
    }*/
</script>
</html>