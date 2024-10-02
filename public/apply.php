<?php
session_start();
include 'includes/dbconnect.php';

$aid=autoid("applications","application_id");
$id=$_GET['id'];
//$uid=$_GET['uid'];
$date=date('y-m-d');
$user=$_SESSION['username'];

$sql="INSERT INTO `applications` VALUES ('$aid','$id','$user','','0','$date')";
//echo $sql;
            if(mysql_query($sql,$con))
            {
                
                    echo"<script>alert('Applied ');location.href='applications.php';</script>";
            }  
            else{
				echo"<script>alert('error');location.href='applications.php';</script>";
			}	

?>