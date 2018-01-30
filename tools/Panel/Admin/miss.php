<?php if(!isset($_SESSION)) { session_start(); }
require_once("../../db_connect/functions.php");
include('function.php');
if(isset($_POST["sbmt"]))
{
$mnames=input($cn,$_POST['mname']);	
$myear=input($cn,$_POST['myear']);	
$mprofile=input($cn,$_FILES['mprof']['name']);	
$mpic=input($cn,$_FILES['mpic']['name']);	
$mdetails=input($cn,$_POST['mdetails']);
mysqli_query($cn,"INSERT INTO misses(MissNames,MissYear,ProfilePic,FullPic,Details) VALUES('$mnames','$myear','$mprofile','$mpic','$mdetails')")or die(mysqli_error($cn));
move_uploaded_file($_FILES['mprof']['tmp_name'],"..\\Misses\\profiles\\".$_FILES['mprof']['name']);								
move_uploaded_file($_FILES['mpic']['tmp_name'],"..\\Misses\\pics\\".$_FILES['mpic']['name']);								
}
 ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Umuco wacu :: CMS</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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

<script type="text/javascript" src="./Editor/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
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
<div class="col-sm-9">




<form method="post" enctype="multipart/form-data">
<table border="0" width="500px" height="" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">MISS RWANDA HISTORY</td></tr>
</td></tr>
<tr><td class="lefttxt">Miss Names</td><td><input type="text"  value="<?php if(isset($_POST["show"])){ echo $Packname ;} ?> " name="mname" required title"Please Enter Only Characters between 1 to 50 for Package Name"/></td></tr>
</select>
<tr><td class="lefttxt">Year</td><td><input type="text" name="myear" value="<?php if(isset($_POST["show"])){ echo $Packprice ;} ?> " /></td></tr>
<tr><td class="lefttxt">Profile</td><td><input type="file" name="mprof" /></td></tr>
<tr><td class="lefttxt">Full pic</td><td><input type="file" name="mpic" /></td></tr>
<tr><td class="lefttxt">Details</td><td>
<?php require_once('./editor/demos/new.html'); ?>
</td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Save" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>


	
		


</body>
</html>


