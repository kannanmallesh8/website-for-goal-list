<?php

$host='localhost';
$user='root';
$pass='';
$db='mhdb';
$Enter_name=$_POST["Name"];
$Enter_RollNo=$_POST["RollNo"];
$Enter_Goal1=$_POST["Goal1"];
$Enter_Goal2=$_POST["Goal2"];
$Enter_Goal3=$_POST["Goal3"];



// Create connection
$con=mysqli_connect($host,$user,$pass,$db);
// Check connection
//if ($con) 
//		echo 'connected'
$sql="INSERT INTO GOAL(Name,RollNo,Goal1,Goal2,Goal3) VALUES ('$Enter_name','$Enter_RollNo','$Enter_Goal1','$Enter_Goal2','$Enter_Goal3')";
$query=mysqli_query($con,$sql);
 
if ($query) {
echo "<h1>$Enter_name,Your Goals has been added<h1>";}
else{
echo "<h1>issue in Adding Goals try again<h1>";}
mysqli_close($con);
sleep(5);
header("Location: index.php");
?>
