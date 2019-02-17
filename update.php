<?php

$host='localhost';
$user='root';
$pass='';
$db='mhdb';
$Enter_RollNo=$_POST["RollNo"];
$Enter_Check1="";
$Enter_Check2="";
$Enter_Check3="";

if (isset($_POST["Check1"])) {
    $Enter_Check1="checked";
}
if (isset($_POST['Check2'])) {
    $Enter_Check2="checked";
}
if (isset($_POST['Check3'])) {
    $Enter_Check3="checked";
}

$con=mysqli_connect($host,$user,$pass,$db);
$sql="UPDATE GOAL SET Check1='$Enter_Check1',Check2='$Enter_Check2',Check3='$Enter_Check3' WHERE RollNo='$Enter_RollNo'";
$query=mysqli_query($con,$sql);
 

if ($query) {
echo "<h1>Your Goals has been updated<h1>";}
else{
echo "<h1>issue in updating Goals try again<h1>";}
mysqli_close($con);
sleep(5);
header("Location: index.php");
?>
