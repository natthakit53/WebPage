<head>
   <meta charset="UTF-8">
   <title>หน้าจอการลบข้อมูล</title>
    <style>
            * {
               font-family: kanit;
               background-color: #DDBEBE;
               color: #51050F;
            }
            h2{
                color: #AB6D23;
                text-align: center;
            }
    </style>
</head>
<?php
if (!isset($_POST['send'])) {
?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2>แบบฟอร์มการลบข้อมูล</h2>
            <fieldset>
            <legend>ระบุรหัสพนักงาน</legend><br>
	กรุณากรอกรหัสพนักงานที่ต้องการลบ<p>
	รหัสพนักงาน <input type="text" name="email"><p>
	<input type="submit" name="send" value="Submit">
 	<input type="reset" name="cancel" value="Reset">
        </fieldset>
    </form>
<?php
}
else 
{
	$id_val = $_POST['email'];
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use ddtt";
	$result = mysqli_query($link, $sql);
	$sql = "Delete From register where email = '$id_val' ";
	$result = mysqli_query($link, $sql);
	if ($result) {
		echo "การลบข้อมูลในฐานข้อมูลประสบความสำเร็จ<br>";
		mysqli_close($link);
	}
	else {
		echo "ไม่สามารถลบข้อมูลในฐานข้อมูลได้<br>";
	}
	echo "<a href=delete.php>กลับหน้าจอการลบข้อมูล</a><br>";
	echo "<a href=index.php>กลับหน้าจอหลัก</a><br>";
}
?>
<head>

