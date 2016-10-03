<?php
session_start();
if(!isset($_SESSION['adminid']))
{
	header("location:admin_login.php");
}
?>
<?php require("database.php");?>
<?php
if(isset($_POST['save']))
{
$filename=$_FILES['pic']['name'];
$tempname=$_FILES['pic']['tmp_name'];
$uploaddir="upload_cat/".$filename;
$move=move_uploaded_file($tempname,$uploaddir);

}
?>
<?php


$sql="insert into category(pic, cat_name) values('$filename', '$_POST[cat_name]')";

$result=mysql_query($sql);

if($result)
{
?>
<script>
alert('New Album successfully Added.');
location.href="admin_panel.php?id=manage_cat"</script>
<?php
}
else
echo'Pic is not added';

?> 