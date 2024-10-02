<?php


$id=$_GET['id'];

include 'includes/dbconnect.php';
$sql="UPDATE `scheme` SET scheme_status = '1' WHERE scheme_id = '$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Deleted!');location.href='update_scheme.php';</script>";
     else
     	{"<script>alert('error!');location.href='update_scheme.php';</script>";
		}

?>