<html>
<?php 
$Enter_RollNo=$_GET["Enter_RollNo"];
echo "$Enter_RollNo"
?>
<body style='background-color:LightBlue'>
<CENTER><h1>GOAL 2019</h1>
<form action="insert.php" method="post">
<h4> Enter the details below</h4><br>
Name   : <input type="text" name="Name" size="50" required><br><br>
RollNo : <input type="text" name="RollNo" size="50" value="<?php echo "$Enter_RollNo"; ?>" readonly><br><br>
Goal1  : <TextArea type="text" name="Goal1" rows="4" cols="52" required></textarea><br><br>
Goal2 : <TextArea type="text" name="Goal2" rows="4" cols="52" required></textarea><br><br>
Goal3  : <TextArea type="text" name="Goal3" rows="4" cols="52" required></textarea><br><br>
<input type="submit">
</form>
</CENTER>
</body>
</html>