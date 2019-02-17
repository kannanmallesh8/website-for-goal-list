
<?php

$host='localhost';
$user='root';
$pass='';
$db='mhdb';
$Enter_RollNo=$_POST["RollNo"];
// Create connection
$con=mysqli_connect($host,$user,$pass,$db);
$sql="SELECT * FROM GOAL WHERE rollno=$Enter_RollNo";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){ //if Roll no already exist
	 while($row=mysqli_fetch_array($result))
 {
	 $db_name=$row["Name"];
	 $db_Goal1=$row["Goal1"];
	 $db_Goal2=$row["Goal2"];
	 $db_Goal3=$row["Goal3"];
	 $db_Check1=$row["Check1"];
	 $db_Check2=$row["Check2"];
	 $db_Check3=$row["Check3"];
 }	
	}
    else{ //New Roll No
	 header("Location: new.php?Enter_RollNo=".$Enter_RollNo); /* Redirect browser */
	//header("Location: new.php?Enter_RollNo="$_SERVER['Enter_RollNo']); 
	exit();
	}
?>

<HTML>
<HEAD>
</HEAD>
<body style='background-color:LightBlue'>
<CENTER><h1>GOAL 2019</h1>
<form action="update.php" method="post">
Update your Goal status <br><br><br>
Name   : <input type="text" name="Name" size="50" value="<?php echo "$db_name"; ?>" readonly><br><br>
RollNo : <input type="text" name="RollNo" size="50" value="<?php echo "$Enter_RollNo"; ?>" readonly><br><br>
Goal1  : <input type="checkbox" name="Check1" <?php echo "$db_Check1" ?> >
<TextArea type="text" name="Goal1" size="50" rows="4" cols="50" value="<?php echo "$db_Goal1"; ?>" readonly><?php echo "$db_Goal1"; ?>
</textarea><br>
Goal2  : <input type="checkbox" name="Check2" <?php echo "$db_Check2" ?> >
<TextArea type="text" name="Goal2" rows="4" cols="50" value="<?php echo "$db_Goal2"; ?>" readonly><?php echo "$db_Goal2"; ?>
</textarea><br>
Goal3  : <input type="checkbox" name="Check3" <?php echo "$db_Check3" ?> >
<TextArea type="text" name="Goal3" rows="4" cols="50" value="<?php echo "$db_Goal3"; ?>" readonly><?php echo "$db_Goal3"; ?>
</textarea><br>
<input type="submit" value="update">
</HTML>