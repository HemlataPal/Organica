<?php include("database.php"); ?>
<?php
if(!isset($_SESSION)) 
{ 
session_start(); 
} 
if(!isset($_SESSION['adminid']))
{
	header("location:admin_login.php");
}
?>

<div class="mnz_portf">
<table>

<tr><td><a href="admin_panel.php?id=manage_cat">Click Here to Manage Albums Categories</a></td></tr>

</table>
<div class="mnz_tm">
<span style="width:100%; text-align:center; margin:0px auto !important; padding:0px"><p>or</p></span>
<form action="update_cat.php" method="POST" enctype="multipart/form-data" onSubmit = "return validateForm();">
<span>New Album Name</span>
<input type="text" name="cat_name" required/>
<span>Add Album Pic</span>
<input type="file" name="pic" required/>
 <input type="submit" name="save" value="save">
</form>
</div>
</div>