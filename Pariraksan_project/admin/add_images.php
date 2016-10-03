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

<tr><td><a href="admin_panel.php?id=manage_images">Click Here to Manage All Albums Images</a></td></tr>

</table>

<span style="width:100%; text-align:center; margin:0px auto !important; padding:0px"><p>or</p></span>
<form action="update_images.php" method="POST" enctype="multipart/form-data" onSubmit = "return validateForm();">
<div class="mnz_tm">
<span>Select An Album</span>
<select name="cat_id" id="cat_id" >
			<?php
				$sql = "SELECT * FROM category";
				$result1 = mysql_query($sql) or die("Could not execute query");
				while($row = mysql_fetch_array($result1)){
					echo "<option value='$row[cat_id]'>".$row[cat_name]."</option>";
				}
			?>
			</select>
<span>Add a New  Album Pic</span>
<input type="file" name="pic" required/>
 <input type="submit" name="save" value="save">
</form>
</div>
</div>