<?php if(!isset($_SESSION)) { session_start(); }
require_once("../../db_connect/functions.php");
include('function.php');
$sql=mysqli_query($cn,"SELECT * FROM `suggestions`")or die(mysqli_error($cn));
 if(@$_GET['act']=="del"){
 mysqli_query($cn,"DELETE FROM `suggestions` WHERE SugID='".@$_GET['msg']."'");
 header("location:sug.php");
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
		var x=confirm("Do you want to delete this Message?");
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
<div class="col-sm-9" align="center"  style='overflow: scroll;height:480px' style='overflow: scroll;height:480px'>
<?php
if(mysqli_num_rows($sql)){ ?>
<table style='width:100%'>
<tr><th>No.</th><th>Sender</th><th>Email</th><th>Message</th><th>Delete</th></tr>
<tr><td colspan=5><hr style="border:1px solid silver"/></td></tr>
<?php
$x=1;
 while($data=mysqli_fetch_assoc($sql)){ ?>
<tr>
<td><?=$x?></td>
<td><?=$data['Names']?></td>
<td><?=$data['Email']?></td>
<td><?=$data['Sug_body']?></td>
<td><a href='sug.php?act=del&msg=<?=$data['SugID']?>' onclick="return conf_del()"><img src='./images/delete.jpg' /></a></td>
</tr>
<tr><td colspan=5><hr style="border:1px solid silver"/></td></tr>
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