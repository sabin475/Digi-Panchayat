<?php


$id=$_GET['id'];

include 'includes/dbconnect.php';
$sql="UPDATE `images` SET img_status = '1' WHERE img_id = '$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Deleted!');location.href='update_img.php';</script>";
     else
     	{"<script>alert('error!');location.href='update_img.php';</script>";
		}

?>