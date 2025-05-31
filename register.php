<head>
    <meta charset="UTF-8">
    <title>หน้าจอการเพิ่มข้อมูล</title>
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
        <h2>แบบฟอร์มการเพิ่มข้อมูล</h2><br>
        <fieldset>
            <legend>ข้อมูลพนักงาน</legend><br>
            Email: <input type="text" name="email"><p>
            Title: <input type="text" name="title"><p>
            Name: <input type="text" name="name"><p>
            Address: <input type="text" name="address"><p>
            Number <input type="text" name="number"><p>   
            <input type="submit" name="send" value="Submit">
            <input type="reset" name="cancel" value="Reset">
        </fieldset>
    </form>
<?php }
else {
	$email = $_POST['email'];
	$title = $_POST['title'];
	$name = $_POST['name'];
                $address = $_POST['address'];
                $number = $_POST['number'];
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use ddtt";
	$result = mysqli_query($link, $sql);
	$sql = "Insert into register values('$email', '$title','$name','$address','$number');";
	$result = mysqli_query($link, $sql);
	if ($result) {
		echo "การเพิ่มข้อมูลลงในฐานข้อมูลประสบความสำเร็จ<br>";
		mysqli_close($link);
	}
	else {
		echo "ไม่สามารถเพิ่มข้อมูลใหม่ลงในฐานข้อมูลได้<br>";
	}
	echo "<a href=register.php>กลับหน้าเว็บเพจการเพิ่มข้อมูล</a><br>";
	echo "<a href=index.php>กลับหน้าเว็บเพจหลัก</a><br>";
}
?>
