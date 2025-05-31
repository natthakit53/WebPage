<head>
        <meta charset="UTF-8">
        <title>หน้าจอการแก้ไขข้อมูล</title>
        <style>
            * {
                font-family: kanit;
               font-size: 120%;
               color: #9D84B7;
               background-color: #D5D5D5;
               text-align: center;
            }
        </style>
</head>
<?php
	$title = $_POST['title'];
	$name = $_POST['name'];
                $address = $_POST['address'];
	$number = $_POST['number'];
                $email = $_GET['email'];
	$link = mysqli_connect("localhost", "root");
	mysqli_set_charset($link,'utf8');
	$sql = "use ddtt";
	$result = mysqli_query($link, $sql);
	$sql = "update register set title='$title', name='$name',address='$address',number='$number' where email='$email' ";
	$result = mysqli_query($link, $sql);
	if ($result)
	{
		echo "การแก้ไขข้อมูลในฐานข้อมูลประสบความสำเร็จ<br>";
		mysqli_close($link);
	}
	else
	{
		echo "ไม่สามารถแก้ไขข้อมูลในฐานข้อมูลได้<br>";
	}
	echo "<a href=updateload.php>กลับหน้าจอการแก้ไขข้อมูล</a><br>";
                echo "<a href=delete.php>ไปหน้าจอการลบข้อมูล</a><br>";
	echo "<a href=index.php>กลับหน้าจอหลัก</a><br>";
?>
