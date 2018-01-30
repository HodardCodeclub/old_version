<?php if(!isset($_SESSION)) { session_start(); }
require_once("../../db_connect/functions.php");
include('function.php');
$sql=mysqli_query($cn,"SELECT * FROM `partners`")or die(mysqli_error($cn));
 if(@$_GET['act']=="del"){
 mysqli_query($cn,"DELETE FROM `partners` WHERE PatID='".@$_GET['part']."'");
 header("location:part.php");
 }
 ?>
<!--
Author: Hodard Hazwinayo
Author Phone: (+250)789610956
-->
<!DOCTYPE html>
<html>
<head>
<title>Umuco wacu :: CMS</title>
<!--<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>-->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
function conf_del{
		var x=confirm("Do you want to Remove this Subscriber?");
		if(x) {
			return true;
		}else{
			return false;
		}
	}
</script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->

<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>


<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9" align="center"  style='overflow: scroll;height:480px'>
<?php
if(mysqli_num_rows($sql)){ ?>
<table style='width:100%;text-align: center;'>
<tr style=""><th style="border-right: 1px solid silver;text-align: center;">No.</th><th style="border-right: 1px solid silver;text-align: center;">Names</th><th style="border-right: 1px solid silver;text-align: center;">Email</th><th style="border-right: 1px solid silver;text-align: center;">Website</th><th style="border-right: 1px solid silver;text-align: center;">Type</th><th style="border-right: 1px solid silver;text-align: center;">Phone Number</th><th style="border-right: 1px solid silver;text-align: center;">Information</th><th style="border-right: 1px solid silver;text-align: center;">Remove</th></tr>
<tr><td colspan=8><hr style="border:1px solid silver"/></td></tr>
<?php
$x=1;
 while($data=mysqli_fetch_assoc($sql)){ ?>
<tr  style="font-family: 'courier new'">
<td><?=$x?></td>
<td style="border-right: 1px solid silver"><?=$data['PatNames']?></td>
<td style="border-right: 1px solid silver"><?=$data['PatEmail']?></td>
<td  style="border-right: 1px solid silver"><?=$data['PatWeb']?></td>
<td  style="border-right: 1px solid silver"><?=$data['PatyType']?></td>
<td  style="border-right: 1px solid silver"><?=$data['PatPhone']?></td>
<td style="border-right: 1px solid silver"><?=$data['PatInfo']?></td>
<td><a href='part.php?act=del&part=<?=$data['PatID']?>' onclick="return conf_del()"><img src='./images/delete.jpg' width="20px" height="10px" /></a></td>
</tr>
<tr><td colspan=8><hr style="border:1px solid silver"/></td></tr>
<?php 
$x++;
}?>
</table>
<?php }else{

}
?>
</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>
</html>