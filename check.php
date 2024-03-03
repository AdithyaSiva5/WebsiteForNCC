<?php
session_start();		
include('connection.php');

if ( isset( $_POST['submit'] ) ) 	
{
	$u=$_POST['email']; 
$p=$_POST['password']; 


if($_POST['type']=="Admin")
	{
$sel="SELECT * FROM admin WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
$result = mysqli_query($conn,$sel) or die(mysql_error());
 $rows = mysqli_num_rows($result);
  $row1=mysqli_fetch_array($result);
  echo $row;
     echo $row1;
        if($rows==1){
     $_SESSION['email'] = $_POST['email'];
	 $_SESSION['usertype']=$_POST['type'];
	 $_SESSION['aid']=$row1['id'];

            // Redirect user to index.php
    header("Location:admin/dashboard/dashboard.php");
         }else{
  header("Location:login.php");
 }
 
	}
	elseif($_POST['type']=="Staff")
	{
$sel="SELECT * FROM staff WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
$result = mysqli_query($conn,$sel) or die(mysql_error());
 $rows = mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
        if($rows==1){
     $_SESSION['email'] = $_POST['email'];
	 $_SESSION['usertype']=$_POST['type'];
	 $_SESSION['sid']=$row['id'];
            // Redirect user to index.php
    header("Location:admin/dashboard/dashboard.php");
         }else{
  header("Location:login.php");
 }
 
	}
	elseif($_POST['type']=="Ncchead")
	{
$sel="SELECT * FROM ncchead WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
$result = mysqli_query($conn,$sel) or die(mysql_error());
 $rows = mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
        if($rows==1){
     $_SESSION['email'] = $_POST['email'];
	 $_SESSION['usertype']=$_POST['type'];
	 $_SESSION['nid']=$row['id'];
            // Redirect user to index.php
    header("Location:admin/dashboard/dashboard.php");
         }else{
  header("Location:login.php");
 }
 
	}
	elseif($_POST['type']=="Student")
	{
$sel="SELECT * FROM student WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
$result = mysqli_query($conn,$sel) or die(mysql_error());
 $rows = mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
        if($rows==1){
     $_SESSION['email'] = $_POST['email'];
	 $_SESSION['usertype']=$_POST['type'];
	 $_SESSION['studid']=$row['id'];
            // Redirect user to index.php
    header("Location:index.php");
         }else{
  header("Location:login.php");
 }
 
	}
	elseif($_POST['type']=="Parent")
	{
$sel="SELECT * FROM parentregister WHERE email='".$_POST['email']."' and password='".$_POST['password']."'";
$result = mysqli_query($conn,$sel) or die(mysql_error());
 $rows = mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
        if($rows==1){
     $_SESSION['email'] = $_POST['email'];
	 $_SESSION['usertype']=$_POST['type'];
	 $_SESSION['pid']=$row['id'];
            // Redirect user to index.php
    header("Location:index.php");
         }else{
  header("Location:login.php");
 }
 
	}
	
}
?>