<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO users (studentname, class, rollno, year) VALUES ('" . $_POST["studentname"] . "','" . $_POST["class"] . "','" . $_POST["rollno"] . "','" . $_POST["year"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Student Details are Added Successfully";
	}
}
?>
<html>
<head>
<title>ADD NEW STUDENT</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('bg.jpg');"font-family:'Roboto', sans-serif;"><br><br>
	<div style="text-align: center;"><button type="button" class="btn btn-secondary"><a href="index.php" style="text-decoration: none;color: white">SHOW DETAILS</a></button></div><br><br>
<form name="frmUser" method="post" action="">

<div class="message"><?php if(isset($message)) { echo $message; } ?></div>


<table cellpadding="13" cellspacing="0" width="600" align="center" >
<td colspan="5" align="center" style="font-size: 20px;color:#1b39c2;font-weight: bold">ADD NEW STUDENT</td>
<tr>
<td><label>STUDENT NAME</label></td>
<td><input type="text" name="studentname" class="txtField"></td>
</tr>
<tr>
<td><label>CLASS</label></td>
<td><input type="text" name="class" class="txtField"></td>
</tr>
<tr>
<td><label>ROLL NUMBER</label></td>
<td><input type="number" name="rollno" class="txtField"></td>
</tr>
<tr>
<td><label>YEAR</label></td>
<td><input type="text" name="year" class="txtField"></td>
</tr>
<tr align="center">
<td colspan="2"><input style="type="button" class="btn btn-success" type="submit" name="submit" value="Submit"></td>
</tr>
</table><br><br><br>

</div>
</form>
</body></html>