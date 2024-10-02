<?php


$id=$_GET['id'];

include 'includes/dbconnect.php';
$sql="DELETE FROM applications WHERE application_id = '$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Deleted!');location.href='applications.php';</script>";
     else
     	{"<script>alert('error!');location.href='applications.php';</script>";
		}

?>