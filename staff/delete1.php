<?php


$id=$_GET['id'];

include 'includes/dbconnect.php';
$sql="UPDATE `info` SET info_status = '1' WHERE info_id = '$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Deleted!');location.href='update_info.php';</script>";
     else
     	{"<script>alert('error!');location.href='update_info.php';</script>";
		}

?>