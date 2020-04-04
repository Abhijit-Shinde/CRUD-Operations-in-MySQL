<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE users set studentname='" . $_POST["studentname"] . "', class='" . $_POST["class"] . "', rollno='" . $_POST["rollno"] . "', year='" . $_POST["year"] . "' WHERE userId='" . $_POST["userId"] . "'";
	mysqli_query($conn,$sql);
	$message = "STUDENT Details Successfully Updated.";
}
$select_query = "SELECT * FROM users WHERE userId='" . $_GET["userId"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>EDIT STUDENT DETAILS</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('bg.jpg');"font-family:'Roboto', sans-serif;"><br><br>
	<div style="text-align: center;"><button type="button" class="btn btn-secondary"><a href="index.php" style="text-decoration: none;color: white">SHOW STUDENTS</a></button></div><br><br>
<form name="frmUser" method="post" action="">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table cellpadding="13" cellspacing="0" width="500" align="center" class="tblSaveForm">
<td colspan="5" align="center" style="font-size: 20px;color:#1b39c2;font-weight: bold">EDIT STUDENT DETAILS</td>
<tr>
<td><label>STUDENT NAME</label></td>
<td><input type="hidden" name="userId" class="txtField" value="<?php echo $row['userId']; ?>"><input type="text" name="studentname" class="txtField" value="<?php echo $row['studentname']; ?>"></td>
</tr>
<tr>
<td><label>CLASS</label></td>
<td><input type="text" name="class" class="txtField" value="<?php echo $row['class']; ?>"></td>
</tr>
<td><label>ROLL NUMBER</label></td>
<td><input type="number" name="rollno" class="txtField" value="<?php echo $row['rollno']; ?>"></td>
</tr>
<td><label>YEAR</label></td>
<td><input type="text" name="year" class="txtField" value="<?php echo $row['year']; ?>"></td>
</tr>
<tr align="center">
<td colspan="2"><input style="type="button" class="btn btn-success" type="submit" name="submit" value="Update"></td>
</tr>
</table><br><br>

</div>
</form>
</body></html>