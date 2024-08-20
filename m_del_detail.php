<?php

echo $_POST['cID'];
// 「DELETE FROM students WHERE `students`.`cID` = 11」
$cID = $_POST['cID'];
include("./conn.php");
$sql_query = "DELETE FROM students WHERE `students`.`cID` = $cID";
$result=$db_link->query($sql_query);
header("location: m_view.php");


?>