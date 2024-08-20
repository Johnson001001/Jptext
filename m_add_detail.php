<?php
echo $_POST['cName'];
echo $_POST['cSex'];
echo $_POST['cBirthday'];
echo $_POST['cEmail'];
echo $_POST['cPhone'];
echo $_POST['cAddr'];
echo $_POST['cHeight'];
echo $_POST['cWeight'];


//設定表單欄位是否送出
$cName= $_POST['cName'];
$cSex= $_POST['cSex'];
$cBirthday= $_POST['cBirthday'];
$cEmail= $_POST['cEmail'];
$cPhone= $_POST['cPhone'];
$cAddr= $_POST['cAddr'];
$cHeight= $_POST['cHeight'];
$cWeight= $_POST['cWeight'];

//建立連線插入資料
include("./conn.php");
$sql_query="INSERT INTO `students`
(`cID`, `cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`, `cHeight`, `cWeight`) 
VALUES 
(null,'$cName','$cSex','$cBirthday','$cEmail','$cPhone','$cAddr','$cHeight','$cWeight')";

$result=$db_link->query($sql_query);
//完成後轉址到首頁
header("location: m_view.php");
