<?php


$id=$_GET['id'];
$user=$_SESSION['username'];
include 'includes/dbconnect.php';
$sql="UPDATE `login` SET status = '1' WHERE username = '$id'";
if(mysql_query($sql,$con))
	echo "<script>alert(' Approved!');location.href='index.php';</script>";
     else
     	{"<script>alert('error!');location.href='index.php';</script>";
		}

?>