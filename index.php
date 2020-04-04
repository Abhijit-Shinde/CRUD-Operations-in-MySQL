<?php
require_once("db.php");
$sql = "SELECT * FROM users ORDER BY userId DESC";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
<title>Assignment 2</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('bg.jpg');"font-family:'Roboto', sans-serif;">
	<h2 style="text-align: center; color:white">STUDENT RECORD KEEPING SYSTEM</h2><br>
<form name="frmUser" method="post" action="">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table cellpadding="13" cellspacing="1" width="800" align="center">
<tr style="color:#1b39c2">
<td>STUDENT NAME</td>
<td>CLASS</td>
<td>ROLL NUMBER</td>
<td>YEAR</td>
<td>ACTIONS</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["studentname"]; ?></td>
<td><?php echo $row["class"]; ?></td>
<td><?php echo $row["rollno"]; ?></td>
<td><?php echo $row["year"]; ?></td>
<td><a type="button" class="btn btn-success" href="edit_user.php?userId=<?php echo $row["userId"]; ?>">Edit</a> &nbsp; <a type="button" class="btn btn-danger"href="delete_user.php?userId=<?php echo $row["userId"]; ?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table><br><br><br>
<div style="text-align: center;"><button type="button" class="btn btn-primary"><a href="add_user.php" style="text-decoration: none;color: white">ADD NEW STUDENT</a></button></div>
</form>
</div>
</body></html>