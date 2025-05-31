<head>
    <meta charset="UTF-8">
    <title>หน้าจอการแก้ไขข้อมูล</title>
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
                <h2>แบบฟอร์มการแก้ไขข้อมูล</h2>
                <fieldset>
                    <legend>>ใส่Email</legend><br>
		กรุณากรอกEmailต้องการแก้ไข<p>
		Email: <input type="text" name="email"><p>
 		<input type="submit" name="send" value="Submit">
 		<input type="reset" name="cancel" value="Reset">
                </fieldset>
            </form>
<?php
	}
	else 
	{
		$email = $_POST['email'];
		$link = mysqli_connect("localhost", "root");
		mysqli_set_charset($link, 'utf8');
		$sql = "use ddtt";
		$result = mysqli_query($link, $sql);
		$sql = "select * from register where email = '$email';";
		$result = mysqli_query($link, $sql);
		echo "<form action=update.php?email=$email method=post>";
		$dbarr = mysqli_fetch_array($result);
		echo "Email: ".$email."<br>";
		echo "Title: ";
		echo "<input type=text name=title value=$dbarr[title]> <br>";
		echo "Name: ";
		echo "<input type=text name=name value=$dbarr[name]> <p>";
                                echo "Address: ";
		echo "<input type=text name=address value=$dbarr[address]> <p>";
                                echo "Number: ";
		echo "<input type=text name=number value=$dbarr[number]> <p>";
		echo "<input type=submit name=Submit value=Submit>";
		echo "<input type=reset name=reset value=Cancel>";
		echo "</form>";
		mysqli_close($link);
	}
?>
