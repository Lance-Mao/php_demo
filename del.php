<?php
require_once("conn/conn.php");
$id= $_GET['id'];
$del_sql = "delete from info where ID = $id";
mysql_query($del_sql);
header("location:index.php");
?>