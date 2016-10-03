<link rel="stylesheet" href="style.css"/>

<?php
session_start();
if(!isset($_SESSION['adminid']))
{
	header("location:admin_login.php");
}
?>

<div class="wrapp">
<div class="background2">
<div class="mn_tp">
<div class="container">
<div class="hed_mn2"><img src="imgs/logo.png" />
<div class="sng_out"><?php
echo "You are logged as : ", $_SESSION['adminid'];
echo '  <a href="signout.php">Signout</a>';
?></div>
</div>
</div>
<div class="clr"></div>


<div class="container">


<!--<div class="lft_side">
</div>
-->

<div class="in_rht2">
<h1 style="font-size:34px; color:#FFF; margin:0px auto; padding:0px; margin-bottom:40px">PARIRAKSHAN ORGANICA GALLERY</h1>
<a href='admin_panel.php?id=add_images'>CLICK HERE TO ADD ALBUM CATEGORY</a>
<a href='admin_panel.php?id=add_cat'>CLICK HERE TO ADD ALBUM IMAGES</a>



</div>
</div>

</div>
</div>
</div>

<?php
if (!isset($_GET['id']))
{
//If not isset -> set with dumy value
$_GET['id'] = "undefine";
} 
switch ($_GET['id'])
{
  case 'add_images':
	  include('add_images.php');
      break;
	    case 'manage_images':
	  include('manage_images.php');
      break;
	    case 'add_cat':
	  include('add_cat.php');
      break;
	    case 'manage_cat':
	  include('manage_cat.php');
      break;
  
  
}
?>

