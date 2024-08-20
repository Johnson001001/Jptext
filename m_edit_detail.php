<?php 
echo $_POST['name'];
echo $_POST['sex'];
echo $_POST['phone'];
echo $_POST['mail'];
echo $_POST['height'];
echo $_POST['weight'];
echo $_POST['birth'];
echo $_POST['addr'];
echo $_POST['cID'];

// 設定表單欄位是否送出
$name =  $_POST['name'];
$sex = $_POST['sex'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$birth = $_POST['birth'];
$addr = $_POST['addr'];

$cID = $_POST['cID'];
//建立連線資料
include("./conn.php");

$sql_query = "UPDATE `students` 
SET `cName` = '$name', `cSex` = '$sex', `cEmail` = '$mail', `cPhone` = '$phone', `cAddr` = '$addr', `cHeight` = '$height', `cWeight` = '$weight' 
WHERE `students`.`cID` = $cID";


$result=$db_link->query($sql_query);
// 完成後轉址
header("location: m_view.php");
?>